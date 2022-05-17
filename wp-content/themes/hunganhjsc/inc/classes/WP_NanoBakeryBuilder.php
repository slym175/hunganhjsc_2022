<?php if (!function_exists('WP_NanoBakeryBuilder')) {
    class WP_NanoBakeryBuilder
    {
        public function __construct()
        {
            try {
                if (function_exists('vc_add_shortcode_param')) {
                    foreach ($this->add_custom_shortcode_param() as $param) {
                        vc_add_shortcode_param($param, function ($settings, $value) use ($param) {
                            ob_start();
                            get_template_part('inc/vc_map_types/views/' . $param, '', ['setting' => $settings, 'value' => $value]);
                            $cont = ob_get_contents();
                            ob_clean();
                            ob_end_flush();
                            return $cont;
                        }, _S_THEME_URL_URI . '/inc/vc_map_types/scripts/' . $param . '.js');
                    }
                }
                $this->render_shortcode();
                $this->render_vc_template();
            } catch (Exception $e) {
                print_r($e);
                die();
            }
        }

        private function render_shortcode()
        {
            foreach ($this->render_shortcode_atts_view() as $shortcode => $view) {
                add_shortcode($shortcode, function ($attr, $content = null) use ($view) {
                    $array = [];
                    foreach ($view['attr'] as $k => $a) {
                        $default = '';
                        if ($k == 'content') $default = $content;
                        $array[$k] = isset($attr[$k]) && $attr[$k] ? $attr[$k] : $default;
                    }
                    $attr = shortcode_atts($array, $attr);
                    ob_start();
                    get_template_part($view['view'], '', $attr);
                    $cont = ob_get_contents();
                    ob_clean();
                    ob_end_flush();
                    return $cont;
                });
            }
        }

        private function render_vc_template()
        {
            add_action('vc_before_init', function () {
                foreach ($this->render_shortcode_atts_view() as $shortcode => $view) {
                    $params = [];
                    foreach ($view['attr'] as $k => $a) {
                        $params[] = array('param_name' => $k) + $a;
                    }
                    if (function_exists('vc_map')) {
                        vc_map(['name' => esc_html__(isset($view['name']) && $view['name'] ? $view['name'] : 'Shortcode: ' . $shortcode, _S_TEXTDOMAIN), 'base' => $shortcode, 'icon' => 'icon-st', 'category' => _S_TEXTDOMAIN, 'params' => $params]);
                    }
                }
            });
        }

        private function get_list_post_selector($posttype = 'post')
        {
            if ($posttype === 'wpforms') {
                if (!function_exists('wpforms')) return [];
                $posts = wpforms()->form->get();
                return wp_list_pluck($posts, 'ID', 'post_title');
            }
            $result = array();
            $posts = get_posts(array('post_type' => $posttype, 'fields' => 'ids', 'posts_per_page' => -1));
            if (!$posts) return [];
            foreach ($posts as $item) {
                $result[get_the_title($item)] = $item;
            }
            return $result;
        }

        public function render_shortcode_atts_view()
        {
            return array(
                'st_slide' => array(
                    'name' => 'Slide trang chủ',
                    'attr' => array(
                        'slide_items' => array(
                            'type' => 'attach_images',
                            'heading' => __('Slide', _S_TEXTDOMAIN)
                        ),
                    ),
                    'view' => 'template-parts/content/vc_map_templates/home/slide'
                ),
            );
        }

        public function add_custom_shortcode_param()
        {
            return array('dropdown_select2');
        }
    }

    new WP_NanoBakeryBuilder();
}
