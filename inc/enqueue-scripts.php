<?php
/**
 * Enqueue scripts and styles
 *
 * @package AryaOdyssey
 */

function aryaodyssey_enqueue_scripts() {
    // Styles
    wp_enqueue_style('aryaodyssey-style', get_stylesheet_uri(), array(), ARYAODYSSEY_VERSION);
    wp_enqueue_style('aryaodyssey-main', get_template_directory_uri() . '/assets/css/main.css', array(), ARYAODYSSEY_VERSION);
    
    // Scripts
    wp_enqueue_script('feather-icons', 'https://unpkg.com/feather-icons@4.29.0/dist/feather.min.js', array(), '4.29.0', true);
    wp_enqueue_script('aryaodyssey-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), ARYAODYSSEY_VERSION, true);
    
    // Localize script for AJAX
    wp_localize_script('aryaodyssey-main-js', 'aryaodyssey_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('aryaodyssey_nonce'),
        'strings' => array(
            'loading' => __('Loading...', 'aryaodyssey'),
            'error' => __('An error occurred. Please try again.', 'aryaodyssey'),
            'success' => __('Success!', 'aryaodyssey'),
        )
    ));

    // Conditional scripts
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'aryaodyssey_enqueue_scripts');

// Enqueue admin scripts
function aryaodyssey_admin_enqueue_scripts($hook) {
    // Only load on Gutenberg editor pages
    if ($hook === 'post.php' || $hook === 'post-new.php') {
        wp_enqueue_script(
            'aryaodyssey-blocks',
            get_template_directory_uri() . '/assets/js/blocks.js',
            array('wp-blocks', 'wp-element', 'wp-editor', 'wp-components', 'wp-i18n'),
            ARYAODYSSEY_VERSION,
            true
        );

        wp_enqueue_style(
            'aryaodyssey-blocks-editor',
            get_template_directory_uri() . '/assets/css/blocks-editor.css',
            array(),
            ARYAODYSSEY_VERSION
        );
    }
}
add_action('admin_enqueue_scripts', 'aryaodyssey_admin_enqueue_scripts');

// Add theme support for editor styles
function aryaodyssey_add_editor_styles() {
    add_editor_style(array(
        'assets/css/main.css',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap'
    ));
}
add_action('admin_init', 'aryaodyssey_add_editor_styles');

// Preload key resources
function aryaodyssey_resource_hints($urls, $relation_type) {
    if (wp_style_is('aryaodyssey-main', 'queue') && 'preconnect' === $relation_type) {
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
            'crossorigin',
        );
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin',
        );
        $urls[] = array(
            'href' => 'https://unpkg.com',
            'crossorigin',
        );
    }

    return $urls;
}
add_filter('wp_resource_hints', 'aryaodyssey_resource_hints', 10, 2);

// Remove block library CSS (we'll include our own)
function aryaodyssey_remove_wp_block_library_css() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-block-style'); // Remove WooCommerce block CSS
}
add_action('wp_enqueue_scripts', 'aryaodyssey_remove_wp_block_library_css', 100);

// Optimize CSS delivery
function aryaodyssey_optimize_css_delivery() {
    // Add critical CSS inline for above-the-fold content
    $critical_css = "
        body { font-family: 'Inter', sans-serif; margin: 0; }
        .site-header { position: fixed; top: 0; left: 0; right: 0; z-index: 1000; background: rgba(255,255,255,0.95); }
        .hero-section { height: 100vh; display: flex; align-items: center; justify-content: center; }
    ";
    
    echo '<style id="critical-css">' . $critical_css . '</style>';
}
add_action('wp_head', 'aryaodyssey_optimize_css_delivery', 1);
