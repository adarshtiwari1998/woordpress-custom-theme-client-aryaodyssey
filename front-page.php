<?php get_header(); ?>

<main id="main-content" class="main-content front-page">
    
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-background">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <div class="container">
                    <h1 class="hero-title">
                        <?php echo get_theme_mod('hero_title', 'Welcome to AryaOdyssey'); ?>
                    </h1>
                    <p class="hero-subtitle">
                        <?php echo get_theme_mod('hero_subtitle', 'Redefining Luxury Living for Travellers'); ?>
                    </p>
                    <p class="hero-description">
                        <?php echo get_theme_mod('hero_description', 'Step into a world where comfort meets community and style embraces spontaneity.'); ?>
                    </p>
                    <div class="hero-actions">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>" class="btn btn-primary">
                            <?php esc_html_e('Explore Services', 'aryaodyssey'); ?>
                        </a>
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('reservation'))); ?>" class="btn btn-secondary">
                            <?php esc_html_e('Book Now', 'aryaodyssey'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Travel Packages Section -->
    <section class="packages-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php esc_html_e('Our Exclusive Travel Packages!', 'aryaodyssey'); ?></h2>
            </div>
            
            <div class="packages-grid">
                <div class="package-card">
                    <div class="package-content">
                        <h3 class="package-title"><?php esc_html_e('Package 1', 'aryaodyssey'); ?></h3>
                        <div class="package-details">
                            <p><?php esc_html_e('2 Persons Stay for 2 nights / 3 days', 'aryaodyssey'); ?></p>
                            <p><?php esc_html_e('Category: Premium Luxury Villa Room with Balcony and Mountain View Breakfast and Dinner Free use of fast Wi-Fi', 'aryaodyssey'); ?></p>
                            <div class="package-icons">
                                <span class="icon">🏠</span>
                                <span class="icon">🍽️</span>
                                <span class="icon">📶</span>
                            </div>
                            <p class="package-feature"><?php esc_html_e('Complimentary Bonfire night with music', 'aryaodyssey'); ?></p>
                        </div>
                    </div>
                </div>

                <div class="package-card">
                    <div class="package-content">
                        <h3 class="package-title"><?php esc_html_e('Package 2', 'aryaodyssey'); ?></h3>
                        <div class="package-details">
                            <p><?php esc_html_e('4 Persons Stay for 2 nights / 3 days', 'aryaodyssey'); ?></p>
                            <p><?php esc_html_e('Category: 2 Room Set with Mountain View Breakfast and Dinner Free use of fast Wi-Fi', 'aryaodyssey'); ?></p>
                            <div class="package-icons">
                                <span class="icon">🏠</span>
                                <span class="icon">🏠</span>
                                <span class="icon">🍽️</span>
                            </div>
                            <p class="package-feature"><?php esc_html_e('Complimentary Bonfire night with music', 'aryaodyssey'); ?></p>
                        </div>
                    </div>
                </div>

                <div class="package-card">
                    <div class="package-content">
                        <h3 class="package-title"><?php esc_html_e('Package 3', 'aryaodyssey'); ?></h3>
                        <div class="package-details">
                            <p><?php esc_html_e('6-10 Persons Stay for 2 nights / 3 days', 'aryaodyssey'); ?></p>
                            <p><?php esc_html_e('Category: 3BHK Luxury Villa Room with Balcony and Mountain View Personalized Cook & Buffet Furnished Kitchen', 'aryaodyssey'); ?></p>
                            <div class="package-icons">
                                <span class="icon">🏠</span>
                                <span class="icon">👨‍🍳</span>
                                <span class="icon">🍽️</span>
                            </div>
                            <p class="package-feature"><?php esc_html_e('4 Paid Bedding Free use of fast Wi-Fi Complimentary Bonfire night with music', 'aryaodyssey'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Villa Showcase Section -->
    <section class="villa-showcase">
        <div class="container">
            <div class="showcase-content">
                <div class="showcase-text">
                    <h2 class="showcase-title"><?php esc_html_e('The AppleWood Villa By Arya Odyssey', 'aryaodyssey'); ?></h2>
                    <p class="showcase-subtitle"><?php esc_html_e('Welcome to The AppleWood Villa – Redefining Luxury Living for Travellers', 'aryaodyssey'); ?></p>
                    <p class="showcase-description">
                        <?php esc_html_e('Step into a world where comfort meets community and style embraces spontaneity. The AppleWood Villa isn\'t just a place to sleep—it\'s an experience designed for those who crave luxury without sacrificing connection.', 'aryaodyssey'); ?>
                    </p>
                </div>
                <div class="showcase-image">
                    <div class="image-placeholder">
                        <!-- Villa interior image would go here -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview Section -->
    <?php get_template_part('template-parts/service-grid'); ?>

    <!-- Room Showcase Section -->
    <section class="room-showcase">
        <div class="container">
            <div class="section-header">
                <span class="section-tag"><?php esc_html_e('OUR STORY', 'aryaodyssey'); ?></span>
                <h2 class="section-title"><?php esc_html_e('Designer Dorms & Private Suites', 'aryaodyssey'); ?></h2>
            </div>
            
            <div class="room-content">
                <div class="room-description">
                    <p><?php esc_html_e('Lush room is a statement of style and comfort. From plush memory foam mattresses to bespoke lighting, our dorms and private suites are thoughtfully crafted to give you the five-star feel at a fraction of the price.', 'aryaodyssey'); ?></p>
                </div>
                <div class="room-image">
                    <div class="image-placeholder">
                        <!-- Room image would go here -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dining Area Section -->
    <section class="dining-area">
        <div class="container">
            <div class="dining-content">
                <div class="dining-image">
                    <div class="image-placeholder">
                        <!-- Dining area image would go here -->
                    </div>
                </div>
                <div class="dining-text">
                    <div class="dining-icon">
                        <span>🍽️</span>
                    </div>
                    <h2 class="dining-title"><?php esc_html_e('Welcome to Our Dining Area', 'aryaodyssey'); ?></h2>
                    <p class="dining-description">
                        <?php esc_html_e('Indulge in an exceptional culinary experience at our villa dining space, where comfort meets cuisine. Whether you\'re starting your day with a hearty breakfast, enjoying a leisurely lunch, or winding down with a gourmet dinner, our dining area offers the perfect setting for every meal.', 'aryaodyssey'); ?>
                    </p>
                    
                    <div class="dining-features">
                        <div class="features-icon">
                            <span>👨‍🍳</span>
                        </div>
                        <h3><?php esc_html_e('Special Features:', 'aryaodyssey'); ?></h3>
                        <ul class="features-list">
                            <li><?php esc_html_e('Seasonal Chef\'s Specials', 'aryaodyssey'); ?></li>
                            <li><?php esc_html_e('Vegetarian, Vegan & Gluten Free Options', 'aryaodyssey'); ?></li>
                            <li><?php esc_html_e('Room Service Available', 'aryaodyssey'); ?></li>
                            <li><?php esc_html_e('Private Dining on Request', 'aryaodyssey'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title"><?php esc_html_e('Ready to Start Your Adventure?', 'aryaodyssey'); ?></h2>
                <p class="cta-description"><?php esc_html_e('Book your stay with us and experience luxury like never before.', 'aryaodyssey'); ?></p>
                <div class="cta-actions">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('reservation'))); ?>" class="btn btn-primary btn-large">
                        <?php esc_html_e('Book Now', 'aryaodyssey'); ?>
                    </a>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="btn btn-secondary btn-large">
                        <?php esc_html_e('Contact Us', 'aryaodyssey'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
