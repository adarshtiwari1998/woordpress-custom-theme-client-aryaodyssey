<?php
/**
 * Template for displaying single room posts
 *
 * @package AryaOdyssey
 */

get_header(); ?>

<main id="main" class="site-main single-room">
    
    <?php while (have_posts()) : the_post(); ?>
    
    <!-- Room Hero -->
    <section class="room-hero">
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
                        <div class="room-category">
                            <?php
                            $categories = get_the_terms(get_the_ID(), 'room-category');
                            if ($categories && !is_wp_error($categories)) {
                                echo '<span class="category-badge">' . esc_html($categories[0]->name) . '</span>';
                            }
                            ?>
                        </div>
                        <h1 class="room-title text-white">
                            <?php the_title(); ?>
                        </h1>
                        <div class="room-excerpt text-white">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="room-meta">
                            <span class="room-size">
                                <i data-feather="maximize"></i>
                                <?php echo get_post_meta(get_the_ID(), 'room_size', true) ?: __('Standard Size', 'aryaodyssey'); ?>
                            </span>
                            <span class="room-occupancy">
                                <i data-feather="users"></i>
                                <?php echo get_post_meta(get_the_ID(), 'room_occupancy', true) ?: __('2 Guests', 'aryaodyssey'); ?>
                            </span>
                            <span class="room-price">
                                <i data-feather="tag"></i>
                                <?php 
                                $price = get_post_meta(get_the_ID(), 'room_price', true);
                                echo $price ? '₹' . number_format($price) . '/night' : __('Contact for Pricing', 'aryaodyssey');
                                ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Room Content -->
    <section class="room-content section-padding">
        <div class="container">
            <div class="room-layout">
                <div class="room-main">
                    <!-- Room Description -->
                    <div class="room-description">
                        <?php the_content(); ?>
                    </div>

                    <!-- Room Amenities -->
                    <?php 
                    $amenities = get_post_meta(get_the_ID(), 'room_amenities', true);
                    if ($amenities) : 
                    ?>
                    <div class="room-amenities">
                        <h3><?php _e('Room Amenities', 'aryaodyssey'); ?></h3>
                        <div class="amenities-grid">
                            <?php foreach ($amenities as $amenity) : ?>
                            <div class="amenity-item">
                                <i data-feather="check-circle"></i>
                                <span><?php echo esc_html($amenity); ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Room Features -->
                    <?php 
                    $features = get_post_meta(get_the_ID(), 'room_features', true);
                    if ($features) : 
                    ?>
                    <div class="room-features">
                        <h3><?php _e('Special Features', 'aryaodyssey'); ?></h3>
                        <div class="features-list">
                            <?php foreach ($features as $feature) : ?>
                            <div class="feature-highlight">
                                <div class="feature-icon">
                                    <i data-feather="star"></i>
                                </div>
                                <div class="feature-content">
                                    <h4><?php echo esc_html($feature['title']); ?></h4>
                                    <p><?php echo esc_html($feature['description']); ?></p>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Room Gallery -->
                    <?php 
                    $gallery = get_post_meta(get_the_ID(), 'room_gallery', true);
                    if ($gallery) : 
                    ?>
                    <div class="room-gallery">
                        <h3><?php _e('Room Gallery', 'aryaodyssey'); ?></h3>
                        <div class="gallery-grid">
                            <?php foreach ($gallery as $image_id) : ?>
                            <div class="gallery-item">
                                <?php echo wp_get_attachment_image($image_id, 'gallery-thumb'); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Room Policies -->
                    <div class="room-policies">
                        <h3><?php _e('Room Policies', 'aryaodyssey'); ?></h3>
                        <div class="policies-grid">
                            <div class="policy-item">
                                <div class="policy-icon">
                                    <i data-feather="clock"></i>
                                </div>
                                <div class="policy-content">
                                    <h4><?php _e('Check-in / Check-out', 'aryaodyssey'); ?></h4>
                                    <p><?php _e('Check-in: 2:00 PM | Check-out: 12:00 PM', 'aryaodyssey'); ?></p>
                                </div>
                            </div>
                            
                            <div class="policy-item">
                                <div class="policy-icon">
                                    <i data-feather="x-circle"></i>
                                </div>
                                <div class="policy-content">
                                    <h4><?php _e('Cancellation', 'aryaodyssey'); ?></h4>
                                    <p><?php _e('Free cancellation up to 48 hours before check-in', 'aryaodyssey'); ?></p>
                                </div>
                            </div>
                            
                            <div class="policy-item">
                                <div class="policy-icon">
                                    <i data-feather="user-plus"></i>
                                </div>
                                <div class="policy-content">
                                    <h4><?php _e('Extra Guests', 'aryaodyssey'); ?></h4>
                                    <p><?php _e('Additional charges apply for extra guests', 'aryaodyssey'); ?></p>
                                </div>
                            </div>
                            
                            <div class="policy-item">
                                <div class="policy-icon">
                                    <i data-feather="heart"></i>
                                </div>
                                <div class="policy-content">
                                    <h4><?php _e('Pet Policy', 'aryaodyssey'); ?></h4>
                                    <p><?php _e('Pets allowed with prior arrangement', 'aryaodyssey'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Room Sidebar -->
                <div class="room-sidebar">
                    <!-- Booking Card -->
                    <div class="booking-card">
                        <h3><?php _e('Book This Room', 'aryaodyssey'); ?></h3>
                        
                        <div class="room-price-display">
                            <?php 
                            $price = get_post_meta(get_the_ID(), 'room_price', true);
                            if ($price) :
                            ?>
                            <span class="price">₹<?php echo number_format($price); ?></span>
                            <span class="price-unit"><?php _e('per night', 'aryaodyssey'); ?></span>
                            <?php else : ?>
                            <span class="price-contact"><?php _e('Contact for Pricing', 'aryaodyssey'); ?></span>
                            <?php endif; ?>
                        </div>

                        <!-- Quick Booking Form -->
                        <form class="quick-booking-form" action="<?php echo esc_url(home_url('/reservation')); ?>" method="GET">
                            <input type="hidden" name="room" value="<?php echo get_the_ID(); ?>">
                            
                            <div class="form-group">
                                <label for="checkin"><?php _e('Check-in', 'aryaodyssey'); ?></label>
                                <input type="date" id="checkin" name="checkin" class="form-control" min="<?php echo date('Y-m-d'); ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="checkout"><?php _e('Check-out', 'aryaodyssey'); ?></label>
                                <input type="date" id="checkout" name="checkout" class="form-control" min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="guests"><?php _e('Guests', 'aryaodyssey'); ?></label>
                                <select id="guests" name="guests" class="form-control">
                                    <option value="1">1 Guest</option>
                                    <option value="2" selected>2 Guests</option>
                                    <option value="3">3 Guests</option>
                                    <option value="4">4 Guests</option>
                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-lg">
                                <?php _e('Check Availability', 'aryaodyssey'); ?>
                                <i data-feather="calendar"></i>
                            </button>
                        </form>
                        
                        <div class="booking-buttons">
                            <a href="<?php echo esc_url(home_url('/contact')); ?>?inquiry=<?php echo get_the_ID(); ?>" class="btn btn-outline">
                                <?php _e('Ask Question', 'aryaodyssey'); ?>
                                <i data-feather="message-circle"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Room Details -->
                    <div class="room-details-card">
                        <h4><?php _e('Room Details', 'aryaodyssey'); ?></h4>
                        <div class="details-list">
                            <?php 
                            $size = get_post_meta(get_the_ID(), 'room_size', true);
                            if ($size) :
                            ?>
                            <div class="detail-item">
                                <i data-feather="maximize"></i>
                                <span class="detail-label"><?php _e('Size:', 'aryaodyssey'); ?></span>
                                <span class="detail-value"><?php echo esc_html($size); ?></span>
                            </div>
                            <?php endif; ?>

                            <?php 
                            $occupancy = get_post_meta(get_the_ID(), 'room_occupancy', true);
                            if ($occupancy) :
                            ?>
                            <div class="detail-item">
                                <i data-feather="users"></i>
                                <span class="detail-label"><?php _e('Occupancy:', 'aryaodyssey'); ?></span>
                                <span class="detail-value"><?php echo esc_html($occupancy); ?></span>
                            </div>
                            <?php endif; ?>

                            <?php 
                            $bed_type = get_post_meta(get_the_ID(), 'room_bed_type', true);
                            if ($bed_type) :
                            ?>
                            <div class="detail-item">
                                <i data-feather="moon"></i>
                                <span class="detail-label"><?php _e('Bed Type:', 'aryaodyssey'); ?></span>
                                <span class="detail-value"><?php echo esc_html($bed_type); ?></span>
                            </div>
                            <?php endif; ?>

                            <?php 
                            $view = get_post_meta(get_the_ID(), 'room_view', true);
                            if ($view) :
                            ?>
                            <div class="detail-item">
                                <i data-feather="eye"></i>
                                <span class="detail-label"><?php _e('View:', 'aryaodyssey'); ?></span>
                                <span class="detail-value"><?php echo esc_html($view); ?></span>
                            </div>
                            <?php endif; ?>

                            <?php 
                            $bathroom = get_post_meta(get_the_ID(), 'room_bathroom', true);
                            if ($bathroom) :
                            ?>
                            <div class="detail-item">
                                <i data-feather="droplet"></i>
                                <span class="detail-label"><?php _e('Bathroom:', 'aryaodyssey'); ?></span>
                                <span class="detail-value"><?php echo esc_html($bathroom); ?></span>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="contact-info-card">
                        <h4><?php _e('Need Assistance?', 'aryaodyssey'); ?></h4>
                        <p><?php _e('Our reservation team is ready to help you with your booking.', 'aryaodyssey'); ?></p>
                        <div class="contact-methods">
                            <a href="tel:+919876543210" class="contact-method">
                                <i data-feather="phone"></i>
                                <span>+91 98765 43210</span>
                            </a>
                            <a href="mailto:reservations@aryaodyssey.com" class="contact-method">
                                <i data-feather="mail"></i>
                                <span>reservations@aryaodyssey.com</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Rooms -->
    <section class="related-rooms section-padding bg-light">
        <div class="container">
            <h2 class="section-title text-center">
                <?php _e('Other Accommodations', 'aryaodyssey'); ?>
            </h2>
            
            <div class="related-rooms-grid">
                <?php
                $related_rooms = new WP_Query(array(
                    'post_type' => 'room',
                    'posts_per_page' => 3,
                    'post__not_in' => array(get_the_ID()),
                    'orderby' => 'rand'
                ));
                
                if ($related_rooms->have_posts()) :
                    while ($related_rooms->have_posts()) : $related_rooms->the_post();
                        get_template_part('template-parts/room-card');
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
.room-hero {
    height: 70vh;
    min-height: 500px;
    position: relative;
    display: flex;
    align-items: center;
    overflow: hidden;
}

.room-hero .hero-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.room-hero .hero-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.room-hero .hero-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.room-hero .hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4);
}

.room-hero .hero-content {
    position: relative;
    z-index: 2;
}

.category-badge {
    background: rgba(139, 69, 19, 0.9);
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 500;
    display: inline-block;
    margin-bottom: 20px;
}

.room-title {
    font-size: 3.5rem;
    margin-bottom: 20px;
}

.room-excerpt {
    font-size: 1.3rem;
    margin-bottom: 30px;
    max-width: 600px;
}

.room-meta {
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
}

.room-meta > span {
    display: flex;
    align-items: center;
    gap: 8px;
    color: rgba(255, 255, 255, 0.9);
    font-weight: 500;
}

.room-meta i {
    width: 20px;
    height: 20px;
}

.room-layout {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 60px;
    align-items: flex-start;
}

.room-main {
    background: white;
    padding: 50px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.room-description {
    margin-bottom: 50px;
}

.room-amenities {
    margin-bottom: 50px;
}

.room-amenities h3 {
    color: #333;
    margin-bottom: 30px;
    padding-bottom: 15px;
    border-bottom: 2px solid #eee;
}

.amenities-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.amenity-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 15px;
    background: #f8f9fa;
    border-radius: 10px;
}

.amenity-item i {
    width: 20px;
    height: 20px;
    color: #2d5016;
    flex-shrink: 0;
}

.room-features {
    margin-bottom: 50px;
}

.room-features h3 {
    color: #333;
    margin-bottom: 30px;
    padding-bottom: 15px;
    border-bottom: 2px solid #eee;
}

.features-list {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.feature-highlight {
    display: flex;
    gap: 20px;
    padding: 25px;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-radius: 15px;
}

.feature-icon {
    width: 50px;
    height: 50px;
    background: #2d5016;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.feature-icon i {
    width: 24px;
    height: 24px;
    color: white;
}

.feature-content h4 {
    color: #333;
    margin-bottom: 10px;
}

.feature-content p {
    color: #666;
    margin: 0;
}

.room-gallery h3 {
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

.room-policies {
    margin-top: 50px;
}

.room-policies h3 {
    color: #333;
    margin-bottom: 30px;
    padding-bottom: 15px;
    border-bottom: 2px solid #eee;
}

.policies-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 25px;
}

.policy-item {
    display: flex;
    gap: 15px;
    padding: 20px;
    background: #f8f9fa;
    border-radius: 15px;
}

.policy-icon {
    width: 40px;
    height: 40px;
    background: #2d5016;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.policy-icon i {
    width: 20px;
    height: 20px;
    color: white;
}

.policy-content h4 {
    color: #333;
    margin-bottom: 8px;
    font-size: 1rem;
}

.policy-content p {
    color: #666;
    margin: 0;
    font-size: 0.9rem;
}

.room-sidebar {
    position: sticky;
    top: 100px;
}

.booking-card,
.room-details-card,
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

.room-price-display {
    text-align: center;
    margin-bottom: 30px;
}

.room-price-display .price {
    font-size: 2.5rem;
    font-weight: 700;
    color: #2d5016;
    display: block;
}

.room-price-display .price-unit {
    color: #666;
    font-size: 0.9rem;
}

.room-price-display .price-contact {
    font-size: 1.2rem;
    color: #2d5016;
    font-weight: 600;
}

.quick-booking-form {
    margin-bottom: 20px;
}

.quick-booking-form .form-group {
    margin-bottom: 20px;
}

.quick-booking-form label {
    display: block;
    margin-bottom: 5px;
    font-weight: 500;
    color: #333;
}

.quick-booking-form .form-control {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 0.95rem;
}

.booking-buttons {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.room-details-card h4,
.contact-info-card h4 {
    color: #333;
    margin-bottom: 20px;
}

.details-list {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.detail-item {
    display: flex;
    align-items: center;
    gap: 12px;
}

.detail-item i {
    width: 20px;
    height: 20px;
    color: #2d5016;
    flex-shrink: 0;
}

.detail-label {
    font-weight: 500;
    color: #333;
    min-width: 80px;
}

.detail-value {
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

.related-rooms-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
    margin-top: 60px;
}

@media (max-width: 768px) {
    .room-layout {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .room-main {
        padding: 30px 20px;
    }
    
    .room-sidebar {
        position: static;
    }
    
    .room-title {
        font-size: 2.5rem;
    }
    
    .room-meta {
        flex-direction: column;
        gap: 15px;
    }
    
    .amenities-grid {
        grid-template-columns: 1fr;
    }
    
    .policies-grid {
        grid-template-columns: 1fr;
    }
    
    .feature-highlight {
        flex-direction: column;
        text-align: center;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Date validation for booking form
    const checkinInput = document.getElementById('checkin');
    const checkoutInput = document.getElementById('checkout');
    
    if (checkinInput && checkoutInput) {
        checkinInput.addEventListener('change', function() {
            const checkinDate = new Date(this.value);
            const minCheckout = new Date(checkinDate);
            minCheckout.setDate(minCheckout.getDate() + 1);
            
            checkoutInput.min = minCheckout.toISOString().split('T')[0];
            
            if (checkoutInput.value && new Date(checkoutInput.value) <= checkinDate) {
                checkoutInput.value = '';
            }
        });
    }
});
</script>

<?php get_footer(); ?>
