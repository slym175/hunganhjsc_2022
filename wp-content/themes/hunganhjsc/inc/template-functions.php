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

add_filter('post_thumbnail_id', function ($thumbnail_id, $post) {
    if ($thumbnail_id == false || $thumbnail_id == "") $thumbnail_id = get_option('dfi_image_id');
    return $thumbnail_id;
}, 10, 2);