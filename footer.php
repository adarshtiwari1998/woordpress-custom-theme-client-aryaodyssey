<?php
/**
 * The template for displaying the footer
 */
?>
    </div><!-- #content -->

    <footer id="colophon" class="site-footer bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5 class="text-success mb-3">AryaOdyssey</h5>
                    <p>Experience the magic of Manali and the Himalayas with our premium travel services. From luxury accommodations to thrilling adventures, we make your journey unforgettable.</p>
                    <div class="social-links">
                        <a href="#" class="text-light me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="text-success mb-3">Quick Links</h6>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'depth' => 1,
                        'container' => false,
                        'menu_class' => 'list-unstyled footer-nav',
                        'fallback_cb' => false,
                    ));
                    ?>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <h6 class="text-success mb-3">Services</h6>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo esc_url(home_url('/services')); ?>" class="text-light">Accommodation</a></li>
                        <li><a href="<?php echo esc_url(home_url('/services')); ?>" class="text-light">Transportation</a></li>
                        <li><a href="<?php echo esc_url(home_url('/services')); ?>" class="text-light">Trekking & Camping</a></li>
                        <li><a href="<?php echo esc_url(home_url('/services')); ?>" class="text-light">Tour Guides</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <h6 class="text-success mb-3">Contact Info</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-map-marker-alt text-success me-2"></i>
                            Manali, Himachal Pradesh, India
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-phone text-success me-2"></i>
                            +91 98765 43210
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-envelope text-success me-2"></i>
                            info@aryaodyssey.com
                        </li>
                    </ul>
                </div>
            </div>
            
            <hr class="my-4">
            
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; <?php echo date('Y'); ?> AryaOdyssey. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>" class="text-light me-3">Privacy Policy</a>
                    <a href="<?php echo esc_url(home_url('/terms')); ?>" class="text-light">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
