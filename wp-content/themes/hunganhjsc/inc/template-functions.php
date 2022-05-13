<?php
function check_active_menu_item($menu_item)
{
    $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if ($actual_link == $menu_item->url) {
        return 'active';
    }
    return '';
}

if (!function_exists('is_plugin_active')) {
    function is_plugin_active($plugin)
    {
        return in_array($plugin, (array)get_option('active_plugins', array())) || is_plugin_active_for_network($plugin);
    }

    if (is_plugin_active('woocommerce/woocommerce.php')) {
        require(dirname(__FILE__) . "/template-woo-functions.php");
    }
}
require(dirname(__FILE__) . "/classes/WP_NanoHelper.php");
require(dirname(__FILE__) . "/classes/WP_NanoAjax.php");
require(dirname(__FILE__) . "/classes/WP_NanoCategoryHelper.php");
require(dirname(__FILE__) . "/classes/WP_NanoBakeryBuilder.php");

add_action('init', function () {
    global $nanoHelper;
    $nanoHelper = WP_NanoHelper::getInstance();
});

function drallen_form_selector($field)
{
    $field['choices'] = array();

    $posts = wpforms()->form->get();
    $forms = wp_list_pluck($posts, 'post_title', 'ID');
    foreach ($forms as $value => $label) {
        $field['choices'][$value] = $label;
    }
    return $field;
}

function drallen_menu_selector($field)
{
    $field['choices'] = array();

    $menuLocations = get_registered_nav_menus();
    foreach ($menuLocations as $value => $label) {
        $field['choices'][$value] = $label;
    }
    return $field;
}

add_filter('acf/load_field/name=drallen_register_form', 'drallen_form_selector', 10, 1);
add_filter('acf/load_field/name=drallen_sidebar_form', 'drallen_form_selector', 10, 1);
add_filter('acf/load_field/name=drallen_sidebar_menu', 'drallen_menu_selector', 10, 1);


add_action('wpforms_frontend_output_before', function ($form_data) {
    if (absint($form_data['id']) !== absint(get_field('drallen_register_form', 'option'))) {
        return;
    } ?>
    <h3 class="title30"><?= $form_data['settings']['form_title'] ?></h3>
    <p class="title16"><?= $form_data['settings']['form_desc'] ?></p>
    <?php
}, 10, 1);

add_action('customize_register', function ($wp_customize) {
    $wp_customize->add_setting('footer_logo', array(
        'default' => get_theme_file_uri('assets/images/site56/logo-foot.png'),
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo_control', array(
        'label' => 'Upload Logo',
        'priority' => 20,
        'section' => 'title_tagline',
        'settings' => 'footer_logo',
        'button_labels' => array(
            'select' => 'Chọn Logo',
            'remove' => 'Xóa bỏ',
            'change' => 'Thay đổi Logo',
        )
    )));
});

add_filter('post_thumbnail_id', function ($thumbnail_id, $post) {
    if ($thumbnail_id == false || $thumbnail_id == "") $thumbnail_id = get_option('dfi_image_id');
    return $thumbnail_id;
}, 10, 2);