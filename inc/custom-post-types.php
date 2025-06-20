<?php
/**
 * Custom Post Types for AryaOdyssey Theme
 *
 * @package AryaOdyssey
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Custom Post Types
 */
function aryaodyssey_register_post_types() {
    
    // Services Post Type
    register_post_type('service', array(
        'labels' => array(
            'name' => __('Services', 'aryaodyssey'),
            'singular_name' => __('Service', 'aryaodyssey'),
            'menu_name' => __('Services', 'aryaodyssey'),
            'add_new' => __('Add New Service', 'aryaodyssey'),
            'add_new_item' => __('Add New Service', 'aryaodyssey'),
            'edit_item' => __('Edit Service', 'aryaodyssey'),
            'new_item' => __('New Service', 'aryaodyssey'),
            'view_item' => __('View Service', 'aryaodyssey'),
            'search_items' => __('Search Services', 'aryaodyssey'),
            'not_found' => __('No services found', 'aryaodyssey'),
            'not_found_in_trash' => __('No services found in trash', 'aryaodyssey'),
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'services'),
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'page-attributes'),
        'menu_icon' => 'dashicons-admin-tools',
        'menu_position' => 6,
        'show_in_rest' => true,
        'taxonomies' => array('service-category'),
        'capability_type' => 'post',
        'hierarchical' => false,
    ));

    // Rooms Post Type
    register_post_type('room', array(
        'labels' => array(
            'name' => __('Rooms', 'aryaodyssey'),
            'singular_name' => __('Room', 'aryaodyssey'),
            'menu_name' => __('Rooms', 'aryaodyssey'),
            'add_new' => __('Add New Room', 'aryaodyssey'),
            'add_new_item' => __('Add New Room', 'aryaodyssey'),
            'edit_item' => __('Edit Room', 'aryaodyssey'),
            'new_item' => __('New Room', 'aryaodyssey'),
            'view_item' => __('View Room', 'aryaodyssey'),
            'search_items' => __('Search Rooms', 'aryaodyssey'),
            'not_found' => __('No rooms found', 'aryaodyssey'),
            'not_found_in_trash' => __('No rooms found in trash', 'aryaodyssey'),
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'rooms'),
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'page-attributes'),
        'menu_icon' => 'dashicons-admin-home',
        'menu_position' => 7,
        'show_in_rest' => true,
        'taxonomies' => array('room-category'),
        'capability_type' => 'post',
        'hierarchical' => false,
    ));

    // Testimonials Post Type
    register_post_type('testimonial', array(
        'labels' => array(
            'name' => __('Testimonials', 'aryaodyssey'),
            'singular_name' => __('Testimonial', 'aryaodyssey'),
            'menu_name' => __('Testimonials', 'aryaodyssey'),
            'add_new' => __('Add New Testimonial', 'aryaodyssey'),
            'add_new_item' => __('Add New Testimonial', 'aryaodyssey'),
            'edit_item' => __('Edit Testimonial', 'aryaodyssey'),
            'new_item' => __('New Testimonial', 'aryaodyssey'),
            'view_item' => __('View Testimonial', 'aryaodyssey'),
            'search_items' => __('Search Testimonials', 'aryaodyssey'),
            'not_found' => __('No testimonials found', 'aryaodyssey'),
            'not_found_in_trash' => __('No testimonials found in trash', 'aryaodyssey'),
        ),
        'public' => false,
        'show_ui' => true,
        'has_archive' => false,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'menu_icon' => 'dashicons-format-quote',
        'menu_position' => 8,
        'show_in_rest' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
    ));
}
add_action('init', 'aryaodyssey_register_post_types');

/**
 * Register Custom Taxonomies
 */
function aryaodyssey_register_taxonomies() {
    
    // Service Categories
    register_taxonomy('service-category', 'service', array(
        'labels' => array(
            'name' => __('Service Categories', 'aryaodyssey'),
            'singular_name' => __('Service Category', 'aryaodyssey'),
            'menu_name' => __('Categories', 'aryaodyssey'),
            'all_items' => __('All Categories', 'aryaodyssey'),
            'edit_item' => __('Edit Category', 'aryaodyssey'),
            'view_item' => __('View Category', 'aryaodyssey'),
            'update_item' => __('Update Category', 'aryaodyssey'),
            'add_new_item' => __('Add New Category', 'aryaodyssey'),
            'new_item_name' => __('New Category Name', 'aryaodyssey'),
            'search_items' => __('Search Categories', 'aryaodyssey'),
            'not_found' => __('No categories found', 'aryaodyssey'),
        ),
        'hierarchical' => true,
        'public' => true,
        'rewrite' => array('slug' => 'service-category'),
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'query_var' => true,
    ));

    // Room Categories
    register_taxonomy('room-category', 'room', array(
        'labels' => array(
            'name' => __('Room Categories', 'aryaodyssey'),
            'singular_name' => __('Room Category', 'aryaodyssey'),
            'menu_name' => __('Categories', 'aryaodyssey'),
            'all_items' => __('All Categories', 'aryaodyssey'),
            'edit_item' => __('Edit Category', 'aryaodyssey'),
            'view_item' => __('View Category', 'aryaodyssey'),
            'update_item' => __('Update Category', 'aryaodyssey'),
            'add_new_item' => __('Add New Category', 'aryaodyssey'),
            'new_item_name' => __('New Category Name', 'aryaodyssey'),
            'search_items' => __('Search Categories', 'aryaodyssey'),
            'not_found' => __('No categories found', 'aryaodyssey'),
        ),
        'hierarchical' => true,
        'public' => true,
        'rewrite' => array('slug' => 'room-category'),
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'query_var' => true,
    ));
}
add_action('init', 'aryaodyssey_register_taxonomies');

/**
 * Add Custom Meta Boxes
 */
function aryaodyssey_add_meta_boxes() {
    
    // Service Meta Box
    add_meta_box(
        'service-details',
        __('Service Details', 'aryaodyssey'),
        'aryaodyssey_service_meta_box_callback',
        'service',
        'normal',
        'high'
    );

    // Room Meta Box
    add_meta_box(
        'room-details',
        __('Room Details', 'aryaodyssey'),
        'aryaodyssey_room_meta_box_callback',
        'room',
        'normal',
        'high'
    );

    // Testimonial Meta Box
    add_meta_box(
        'testimonial-details',
        __('Testimonial Details', 'aryaodyssey'),
        'aryaodyssey_testimonial_meta_box_callback',
        'testimonial',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'aryaodyssey_add_meta_boxes');

/**
 * Service Meta Box Callback
 */
function aryaodyssey_service_meta_box_callback($post) {
    wp_nonce_field('aryaodyssey_service_meta_box', 'aryaodyssey_service_meta_box_nonce');
    
    $price = get_post_meta($post->ID, 'service_price', true);
    $duration = get_post_meta($post->ID, 'service_duration', true);
    $difficulty = get_post_meta($post->ID, 'service_difficulty', true);
    $group_size = get_post_meta($post->ID, 'service_group_size', true);
    $season = get_post_meta($post->ID, 'service_season', true);
    $features = get_post_meta($post->ID, 'service_features', true);
    
    echo '<table class="form-table">';
    
    echo '<tr>';
    echo '<th><label for="service_price">' . __('Price (₹)', 'aryaodyssey') . '</label></th>';
    echo '<td><input type="number" id="service_price" name="service_price" value="' . esc_attr($price) . '" min="0" step="100" class="regular-text" /></td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<th><label for="service_duration">' . __('Duration', 'aryaodyssey') . '</label></th>';
    echo '<td><input type="text" id="service_duration" name="service_duration" value="' . esc_attr($duration) . '" class="regular-text" placeholder="e.g., 2 hours, Full day" /></td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<th><label for="service_difficulty">' . __('Difficulty Level', 'aryaodyssey') . '</label></th>';
    echo '<td>';
    echo '<select id="service_difficulty" name="service_difficulty">';
    echo '<option value="Easy"' . selected($difficulty, 'Easy', false) . '>' . __('Easy', 'aryaodyssey') . '</option>';
    echo '<option value="Moderate"' . selected($difficulty, 'Moderate', false) . '>' . __('Moderate', 'aryaodyssey') . '</option>';
    echo '<option value="Challenging"' . selected($difficulty, 'Challenging', false) . '>' . __('Challenging', 'aryaodyssey') . '</option>';
    echo '<option value="Expert"' . selected($difficulty, 'Expert', false) . '>' . __('Expert', 'aryaodyssey') . '</option>';
    echo '</select>';
    echo '</td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<th><label for="service_group_size">' . __('Group Size', 'aryaodyssey') . '</label></th>';
    echo '<td><input type="text" id="service_group_size" name="service_group_size" value="' . esc_attr($group_size) . '" class="regular-text" placeholder="e.g., 2-8 people" /></td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<th><label for="service_season">' . __('Best Season', 'aryaodyssey') . '</label></th>';
    echo '<td><input type="text" id="service_season" name="service_season" value="' . esc_attr($season) . '" class="regular-text" placeholder="e.g., March to June" /></td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<th><label for="service_features">' . __('Features (one per line)', 'aryaodyssey') . '</label></th>';
    echo '<td><textarea id="service_features" name="service_features" rows="5" class="large-text">' . esc_textarea(is_array($features) ? implode("\n", $features) : $features) . '</textarea></td>';
    echo '</tr>';
    
    echo '</table>';
}

/**
 * Room Meta Box Callback
 */
function aryaodyssey_room_meta_box_callback($post) {
    wp_nonce_field('aryaodyssey_room_meta_box', 'aryaodyssey_room_meta_box_nonce');
    
    $price = get_post_meta($post->ID, 'room_price', true);
    $size = get_post_meta($post->ID, 'room_size', true);
    $occupancy = get_post_meta($post->ID, 'room_occupancy', true);
    $bed_type = get_post_meta($post->ID, 'room_bed_type', true);
    $view = get_post_meta($post->ID, 'room_view', true);
    $bathroom = get_post_meta($post->ID, 'room_bathroom', true);
    $amenities = get_post_meta($post->ID, 'room_amenities', true);
    
    echo '<table class="form-table">';
    
    echo '<tr>';
    echo '<th><label for="room_price">' . __('Price per Night (₹)', 'aryaodyssey') . '</label></th>';
    echo '<td><input type="number" id="room_price" name="room_price" value="' . esc_attr($price) . '" min="0" step="100" class="regular-text" /></td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<th><label for="room_size">' . __('Room Size', 'aryaodyssey') . '</label></th>';
    echo '<td><input type="text" id="room_size" name="room_size" value="' . esc_attr($size) . '" class="regular-text" placeholder="e.g., 25 sq m" /></td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<th><label for="room_occupancy">' . __('Occupancy', 'aryaodyssey') . '</label></th>';
    echo '<td><input type="text" id="room_occupancy" name="room_occupancy" value="' . esc_attr($occupancy) . '" class="regular-text" placeholder="e.g., 2 Adults" /></td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<th><label for="room_bed_type">' . __('Bed Type', 'aryaodyssey') . '</label></th>';
    echo '<td>';
    echo '<select id="room_bed_type" name="room_bed_type">';
    echo '<option value="Single"' . selected($bed_type, 'Single', false) . '>' . __('Single Bed', 'aryaodyssey') . '</option>';
    echo '<option value="Double"' . selected($bed_type, 'Double', false) . '>' . __('Double Bed', 'aryaodyssey') . '</option>';
    echo '<option value="Queen"' . selected($bed_type, 'Queen', false) . '>' . __('Queen Bed', 'aryaodyssey') . '</option>';
    echo '<option value="King"' . selected($bed_type, 'King', false) . '>' . __('King Bed', 'aryaodyssey') . '</option>';
    echo '<option value="Twin"' . selected($bed_type, 'Twin', false) . '>' . __('Twin Beds', 'aryaodyssey') . '</option>';
    echo '</select>';
    echo '</td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<th><label for="room_view">' . __('Room View', 'aryaodyssey') . '</label></th>';
    echo '<td>';
    echo '<select id="room_view" name="room_view">';
    echo '<option value="Mountain View"' . selected($view, 'Mountain View', false) . '>' . __('Mountain View', 'aryaodyssey') . '</option>';
    echo '<option value="Garden View"' . selected($view, 'Garden View', false) . '>' . __('Garden View', 'aryaodyssey') . '</option>';
    echo '<option value="Valley View"' . selected($view, 'Valley View', false) . '>' . __('Valley View', 'aryaodyssey') . '</option>';
    echo '<option value="City View"' . selected($view, 'City View', false) . '>' . __('City View', 'aryaodyssey') . '</option>';
    echo '</select>';
    echo '</td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<th><label for="room_bathroom">' . __('Bathroom Type', 'aryaodyssey') . '</label></th>';
    echo '<td>';
    echo '<select id="room_bathroom" name="room_bathroom">';
    echo '<option value="Private Bathroom"' . selected($bathroom, 'Private Bathroom', false) . '>' . __('Private Bathroom', 'aryaodyssey') . '</option>';
    echo '<option value="Shared Bathroom"' . selected($bathroom, 'Shared Bathroom', false) . '>' . __('Shared Bathroom', 'aryaodyssey') . '</option>';
    echo '<option value="En-suite Bathroom"' . selected($bathroom, 'En-suite Bathroom', false) . '>' . __('En-suite Bathroom', 'aryaodyssey') . '</option>';
    echo '</select>';
    echo '</td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<th><label for="room_amenities">' . __('Amenities (one per line)', 'aryaodyssey') . '</label></th>';
    echo '<td><textarea id="room_amenities" name="room_amenities" rows="5" class="large-text">' . esc_textarea(is_array($amenities) ? implode("\n", $amenities) : $amenities) . '</textarea></td>';
    echo '</tr>';
    
    echo '</table>';
}

/**
 * Testimonial Meta Box Callback
 */
function aryaodyssey_testimonial_meta_box_callback($post) {
    wp_nonce_field('aryaodyssey_testimonial_meta_box', 'aryaodyssey_testimonial_meta_box_nonce');
    
    $author_name = get_post_meta($post->ID, 'testimonial_author_name', true);
    $author_location = get_post_meta($post->ID, 'testimonial_author_location', true);
    $rating = get_post_meta($post->ID, 'testimonial_rating', true);
    $service_used = get_post_meta($post->ID, 'testimonial_service_used', true);
    
    echo '<table class="form-table">';
    
    echo '<tr>';
    echo '<th><label for="testimonial_author_name">' . __('Author Name', 'aryaodyssey') . '</label></th>';
    echo '<td><input type="text" id="testimonial_author_name" name="testimonial_author_name" value="' . esc_attr($author_name) . '" class="regular-text" /></td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<th><label for="testimonial_author_location">' . __('Author Location', 'aryaodyssey') . '</label></th>';
    echo '<td><input type="text" id="testimonial_author_location" name="testimonial_author_location" value="' . esc_attr($author_location) . '" class="regular-text" placeholder="e.g., Mumbai, India" /></td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<th><label for="testimonial_rating">' . __('Rating', 'aryaodyssey') . '</label></th>';
    echo '<td>';
    echo '<select id="testimonial_rating" name="testimonial_rating">';
    echo '<option value="5"' . selected($rating, '5', false) . '>' . __('5 Stars', 'aryaodyssey') . '</option>';
    echo '<option value="4"' . selected($rating, '4', false) . '>' . __('4 Stars', 'aryaodyssey') . '</option>';
    echo '<option value="3"' . selected($rating, '3', false) . '>' . __('3 Stars', 'aryaodyssey') . '</option>';
    echo '<option value="2"' . selected($rating, '2', false) . '>' . __('2 Stars', 'aryaodyssey') . '</option>';
    echo '<option value="1"' . selected($rating, '1', false) . '>' . __('1 Star', 'aryaodyssey') . '</option>';
    echo '</select>';
    echo '</td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<th><label for="testimonial_service_used">' . __('Service Used', 'aryaodyssey') . '</label></th>';
    echo '<td><input type="text" id="testimonial_service_used" name="testimonial_service_used" value="' . esc_attr($service_used) . '" class="regular-text" placeholder="e.g., Accommodation, Trekking" /></td>';
    echo '</tr>';
    
    echo '</table>';
}

/**
 * Save Meta Box Data
 */
function aryaodyssey_save_meta_box_data($post_id) {
    // Check if nonce is valid
    if (!isset($_POST['aryaodyssey_service_meta_box_nonce']) && 
        !isset($_POST['aryaodyssey_room_meta_box_nonce']) && 
        !isset($_POST['aryaodyssey_testimonial_meta_box_nonce'])) {
        return;
    }

    // Check if user has permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Check if not an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Save service meta
    if (isset($_POST['aryaodyssey_service_meta_box_nonce']) && 
        wp_verify_nonce($_POST['aryaodyssey_service_meta_box_nonce'], 'aryaodyssey_service_meta_box')) {
        
        $fields = array('service_price', 'service_duration', 'service_difficulty', 'service_group_size', 'service_season');
        foreach ($fields as $field) {
            if (isset($_POST[$field])) {
                update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
            }
        }
        
        if (isset($_POST['service_features'])) {
            $features = array_filter(array_map('trim', explode("\n", $_POST['service_features'])));
            update_post_meta($post_id, 'service_features', $features);
        }
    }

    // Save room meta
    if (isset($_POST['aryaodyssey_room_meta_box_nonce']) && 
        wp_verify_nonce($_POST['aryaodyssey_room_meta_box_nonce'], 'aryaodyssey_room_meta_box')) {
        
        $fields = array('room_price', 'room_size', 'room_occupancy', 'room_bed_type', 'room_view', 'room_bathroom');
        foreach ($fields as $field) {
            if (isset($_POST[$field])) {
                update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
            }
        }
        
        if (isset($_POST['room_amenities'])) {
            $amenities = array_filter(array_map('trim', explode("\n", $_POST['room_amenities'])));
            update_post_meta($post_id, 'room_amenities', $amenities);
        }
    }

    // Save testimonial meta
    if (isset($_POST['aryaodyssey_testimonial_meta_box_nonce']) && 
        wp_verify_nonce($_POST['aryaodyssey_testimonial_meta_box_nonce'], 'aryaodyssey_testimonial_meta_box')) {
        
        $fields = array('testimonial_author_name', 'testimonial_author_location', 'testimonial_rating', 'testimonial_service_used');
        foreach ($fields as $field) {
            if (isset($_POST[$field])) {
                update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
            }
        }
    }
}
add_action('save_post', 'aryaodyssey_save_meta_box_data');

/**
 * Add default terms on theme activation
 */
function aryaodyssey_add_default_terms() {
    // Service categories
    $service_categories = array(
        'Accommodation' => 'Luxury rooms and villa accommodations',
        'Transportation' => 'Airport transfers and local transport',
        'Adventure' => 'Trekking, camping and outdoor activities',
        'Tours' => 'Guided tours and sightseeing'
    );
    
    foreach ($service_categories as $name => $description) {
        if (!term_exists($name, 'service-category')) {
            wp_insert_term($name, 'service-category', array(
                'description' => $description,
                'slug' => sanitize_title($name)
            ));
        }
    }
    
    // Room categories
    $room_categories = array(
        'Villa Rooms' => 'Luxury villa accommodations',
        'Standard Rooms' => 'Comfortable standard rooms',
        'Suites' => 'Premium suite accommodations',
        'Family Rooms' => 'Spacious family accommodations'
    );
    
    foreach ($room_categories as $name => $description) {
        if (!term_exists($name, 'room-category')) {
            wp_insert_term($name, 'room-category', array(
                'description' => $description,
                'slug' => sanitize_title($name)
            ));
        }
    }
}
add_action('after_switch_theme', 'aryaodyssey_add_default_terms');

/**
 * Flush rewrite rules on theme activation
 */
function aryaodyssey_flush_rewrite_rules() {
    aryaodyssey_register_post_types();
    aryaodyssey_register_taxonomies();
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'aryaodyssey_flush_rewrite_rules');
