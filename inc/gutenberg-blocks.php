<?php
/**
 * Gutenberg Blocks Integration
 *
 * @package AryaOdyssey
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register custom block categories
 */
function aryaodyssey_block_categories($categories, $post) {
    return array_merge(
        $categories,
        array(
            array(
                'slug'  => 'aryaodyssey',
                'title' => __('AryaOdyssey Blocks', 'aryaodyssey'),
                'icon'  => 'admin-home',
            ),
        )
    );
}
add_filter('block_categories_all', 'aryaodyssey_block_categories', 10, 2);

/**
 * Register custom blocks
 */
function aryaodyssey_register_blocks() {
    
    // Check if Gutenberg is active
    if (!function_exists('register_block_type')) {
        return;
    }

    // Hero Block
    register_block_type('aryaodyssey/hero-block', array(
        'editor_script' => 'aryaodyssey-blocks',
        'editor_style'  => 'aryaodyssey-blocks-editor',
        'style'         => 'aryaodyssey-style',
        'render_callback' => 'aryaodyssey_render_hero_block',
        'attributes' => array(
            'title' => array(
                'type' => 'string',
                'default' => __('Discover the Magic of Manali', 'aryaodyssey'),
            ),
            'subtitle' => array(
                'type' => 'string',
                'default' => __('Experience the breathtaking beauty of the Himalayas', 'aryaodyssey'),
            ),
            'backgroundImage' => array(
                'type' => 'object',
                'default' => null,
            ),
            'buttonText' => array(
                'type' => 'string',
                'default' => __('Explore Services', 'aryaodyssey'),
            ),
            'buttonUrl' => array(
                'type' => 'string',
                'default' => '/services',
            ),
            'height' => array(
                'type' => 'number',
                'default' => 100,
            ),
        ),
    ));

    // Services Block
    register_block_type('aryaodyssey/services-block', array(
        'editor_script' => 'aryaodyssey-blocks',
        'editor_style'  => 'aryaodyssey-blocks-editor',
        'style'         => 'aryaodyssey-style',
        'render_callback' => 'aryaodyssey_render_services_block',
        'attributes' => array(
            'title' => array(
                'type' => 'string',
                'default' => __('Our Services', 'aryaodyssey'),
            ),
            'subtitle' => array(
                'type' => 'string',
                'default' => __('Experience the best of Manali with our comprehensive services', 'aryaodyssey'),
            ),
            'numberOfPosts' => array(
                'type' => 'number',
                'default' => 4,
            ),
            'showExcerpt' => array(
                'type' => 'boolean',
                'default' => true,
            ),
            'layout' => array(
                'type' => 'string',
                'default' => 'grid',
            ),
        ),
    ));

    // Rooms Block
    register_block_type('aryaodyssey/rooms-block', array(
        'editor_script' => 'aryaodyssey-blocks',
        'editor_style'  => 'aryaodyssey-blocks-editor',
        'style'         => 'aryaodyssey-style',
        'render_callback' => 'aryaodyssey_render_rooms_block',
        'attributes' => array(
            'title' => array(
                'type' => 'string',
                'default' => __('Our Accommodations', 'aryaodyssey'),
            ),
            'subtitle' => array(
                'type' => 'string',
                'default' => __('Comfortable and luxurious rooms with mountain views', 'aryaodyssey'),
            ),
            'numberOfPosts' => array(
                'type' => 'number',
                'default' => 3,
            ),
            'showPrice' => array(
                'type' => 'boolean',
                'default' => true,
            ),
        ),
    ));

    // CTA Block
    register_block_type('aryaodyssey/cta-block', array(
        'editor_script' => 'aryaodyssey-blocks',
        'editor_style'  => 'aryaodyssey-blocks-editor',
        'style'         => 'aryaodyssey-style',
        'render_callback' => 'aryaodyssey_render_cta_block',
        'attributes' => array(
            'title' => array(
                'type' => 'string',
                'default' => __('Ready to Start Your Adventure?', 'aryaodyssey'),
            ),
            'subtitle' => array(
                'type' => 'string',
                'default' => __('Book your perfect mountain getaway today', 'aryaodyssey'),
            ),
            'primaryButtonText' => array(
                'type' => 'string',
                'default' => __('Book Now', 'aryaodyssey'),
            ),
            'primaryButtonUrl' => array(
                'type' => 'string',
                'default' => '/reservation',
            ),
            'secondaryButtonText' => array(
                'type' => 'string',
                'default' => __('Contact Us', 'aryaodyssey'),
            ),
            'secondaryButtonUrl' => array(
                'type' => 'string',
                'default' => '/contact',
            ),
            'backgroundColor' => array(
                'type' => 'string',
                'default' => '#f8f9fa',
            ),
        ),
    ));

    // Testimonials Block
    register_block_type('aryaodyssey/testimonials-block', array(
        'editor_script' => 'aryaodyssey-blocks',
        'editor_style'  => 'aryaodyssey-blocks-editor',
        'style'         => 'aryaodyssey-style',
        'render_callback' => 'aryaodyssey_render_testimonials_block',
        'attributes' => array(
            'title' => array(
                'type' => 'string',
                'default' => __('What Our Guests Say', 'aryaodyssey'),
            ),
            'numberOfPosts' => array(
                'type' => 'number',
                'default' => 3,
            ),
            'layout' => array(
                'type' => 'string',
                'default' => 'grid',
            ),
        ),
    ));

    // Features Block
    register_block_type('aryaodyssey/features-block', array(
        'editor_script' => 'aryaodyssey-blocks',
        'editor_style'  => 'aryaodyssey-blocks-editor',
        'style'         => 'aryaodyssey-style',
        'render_callback' => 'aryaodyssey_render_features_block',
        'attributes' => array(
            'title' => array(
                'type' => 'string',
                'default' => __('Why Choose AryaOdyssey?', 'aryaodyssey'),
            ),
            'features' => array(
                'type' => 'array',
                'default' => array(),
            ),
        ),
    ));
}
add_action('init', 'aryaodyssey_register_blocks');

/**
 * Render Hero Block
 */
function aryaodyssey_render_hero_block($attributes) {
    $title = $attributes['title'] ?? __('Discover the Magic of Manali', 'aryaodyssey');
    $subtitle = $attributes['subtitle'] ?? __('Experience the breathtaking beauty of the Himalayas', 'aryaodyssey');
    $button_text = $attributes['buttonText'] ?? __('Explore Services', 'aryaodyssey');
    $button_url = $attributes['buttonUrl'] ?? '/services';
    $height = $attributes['height'] ?? 100;
    $background_image = $attributes['backgroundImage'] ?? null;
    
    ob_start();
    ?>
    <section class="hero-section" style="height: <?php echo esc_attr($height); ?>vh;">
        <div class="hero-background">
            <?php if ($background_image && isset($background_image['url'])) : ?>
                <div class="hero-image" style="background-image: url('<?php echo esc_url($background_image['url']); ?>')"></div>
            <?php endif; ?>
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <div class="container">
                    <div class="hero-text text-center">
                        <h1 class="hero-title text-white"><?php echo wp_kses_post($title); ?></h1>
                        <p class="hero-subtitle text-white"><?php echo wp_kses_post($subtitle); ?></p>
                        <div class="hero-buttons">
                            <a href="<?php echo esc_url($button_url); ?>" class="btn btn-primary btn-lg">
                                <?php echo esc_html($button_text); ?>
                                <i data-feather="arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

/**
 * Render Services Block
 */
function aryaodyssey_render_services_block($attributes) {
    $title = $attributes['title'] ?? __('Our Services', 'aryaodyssey');
    $subtitle = $attributes['subtitle'] ?? __('Experience the best of Manali with our comprehensive services', 'aryaodyssey');
    $number_of_posts = $attributes['numberOfPosts'] ?? 4;
    $show_excerpt = $attributes['showExcerpt'] ?? true;
    $layout = $attributes['layout'] ?? 'grid';
    
    $services_query = new WP_Query(array(
        'post_type' => 'service',
        'posts_per_page' => $number_of_posts,
        'post_status' => 'publish',
    ));
    
    ob_start();
    ?>
    <section class="services-section section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title"><?php echo wp_kses_post($title); ?></h2>
                <p class="section-subtitle"><?php echo wp_kses_post($subtitle); ?></p>
            </div>
            
            <?php if ($services_query->have_posts()) : ?>
                <div class="services-grid layout-<?php echo esc_attr($layout); ?>">
                    <?php while ($services_query->have_posts()) : $services_query->the_post(); ?>
                        <div class="service-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="service-image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('service-card'); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="service-content">
                                <h3 class="service-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <?php if ($show_excerpt) : ?>
                                    <p class="service-excerpt"><?php the_excerpt(); ?></p>
                                <?php endif; ?>
                                <div class="service-meta">
                                    <?php
                                    $price = get_post_meta(get_the_ID(), 'service_price', true);
                                    if ($price) :
                                    ?>
                                        <span class="service-price">₹<?php echo number_format($price); ?></span>
                                    <?php endif; ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="btn btn-outline">
                                    <?php _e('Learn More', 'aryaodyssey'); ?>
                                    <i data-feather="arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            
            <?php wp_reset_postdata(); ?>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

/**
 * Render Rooms Block
 */
function aryaodyssey_render_rooms_block($attributes) {
    $title = $attributes['title'] ?? __('Our Accommodations', 'aryaodyssey');
    $subtitle = $attributes['subtitle'] ?? __('Comfortable and luxurious rooms with mountain views', 'aryaodyssey');
    $number_of_posts = $attributes['numberOfPosts'] ?? 3;
    $show_price = $attributes['showPrice'] ?? true;
    
    $rooms_query = new WP_Query(array(
        'post_type' => 'room',
        'posts_per_page' => $number_of_posts,
        'post_status' => 'publish',
    ));
    
    ob_start();
    ?>
    <section class="rooms-section section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title"><?php echo wp_kses_post($title); ?></h2>
                <p class="section-subtitle"><?php echo wp_kses_post($subtitle); ?></p>
            </div>
            
            <?php if ($rooms_query->have_posts()) : ?>
                <div class="rooms-grid">
                    <?php while ($rooms_query->have_posts()) : $rooms_query->the_post(); ?>
                        <div class="room-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="room-image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('room-card'); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="room-content">
                                <h3 class="room-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <p class="room-excerpt"><?php the_excerpt(); ?></p>
                                <div class="room-meta">
                                    <?php
                                    $occupancy = get_post_meta(get_the_ID(), 'room_occupancy', true);
                                    if ($occupancy) :
                                    ?>
                                        <span class="room-occupancy">
                                            <i data-feather="users"></i>
                                            <?php echo esc_html($occupancy); ?>
                                        </span>
                                    <?php endif; ?>
                                    
                                    <?php if ($show_price) :
                                        $price = get_post_meta(get_the_ID(), 'room_price', true);
                                        if ($price) :
                                    ?>
                                        <span class="room-price">₹<?php echo number_format($price); ?>/night</span>
                                    <?php endif; endif; ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">
                                    <?php _e('View Details', 'aryaodyssey'); ?>
                                    <i data-feather="arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            
            <?php wp_reset_postdata(); ?>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

/**
 * Render CTA Block
 */
function aryaodyssey_render_cta_block($attributes) {
    $title = $attributes['title'] ?? __('Ready to Start Your Adventure?', 'aryaodyssey');
    $subtitle = $attributes['subtitle'] ?? __('Book your perfect mountain getaway today', 'aryaodyssey');
    $primary_button_text = $attributes['primaryButtonText'] ?? __('Book Now', 'aryaodyssey');
    $primary_button_url = $attributes['primaryButtonUrl'] ?? '/reservation';
    $secondary_button_text = $attributes['secondaryButtonText'] ?? __('Contact Us', 'aryaodyssey');
    $secondary_button_url = $attributes['secondaryButtonUrl'] ?? '/contact';
    $background_color = $attributes['backgroundColor'] ?? '#f8f9fa';
    
    ob_start();
    ?>
    <section class="cta-section section-padding" style="background-color: <?php echo esc_attr($background_color); ?>;">
        <div class="container">
            <div class="cta-content text-center">
                <h2 class="cta-title"><?php echo wp_kses_post($title); ?></h2>
                <p class="cta-subtitle"><?php echo wp_kses_post($subtitle); ?></p>
                <div class="cta-buttons">
                    <a href="<?php echo esc_url($primary_button_url); ?>" class="btn btn-primary btn-lg">
                        <?php echo esc_html($primary_button_text); ?>
                        <i data-feather="calendar"></i>
                    </a>
                    <a href="<?php echo esc_url($secondary_button_url); ?>" class="btn btn-outline btn-lg">
                        <?php echo esc_html($secondary_button_text); ?>
                        <i data-feather="phone"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

/**
 * Render Testimonials Block
 */
function aryaodyssey_render_testimonials_block($attributes) {
    $title = $attributes['title'] ?? __('What Our Guests Say', 'aryaodyssey');
    $number_of_posts = $attributes['numberOfPosts'] ?? 3;
    $layout = $attributes['layout'] ?? 'grid';
    
    $testimonials_query = new WP_Query(array(
        'post_type' => 'testimonial',
        'posts_per_page' => $number_of_posts,
        'post_status' => 'publish',
    ));
    
    ob_start();
    ?>
    <section class="testimonials-section section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title"><?php echo wp_kses_post($title); ?></h2>
            </div>
            
            <?php if ($testimonials_query->have_posts()) : ?>
                <div class="testimonials-grid layout-<?php echo esc_attr($layout); ?>">
                    <?php while ($testimonials_query->have_posts()) : $testimonials_query->the_post(); ?>
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <div class="testimonial-text">
                                    <?php the_content(); ?>
                                </div>
                                <div class="testimonial-meta">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="testimonial-avatar">
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="testimonial-author">
                                        <strong><?php echo esc_html(get_post_meta(get_the_ID(), 'testimonial_author_name', true) ?: get_the_title()); ?></strong>
                                        <?php
                                        $location = get_post_meta(get_the_ID(), 'testimonial_author_location', true);
                                        if ($location) :
                                        ?>
                                            <span class="testimonial-location"><?php echo esc_html($location); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php
                                $rating = get_post_meta(get_the_ID(), 'testimonial_rating', true);
                                if ($rating) :
                                ?>
                                    <div class="testimonial-rating">
                                        <?php for ($i = 1; $i <= 5; $i++) : ?>
                                            <span class="star <?php echo $i <= $rating ? 'filled' : ''; ?>">★</span>
                                        <?php endfor; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            
            <?php wp_reset_postdata(); ?>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

/**
 * Render Features Block
 */
function aryaodyssey_render_features_block($attributes) {
    $title = $attributes['title'] ?? __('Why Choose AryaOdyssey?', 'aryaodyssey');
    $features = $attributes['features'] ?? array();
    
    ob_start();
    ?>
    <section class="features-section section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title"><?php echo wp_kses_post($title); ?></h2>
            </div>
            
            <?php if (!empty($features)) : ?>
                <div class="features-grid">
                    <?php foreach ($features as $feature) : ?>
                        <div class="feature-card">
                            <?php if (!empty($feature['icon'])) : ?>
                                <div class="feature-icon">
                                    <i data-feather="<?php echo esc_attr($feature['icon']); ?>"></i>
                                </div>
                            <?php endif; ?>
                            <div class="feature-content">
                                <?php if (!empty($feature['title'])) : ?>
                                    <h3 class="feature-title"><?php echo wp_kses_post($feature['title']); ?></h3>
                                <?php endif; ?>
                                <?php if (!empty($feature['description'])) : ?>
                                    <p class="feature-description"><?php echo wp_kses_post($feature['description']); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

/**
 * Add server-side block render styles
 */
function aryaodyssey_blocks_render_styles() {
    wp_add_inline_style('aryaodyssey-style', '
        .services-grid.layout-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
        .services-grid.layout-list { display: flex; flex-direction: column; gap: 20px; }
        .rooms-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px; }
        .testimonials-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
        .features-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; }
        .testimonial-rating .star { color: #ddd; }
        .testimonial-rating .star.filled { color: #ffc107; }
    ');
}
add_action('wp_enqueue_scripts', 'aryaodyssey_blocks_render_styles');
