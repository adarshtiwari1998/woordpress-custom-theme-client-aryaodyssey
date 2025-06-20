<?php
/**
 * AryaOdyssey Theme Functions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Define theme constants
define('ARYAODYSSEY_VERSION', '1.0.0');
define('ARYAODYSSEY_THEME_DIR', get_template_directory());
define('ARYAODYSSEY_THEME_URI', get_template_directory_uri());

// Include theme files
require_once ARYAODYSSEY_THEME_DIR . '/inc/theme-support.php';
require_once ARYAODYSSEY_THEME_DIR . '/inc/enqueue-scripts.php';
require_once ARYAODYSSEY_THEME_DIR . '/inc/custom-post-types.php';
require_once ARYAODYSSEY_THEME_DIR . '/inc/customizer.php';

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function aryaodyssey_setup() {
    // Make theme available for translation
    load_theme_textdomain('aryaodyssey', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for HTML5 markup
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Set up the WordPress core custom background feature
    add_theme_support('custom-background', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ));

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'aryaodyssey'),
        'footer'  => esc_html__('Footer Menu', 'aryaodyssey'),
    ));

    // Add support for wide alignment
    add_theme_support('align-wide');

    // Add support for responsive embeds
    add_theme_support('responsive-embeds');

    // Add support for editor styles
    add_theme_support('editor-styles');

    // Add support for custom line height
    add_theme_support('custom-line-height');

    // Add support for custom units
    add_theme_support('custom-units');
}
add_action('after_setup_theme', 'aryaodyssey_setup');

/**
 * Register widget areas
 */
function aryaodyssey_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'aryaodyssey'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'aryaodyssey'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget Area', 'aryaodyssey'),
        'id'            => 'footer-widgets',
        'description'   => esc_html__('Add widgets here for the footer.', 'aryaodyssey'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'aryaodyssey_widgets_init');

/**
 * Register custom Gutenberg blocks
 */
function aryaodyssey_register_blocks() {
    // Register hero section block
    wp_register_script(
        'aryaodyssey-hero-block',
        get_template_directory_uri() . '/assets/js/blocks.js',
        array('wp-blocks', 'wp-element', 'wp-editor', 'wp-components'),
        ARYAODYSSEY_VERSION,
        true
    );

    register_block_type('aryaodyssey/hero-section', array(
        'editor_script' => 'aryaodyssey-hero-block',
    ));

    register_block_type('aryaodyssey/service-cards', array(
        'editor_script' => 'aryaodyssey-hero-block',
    ));

    register_block_type('aryaodyssey/room-showcase', array(
        'editor_script' => 'aryaodyssey-hero-block',
    ));

    register_block_type('aryaodyssey/testimonials', array(
        'editor_script' => 'aryaodyssey-hero-block',
    ));
}
add_action('init', 'aryaodyssey_register_blocks');

/**
 * Add custom image sizes
 */
function aryaodyssey_custom_image_sizes() {
    add_image_size('hero-banner', 1920, 800, true);
    add_image_size('service-card', 400, 300, true);
    add_image_size('room-gallery', 600, 400, true);
    add_image_size('testimonial-avatar', 80, 80, true);
}
add_action('after_setup_theme', 'aryaodyssey_custom_image_sizes');

/**
 * Customize excerpt length
 */
function aryaodyssey_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'aryaodyssey_excerpt_length', 999);

/**
 * Customize excerpt more text
 */
function aryaodyssey_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'aryaodyssey_excerpt_more');
