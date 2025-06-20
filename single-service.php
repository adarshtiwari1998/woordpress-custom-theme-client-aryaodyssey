<?php
/**
 * Template for displaying single service posts
 *
 * @package AryaOdyssey
 */

get_header(); ?>

<main id="main" class="site-main single-service">
    
    <?php while (have_posts()) : the_post(); ?>
    
    <!-- Service Hero -->
    <section class="service-hero">
        <div class="hero-background">
            <?php if (has_post_thumbnail()) : ?>
                <div class="hero-image">
                    <?php the_post_thumbnail('hero-image'); ?>
                </div>
            <?php endif; ?>
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <div class="container">
                    <div class="hero-text">
                        <div class="service-category">
                            <?php
                            $categories = get_the_terms(get_the_ID(), 'service-category');
                            if ($categories && !is_wp_error($categories)) {
                                echo '<span class="category-badge">' . esc_html($categories[0]->name) . '</span>';
                            }
                            ?>
                        </div>
                        <h1 class="service-title text-white">
                            <?php the_title(); ?>
                        </h1>
                        <div class="service-excerpt text-white">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="service-meta">
                            <span class="service-duration">
                                <i data-feather="clock"></i>
                                <?php echo get_post_meta(get_the_ID(), 'service_duration', true) ?: __('Varies', 'aryaodyssey'); ?>
                            </span>
                            <span class="service-difficulty">
                                <i data-feather="trending-up"></i>
                                <?php echo get_post_meta(get_the_ID(), 'service_difficulty', true) ?: __('All Levels', 'aryaodyssey'); ?>
                            </span>
                            <span class="service-price">
                                <i data-feather="tag"></i>
                                <?php 
                                $price = get_post_meta(get_the_ID(), 'service_price', true);
                                echo $price ? '₹' . number_format($price) : __('Contact for Pricing', 'aryaodyssey');
                                ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Content -->
    <section class="service-content section-padding">
        <div class="container">
            <div class="service-layout">
                <div class="service-main">
                    <div class="service-description">
                        <?php the_content(); ?>
                    </div>

                    <!-- Service Features -->
                    <?php 
                    $features = get_post_meta(get_the_ID(), 'service_features', true);
                    if ($features) : 
                    ?>
                    <div class="service-features">
                        <h3><?php _e('What\'s Included', 'aryaodyssey'); ?></h3>
                        <div class="features-grid">
                            <?php foreach ($features as $feature) : ?>
                            <div class="feature-item">
                                <i data-feather="check-circle"></i>
                                <span><?php echo esc_html($feature); ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Service Itinerary -->
                    <?php 
                    $itinerary = get_post_meta(get_the_ID(), 'service_itinerary', true);
                    if ($itinerary) : 
                    ?>
                    <div class="service-itinerary">
                        <h3><?php _e('Itinerary', 'aryaodyssey'); ?></h3>
                        <div class="itinerary-timeline">
                            <?php foreach ($itinerary as $index => $item) : ?>
                            <div class="timeline-item">
                                <div class="timeline-marker">
                                    <span><?php echo $index + 1; ?></span>
                                </div>
                                <div class="timeline-content">
                                    <h4><?php echo esc_html($item['title']); ?></h4>
                                    <p><?php echo esc_html($item['description']); ?></p>
                                    <?php if (!empty($item['time'])) : ?>
                                    <span class="timeline-time">
                                        <i data-feather="clock"></i>
                                        <?php echo esc_html($item['time']); ?>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Service Gallery -->
                    <?php 
                    $gallery = get_post_meta(get_the_ID(), 'service_gallery', true);
                    if ($gallery) : 
                    ?>
                    <div class="service-gallery">
                        <h3><?php _e('Gallery', 'aryaodyssey'); ?></h3>
                        <div class="gallery-grid">
                            <?php foreach ($gallery as $image_id) : ?>
                            <div class="gallery-item">
                                <?php echo wp_get_attachment_image($image_id, 'gallery-thumb'); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>

                <!-- Service Sidebar -->
                <div class="service-sidebar">
                    <!-- Booking Card -->
                    <div class="booking-card">
                        <h3><?php _e('Book This Service', 'aryaodyssey'); ?></h3>
                        <div class="service-price-display">
                            <?php 
                            $price = get_post_meta(get_the_ID(), 'service_price', true);
                            if ($price) :
                            ?>
                            <span class="price">₹<?php echo number_format($price); ?></span>
                            <span class="price-unit"><?php _e('per person', 'aryaodyssey'); ?></span>
                            <?php else : ?>
                            <span class="price-contact"><?php _e('Contact for Pricing', 'aryaodyssey'); ?></span>
                            <?php endif; ?>
                        </div>
                        
                        <div class="booking-buttons">
                            <a href="<?php echo esc_url(home_url('/reservation')); ?>?service=<?php echo get_the_ID(); ?>" class="btn btn-primary btn-lg">
                                <?php _e('Book Now', 'aryaodyssey'); ?>
                                <i data-feather="calendar"></i>
                            </a>
                            <a href="<?php echo esc_url(home_url('/contact')); ?>?inquiry=<?php echo get_the_ID(); ?>" class="btn btn-outline">
                                <?php _e('Ask Question', 'aryaodyssey'); ?>
                                <i data-feather="message-circle"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Service Info -->
                    <div class="service-info-card">
                        <h4><?php _e('Service Details', 'aryaodyssey'); ?></h4>
                        <div class="info-list">
                            <?php 
                            $duration = get_post_meta(get_the_ID(), 'service_duration', true);
                            if ($duration) :
                            ?>
                            <div class="info-item">
                                <i data-feather="clock"></i>
                                <span class="info-label"><?php _e('Duration:', 'aryaodyssey'); ?></span>
                                <span class="info-value"><?php echo esc_html($duration); ?></span>
                            </div>
                            <?php endif; ?>

                            <?php 
                            $difficulty = get_post_meta(get_the_ID(), 'service_difficulty', true);
                            if ($difficulty) :
                            ?>
                            <div class="info-item">
                                <i data-feather="trending-up"></i>
                                <span class="info-label"><?php _e('Difficulty:', 'aryaodyssey'); ?></span>
                                <span class="info-value"><?php echo esc_html($difficulty); ?></span>
                            </div>
                            <?php endif; ?>

                            <?php 
                            $group_size = get_post_meta(get_the_ID(), 'service_group_size', true);
                            if ($group_size) :
                            ?>
                            <div class="info-item">
                                <i data-feather="users"></i>
                                <span class="info-label"><?php _e('Group Size:', 'aryaodyssey'); ?></span>
                                <span class="info-value"><?php echo esc_html($group_size); ?></span>
                            </div>
                            <?php endif; ?>

                            <?php 
                            $season = get_post_meta(get_the_ID(), 'service_season', true);
                            if ($season) :
                            ?>
                            <div class="info-item">
                                <i data-feather="calendar"></i>
                                <span class="info-label"><?php _e('Best Season:', 'aryaodyssey'); ?></span>
                                <span class="info-value"><?php echo esc_html($season); ?></span>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="contact-info-card">
                        <h4><?php _e('Need Help?', 'aryaodyssey'); ?></h4>
                        <p><?php _e('Our team is here to assist you with any questions about this service.', 'aryaodyssey'); ?></p>
                        <div class="contact-methods">
                            <a href="tel:+919876543210" class="contact-method">
                                <i data-feather="phone"></i>
                                <span>+91 98765 43210</span>
                            </a>
                            <a href="mailto:info@aryaodyssey.com" class="contact-method">
                                <i data-feather="mail"></i>
                                <span>info@aryaodyssey.com</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Services -->
    <section class="related-services section-padding bg-light">
        <div class="container">
            <h2 class="section-title text-center">
                <?php _e('You Might Also Like', 'aryaodyssey'); ?>
            </h2>
            
            <div class="related-services-grid">
                <?php
                $related_services = new WP_Query(array(
                    'post_type' => 'service',
                    'posts_per_page' => 3,
                    'post__not_in' => array(get_the_ID()),
                    'orderby' => 'rand'
                ));
                
                if ($related_services->have_posts()) :
                    while ($related_services->have_posts()) : $related_services->the_post();
                        get_template_part('template-parts/service-card');
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>

    <?php endwhile; ?>

</main>

<style>
.service-hero {
    height: 70vh;
    min-height: 500px;
    position: relative;
    display: flex;
    align-items: center;
    overflow: hidden;
}

.service-hero .hero-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.service-hero .hero-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.service-hero .hero-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.service-hero .hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
}

.service-hero .hero-content {
    position: relative;
    z-index: 2;
}

.category-badge {
    background: rgba(45, 80, 22, 0.9);
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 500;
    display: inline-block;
    margin-bottom: 20px;
}

.service-title {
    font-size: 3.5rem;
    margin-bottom: 20px;
}

.service-excerpt {
    font-size: 1.3rem;
    margin-bottom: 30px;
    max-width: 600px;
}

.service-meta {
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
}

.service-meta > span {
    display: flex;
    align-items: center;
    gap: 8px;
    color: rgba(255, 255, 255, 0.9);
    font-weight: 500;
}

.service-meta i {
    width: 20px;
    height: 20px;
}

.service-layout {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 60px;
    align-items: flex-start;
}

.service-main {
    background: white;
    padding: 50px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.service-description {
    margin-bottom: 50px;
}

.service-features {
    margin-bottom: 50px;
}

.service-features h3 {
    color: #333;
    margin-bottom: 30px;
    padding-bottom: 15px;
    border-bottom: 2px solid #eee;
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.feature-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 15px;
    background: #f8f9fa;
    border-radius: 10px;
}

.feature-item i {
    width: 20px;
    height: 20px;
    color: #2d5016;
    flex-shrink: 0;
}

.service-itinerary {
    margin-bottom: 50px;
}

.service-itinerary h3 {
    color: #333;
    margin-bottom: 30px;
    padding-bottom: 15px;
    border-bottom: 2px solid #eee;
}

.itinerary-timeline {
    position: relative;
}

.itinerary-timeline::before {
    content: '';
    position: absolute;
    left: 20px;
    top: 0;
    bottom: 0;
    width: 2px;
    background: #e9ecef;
}

.timeline-item {
    position: relative;
    margin-bottom: 30px;
    padding-left: 60px;
}

.timeline-marker {
    position: absolute;
    left: 0;
    top: 0;
    width: 40px;
    height: 40px;
    background: #2d5016;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: 600;
}

.timeline-content h4 {
    color: #333;
    margin-bottom: 10px;
}

.timeline-content p {
    color: #666;
    margin-bottom: 10px;
}

.timeline-time {
    display: flex;
    align-items: center;
    gap: 5px;
    color: #2d5016;
    font-size: 0.9rem;
    font-weight: 500;
}

.timeline-time i {
    width: 16px;
    height: 16px;
}

.service-gallery h3 {
    color: #333;
    margin-bottom: 30px;
    padding-bottom: 15px;
    border-bottom: 2px solid #eee;
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
}

.gallery-item {
    border-radius: 10px;
    overflow: hidden;
    aspect-ratio: 4/3;
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.gallery-item:hover img {
    transform: scale(1.1);
}

.service-sidebar {
    position: sticky;
    top: 100px;
}

.booking-card,
.service-info-card,
.contact-info-card {
    background: white;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

.booking-card h3 {
    color: #333;
    margin-bottom: 25px;
    text-align: center;
}

.service-price-display {
    text-align: center;
    margin-bottom: 30px;
}

.service-price-display .price {
    font-size: 2.5rem;
    font-weight: 700;
    color: #2d5016;
    display: block;
}

.service-price-display .price-unit {
    color: #666;
    font-size: 0.9rem;
}

.service-price-display .price-contact {
    font-size: 1.2rem;
    color: #2d5016;
    font-weight: 600;
}

.booking-buttons {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.service-info-card h4,
.contact-info-card h4 {
    color: #333;
    margin-bottom: 20px;
}

.info-list {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.info-item {
    display: flex;
    align-items: center;
    gap: 12px;
}

.info-item i {
    width: 20px;
    height: 20px;
    color: #2d5016;
    flex-shrink: 0;
}

.info-label {
    font-weight: 500;
    color: #333;
    min-width: 80px;
}

.info-value {
    color: #666;
}

.contact-methods {
    display: flex;
    flex-direction: column;
    gap: 15px;
    margin-top: 20px;
}

.contact-method {
    display: flex;
    align-items: center;
    gap: 12px;
    color: #2d5016;
    text-decoration: none;
    font-weight: 500;
}

.contact-method i {
    width: 20px;
    height: 20px;
}

.related-services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
    margin-top: 60px;
}

@media (max-width: 768px) {
    .service-layout {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .service-main {
        padding: 30px 20px;
    }
    
    .service-sidebar {
        position: static;
    }
    
    .service-title {
        font-size: 2.5rem;
    }
    
    .service-meta {
        flex-direction: column;
        gap: 15px;
    }
    
    .features-grid {
        grid-template-columns: 1fr;
    }
    
    .timeline-item {
        padding-left: 50px;
    }
    
    .timeline-marker {
        width: 30px;
        height: 30px;
    }
}
</style>

<?php get_footer(); ?>
