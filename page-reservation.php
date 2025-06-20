<?php
/**
 * Template for Reservation Page
 *
 * @package AryaOdyssey
 */

get_header(); ?>

<main id="main" class="site-main reservation-page">
    
    <!-- Hero Section -->
    <section class="page-hero reservation-hero">
        <div class="hero-background">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <div class="container">
                    <div class="hero-text text-center">
                        <h1 class="hero-title text-white">
                            <?php _e('Make a Reservation', 'aryaodyssey'); ?>
                        </h1>
                        <p class="hero-subtitle text-white">
                            <?php _e('Book your perfect mountain getaway with us', 'aryaodyssey'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reservation Form Section -->
    <section class="reservation-form-section section-padding">
        <div class="container">
            <div class="reservation-grid">
                <div class="reservation-info">
                    <h2 class="section-title">
                        <?php _e('Book Your Stay', 'aryaodyssey'); ?>
                    </h2>
                    <p class="section-subtitle">
                        <?php _e('Fill out the form below to make your reservation. We\'ll confirm your booking within 24 hours and send you all the details.', 'aryaodyssey'); ?>
                    </p>

                    <div class="booking-benefits">
                        <h3><?php _e('Why Book Direct?', 'aryaodyssey'); ?></h3>
                        <div class="benefit-list">
                            <div class="benefit-item">
                                <i data-feather="check-circle"></i>
                                <span><?php _e('Best Rate Guarantee', 'aryaodyssey'); ?></span>
                            </div>
                            <div class="benefit-item">
                                <i data-feather="gift"></i>
                                <span><?php _e('Complimentary Upgrades (subject to availability)', 'aryaodyssey'); ?></span>
                            </div>
                            <div class="benefit-item">
                                <i data-feather="phone"></i>
                                <span><?php _e('24/7 Customer Support', 'aryaodyssey'); ?></span>
                            </div>
                            <div class="benefit-item">
                                <i data-feather="x-circle"></i>
                                <span><?php _e('Free Cancellation up to 24 hours', 'aryaodyssey'); ?></span>
                            </div>
                            <div class="benefit-item">
                                <i data-feather="coffee"></i>
                                <span><?php _e('Complimentary Welcome Drink', 'aryaodyssey'); ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="contact-support">
                        <h3><?php _e('Need Help?', 'aryaodyssey'); ?></h3>
                        <p><?php _e('Our reservation team is available to assist you:', 'aryaodyssey'); ?></p>
                        <div class="support-contact">
                            <div class="support-item">
                                <i data-feather="phone"></i>
                                <a href="tel:+919876543210">+91 98765 43210</a>
                            </div>
                            <div class="support-item">
                                <i data-feather="mail"></i>
                                <a href="mailto:reservations@aryaodyssey.com">reservations@aryaodyssey.com</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="reservation-form-wrapper">
                    <!-- Success/Error Messages -->
                    <?php if (isset($_GET['reservation'])): ?>
                        <div class="message <?php echo esc_attr($_GET['reservation']); ?>">
                            <?php if ($_GET['reservation'] === 'success'): ?>
                                <i data-feather="check-circle"></i>
                                <span><?php _e('Thank you! Your reservation request has been submitted successfully. We\'ll contact you within 24 hours to confirm your booking.', 'aryaodyssey'); ?></span>
                            <?php else: ?>
                                <i data-feather="alert-circle"></i>
                                <span><?php _e('Sorry, there was an error processing your reservation. Please try again or contact us directly.', 'aryaodyssey'); ?></span>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <!-- Reservation Form -->
                    <form id="reservation-form" class="reservation-form" method="POST" action="">
                        <input type="hidden" name="action" value="reservation_form">
                        <?php wp_nonce_field('reservation_form_nonce', 'reservation_nonce'); ?>
                        
                        <h3><?php _e('Reservation Details', 'aryaodyssey'); ?></h3>
                        
                        <!-- Personal Information -->
                        <div class="form-section">
                            <h4><?php _e('Personal Information', 'aryaodyssey'); ?></h4>
                            
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
                            
                            <div class="form-grid-2">
                                <div class="form-group">
                                    <label class="form-label" for="phone"><?php _e('Phone Number *', 'aryaodyssey'); ?></label>
                                    <input type="tel" id="phone" name="phone" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label" for="country"><?php _e('Country', 'aryaodyssey'); ?></label>
                                    <input type="text" id="country" name="country" class="form-control" placeholder="<?php esc_attr_e('e.g., India', 'aryaodyssey'); ?>">
                                </div>
                            </div>
                        </div>
                        
                        <!-- Booking Details -->
                        <div class="form-section">
                            <h4><?php _e('Booking Details', 'aryaodyssey'); ?></h4>
                            
                            <div class="form-grid-2">
                                <div class="form-group">
                                    <label class="form-label" for="checkin"><?php _e('Check-in Date *', 'aryaodyssey'); ?></label>
                                    <input type="date" id="checkin" name="checkin" class="form-control" required min="<?php echo date('Y-m-d'); ?>">
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label" for="checkout"><?php _e('Check-out Date *', 'aryaodyssey'); ?></label>
                                    <input type="date" id="checkout" name="checkout" class="form-control" required min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>">
                                </div>
                            </div>
                            
                            <div class="form-grid-2">
                                <div class="form-group">
                                    <label class="form-label" for="guests"><?php _e('Number of Guests *', 'aryaodyssey'); ?></label>
                                    <select id="guests" name="guests" class="form-control" required>
                                        <option value=""><?php _e('Select guests', 'aryaodyssey'); ?></option>
                                        <option value="1">1 <?php _e('Guest', 'aryaodyssey'); ?></option>
                                        <option value="2">2 <?php _e('Guests', 'aryaodyssey'); ?></option>
                                        <option value="3">3 <?php _e('Guests', 'aryaodyssey'); ?></option>
                                        <option value="4">4 <?php _e('Guests', 'aryaodyssey'); ?></option>
                                        <option value="5">5 <?php _e('Guests', 'aryaodyssey'); ?></option>
                                        <option value="6">6 <?php _e('Guests', 'aryaodyssey'); ?></option>
                                        <option value="7">7 <?php _e('Guests', 'aryaodyssey'); ?></option>
                                        <option value="8">8 <?php _e('Guests', 'aryaodyssey'); ?></option>
                                        <option value="9">9 <?php _e('Guests', 'aryaodyssey'); ?></option>
                                        <option value="10">10 <?php _e('Guests', 'aryaodyssey'); ?></option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label" for="room_type"><?php _e('Room Type *', 'aryaodyssey'); ?></label>
                                    <select id="room_type" name="room_type" class="form-control" required>
                                        <option value=""><?php _e('Select room type', 'aryaodyssey'); ?></option>
                                        <option value="premium-villa"><?php _e('Premium Villa Room (₹3,500/night)', 'aryaodyssey'); ?></option>
                                        <option value="2-room-set"><?php _e('2 Room Set (₹6,000/night)', 'aryaodyssey'); ?></option>
                                        <option value="3bhk-luxury"><?php _e('3BHK Luxury Villa (₹12,000/night)', 'aryaodyssey'); ?></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Additional Services -->
                        <div class="form-section">
                            <h4><?php _e('Additional Services', 'aryaodyssey'); ?></h4>
                            
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="services[]" value="airport-transfer">
                                    <span class="checkmark"></span>
                                    <?php _e('Airport Transfer', 'aryaodyssey'); ?>
                                </label>
                                
                                <label class="checkbox-label">
                                    <input type="checkbox" name="services[]" value="trekking-guide">
                                    <span class="checkmark"></span>
                                    <?php _e('Trekking Guide', 'aryaodyssey'); ?>
                                </label>
                                
                                <label class="checkbox-label">
                                    <input type="checkbox" name="services[]" value="local-tours">
                                    <span class="checkmark"></span>
                                    <?php _e('Local Sightseeing Tours', 'aryaodyssey'); ?>
                                </label>
                                
                                <label class="checkbox-label">
                                    <input type="checkbox" name="services[]" value="adventure-activities">
                                    <span class="checkmark"></span>
                                    <?php _e('Adventure Activities', 'aryaodyssey'); ?>
                                </label>
                            </div>
                        </div>
                        
                        <!-- Special Requests -->
                        <div class="form-section">
                            <div class="form-group">
                                <label class="form-label" for="special_requests"><?php _e('Special Requests or Comments', 'aryaodyssey'); ?></label>
                                <textarea id="special_requests" name="special_requests" class="form-control" rows="4" placeholder="<?php esc_attr_e('Any special requests, dietary requirements, or additional information...', 'aryaodyssey'); ?>"></textarea>
                            </div>
                        </div>
                        
                        <!-- Terms and Conditions -->
                        <div class="form-section">
                            <label class="checkbox-label">
                                <input type="checkbox" name="terms" value="accepted" required>
                                <span class="checkmark"></span>
                                <?php _e('I agree to the', 'aryaodyssey'); ?> 
                                <a href="<?php echo esc_url(home_url('/terms')); ?>" target="_blank"><?php _e('Terms & Conditions', 'aryaodyssey'); ?></a> 
                                <?php _e('and', 'aryaodyssey'); ?> 
                                <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>" target="_blank"><?php _e('Privacy Policy', 'aryaodyssey'); ?></a>
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg">
                            <?php _e('Submit Reservation', 'aryaodyssey'); ?>
                            <i data-feather="calendar"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Packages Section -->
    <section class="packages-preview section-padding bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">
                    <?php _e('Our Popular Packages', 'aryaodyssey'); ?>
                </h2>
                <p class="section-subtitle">
                    <?php _e('Choose from our carefully curated packages for the perfect mountain experience', 'aryaodyssey'); ?>
                </p>
            </div>

            <div class="packages-grid">
                <div class="package-card">
                    <div class="package-header">
                        <h3><?php _e('Package 1 - Couple\'s Retreat', 'aryaodyssey'); ?></h3>
                        <div class="package-price">₹7,000 <span><?php _e('per couple', 'aryaodyssey'); ?></span></div>
                    </div>
                    <div class="package-content">
                        <p><strong>2 Persons Stay for 2 nights / 3 days</strong></p>
                        <ul class="package-features">
                            <li>Premium Luxury Villa Room with Balcony</li>
                            <li>Mountain View</li>
                            <li>Breakfast and Dinner included</li>
                            <li>Free use of high-speed Wi-Fi</li>
                            <li>Complimentary Bonfire night with music</li>
                        </ul>
                    </div>
                </div>

                <div class="package-card featured">
                    <div class="package-badge"><?php _e('Most Popular', 'aryaodyssey'); ?></div>
                    <div class="package-header">
                        <h3><?php _e('Package 2 - Family Special', 'aryaodyssey'); ?></h3>
                        <div class="package-price">₹12,000 <span><?php _e('for 4 persons', 'aryaodyssey'); ?></span></div>
                    </div>
                    <div class="package-content">
                        <p><strong>4 Persons Stay for 2 nights / 3 days</strong></p>
                        <ul class="package-features">
                            <li>2 Room Set with Mountain View</li>
                            <li>Breakfast and Dinner included</li>
                            <li>Free use of high-speed Wi-Fi</li>
                            <li>Complimentary Bonfire night with music</li>
                            <li>Local sightseeing tour included</li>
                        </ul>
                    </div>
                </div>

                <div class="package-card">
                    <div class="package-header">
                        <h3><?php _e('Package 3 - Group Adventure', 'aryaodyssey'); ?></h3>
                        <div class="package-price">₹24,000 <span><?php _e('for 6-10 persons', 'aryaodyssey'); ?></span></div>
                    </div>
                    <div class="package-content">
                        <p><strong>6-10 Persons Stay for 2 nights / 3 days</strong></p>
                        <ul class="package-features">
                            <li>3BHK Luxury Villa with Mountain View</li>
                            <li>Personalized Cook & Fully Furnished Kitchen</li>
                            <li>4 Paid Bedding</li>
                            <li>Free use of high-speed Wi-Fi</li>
                            <li>Complimentary Bonfire night with music</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<style>
.reservation-page .page-hero {
    height: 60vh;
    min-height: 400px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.reservation-page .hero-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #2d5016 0%, #4a7c59 50%, #7ba05b 100%);
}

.reservation-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: flex-start;
}

.booking-benefits {
    margin: 40px 0;
}

.booking-benefits h3 {
    color: #333;
    margin-bottom: 20px;
}

.benefit-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.benefit-item {
    display: flex;
    align-items: center;
    gap: 12px;
}

.benefit-item i {
    width: 20px;
    height: 20px;
    color: #2d5016;
    flex-shrink: 0;
}

.contact-support {
    margin-top: 40px;
    padding: 25px;
    background: #f8f9fa;
    border-radius: 15px;
}

.contact-support h3 {
    color: #333;
    margin-bottom: 15px;
}

.support-contact {
    margin-top: 20px;
}

.support-item {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 10px;
}

.support-item i {
    width: 18px;
    height: 18px;
    color: #2d5016;
}

.support-item a {
    color: #2d5016;
    text-decoration: none;
    font-weight: 500;
}

.reservation-form-wrapper {
    background: white;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    position: sticky;
    top: 20px;
}

.reservation-form {
    padding: 40px;
}

.reservation-form h3 {
    color: #333;
    margin-bottom: 30px;
    text-align: center;
}

.form-section {
    margin-bottom: 35px;
    padding-bottom: 25px;
    border-bottom: 1px solid #eee;
}

.form-section:last-of-type {
    border-bottom: none;
    margin-bottom: 0;
}

.form-section h4 {
    color: #333;
    margin-bottom: 20px;
    font-size: 1.1rem;
}

.checkbox-group {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
}

.checkbox-label {
    display: flex;
    align-items: center;
    gap: 12px;
    cursor: pointer;
    font-size: 0.95rem;
    color: #333;
}

.checkbox-label input[type="checkbox"] {
    display: none;
}

.checkmark {
    width: 20px;
    height: 20px;
    border: 2px solid #ddd;
    border-radius: 4px;
    position: relative;
    transition: all 0.3s ease;
    flex-shrink: 0;
}

.checkbox-label input[type="checkbox"]:checked + .checkmark {
    background: #2d5016;
    border-color: #2d5016;
}

.checkbox-label input[type="checkbox"]:checked + .checkmark::after {
    content: '✓';
    position: absolute;
    color: white;
    font-size: 14px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.packages-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
    margin-top: 60px;
}

.package-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    position: relative;
}

.package-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
}

.package-card.featured {
    border: 3px solid #2d5016;
    transform: scale(1.05);
}

.package-badge {
    position: absolute;
    top: -12px;
    left: 30px;
    background: #2d5016;
    color: white;
    padding: 8px 20px;
    font-size: 0.8rem;
    border-radius: 20px;
    font-weight: 600;
    z-index: 2;
}

.package-header {
    padding: 30px 30px 20px;
    text-align: center;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.package-header h3 {
    color: #333;
    margin-bottom: 15px;
}

.package-price {
    font-size: 2rem;
    font-weight: 700;
    color: #2d5016;
}

.package-price span {
    font-size: 0.9rem;
    font-weight: 400;
    color: #666;
}

.package-content {
    padding: 30px;
}

.package-features {
    list-style: none;
    padding: 0;
    margin: 20px 0 0;
}

.package-features li {
    padding: 8px 0;
    position: relative;
    padding-left: 25px;
    color: #666;
}

.package-features li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #2d5016;
    font-weight: bold;
}

@media (max-width: 768px) {
    .reservation-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .reservation-form-wrapper {
        position: static;
    }
    
    .reservation-form {
        padding: 30px 20px;
    }
    
    .checkbox-group {
        grid-template-columns: 1fr;
    }
    
    .packages-grid {
        grid-template-columns: 1fr;
    }
    
    .package-card.featured {
        transform: none;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Date validation
    const checkinInput = document.getElementById('checkin');
    const checkoutInput = document.getElementById('checkout');
    
    checkinInput.addEventListener('change', function() {
        const checkinDate = new Date(this.value);
        const minCheckout = new Date(checkinDate);
        minCheckout.setDate(minCheckout.getDate() + 1);
        
        checkoutInput.min = minCheckout.toISOString().split('T')[0];
        
        if (checkoutInput.value && new Date(checkoutInput.value) <= checkinDate) {
            checkoutInput.value = '';
        }
    });
    
    // Calculate nights
    function calculateNights() {
        if (checkinInput.value && checkoutInput.value) {
            const checkin = new Date(checkinInput.value);
            const checkout = new Date(checkoutInput.value);
            const nights = Math.ceil((checkout - checkin) / (1000 * 60 * 60 * 24));
            
            if (nights > 0) {
                console.log(`Total nights: ${nights}`);
                // You can display this information to the user
            }
        }
    }
    
    checkinInput.addEventListener('change', calculateNights);
    checkoutInput.addEventListener('change', calculateNights);
});
</script>

<?php get_footer(); ?>
