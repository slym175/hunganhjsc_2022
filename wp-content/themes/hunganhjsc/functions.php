<?php
/**
 * Hùng Anh JSC functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hùng_Anh_JSC
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if (!defined('_S_TEXTDOMAIN')) {
    define('_S_TEXTDOMAIN', 'hunganhjsc');
}

if (!defined('_S_THEME_URL')) {
    define('_S_THEME_URL', get_template_directory());
}

if (!defined('_S_THEME_URL_URI')) {
    define('_S_THEME_URL_URI', get_template_directory_uri());
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hunganhjsc_setup() {
    load_theme_textdomain(_S_TEXTDOMAIN, _S_THEME_URL . '/languages');
    
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    add_theme_support('customize-selective-refresh-widgets');
    add_image_size( 'small-thumbnail', 50, 50 ); // 220 pixels wide by 180 pixels tall, soft proportional crop mode
    add_theme_support(
        'custom-logo',
        array(
            'height' => 150,
            'width' => 150,
            'flex-width' => true,
            'flex-height' => true,
        )
    );

//    add_image_size('post-thumbnail', 400, 225);
//    set_post_thumbnail_size(400, 225);
    register_nav_menus(
        array(
                            //L
            // 'menu-primary' => esc_html__('Menu chính', _S_TEXTDOMAIN),
            'headerMenuLocation' => esc_html__('Header Menu Location', _S_TEXTDOMAIN),
            'footerLocationOne' => esc_html__('Footer Location One',_S_TEXTDOMAIN),
            'footerLocationTwo' => esc_html__('Footer Location Two',_S_TEXTDOMAIN),
            'footerLocationThree' => esc_html__('Footer Location Three',_S_TEXTDOMAIN),
        )
    );
}
add_action( 'after_setup_theme', 'hunganhjsc_setup' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hunganhjsc_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', _S_TEXTDOMAIN ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', _S_TEXTDOMAIN ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'hunganhjsc_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hunganhjsc_scripts() {
	wp_enqueue_style( 'hunganhjsc-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css',array(), _S_VERSION);
    wp_enqueue_style('carosel', _S_THEME_URL_URI.'/assets/OwlCarousel2/dist/assets/owl.carousel.min.css',array(), _S_VERSION);
    wp_enqueue_style('owl-carosel', _S_THEME_URL_URI.'/assets/OwlCarousel2/dist/assets/owl.theme.default.min.css',array(), _S_VERSION);
    wp_enqueue_style('custom', _S_THEME_URL_URI.'/assets/css/custom.css',array(), _S_VERSION);
    wp_enqueue_style('inner', _S_THEME_URL_URI.'/assets/css/inner.css',array(), _S_VERSION);
    wp_enqueue_style('style', _S_THEME_URL_URI.'/assets/css/style.css',array(), _S_VERSION);
    wp_enqueue_style('cat-view', _S_THEME_URL_URI.'/assets/css/cat-view.css',array(), _S_VERSION);
    wp_enqueue_style('product-view', _S_THEME_URL_URI.'/assets/css/product-view.css',array(), _S_VERSION);
	wp_style_add_data( 'hunganhjsc-style', 'rtl', 'replace' );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

    wp_enqueue_script('jquery');
    wp_enqueue_script('custom',_S_THEME_URL_URI.'/assets/js/custom.js',array(), null, true);
    wp_enqueue_script('twitter-bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js',array(), null, true);
    wp_enqueue_script('block-ui',_S_THEME_URL_URI.'/assets/js/jquery.blockUI.min.js', array(), null, true);
}
add_action( 'wp_enqueue_scripts', 'hunganhjsc_scripts' );

require(dirname(__FILE__) . "/inc/template-functions.php");

// add_filter('auto_update_plugin', '__return_false');
// add_filter('auto_update_theme', '__return_false');