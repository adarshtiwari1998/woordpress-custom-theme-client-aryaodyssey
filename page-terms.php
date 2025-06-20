<?php
/**
 * Template for Terms of Service Page
 *
 * @package AryaOdyssey
 */

get_header(); ?>

<main id="main" class="site-main terms-page">
    
    <!-- Hero Section -->
    <section class="page-hero legal-hero">
        <div class="hero-background">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <div class="container">
                    <div class="hero-text text-center">
                        <h1 class="hero-title text-white">
                            <?php _e('Terms of Service', 'aryaodyssey'); ?>
                        </h1>
                        <p class="hero-subtitle text-white">
                            <?php _e('Terms and conditions for using our services', 'aryaodyssey'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Terms Content -->
    <section class="legal-content section-padding">
        <div class="container">
            <div class="legal-wrapper">
                <div class="legal-sidebar">
                    <div class="legal-nav">
                        <h3><?php _e('Table of Contents', 'aryaodyssey'); ?></h3>
                        <ul class="legal-menu">
                            <li><a href="#acceptance"><?php _e('Acceptance of Terms', 'aryaodyssey'); ?></a></li>
                            <li><a href="#services"><?php _e('Our Services', 'aryaodyssey'); ?></a></li>
                            <li><a href="#reservations"><?php _e('Reservations & Bookings', 'aryaodyssey'); ?></a></li>
                            <li><a href="#payment"><?php _e('Payment Terms', 'aryaodyssey'); ?></a></li>
                            <li><a href="#cancellation"><?php _e('Cancellation Policy', 'aryaodyssey'); ?></a></li>
                            <li><a href="#guest-conduct"><?php _e('Guest Conduct', 'aryaodyssey'); ?></a></li>
                            <li><a href="#liability"><?php _e('Liability & Disclaimers', 'aryaodyssey'); ?></a></li>
                            <li><a href="#contact-terms"><?php _e('Contact Information', 'aryaodyssey'); ?></a></li>
                        </ul>
                    </div>
                </div>

                <div class="legal-main">
                    <div class="terms-header">
                        <p class="last-updated">
                            <strong><?php _e('Last Updated:', 'aryaodyssey'); ?></strong> <?php echo date('F j, Y'); ?>
                        </p>
                        <p class="terms-intro">
                            <?php _e('Welcome to AryaOdyssey. These Terms of Service ("Terms") govern your use of our website and services. By accessing our website or using our services, you agree to be bound by these Terms. Please read them carefully.', 'aryaodyssey'); ?>
                        </p>
                    </div>

                    <div id="acceptance" class="terms-section">
                        <h2><?php _e('1. Acceptance of Terms', 'aryaodyssey'); ?></h2>
                        <p><?php _e('By accessing and using the AryaOdyssey website and services, you acknowledge that you have read, understood, and agree to be bound by these Terms of Service and our Privacy Policy. If you do not agree with any part of these terms, please do not use our services.', 'aryaodyssey'); ?></p>
                        
                        <h3><?php _e('Eligibility', 'aryaodyssey'); ?></h3>
                        <p><?php _e('You must be at least 18 years old to make a reservation or use our services. By using our services, you represent and warrant that you have the legal capacity to enter into these Terms.', 'aryaodyssey'); ?></p>
                        
                        <h3><?php _e('Modifications', 'aryaodyssey'); ?></h3>
                        <p><?php _e('We reserve the right to modify these Terms at any time. Changes will be effective immediately upon posting on our website. Your continued use of our services after any modifications constitutes acceptance of the updated Terms.', 'aryaodyssey'); ?></p>
                    </div>

                    <div id="services" class="terms-section">
                        <h2><?php _e('2. Our Services', 'aryaodyssey'); ?></h2>
                        <p><?php _e('AryaOdyssey provides the following services:', 'aryaodyssey'); ?></p>
                        <ul>
                            <li><?php _e('Accommodation services at our property in Manali', 'aryaodyssey'); ?></li>
                            <li><?php _e('Transportation services including airport transfers and local tours', 'aryaodyssey'); ?></li>
                            <li><?php _e('Trekking and camping expeditions with professional guides', 'aryaodyssey'); ?></li>
                            <li><?php _e('Tour guide services for local sightseeing', 'aryaodyssey'); ?></li>
                            <li><?php _e('Additional hospitality and concierge services', 'aryaodyssey'); ?></li>
                        </ul>
                        
                        <h3><?php _e('Service Availability', 'aryaodyssey'); ?></h3>
                        <p><?php _e('All services are subject to availability and seasonal conditions. We reserve the right to modify or discontinue any service with or without notice. Weather conditions, government regulations, or other circumstances beyond our control may affect service delivery.', 'aryaodyssey'); ?></p>
                    </div>

                    <div id="reservations" class="terms-section">
                        <h2><?php _e('3. Reservations and Bookings', 'aryaodyssey'); ?></h2>
                        
                        <h3><?php _e('Booking Process', 'aryaodyssey'); ?></h3>
                        <p><?php _e('To make a reservation:', 'aryaodyssey'); ?></p>
                        <ul>
                            <li><?php _e('Complete the reservation form with accurate information', 'aryaodyssey'); ?></li>
                            <li><?php _e('Provide valid contact details and identification', 'aryaodyssey'); ?></li>
                            <li><?php _e('Make the required payment as per our payment terms', 'aryaodyssey'); ?></li>
                            <li><?php _e('Receive confirmation within 24 hours of booking', 'aryaodyssey'); ?></li>
                        </ul>
                        
                        <h3><?php _e('Confirmation', 'aryaodyssey'); ?></h3>
                        <p><?php _e('A reservation is confirmed only when you receive written confirmation from us via email or phone. We reserve the right to refuse any reservation request at our sole discretion.', 'aryaodyssey'); ?></p>
                        
                        <h3><?php _e('Check-in and Check-out', 'aryaodyssey'); ?></h3>
                        <ul>
                            <li><?php _e('Standard check-in time: 2:00 PM', 'aryaodyssey'); ?></li>
                            <li><?php _e('Standard check-out time: 12:00 PM', 'aryaodyssey'); ?></li>
                            <li><?php _e('Early check-in and late check-out subject to availability and additional charges', 'aryaodyssey'); ?></li>
                            <li><?php _e('Valid photo identification required at check-in', 'aryaodyssey'); ?></li>
                        </ul>
                    </div>

                    <div id="payment" class="terms-section">
                        <h2><?php _e('4. Payment Terms', 'aryaodyssey'); ?></h2>
                        
                        <h3><?php _e('Payment Methods', 'aryaodyssey'); ?></h3>
                        <p><?php _e('We accept the following payment methods:', 'aryaodyssey'); ?></p>
                        <ul>
                            <li><?php _e('Credit and debit cards (Visa, MasterCard, American Express)', 'aryaodyssey'); ?></li>
                            <li><?php _e('Bank transfers', 'aryaodyssey'); ?></li>
                            <li><?php _e('Digital wallets (PayPal, Google Pay, etc.)', 'aryaodyssey'); ?></li>
                            <li><?php _e('Cash payments (subject to advance arrangement)', 'aryaodyssey'); ?></li>
                        </ul>
                        
                        <h3><?php _e('Payment Schedule', 'aryaodyssey'); ?></h3>
                        <ul>
                            <li><?php _e('50% advance payment required to confirm reservation', 'aryaodyssey'); ?></li>
                            <li><?php _e('Remaining balance due at check-in', 'aryaodyssey'); ?></li>
                            <li><?php _e('Additional services charged separately', 'aryaodyssey'); ?></li>
                        </ul>
                        
                        <h3><?php _e('Pricing and Taxes', 'aryaodyssey'); ?></h3>
                        <p><?php _e('All prices are quoted in Indian Rupees (INR) and include applicable taxes unless otherwise specified. Prices are subject to change without notice. Additional charges may apply for extra services, amenities, or damages.', 'aryaodyssey'); ?></p>
                    </div>

                    <div id="cancellation" class="terms-section">
                        <h2><?php _e('5. Cancellation and Refund Policy', 'aryaodyssey'); ?></h2>
                        
                        <h3><?php _e('Guest Cancellations', 'aryaodyssey'); ?></h3>
                        <ul>
                            <li><strong><?php _e('48+ hours before check-in:', 'aryaodyssey'); ?></strong> <?php _e('Full refund minus 10% processing fee', 'aryaodyssey'); ?></li>
                            <li><strong><?php _e('24-48 hours before check-in:', 'aryaodyssey'); ?></strong> <?php _e('50% refund', 'aryaodyssey'); ?></li>
                            <li><strong><?php _e('Less than 24 hours or no-show:', 'aryaodyssey'); ?></strong> <?php _e('No refund', 'aryaodyssey'); ?></li>
                        </ul>
                        
                        <h3><?php _e('Our Cancellations', 'aryaodyssey'); ?></h3>
                        <p><?php _e('In rare circumstances where we must cancel your reservation due to unforeseen events (natural disasters, government restrictions, etc.), we will provide a full refund or assist in rebooking at alternative dates.', 'aryaodyssey'); ?></p>
                        
                        <h3><?php _e('Force Majeure', 'aryaodyssey'); ?></h3>
                        <p><?php _e('Neither party shall be liable for any failure to perform due to circumstances beyond reasonable control, including but not limited to natural disasters, government actions, pandemics, or other force majeure events.', 'aryaodyssey'); ?></p>
                    </div>

                    <div id="guest-conduct" class="terms-section">
                        <h2><?php _e('6. Guest Conduct and Property Rules', 'aryaodyssey'); ?></h2>
                        
                        <h3><?php _e('Expected Behavior', 'aryaodyssey'); ?></h3>
                        <p><?php _e('Guests are expected to:', 'aryaodyssey'); ?></p>
                        <ul>
                            <li><?php _e('Respect other guests and our staff', 'aryaodyssey'); ?></li>
                            <li><?php _e('Follow all property rules and local laws', 'aryaodyssey'); ?></li>
                            <li><?php _e('Use facilities responsibly and safely', 'aryaodyssey'); ?></li>
                            <li><?php _e('Report any damages or issues immediately', 'aryaodyssey'); ?></li>
                            <li><?php _e('Maintain quiet hours between 10 PM and 7 AM', 'aryaodyssey'); ?></li>
                        </ul>
                        
                        <h3><?php _e('Prohibited Activities', 'aryaodyssey'); ?></h3>
                        <ul>
                            <li><?php _e('Smoking in non-designated areas', 'aryaodyssey'); ?></li>
                            <li><?php _e('Illegal drug use or excessive alcohol consumption', 'aryaodyssey'); ?></li>
                            <li><?php _e('Loud or disruptive behavior', 'aryaodyssey'); ?></li>
                            <li><?php _e('Bringing unauthorized guests', 'aryaodyssey'); ?></li>
                            <li><?php _e('Damaging property or equipment', 'aryaodyssey'); ?></li>
                        </ul>
                        
                        <h3><?php _e('Consequences', 'aryaodyssey'); ?></h3>
                        <p><?php _e('Violation of these rules may result in immediate termination of your stay without refund. Guests may be held responsible for any damages or additional cleaning costs incurred.', 'aryaodyssey'); ?></p>
                    </div>

                    <div id="liability" class="terms-section">
                        <h2><?php _e('7. Liability and Disclaimers', 'aryaodyssey'); ?></h2>
                        
                        <h3><?php _e('Limitation of Liability', 'aryaodyssey'); ?></h3>
                        <p><?php _e('AryaOdyssey shall not be liable for any indirect, incidental, special, or consequential damages arising from your use of our services. Our total liability shall not exceed the amount paid for the specific service.', 'aryaodyssey'); ?></p>
                        
                        <h3><?php _e('Guest Safety', 'aryaodyssey'); ?></h3>
                        <p><?php _e('While we strive to provide a safe environment, guests participate in activities at their own risk. We recommend purchasing travel insurance and following all safety guidelines provided by our staff.', 'aryaodyssey'); ?></p>
                        
                        <h3><?php _e('Personal Property', 'aryaodyssey'); ?></h3>
                        <p><?php _e('AryaOdyssey is not responsible for loss, theft, or damage to personal property. We recommend using our safe deposit facilities for valuables and ensuring adequate travel insurance coverage.', 'aryaodyssey'); ?></p>
                        
                        <h3><?php _e('Third-Party Services', 'aryaodyssey'); ?></h3>
                        <p><?php _e('We may arrange third-party services (transportation, activities, etc.) for your convenience. While we select reputable providers, we are not responsible for their actions or services.', 'aryaodyssey'); ?></p>
                    </div>

                    <div id="contact-terms" class="terms-section">
                        <h2><?php _e('8. Governing Law and Contact Information', 'aryaodyssey'); ?></h2>
                        
                        <h3><?php _e('Governing Law', 'aryaodyssey'); ?></h3>
                        <p><?php _e('These Terms shall be governed by and construed in accordance with the laws of India. Any disputes shall be subject to the exclusive jurisdiction of the courts in Himachal Pradesh, India.', 'aryaodyssey'); ?></p>
                        
                        <h3><?php _e('Contact Information', 'aryaodyssey'); ?></h3>
                        <p><?php _e('For questions about these Terms of Service, please contact us:', 'aryaodyssey'); ?></p>
                        <div class="contact-details">
                            <p><strong><?php _e('AryaOdyssey', 'aryaodyssey'); ?></strong></p>
                            <p><?php _e('Old Manali Road, Manali, Himachal Pradesh 175131', 'aryaodyssey'); ?></p>
                            <p><?php _e('Email:', 'aryaodyssey'); ?> <a href="mailto:legal@aryaodyssey.com">legal@aryaodyssey.com</a></p>
                            <p><?php _e('Phone:', 'aryaodyssey'); ?> <a href="tel:+919876543210">+91 98765 43210</a></p>
                        </div>
                    </div>

                    <div class="terms-footer">
                        <p><?php _e('By using our services, you acknowledge that you have read and understood these Terms of Service and agree to be bound by them. Thank you for choosing AryaOdyssey for your mountain adventure.', 'aryaodyssey'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
