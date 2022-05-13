<?php class WP_NanoHelper
{
    protected static $instance = null;

    public function __construct()
    {
        add_filter('use_block_editor_for_post', '__return_false');
        add_filter('xmlrpc_enabled', '__return_false');
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');
        remove_action('wp_head', 'wp_shortlink_wp_head');
        remove_action('wp_head', 'rest_output_link_wp_head', 10);
        remove_action('template_redirect', 'rest_output_link_header', 11, 0);
        remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
        remove_action('rest_api_init', 'wp_oembed_register_route');
        add_filter('embed_oembed_discover', '__return_false');
        remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
        remove_action('wp_head', 'wp_oembed_add_discovery_links');
        remove_action('wp_head', 'wp_oembed_add_host_js');
        add_filter('rewrite_rules_array', array($this, 'disable_embeds_rewrites'));
        add_action('init', array($this, 'disable_emojis'));
        add_action('wp_enqueue_scripts', array($this, 'wpn_enqueue_add_frontend_scripts'));
        add_action('wp_default_scripts', array($this, 'remove_jquery_migrate'));
        remove_filter('the_excerpt', 'wpautop');
        $this->wpn_add_options_page();
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new WP_NanoHelper();
        }
        return self::$instance;
    }

    public function disable_emojis()
    {
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('admin_print_styles', 'print_emoji_styles');
        remove_filter('the_content_feed', 'wp_staticize_emoji');
        remove_filter('comment_text_rss', 'wp_staticize_emoji');
        remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
        add_filter('tiny_mce_plugins', array($this, 'disable_emojis_tinymce'));
        add_filter('wp_resource_hints', array($this, 'disable_emojis_remove_dns_prefetch'), 10, 2);
    }

    function disable_embeds_rewrites($rules)
    {
        foreach ($rules as $rule => $rewrite) {
            if (false !== strpos($rewrite, 'embed=true')) {
                unset($rules[$rule]);
            }
        }
        return $rules;
    }

    public function disable_emojis_tinymce($plugins)
    {
        if (is_array($plugins)) {
            return array_diff($plugins, array('wpemoji'));
        } else {
            return array();
        }
    }

    public function disable_emojis_remove_dns_prefetch($urls, $relation_type)
    {
        if ('dns-prefetch' == $relation_type) {
            $emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');
            $urls = array_diff($urls, array($emoji_svg_url));
        }
        return $urls;
    }

    function wpn_enqueue_add_frontend_scripts()
    {
        wp_dequeue_script('wc-password-strength-meter');
        wp_deregister_script('wc-password-strength-meter');
    }

    function wpn_add_options_page()
    {
        if (function_exists('acf_add_options_page')) {
            acf_add_options_page(array('page_title' => 'Theme Settings', 'menu_title' => 'Theme Settings', 'menu_slug' => 'theme-general-settings', 'capability' => 'edit_posts', 'redirect' => false));
        }
    }

    function remove_jquery_migrate($scripts)
    {
        if (!is_admin() && isset($scripts->registered['jquery'])) {
            $script = $scripts->registered['jquery'];
            if ($script->deps) {
                $script->deps = array_diff($script->deps, array('jquery-migrate'));
            }
        }
    }

    public function is_blog_page()
    {
        if (!is_front_page() && is_home() && get_option('page_for_posts')) {
            return true;
        }
        return false;
    }

    public function is_posts_exist($post_id)
    {
        if ($post_id instanceof WP_Post) $post_id = $post_id->ID;
        if (get_post($post_id) == null || get_post($post_id) == []) return false;
        return true;
    }
}