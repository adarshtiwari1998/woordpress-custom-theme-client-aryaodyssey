    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="footer-container">
            <?php if (is_active_sidebar('footer-widgets')) : ?>
                <div class="footer-widgets">
                    <?php dynamic_sidebar('footer-widgets'); ?>
                </div>
            <?php endif; ?>

            <div class="footer-main">
                <div class="footer-section">
                    <h4><?php esc_html_e('Contact Info', 'aryaodyssey'); ?></h4>
                    <div class="contact-info">
                        <p><i data-feather="map-pin"></i> <?php echo get_theme_mod('contact_address', 'Your Address Here'); ?></p>
                        <p><i data-feather="phone"></i> <?php echo get_theme_mod('contact_phone', '+1 234 567 8900'); ?></p>
                        <p><i data-feather="mail"></i> <?php echo get_theme_mod('contact_email', 'info@aryaodyssey.com'); ?></p>
                    </div>
                </div>

                <div class="footer-section">
                    <h4><?php esc_html_e('Quick Links', 'aryaodyssey'); ?></h4>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'menu_class'     => 'footer-menu',
                        'container'      => false,
                        'depth'          => 1,
                    ));
                    ?>
                </div>

                <div class="footer-section">
                    <h4><?php esc_html_e('Our Services', 'aryaodyssey'); ?></h4>
                    <ul class="services-list">
                        <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>#guides"><?php esc_html_e('Guides', 'aryaodyssey'); ?></a></li>
                        <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>#trekking"><?php esc_html_e('Trekking & Camping', 'aryaodyssey'); ?></a></li>
                        <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>#transportation"><?php esc_html_e('Transportation', 'aryaodyssey'); ?></a></li>
                        <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('rooms'))); ?>"><?php esc_html_e('Accommodation', 'aryaodyssey'); ?></a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h4><?php esc_html_e('Follow Us', 'aryaodyssey'); ?></h4>
                    <div class="social-links">
                        <?php if (get_theme_mod('facebook_url')) : ?>
                            <a href="<?php echo esc_url(get_theme_mod('facebook_url')); ?>" target="_blank" rel="noopener">
                                <i data-feather="facebook"></i>
                            </a>
                        <?php endif; ?>
                        <?php if (get_theme_mod('instagram_url')) : ?>
                            <a href="<?php echo esc_url(get_theme_mod('instagram_url')); ?>" target="_blank" rel="noopener">
                                <i data-feather="instagram"></i>
                            </a>
                        <?php endif; ?>
                        <?php if (get_theme_mod('twitter_url')) : ?>
                            <a href="<?php echo esc_url(get_theme_mod('twitter_url')); ?>" target="_blank" rel="noopener">
                                <i data-feather="twitter"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="copyright">
                    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All rights reserved.', 'aryaodyssey'); ?></p>
                </div>
                <div class="footer-links">
                    <a href="<?php echo esc_url(get_privacy_policy_url()); ?>"><?php esc_html_e('Privacy Policy', 'aryaodyssey'); ?></a>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('terms'))); ?>"><?php esc_html_e('Terms of Service', 'aryaodyssey'); ?></a>
                </div>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
// Initialize Feather icons
if (typeof feather !== 'undefined') {
    feather.replace();
}
</script>

</body>
</html>
