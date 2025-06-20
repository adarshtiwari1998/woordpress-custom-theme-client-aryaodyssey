<?php
/**
 * AryaOdyssey functions and definitions
 */

if (!defined('ABSPATH')) {
    exit;
}

// Theme setup
function aryaodyssey_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    
    // Add custom image sizes
    add_image_size('aryaodyssey-hero', 1920, 800, true);
    add_image_size('aryaodyssey-service', 400, 300, true);
    add_image_size('aryaodyssey-room', 600, 400, true);
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'aryaodyssey'),
        'footer' => esc_html__('Footer Menu', 'aryaodyssey'),
    ));
}
add_action('after_setup_theme', 'aryaodyssey_setup');

// Enqueue styles and scripts
function aryaodyssey_scripts() {
    // Theme stylesheet
    wp_enqueue_style('aryaodyssey-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_style('aryaodyssey-theme', get_template_directory_uri() . '/assets/css/theme.css', array(), '1.0.0');
    
    // Font Awesome for icons
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', array(), '6.0.0');
    
    // Bootstrap CSS
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', array(), '5.3.0');
    
    // Theme JavaScript
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array(), '5.3.0', true);
    wp_enqueue_script('aryaodyssey-theme', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), '1.0.0', true);
    
    // Localize script for AJAX
    wp_localize_script('aryaodyssey-theme', 'aryaodyssey_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('aryaodyssey_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'aryaodyssey_scripts');

// Enqueue block editor assets
function aryaodyssey_block_editor_assets() {
    wp_enqueue_script(
        'aryaodyssey-blocks',
        get_template_directory_uri() . '/assets/js/blocks.js',
        array('wp-blocks', 'wp-element', 'wp-components', 'wp-editor'),
        '1.0.0'
    );
}
add_action('enqueue_block_editor_assets', 'aryaodyssey_block_editor_assets');

// Include custom post types
require get_template_directory() . '/inc/custom-post-types.php';

// Include theme customizer
require get_template_directory() . '/inc/theme-customizer.php';

// Include blocks registration
require get_template_directory() . '/inc/blocks-registration.php';

// Widget areas
function aryaodyssey_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Footer Widget 1', 'aryaodyssey'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Add widgets here to appear in your footer.', 'aryaodyssey'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => esc_html__('Footer Widget 2', 'aryaodyssey'),
        'id'            => 'footer-2',
        'description'   => esc_html__('Add widgets here to appear in your footer.', 'aryaodyssey'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => esc_html__('Footer Widget 3', 'aryaodyssey'),
        'id'            => 'footer-3',
        'description'   => esc_html__('Add widgets here to appear in your footer.', 'aryaodyssey'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'aryaodyssey_widgets_init');

// AJAX handler for contact form
function aryaodyssey_handle_contact_form() {
    check_ajax_referer('aryaodyssey_nonce', 'nonce');
    
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);
    
    // Send email (configure with your SMTP settings)
    $to = get_option('admin_email');
    $subject = 'New Contact Form Submission from ' . $name;
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = array('Content-Type: text/plain; charset=UTF-8');
    
    if (wp_mail($to, $subject, $body, $headers)) {
        wp_send_json_success('Message sent successfully!');
    } else {
        wp_send_json_error('Failed to send message. Please try again.');
    }
}
add_action('wp_ajax_aryaodyssey_contact_form', 'aryaodyssey_handle_contact_form');
add_action('wp_ajax_nopriv_aryaodyssey_contact_form', 'aryaodyssey_handle_contact_form');

// Custom excerpt length
function aryaodyssey_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'aryaodyssey_excerpt_length', 999);
