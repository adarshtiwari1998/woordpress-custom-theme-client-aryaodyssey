<?php
/**
 * WordPress Customizer Integration
 *
 * @package AryaOdyssey
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add postMessage support for site title and description
 */
function aryaodyssey_customize_register($wp_customize) {
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    // Theme Options Panel
    $wp_customize->add_panel('aryaodyssey_theme_options', array(
        'title' => __('AryaOdyssey Theme Options', 'aryaodyssey'),
        'description' => __('Customize your AryaOdyssey theme settings', 'aryaodyssey'),
        'priority' => 30,
    ));

    // Header Section
    $wp_customize->add_section('aryaodyssey_header', array(
        'title' => __('Header Settings', 'aryaodyssey'),
        'panel' => 'aryaodyssey_theme_options',
        'priority' => 10,
    ));

    // Header Phone Number
    $wp_customize->add_setting('aryaodyssey_header_phone', array(
        'default' => '+91 98765 43210',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('aryaodyssey_header_phone', array(
        'label' => __('Header Phone Number', 'aryaodyssey'),
        'section' => 'aryaodyssey_header',
        'type' => 'text',
    ));

    // Header Email
    $wp_customize->add_setting('aryaodyssey_header_email', array(
        'default' => 'info@aryaodyssey.com',
        'sanitize_callback' => 'sanitize_email',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('aryaodyssey_header_email', array(
        'label' => __('Header Email Address', 'aryaodyssey'),
        'section' => 'aryaodyssey_header',
        'type' => 'email',
    ));

    // Social Media Section
    $wp_customize->add_section('aryaodyssey_social', array(
        'title' => __('Social Media Links', 'aryaodyssey'),
        'panel' => 'aryaodyssey_theme_options',
        'priority' => 20,
    ));

    // Social Media Links
    $social_platforms = array(
        'facebook' => __('Facebook URL', 'aryaodyssey'),
        'instagram' => __('Instagram URL', 'aryaodyssey'),
        'twitter' => __('Twitter URL', 'aryaodyssey'),
        'youtube' => __('YouTube URL', 'aryaodyssey'),
        'linkedin' => __('LinkedIn URL', 'aryaodyssey'),
    );

    foreach ($social_platforms as $platform => $label) {
        $wp_customize->add_setting("aryaodyssey_social_{$platform}", array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control("aryaodyssey_social_{$platform}", array(
            'label' => $label,
            'section' => 'aryaodyssey_social',
            'type' => 'url',
        ));
    }

    // Colors Section
    $wp_customize->add_section('aryaodyssey_colors', array(
        'title' => __('Theme Colors', 'aryaodyssey'),
        'panel' => 'aryaodyssey_theme_options',
        'priority' => 30,
    ));

    // Primary Color
    $wp_customize->add_setting('aryaodyssey_primary_color', array(
        'default' => '#2d5016',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'aryaodyssey_primary_color', array(
        'label' => __('Primary Color', 'aryaodyssey'),
        'section' => 'aryaodyssey_colors',
    )));

    // Secondary Color
    $wp_customize->add_setting('aryaodyssey_secondary_color', array(
        'default' => '#4a7c59',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'aryaodyssey_secondary_color', array(
        'label' => __('Secondary Color', 'aryaodyssey'),
        'section' => 'aryaodyssey_colors',
    )));

    // Accent Color
    $wp_customize->add_setting('aryaodyssey_accent_color', array(
        'default' => '#7ba05b',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'aryaodyssey_accent_color', array(
        'label' => __('Accent Color', 'aryaodyssey'),
        'section' => 'aryaodyssey_colors',
    )));

    // Typography Section
    $wp_customize->add_section('aryaodyssey_typography', array(
        'title' => __('Typography', 'aryaodyssey'),
        'panel' => 'aryaodyssey_theme_options',
        'priority' => 40,
    ));

    // Heading Font
    $wp_customize->add_setting('aryaodyssey_heading_font', array(
        'default' => 'Playfair Display',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('aryaodyssey_heading_font', array(
        'label' => __('Heading Font Family', 'aryaodyssey'),
        'section' => 'aryaodyssey_typography',
        'type' => 'select',
        'choices' => array(
            'Playfair Display' => 'Playfair Display',
            'Georgia' => 'Georgia',
            'Times New Roman' => 'Times New Roman',
            'Merriweather' => 'Merriweather',
            'Lora' => 'Lora',
        ),
    ));

    // Body Font
    $wp_customize->add_setting('aryaodyssey_body_font', array(
        'default' => 'Inter',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('aryaodyssey_body_font', array(
        'label' => __('Body Font Family', 'aryaodyssey'),
        'section' => 'aryaodyssey_typography',
        'type' => 'select',
        'choices' => array(
            'Inter' => 'Inter',
            'Arial' => 'Arial',
            'Helvetica' => 'Helvetica',
            'Open Sans' => 'Open Sans',
            'Roboto' => 'Roboto',
        ),
    ));

    // Business Information Section
    $wp_customize->add_section('aryaodyssey_business_info', array(
        'title' => __('Business Information', 'aryaodyssey'),
        'panel' => 'aryaodyssey_theme_options',
        'priority' => 50,
    ));

    // Business Address
    $wp_customize->add_setting('aryaodyssey_address', array(
        'default' => 'Old Manali Road, Manali, Himachal Pradesh 175131',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('aryaodyssey_address', array(
        'label' => __('Business Address', 'aryaodyssey'),
        'section' => 'aryaodyssey_business_info',
        'type' => 'textarea',
    ));

    // Business Phone
    $wp_customize->add_setting('aryaodyssey_business_phone', array(
        'default' => '+91 98765 43210',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('aryaodyssey_business_phone', array(
        'label' => __('Business Phone', 'aryaodyssey'),
        'section' => 'aryaodyssey_business_info',
        'type' => 'text',
    ));

    // Business Email
    $wp_customize->add_setting('aryaodyssey_business_email', array(
        'default' => 'info@aryaodyssey.com',
        'sanitize_callback' => 'sanitize_email',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('aryaodyssey_business_email', array(
        'label' => __('Business Email', 'aryaodyssey'),
        'section' => 'aryaodyssey_business_info',
        'type' => 'email',
    ));

    // Business Hours
    $wp_customize->add_setting('aryaodyssey_business_hours', array(
        'default' => 'Monday - Sunday: 8:00 AM - 10:00 PM',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('aryaodyssey_business_hours', array(
        'label' => __('Business Hours', 'aryaodyssey'),
        'section' => 'aryaodyssey_business_info',
        'type' => 'text',
    ));

    // Homepage Settings Section
    $wp_customize->add_section('aryaodyssey_homepage', array(
        'title' => __('Homepage Settings', 'aryaodyssey'),
        'panel' => 'aryaodyssey_theme_options',
        'priority' => 60,
    ));

    // Hero Section Title
    $wp_customize->add_setting('aryaodyssey_hero_title', array(
        'default' => __('Discover the Magic of Manali', 'aryaodyssey'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('aryaodyssey_hero_title', array(
        'label' => __('Hero Section Title', 'aryaodyssey'),
        'section' => 'aryaodyssey_homepage',
        'type' => 'text',
    ));

    // Hero Section Subtitle
    $wp_customize->add_setting('aryaodyssey_hero_subtitle', array(
        'default' => __('Experience the breathtaking beauty of the Himalayas with our luxury accommodations and adventure packages.', 'aryaodyssey'),
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('aryaodyssey_hero_subtitle', array(
        'label' => __('Hero Section Subtitle', 'aryaodyssey'),
        'section' => 'aryaodyssey_homepage',
        'type' => 'textarea',
    ));

    // Hero Background Image
    $wp_customize->add_setting('aryaodyssey_hero_background', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'aryaodyssey_hero_background', array(
        'label' => __('Hero Background Image', 'aryaodyssey'),
        'section' => 'aryaodyssey_homepage',
    )));

    // Footer Section
    $wp_customize->add_section('aryaodyssey_footer', array(
        'title' => __('Footer Settings', 'aryaodyssey'),
        'panel' => 'aryaodyssey_theme_options',
        'priority' => 70,
    ));

    // Footer Description
    $wp_customize->add_setting('aryaodyssey_footer_description', array(
        'default' => __('Discover the beauty of Manali with AryaOdyssey. Your gateway to unforgettable mountain adventures, luxury accommodations, and authentic Himalayan experiences.', 'aryaodyssey'),
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('aryaodyssey_footer_description', array(
        'label' => __('Footer Description', 'aryaodyssey'),
        'section' => 'aryaodyssey_footer',
        'type' => 'textarea',
    ));

    // Copyright Text
    $wp_customize->add_setting('aryaodyssey_copyright', array(
        'default' => __('All rights reserved.', 'aryaodyssey'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('aryaodyssey_copyright', array(
        'label' => __('Copyright Text', 'aryaodyssey'),
        'section' => 'aryaodyssey_footer',
        'type' => 'text',
    ));
}
add_action('customize_register', 'aryaodyssey_customize_register');

/**
 * Render the site title for the selective refresh partial.
 */
function aryaodyssey_customize_partial_blogname() {
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 */
function aryaodyssey_customize_partial_blogdescription() {
    bloginfo('description');
}

/**
 * Bind JS handlers to instantly live-preview changes.
 */
function aryaodyssey_customize_preview_js() {
    wp_enqueue_script('aryaodyssey-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array('customize-preview'), ARYAODYSSEY_VERSION, true);
}
add_action('customize_preview_init', 'aryaodyssey_customize_preview_js');

/**
 * Output custom CSS based on customizer settings
 */
function aryaodyssey_customizer_css() {
    $primary_color = get_theme_mod('aryaodyssey_primary_color', '#2d5016');
    $secondary_color = get_theme_mod('aryaodyssey_secondary_color', '#4a7c59');
    $accent_color = get_theme_mod('aryaodyssey_accent_color', '#7ba05b');
    $heading_font = get_theme_mod('aryaodyssey_heading_font', 'Playfair Display');
    $body_font = get_theme_mod('aryaodyssey_body_font', 'Inter');
    $hero_background = get_theme_mod('aryaodyssey_hero_background', '');

    $css = "
        :root {
            --primary-color: {$primary_color};
            --secondary-color: {$secondary_color};
            --accent-color: {$accent_color};
            --heading-font: '{$heading_font}', serif;
            --body-font: '{$body_font}', sans-serif;
        }
        
        body {
            font-family: var(--body-font);
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: var(--heading-font);
        }
        
        .btn-primary,
        .nav-menu a:hover::after,
        .filter-btn.active,
        .filter-btn:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-outline {
            color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-outline:hover {
            background-color: var(--primary-color);
            color: white;
        }
        
        .hero-section .hero-title .highlight,
        .service-price,
        .room-price,
        a {
            color: var(--primary-color);
        }
        
        .hero-section .hero-background {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 50%, var(--accent-color) 100%);
        }
    ";

    if ($hero_background) {
        $css .= "
            .hero-section .hero-background {
                background-image: url('{$hero_background}');
                background-size: cover;
                background-position: center;
            }
        ";
    }

    wp_add_inline_style('aryaodyssey-style', $css);
}
add_action('wp_enqueue_scripts', 'aryaodyssey_customizer_css');

/**
 * Get customizer value with default fallback
 */
function aryaodyssey_get_option($option_name, $default = '') {
    return get_theme_mod($option_name, $default);
}

/**
 * Add customizer colors to editor
 */
function aryaodyssey_editor_customizer_styles() {
    $primary_color = get_theme_mod('aryaodyssey_primary_color', '#2d5016');
    $secondary_color = get_theme_mod('aryaodyssey_secondary_color', '#4a7c59');
    $accent_color = get_theme_mod('aryaodyssey_accent_color', '#7ba05b');
    
    $css = "
        .edit-post-visual-editor {
            --primary-color: {$primary_color};
            --secondary-color: {$secondary_color};
            --accent-color: {$accent_color};
        }
    ";
    
    wp_add_inline_style('aryaodyssey-blocks-editor', $css);
}
add_action('enqueue_block_editor_assets', 'aryaodyssey_editor_customizer_styles');

/**
 * Generate customizer JavaScript for live preview
 */
function aryaodyssey_generate_customizer_js() {
    ?>
    <script type="text/javascript">
    ( function( $ ) {
        // Site title and description
        wp.customize( 'blogname', function( value ) {
            value.bind( function( newval ) {
                $( '.site-title a' ).text( newval );
            } );
        } );
        
        wp.customize( 'blogdescription', function( value ) {
            value.bind( function( newval ) {
                $( '.site-description' ).text( newval );
            } );
        } );
        
        // Hero title and subtitle
        wp.customize( 'aryaodyssey_hero_title', function( value ) {
            value.bind( function( newval ) {
                $( '.hero-title' ).text( newval );
            } );
        } );
        
        wp.customize( 'aryaodyssey_hero_subtitle', function( value ) {
            value.bind( function( newval ) {
                $( '.hero-subtitle' ).text( newval );
            } );
        } );
        
        // Colors
        wp.customize( 'aryaodyssey_primary_color', function( value ) {
            value.bind( function( newval ) {
                document.documentElement.style.setProperty('--primary-color', newval);
            } );
        } );
        
        wp.customize( 'aryaodyssey_secondary_color', function( value ) {
            value.bind( function( newval ) {
                document.documentElement.style.setProperty('--secondary-color', newval);
            } );
        } );
        
        wp.customize( 'aryaodyssey_accent_color', function( value ) {
            value.bind( function( newval ) {
                document.documentElement.style.setProperty('--accent-color', newval);
            } );
        } );
        
        // Typography
        wp.customize( 'aryaodyssey_heading_font', function( value ) {
            value.bind( function( newval ) {
                document.documentElement.style.setProperty('--heading-font', "'" + newval + "', serif");
            } );
        } );
        
        wp.customize( 'aryaodyssey_body_font', function( value ) {
            value.bind( function( newval ) {
                document.documentElement.style.setProperty('--body-font', "'" + newval + "', sans-serif");
            } );
        } );
        
    } )( jQuery );
    </script>
    <?php
}

/**
 * Output customizer preview JavaScript
 */
function aryaodyssey_output_customizer_js() {
    if (is_customize_preview()) {
        aryaodyssey_generate_customizer_js();
    }
}
add_action('wp_footer', 'aryaodyssey_output_customizer_js');
