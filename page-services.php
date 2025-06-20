<?php get_header(); ?>

<main id="main-content" class="main-content services-page">
    
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1 class="page-title"><?php esc_html_e('Our Services', 'aryaodyssey'); ?></h1>
            <p class="page-subtitle"><?php esc_html_e('Discover the exceptional experiences we offer', 'aryaodyssey'); ?></p>
        </div>
    </section>

    <!-- Services Content -->
    <section class="services-content">
        <div class="container">
            
            <!-- Guides Service -->
            <div id="guides" class="service-section">
                <div class="service-content">
                    <div class="service-text">
                        <div class="service-icon">
                            <i data-feather="users"></i>
                        </div>
                        <h2 class="service-title"><?php esc_html_e('Guides', 'aryaodyssey'); ?></h2>
                        <h3 class="service-subtitle"><?php esc_html_e('Welcome to The Arya Odyssey', 'aryaodyssey'); ?></h3>
                        <p class="service-description">
                            <?php esc_html_e('Are you passionate about history, art, nature, or education? Do you enjoy engaging with people and sharing stories that inspire curiosity and learning? Join us as a Docent — and help bring our exhibits and experiences to life!', 'aryaodyssey'); ?>
                        </p>
                        <div class="service-features">
                            <ul>
                                <li><?php esc_html_e('Expert local knowledge', 'aryaodyssey'); ?></li>
                                <li><?php esc_html_e('Personalized tour experiences', 'aryaodyssey'); ?></li>
                                <li><?php esc_html_e('Cultural and historical insights', 'aryaodyssey'); ?></li>
                                <li><?php esc_html_e('Multi-language support', 'aryaodyssey'); ?></li>
                            </ul>
                        </div>
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="btn btn-primary">
                            <?php esc_html_e('Book Guide Service', 'aryaodyssey'); ?>
                        </a>
                    </div>
                    <div class="service-image">
                        <div class="image-placeholder">
                            <!-- Guide service image -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Trekking and Camping Service -->
            <div id="trekking" class="service-section">
                <div class="service-content reverse">
                    <div class="service-image">
                        <div class="image-placeholder">
                            <!-- Trekking image -->
                        </div>
                    </div>
                    <div class="service-text">
                        <div class="service-icon">
                            <span>👣</span>
                        </div>
                        <h2 class="service-title"><?php esc_html_e('Trekking and Camping', 'aryaodyssey'); ?></h2>
                        <h3 class="service-subtitle"><?php esc_html_e('Ready to Start Your Adventure?', 'aryaodyssey'); ?></h3>
                        <p class="service-tagline"><?php esc_html_e('Disconnect to reconnect — with nature, with people, and with yourself.', 'aryaodyssey'); ?></p>
                        <p class="service-description">
                            <?php esc_html_e('Explore majestic mountains, lush forests, sparkling rivers, and starlit skies with our unforgettable trekking and camping experiences.', 'aryaodyssey'); ?>
                        </p>
                        <div class="service-features">
                            <ul>
                                <li><?php esc_html_e('Professional trekking equipment', 'aryaodyssey'); ?></li>
                                <li><?php esc_html_e('Experienced mountain guides', 'aryaodyssey'); ?></li>
                                <li><?php esc_html_e('Safety-first approach', 'aryaodyssey'); ?></li>
                                <li><?php esc_html_e('Multiple difficulty levels', 'aryaodyssey'); ?></li>
                            </ul>
                        </div>
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="btn btn-primary">
                            <?php esc_html_e('Plan Your Trek', 'aryaodyssey'); ?>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Transportation Service -->
            <div id="transportation" class="service-section">
                <div class="service-content">
                    <div class="service-text">
                        <div class="service-icon">
                            <span>🚗</span>
                        </div>
                        <h2 class="service-title"><?php esc_html_e('Transportation', 'aryaodyssey'); ?></h2>
                        <p class="service-description">
                            <?php esc_html_e('At AryaOdyssey, we make your journey as smooth as your stay. Whether you\'re arriving from the airport, heading out for a local tour, or catching an early morning meeting, our reliable transportation services ensure you\'re always on time and at ease.', 'aryaodyssey'); ?>
                        </p>
                        <div class="service-features">
                            <ul>
                                <li><?php esc_html_e('Airport pickup and drop-off', 'aryaodyssey'); ?></li>
                                <li><?php esc_html_e('Local sightseeing tours', 'aryaodyssey'); ?></li>
                                <li><?php esc_html_e('Professional drivers', 'aryaodyssey'); ?></li>
                                <li><?php esc_html_e('Comfortable vehicles', 'aryaodyssey'); ?></li>
                            </ul>
                        </div>
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="btn btn-primary">
                            <?php esc_html_e('Book Transportation', 'aryaodyssey'); ?>
                        </a>
                    </div>
                    <div class="service-image">
                        <div class="image-placeholder">
                            <!-- Transportation image -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accommodation Service -->
            <div id="accommodation" class="service-section">
                <div class="service-content reverse">
                    <div class="service-image">
                        <div class="image-placeholder">
                            <!-- Accommodation image -->
                        </div>
                    </div>
                    <div class="service-text">
                        <div class="service-icon">
                            <span>🛏️</span>
                        </div>
                        <h2 class="service-title"><?php esc_html_e('Accommodation at AryaOdyssey', 'aryaodyssey'); ?></h2>
                        <p class="service-description">
                            <?php esc_html_e('At AryaOdyssey, we believe your stay should feel like a perfect blend of comfort, convenience, and care. Whether you\'re here for business, a romantic getaway, or a family vacation, our thoughtfully designed rooms and suites offer the perfect space to relax and recharge.', 'aryaodyssey'); ?>
                        </p>
                        <div class="service-features">
                            <ul>
                                <li><?php esc_html_e('Luxury rooms and suites', 'aryaodyssey'); ?></li>
                                <li><?php esc_html_e('Mountain and valley views', 'aryaodyssey'); ?></li>
                                <li><?php esc_html_e('Modern amenities', 'aryaodyssey'); ?></li>
                                <li><?php esc_html_e('24/7 concierge service', 'aryaodyssey'); ?></li>
                            </ul>
                        </div>
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('rooms'))); ?>" class="btn btn-primary">
                            <?php esc_html_e('View Rooms', 'aryaodyssey'); ?>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Services CTA -->
    <section class="services-cta">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title"><?php esc_html_e('Ready to Experience Our Services?', 'aryaodyssey'); ?></h2>
                <p class="cta-description"><?php esc_html_e('Contact us today to plan your perfect getaway with all our premium services.', 'aryaodyssey'); ?></p>
                <div class="cta-actions">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('reservation'))); ?>" class="btn btn-primary btn-large">
                        <?php esc_html_e('Book Now', 'aryaodyssey'); ?>
                    </a>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="btn btn-secondary btn-large">
                        <?php esc_html_e('Get Quote', 'aryaodyssey'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
