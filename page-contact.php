<?php
/**
 * Template for Contact Page
 *
 * @package AryaOdyssey
 */

get_header(); ?>

<main id="main" class="site-main contact-page">
    
    <!-- Hero Section -->
    <section class="page-hero contact-hero">
        <div class="hero-background">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <div class="container">
                    <div class="hero-text text-center">
                        <h1 class="hero-title text-white">
                            <?php _e('Contact Us', 'aryaodyssey'); ?>
                        </h1>
                        <p class="hero-subtitle text-white">
                            <?php _e('Get in touch with us to plan your perfect Manali getaway', 'aryaodyssey'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="contact-info section-padding">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-details">
                    <h2 class="section-title">
                        <?php _e('Get in Touch', 'aryaodyssey'); ?>
                    </h2>
                    <p class="section-subtitle">
                        <?php _e('We\'re here to help you plan the perfect mountain adventure. Reach out to us through any of the following channels.', 'aryaodyssey'); ?>
                    </p>

                    <div class="contact-methods">
                        <div class="contact-method">
                            <div class="method-icon">
                                <i data-feather="map-pin"></i>
                            </div>
                            <div class="method-content">
                                <h4><?php _e('Our Location', 'aryaodyssey'); ?></h4>
                                <p>Old Manali Road<br>Manali, Himachal Pradesh 175131<br>India</p>
                            </div>
                        </div>

                        <div class="contact-method">
                            <div class="method-icon">
                                <i data-feather="phone"></i>
                            </div>
                            <div class="method-content">
                                <h4><?php _e('Phone Numbers', 'aryaodyssey'); ?></h4>
                                <p>
                                    <a href="tel:+919876543210">+91 98765 43210</a><br>
                                    <a href="tel:+911902123456">+91 1902 123456</a>
                                </p>
                            </div>
                        </div>

                        <div class="contact-method">
                            <div class="method-icon">
                                <i data-feather="mail"></i>
                            </div>
                            <div class="method-content">
                                <h4><?php _e('Email Addresses', 'aryaodyssey'); ?></h4>
                                <p>
                                    <a href="mailto:info@aryaodyssey.com">info@aryaodyssey.com</a><br>
                                    <a href="mailto:reservations@aryaodyssey.com">reservations@aryaodyssey.com</a>
                                </p>
                            </div>
                        </div>

                        <div class="contact-method">
                            <div class="method-icon">
                                <i data-feather="clock"></i>
                            </div>
                            <div class="method-content">
                                <h4><?php _e('Office Hours', 'aryaodyssey'); ?></h4>
                                <p>
                                    <?php _e('Monday - Sunday: 8:00 AM - 10:00 PM', 'aryaodyssey'); ?><br>
                                    <?php _e('24/7 Emergency Support', 'aryaodyssey'); ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="social-contact">
                        <h4><?php _e('Follow Us', 'aryaodyssey'); ?></h4>
                        <div class="social-links">
                            <a href="#" target="_blank" rel="noopener" aria-label="Facebook">
                                <i data-feather="facebook"></i>
                                <span>Facebook</span>
                            </a>
                            <a href="#" target="_blank" rel="noopener" aria-label="Instagram">
                                <i data-feather="instagram"></i>
                                <span>Instagram</span>
                            </a>
                            <a href="#" target="_blank" rel="noopener" aria-label="Twitter">
                                <i data-feather="twitter"></i>
                                <span>Twitter</span>
                            </a>
                            <a href="#" target="_blank" rel="noopener" aria-label="YouTube">
                                <i data-feather="youtube"></i>
                                <span>YouTube</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="contact-form-wrapper">
                    <!-- Contact Form -->
                    <?php if (isset($_GET['contact'])): ?>
                        <div class="message <?php echo esc_attr($_GET['contact']); ?>">
                            <?php if ($_GET['contact'] === 'success'): ?>
                                <i data-feather="check-circle"></i>
                                <span><?php _e('Thank you! Your message has been sent successfully. We\'ll get back to you soon.', 'aryaodyssey'); ?></span>
                            <?php else: ?>
                                <i data-feather="alert-circle"></i>
                                <span><?php _e('Sorry, there was an error sending your message. Please try again or contact us directly.', 'aryaodyssey'); ?></span>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <form id="contact-form" class="contact-form" method="POST" action="">
                        <input type="hidden" name="action" value="contact_form">
                        <?php wp_nonce_field('contact_form_nonce', 'contact_nonce'); ?>
                        
                        <h3><?php _e('Send us a Message', 'aryaodyssey'); ?></h3>
                        
                        <div class="form-grid-2">
                            <div class="form-group">
                                <label class="form-label" for="name"><?php _e('Full Name *', 'aryaodyssey'); ?></label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label" for="email"><?php _e('Email Address *', 'aryaodyssey'); ?></label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="phone"><?php _e('Phone Number', 'aryaodyssey'); ?></label>
                            <input type="tel" id="phone" name="phone" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="subject"><?php _e('Subject', 'aryaodyssey'); ?></label>
                            <select id="subject" name="subject" class="form-control">
                                <option value=""><?php _e('Select a subject', 'aryaodyssey'); ?></option>
                                <option value="reservation"><?php _e('Reservation Inquiry', 'aryaodyssey'); ?></option>
                                <option value="services"><?php _e('Services Information', 'aryaodyssey'); ?></option>
                                <option value="feedback"><?php _e('Feedback', 'aryaodyssey'); ?></option>
                                <option value="support"><?php _e('Support', 'aryaodyssey'); ?></option>
                                <option value="other"><?php _e('Other', 'aryaodyssey'); ?></option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="message"><?php _e('Message *', 'aryaodyssey'); ?></label>
                            <textarea id="message" name="message" class="form-control" rows="6" required placeholder="<?php esc_attr_e('Tell us how we can help you...', 'aryaodyssey'); ?>"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg">
                            <?php _e('Send Message', 'aryaodyssey'); ?>
                            <i data-feather="send"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <h2 class="section-title text-center">
                <?php _e('Find Us on the Map', 'aryaodyssey'); ?>
            </h2>
            <div class="map-wrapper">
                <div class="map-placeholder">
                    <div class="map-content">
                        <i data-feather="map-pin"></i>
                        <h3><?php _e('AryaOdyssey Location', 'aryaodyssey'); ?></h3>
                        <p><?php _e('Old Manali Road, Manali, Himachal Pradesh 175131', 'aryaodyssey'); ?></p>
                        <a href="https://maps.google.com/?q=Old+Manali+Road,+Manali,+Himachal+Pradesh" target="_blank" class="btn btn-primary">
                            <?php _e('Open in Google Maps', 'aryaodyssey'); ?>
                            <i data-feather="external-link"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section section-padding bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">
                    <?php _e('Frequently Asked Questions', 'aryaodyssey'); ?>
                </h2>
                <p class="section-subtitle">
                    <?php _e('Quick answers to common questions about our services and facilities', 'aryaodyssey'); ?>
                </p>
            </div>

            <div class="faq-grid">
                <div class="faq-item">
                    <div class="faq-question">
                        <h4><?php _e('What time is check-in and check-out?', 'aryaodyssey'); ?></h4>
                        <i data-feather="plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><?php _e('Check-in is at 2:00 PM and check-out is at 12:00 PM. Early check-in and late check-out may be available upon request, subject to availability.', 'aryaodyssey'); ?></p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h4><?php _e('Do you provide airport transfers?', 'aryaodyssey'); ?></h4>
                        <i data-feather="plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><?php _e('Yes, we provide comfortable airport transfers from Bhuntar Airport to our property. Please inform us of your flight details when making a reservation.', 'aryaodyssey'); ?></p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h4><?php _e('Is Wi-Fi available throughout the property?', 'aryaodyssey'); ?></h4>
                        <i data-feather="plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><?php _e('Yes, we provide complimentary high-speed Wi-Fi throughout the property, including all rooms and common areas.', 'aryaodyssey'); ?></p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h4><?php _e('Do you arrange trekking and adventure activities?', 'aryaodyssey'); ?></h4>
                        <i data-feather="plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><?php _e('Absolutely! We offer various trekking packages and adventure activities with experienced guides. Contact us to plan your perfect adventure.', 'aryaodyssey'); ?></p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h4><?php _e('What dining options are available?', 'aryaodyssey'); ?></h4>
                        <i data-feather="plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><?php _e('We offer multi-cuisine dining with both local Himachali specialties and international dishes. Special dietary requirements can be accommodated with advance notice.', 'aryaodyssey'); ?></p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h4><?php _e('Is parking available?', 'aryaodyssey'); ?></h4>
                        <i data-feather="plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><?php _e('Yes, we provide secure parking facilities for our guests at no additional charge.', 'aryaodyssey'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<style>
.contact-page .page-hero {
    height: 60vh;
    min-height: 400px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.contact-page .hero-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #2d5016 0%, #4a7c59 50%, #7ba05b 100%);
}

.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: flex-start;
}

.contact-methods {
    margin: 40px 0;
}

.contact-method {
    display: flex;
    gap: 20px;
    margin-bottom: 30px;
    align-items: flex-start;
}

.method-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #2d5016 0%, #4a7c59 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.method-icon i {
    width: 24px;
    height: 24px;
    color: white;
}

.method-content h4 {
    color: #333;
    margin-bottom: 10px;
}

.method-content p {
    margin: 0;
    color: #666;
    line-height: 1.6;
}

.method-content a {
    color: #2d5016;
    text-decoration: none;
}

.method-content a:hover {
    text-decoration: underline;
}

.social-contact {
    margin-top: 40px;
}

.social-contact h4 {
    color: #333;
    margin-bottom: 20px;
}

.social-contact .social-links {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.social-contact .social-links a {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #2d5016;
    text-decoration: none;
    padding: 8px 0;
    transition: all 0.3s ease;
}

.social-contact .social-links a:hover {
    color: #4a7c59;
    transform: translateX(5px);
}

.social-contact .social-links a i {
    width: 20px;
    height: 20px;
}

.contact-form-wrapper {
    background: white;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    position: sticky;
    top: 20px;
}

.contact-form {
    padding: 40px;
}

.contact-form h3 {
    color: #333;
    margin-bottom: 30px;
    text-align: center;
}

.map-section {
    padding: 80px 0;
    background: #f8f9fa;
}

.map-wrapper {
    margin-top: 40px;
}

.map-placeholder {
    height: 400px;
    background: linear-gradient(135deg, #e9ecef 0%, #dee2e6 100%);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 40px;
}

.map-content i {
    width: 48px;
    height: 48px;
    color: #2d5016;
    margin-bottom: 20px;
}

.map-content h3 {
    color: #333;
    margin-bottom: 10px;
}

.map-content p {
    color: #666;
    margin-bottom: 20px;
}

.faq-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 20px;
    margin-top: 60px;
}

.faq-item {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}

.faq-question {
    padding: 25px 30px;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: white;
    transition: all 0.3s ease;
}

.faq-question:hover {
    background: #f8f9fa;
}

.faq-question h4 {
    margin: 0;
    color: #333;
    font-size: 1.1rem;
}

.faq-question i {
    width: 20px;
    height: 20px;
    color: #2d5016;
    transition: transform 0.3s ease;
}

.faq-item.active .faq-question i {
    transform: rotate(45deg);
}

.faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: all 0.3s ease;
    background: #f8f9fa;
}

.faq-item.active .faq-answer {
    max-height: 200px;
}

.faq-answer p {
    padding: 20px 30px;
    margin: 0;
    color: #666;
    line-height: 1.6;
}

@media (max-width: 768px) {
    .contact-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .contact-form-wrapper {
        position: static;
    }
    
    .contact-form {
        padding: 30px 20px;
    }
    
    .faq-grid {
        grid-template-columns: 1fr;
    }
    
    .map-placeholder {
        height: 300px;
        padding: 20px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // FAQ Toggle
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            
            // Close all FAQs
            faqItems.forEach(faq => faq.classList.remove('active'));
            
            // Open clicked FAQ if it wasn't active
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
});
</script>

<?php get_footer(); ?>
