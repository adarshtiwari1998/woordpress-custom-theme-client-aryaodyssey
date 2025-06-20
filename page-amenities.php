<?php
/**
 * Template for Amenities Page
 *
 * @package AryaOdyssey
 */

get_header(); ?>

<main id="main" class="site-main amenities-page">
    
    <!-- Hero Section -->
    <section class="page-hero amenities-hero">
        <div class="hero-background">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <div class="container">
                    <div class="hero-text text-center">
                        <h1 class="hero-title text-white">
                            <?php _e('Our Amenities', 'aryaodyssey'); ?>
                        </h1>
                        <p class="hero-subtitle text-white">
                            <?php _e('Discover the luxury facilities and services that make your stay exceptional', 'aryaodyssey'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Amenities Section -->
    <section class="main-amenities section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">
                    <?php _e('Premium Facilities & Services', 'aryaodyssey'); ?>
                </h2>
                <p class="section-subtitle">
                    <?php _e('Experience world-class amenities designed to enhance your stay in the heart of the Himalayas', 'aryaodyssey'); ?>
                </p>
            </div>

            <div class="amenities-grid">
                <div class="amenity-card featured">
                    <div class="amenity-icon">
                        <i data-feather="wifi"></i>
                    </div>
                    <h3><?php _e('High-Speed Wi-Fi', 'aryaodyssey'); ?></h3>
                    <p><?php _e('Stay connected with complimentary high-speed internet access throughout the property. Perfect for remote work, video calls, and sharing your mountain memories instantly.', 'aryaodyssey'); ?></p>
                    <div class="amenity-features">
                        <span class="feature">✓ <?php _e('24/7 Connectivity', 'aryaodyssey'); ?></span>
                        <span class="feature">✓ <?php _e('High-Speed Bandwidth', 'aryaodyssey'); ?></span>
                        <span class="feature">✓ <?php _e('All Rooms & Common Areas', 'aryaodyssey'); ?></span>
                    </div>
                </div>

                <div class="amenity-card">
                    <div class="amenity-icon">
                        <i data-feather="mountain"></i>
                    </div>
                    <h3><?php _e('Mountain View Balconies', 'aryaodyssey'); ?></h3>
                    <p><?php _e('Wake up to breathtaking views of the Himalayan ranges from your private balcony. Each room offers unobstructed views of snow-capped peaks and verdant valleys.', 'aryaodyssey'); ?></p>
                    <div class="amenity-features">
                        <span class="feature">✓ <?php _e('Private Balconies', 'aryaodyssey'); ?></span>
                        <span class="feature">✓ <?php _e('Panoramic Views', 'aryaodyssey'); ?></span>
                        <span class="feature">✓ <?php _e('Comfortable Seating', 'aryaodyssey'); ?></span>
                    </div>
                </div>

                <div class="amenity-card">
                    <div class="amenity-icon">
                        <i data-feather="utensils"></i>
                    </div>
                    <h3><?php _e('Gourmet Dining', 'aryaodyssey'); ?></h3>
                    <p><?php _e('Indulge in delicious local and international cuisine prepared by our skilled chefs. From hearty mountain breakfasts to elegant dinner experiences.', 'aryaodyssey'); ?></p>
                    <div class="amenity-features">
                        <span class="feature">✓ <?php _e('Multi-Cuisine Options', 'aryaodyssey'); ?></span>
                        <span class="feature">✓ <?php _e('Local Specialties', 'aryaodyssey'); ?></span>
                        <span class="feature">✓ <?php _e('Dietary Accommodations', 'aryaodyssey'); ?></span>
                    </div>
                </div>

                <div class="amenity-card">
                    <div class="amenity-icon">
                        <i data-feather="shield"></i>
                    </div>
                    <h3><?php _e('24/7 Security', 'aryaodyssey'); ?></h3>
                    <p><?php _e('Your safety and security are our top priorities. Our professional security team ensures a safe and peaceful environment around the clock.', 'aryaodyssey'); ?></p>
                    <div class="amenity-features">
                        <span class="feature">✓ <?php _e('Round-the-Clock Security', 'aryaodyssey'); ?></span>
                        <span class="feature">✓ <?php _e('CCTV Surveillance', 'aryaodyssey'); ?></span>
                        <span class="feature">✓ <?php _e('Secure Parking', 'aryaodyssey'); ?></span>
                    </div>
                </div>

                <div class="amenity-card">
                    <div class="amenity-icon">
                        <i data-feather="car"></i>
                    </div>
                    <h3><?php _e('Transportation Services', 'aryaodyssey'); ?></h3>
                    <p><?php _e('Convenient transportation options including airport transfers, local sightseeing tours, and adventure excursions with professional drivers.', 'aryaodyssey'); ?></p>
                    <div class="amenity-features">
                        <span class="feature">✓ <?php _e('Airport Transfers', 'aryaodyssey'); ?></span>
                        <span class="feature">✓ <?php _e('Local Tours', 'aryaodyssey'); ?></span>
                        <span class="feature">✓ <?php _e('Adventure Excursions', 'aryaodyssey'); ?></span>
                    </div>
                </div>

                <div class="amenity-card">
                    <div class="amenity-icon">
                        <i data-feather="phone"></i>
                    </div>
                    <h3><?php _e('Concierge Services', 'aryaodyssey'); ?></h3>
                    <p><?php _e('Our dedicated concierge team is available 24/7 to assist with reservations, local recommendations, and any special requests to enhance your stay.', 'aryaodyssey'); ?></p>
                    <div class="amenity-features">
                        <span class="feature">✓ <?php _e('24/7 Assistance', 'aryaodyssey'); ?></span>
                        <span class="feature">✓ <?php _e('Local Recommendations', 'aryaodyssey'); ?></span>
                        <span class="feature">✓ <?php _e('Special Arrangements', 'aryaodyssey'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recreational Amenities -->
    <section class="recreational-amenities section-padding bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">
                    <?php _e('Recreation & Wellness', 'aryaodyssey'); ?>
                </h2>
                <p class="section-subtitle">
                    <?php _e('Unwind and rejuvenate with our recreational facilities and wellness services', 'aryaodyssey'); ?>
                </p>
            </div>

            <div class="recreation-grid">
                <div class="recreation-item">
                    <div class="recreation-image">
                        <div class="placeholder-image" style="background: linear-gradient(135deg, #FF4500 0%, #FF6347 100%); aspect-ratio: 4/3; border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                            <i data-feather="sun" style="width: 48px; height: 48px; color: white;"></i>
                        </div>
                    </div>
                    <div class="recreation-content">
                        <h3><?php _e('Bonfire Nights', 'aryaodyssey'); ?></h3>
                        <p><?php _e('Gather around our cozy bonfire for an evening of music, stories, and stargazing under the clear mountain sky. Complimentary for all guests.', 'aryaodyssey'); ?></p>
                    </div>
                </div>

                <div class="recreation-item">
                    <div class="recreation-image">
                        <div class="placeholder-image" style="background: linear-gradient(135deg, #228B22 0%, #32CD32 100%); aspect-ratio: 4/3; border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                            <i data-feather="compass" style="width: 48px; height: 48px; color: white;"></i>
                        </div>
                    </div>
                    <div class="recreation-content">
                        <h3><?php _e('Trekking & Adventure', 'aryaodyssey'); ?></h3>
                        <p><?php _e('Explore scenic trails and adventure activities with our experienced guides. From easy nature walks to challenging mountain treks.', 'aryaodyssey'); ?></p>
                    </div>
                </div>

                <div class="recreation-item">
                    <div class="recreation-image">
                        <div class="placeholder-image" style="background: linear-gradient(135deg, #4B0082 0%, #9400D3 100%); aspect-ratio: 4/3; border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                            <i data-feather="camera" style="width: 48px; height: 48px; color: white;"></i>
                        </div>
                    </div>
                    <div class="recreation-content">
                        <h3><?php _e('Photography Tours', 'aryaodyssey'); ?></h3>
                        <p><?php _e('Capture the beauty of Manali with guided photography tours to the most scenic locations. Perfect for both amateur and professional photographers.', 'aryaodyssey'); ?></p>
                    </div>
                </div>

                <div class="recreation-item">
                    <div class="recreation-image">
                        <div class="placeholder-image" style="background: linear-gradient(135deg, #DC143C 0%, #FF1493 100%); aspect-ratio: 4/3; border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                            <i data-feather="music" style="width: 48px; height: 48px; color: white;"></i>
                        </div>
                    </div>
                    <div class="recreation-content">
                        <h3><?php _e('Cultural Evenings', 'aryaodyssey'); ?></h3>
                        <p><?php _e('Experience local Himachali culture with traditional music and dance performances. Learn about the rich heritage of the region.', 'aryaodyssey'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Business & Conference Facilities -->
    <section class="business-amenities section-padding">
        <div class="container">
            <div class="business-content">
                <div class="business-text">
                    <div class="section-label">
                        <i data-feather="briefcase"></i>
                        <?php _e('BUSINESS FACILITIES', 'aryaodyssey'); ?>
                    </div>
                    <h2 class="section-title">
                        <?php _e('Work & Meet in Paradise', 'aryaodyssey'); ?>
                    </h2>
                    <p class="section-subtitle">
                        <?php _e('Combine business with pleasure in our well-equipped conference facilities and business center, offering a unique mountain setting for corporate events and meetings.', 'aryaodyssey'); ?>
                    </p>

                    <div class="business-features">
                        <div class="business-feature">
                            <div class="feature-icon">
                                <i data-feather="monitor"></i>
                            </div>
                            <div class="feature-content">
                                <h4><?php _e('Conference Room', 'aryaodyssey'); ?></h4>
                                <p><?php _e('Modern conference room with AV equipment and mountain views', 'aryaodyssey'); ?></p>
                            </div>
                        </div>

                        <div class="business-feature">
                            <div class="feature-icon">
                                <i data-feather="printer"></i>
                            </div>
                            <div class="feature-content">
                                <h4><?php _e('Business Center', 'aryaodyssey'); ?></h4>
                                <p><?php _e('Printing, scanning, and secretarial services available', 'aryaodyssey'); ?></p>
                            </div>
                        </div>

                        <div class="business-feature">
                            <div class="feature-icon">
                                <i data-feather="coffee"></i>
                            </div>
                            <div class="feature-content">
                                <h4><?php _e('Catering Services', 'aryaodyssey'); ?></h4>
                                <p><?php _e('Custom catering options for meetings and events', 'aryaodyssey'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="business-image">
                    <div class="placeholder-image" style="background: linear-gradient(135deg, #2F4F4F 0%, #708090 100%); aspect-ratio: 4/3; border-radius: 20px; display: flex; align-items: center; justify-content: center;">
                        <i data-feather="briefcase" style="width: 64px; height: 64px; color: white;"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Wellness & Spa -->
    <section class="wellness-amenities section-padding bg-light">
        <div class="container">
            <div class="wellness-content">
                <div class="wellness-image">
                    <div class="placeholder-image" style="background: linear-gradient(135deg, #8FBC8F 0%, #98FB98 100%); aspect-ratio: 4/3; border-radius: 20px; display: flex; align-items: center; justify-content: center;">
                        <i data-feather="heart" style="width: 64px; height: 64px; color: white;"></i>
                    </div>
                </div>
                <div class="wellness-text">
                    <div class="section-label">
                        <i data-feather="heart"></i>
                        <?php _e('WELLNESS & SPA', 'aryaodyssey'); ?>
                    </div>
                    <h2 class="section-title">
                        <?php _e('Rejuvenate Your Mind & Body', 'aryaodyssey'); ?>
                    </h2>
                    <p class="section-subtitle">
                        <?php _e('Relax and revitalize with our wellness services designed to restore your energy and enhance your well-being in the serene mountain environment.', 'aryaodyssey'); ?>
                    </p>

                    <div class="wellness-services">
                        <div class="service-item">
                            <i data-feather="sun"></i>
                            <span><?php _e('Traditional Ayurvedic Treatments', 'aryaodyssey'); ?></span>
                        </div>
                        <div class="service-item">
                            <i data-feather="feather"></i>
                            <span><?php _e('Relaxing Massage Therapy', 'aryaodyssey'); ?></span>
                        </div>
                        <div class="service-item">
                            <i data-feather="sunrise"></i>
                            <span><?php _e('Yoga & Meditation Sessions', 'aryaodyssey'); ?></span>
                        </div>
                        <div class="service-item">
                            <i data-feather="droplet"></i>
                            <span><?php _e('Herbal Steam Baths', 'aryaodyssey'); ?></span>
                        </div>
                    </div>

                    <a href="<?php echo esc_url(home_url('/reservation')); ?>" class="btn btn-primary">
                        <?php _e('Book Wellness Package', 'aryaodyssey'); ?>
                        <i data-feather="calendar"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <?php get_template_part('template-parts/cta-section'); ?>

</main>

<style>
.amenities-page .page-hero {
    height: 60vh;
    min-height: 400px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.amenities-page .hero-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #4682B4 0%, #87CEEB 100%);
}

.amenities-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 40px;
    margin-top: 60px;
}

.amenity-card {
    background: white;
    padding: 40px 30px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    position: relative;
}

.amenity-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
}

.amenity-card.featured {
    border: 3px solid #2d5016;
}

.amenity-card.featured::before {
    content: 'Most Popular';
    position: absolute;
    top: -12px;
    left: 30px;
    background: #2d5016;
    color: white;
    padding: 5px 15px;
    font-size: 0.8rem;
    border-radius: 15px;
    font-weight: 600;
}

.amenity-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #2d5016 0%, #4a7c59 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
}

.amenity-icon i {
    width: 40px;
    height: 40px;
    color: white;
}

.amenity-card h3 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

.amenity-card p {
    text-align: center;
    margin-bottom: 25px;
    line-height: 1.7;
}

.amenity-features {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.amenity-features .feature {
    font-size: 0.9rem;
    color: #2d5016;
    font-weight: 500;
}

.recreation-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 40px;
    margin-top: 60px;
}

.recreation-item {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.recreation-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
}

.recreation-content {
    padding: 30px;
}

.recreation-content h3 {
    color: #333;
    margin-bottom: 15px;
}

.business-content,
.wellness-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

.business-features {
    margin-top: 30px;
}

.business-feature {
    display: flex;
    gap: 20px;
    margin-bottom: 25px;
    align-items: flex-start;
}

.feature-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #2d5016 0%, #4a7c59 100%);
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
    margin-bottom: 8px;
}

.feature-content p {
    margin: 0;
    color: #666;
}

.wellness-services {
    margin: 30px 0;
}

.wellness-services .service-item {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 15px;
}

.wellness-services .service-item i {
    width: 20px;
    height: 20px;
    color: #2d5016;
}

@media (max-width: 768px) {
    .amenities-grid {
        grid-template-columns: 1fr;
    }
    
    .recreation-grid {
        grid-template-columns: 1fr;
    }
    
    .business-content,
    .wellness-content {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .business-feature {
        flex-direction: column;
        text-align: center;
        gap: 15px;
    }
}
</style>

<?php get_footer(); ?>
