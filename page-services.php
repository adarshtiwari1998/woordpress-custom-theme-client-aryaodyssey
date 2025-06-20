<?php
/**
 * Template for Services page
 */

get_header(); ?>

<section class="page-hero py-5 bg-success text-white">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold mb-3">Our Services</h1>
                <p class="lead">Experience premium travel services designed for your comfort and adventure</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Detail Section -->
<section class="services-detail py-5">
    <div class="container">
        <div class="row">
            <!-- Guides Service -->
            <div class="col-lg-6 mb-5">
                <div class="service-detail-card h-100">
                    <div class="service-icon mb-3">
                        <i class="fas fa-user-friends text-success" style="font-size: 3rem;"></i>
                    </div>
                    <h3 class="text-success mb-3">Guides</h3>
                    <h5>Welcome to The Arya Odyssey</h5>
                    <p>Are you passionate about history, art, nature, or education? Do you enjoy engaging with people and sharing stories that inspire curiosity and learning? Join us as a Docent — and help bring our exhibits and experiences to life!</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-success me-2"></i> Expert local knowledge</li>
                        <li><i class="fas fa-check text-success me-2"></i> Multilingual guides available</li>
                        <li><i class="fas fa-check text-success me-2"></i> Cultural storytelling</li>
                        <li><i class="fas fa-check text-success me-2"></i> Safety-certified professionals</li>
                    </ul>
                </div>
            </div>

            <!-- Trekking and Camping Service -->
            <div class="col-lg-6 mb-5">
                <div class="service-detail-card h-100">
                    <div class="service-icon mb-3">
                        <i class="fas fa-mountain text-success" style="font-size: 3rem;"></i>
                    </div>
                    <h3 class="text-success mb-3">Trekking and Camping</h3>
                    <h5>👣 Ready to Start Your Adventure?</h5>
                    <p>Disconnect to reconnect — with nature, with people, and with yourself.</p>
                    <p>Explore majestic mountains, lush forests, sparkling rivers, and starlit skies with our unforgettable trekking and camping experiences.</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-success me-2"></i> Professional camping equipment</li>
                        <li><i class="fas fa-check text-success me-2"></i> Experienced trek leaders</li>
                        <li><i class="fas fa-check text-success me-2"></i> All meals included</li>
                        <li><i class="fas fa-check text-success me-2"></i> Safety gear provided</li>
                    </ul>
                </div>
            </div>

            <!-- Transportation Service -->
            <div class="col-lg-6 mb-5">
                <div class="service-detail-card h-100">
                    <div class="service-icon mb-3">
                        <i class="fas fa-car text-success" style="font-size: 3rem;"></i>
                    </div>
                    <h3 class="text-success mb-3">🚗 Transportation</h3>
                    <p>At AryaOdyssey, we make your journey as smooth as your stay. Whether you're arriving from the airport, heading out for a local tour, or catching an early morning meeting, our reliable transportation services ensure you're always on time and at ease.</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-success me-2"></i> Airport pickup & drop-off</li>
                        <li><i class="fas fa-check text-success me-2"></i> Local sightseeing tours</li>
                        <li><i class="fas fa-check text-success me-2"></i> Well-maintained vehicles</li>
                        <li><i class="fas fa-check text-success me-2"></i> Professional drivers</li>
                    </ul>
                </div>
            </div>

            <!-- Accommodation Service -->
            <div class="col-lg-6 mb-5">
                <div class="service-detail-card h-100">
                    <div class="service-icon mb-3">
                        <i class="fas fa-home text-success" style="font-size: 3rem;"></i>
                    </div>
                    <h3 class="text-success mb-3">🛏️ Accommodation at AryaOdyssey</h3>
                    <p>At AryaOdyssey, we believe your stay should feel like a perfect blend of comfort, convenience, and care. Whether you're here for business, a romantic getaway, or a family vacation, our thoughtfully designed rooms and suites offer the perfect space to relax and recharge.</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-success me-2"></i> Luxury villa accommodations</li>
                        <li><i class="fas fa-check text-success me-2"></i> Mountain view rooms</li>
                        <li><i class="fas fa-check text-success me-2"></i> Modern amenities</li>
                        <li><i class="fas fa-check text-success me-2"></i> 24/7 room service</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section py-5 bg-success text-white">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="fw-bold mb-3">Ready to Plan Your Adventure?</h2>
                <p class="lead mb-4">Contact our expert team to customize your perfect Manali experience</p>
                <div class="cta-buttons">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-light btn-lg me-3">
                        <i class="fas fa-phone"></i> Contact Us
                    </a>
                    <a href="<?php echo esc_url(home_url('/reservation')); ?>" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-calendar-check"></i> Book Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
