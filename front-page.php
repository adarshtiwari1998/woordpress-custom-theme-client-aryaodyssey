<?php
/**
 * The front page template file
 */

get_header(); ?>

<!-- Hero Section -->
<section class="hero-section position-relative">
    <div class="hero-background" style="background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3') center/cover;">
        <div class="container h-100 d-flex align-items-center">
            <div class="row w-100">
                <div class="col-lg-8">
                    <h1 class="display-4 text-white fw-bold mb-4">
                        Top 7 Must-Visit Historical Places in Manali
                    </h1>
                    <p class="lead text-white mb-4">
                        Discover the magic of the Himalayas with our expert guides and premium travel services. Experience luxury, adventure, and culture like never before.
                    </p>
                    <div class="hero-buttons">
                        <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn btn-success btn-lg me-3">
                            <i class="fas fa-compass"></i> Explore Services
                        </a>
                        <a href="<?php echo esc_url(home_url('/reservation')); ?>" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-calendar-check"></i> Book Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Historical Places Section -->
<section class="historical-places py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="place-card">
                    <img src="https://images.unsplash.com/photo-1582510003544-4d00b7f74220?ixlib=rb-4.0.3" alt="Hadimba Temple" class="img-fluid rounded">
                    <div class="place-info">
                        <h4 class="text-success">Hadimba Temple</h4>
                        <p>Ancient wooden temple dedicated to Hadimba Devi, surrounded by cedar forests.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="place-card">
                    <img src="https://images.unsplash.com/photo-1571115764595-644a1f56a55c?ixlib=rb-4.0.3" alt="Manu Temple" class="img-fluid rounded">
                    <div class="place-info">
                        <h4 class="text-success">Manu Temple</h4>
                        <p>Sacred temple dedicated to sage Manu, offering stunning mountain views.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="place-card">
                    <div class="place-info">
                        <h4 class="text-success">Nicholas Roerich Art Gallery</h4>
                        <p>Museum showcasing works of the famous Russian artist who lived in the Kullu Valley.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="place-card">
                    <div class="place-info">
                        <h4 class="text-success">Gauri Shankar Temple</h4>
                        <p>Ancient temple complex with intricate stone carvings and spiritual significance.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="place-card">
                    <div class="place-info">
                        <h4 class="text-success">Sultanpur Palace</h4>
                        <p>Historic palace showcasing traditional Himachali architecture and royal heritage.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="place-card">
                    <div class="place-info">
                        <h4 class="text-success">Naggar Castle</h4>
                        <p>Medieval castle turned heritage hotel with panoramic valley views.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Road Trip Section -->
<section class="road-trip-section py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4">
                <img src="https://images.unsplash.com/photo-1547036967-23d11aacaee0?ixlib=rb-4.0.3" alt="Mountain Road Trip" class="img-fluid rounded">
                <div class="experience-badge">
                    <div class="badge-content text-center text-white">
                        <h2 class="fw-bold">25+</h2>
                        <p class="mb-0">Years of Experience</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="text-success mb-4">Exploring Manali's Hidden Road Trip Gems: Offbeat Routes Worth the Adventure</h2>
                <ol class="road-trip-list">
                    <li>Manali to Tirthan Valley</li>
                    <li>Manali to Jalori Pass</li>
                    <li>Manali to Malana</li>
                    <li>Manali to Chandratal</li>
                    <li>Pini Village to Sethan Village</li>
                    <li>A Manali to Barvi Valley</li>
                </ol>
                <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn btn-success">
                    Call Us Now <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <h2 class="text-white fw-bold">Our Services</h2>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="service-item d-flex align-items-center">
                            <i class="fas fa-home text-success me-3" style="font-size: 2rem;"></i>
                            <div>
                                <h5 class="text-success">Accommodation</h5>
                                <p class="text-light mb-0">Luxury stays in premium locations</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="service-item d-flex align-items-center">
                            <i class="fas fa-car text-success me-3" style="font-size: 2rem;"></i>
                            <div>
                                <h5 class="text-success">Transportation</h5>
                                <p class="text-light mb-0">Safe and comfortable travel options</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="service-item d-flex align-items-center">
                            <i class="fas fa-mountain text-success me-3" style="font-size: 2rem;"></i>
                            <div>
                                <h5 class="text-success">Trekking and Camping</h5>
                                <p class="text-light mb-0">Adventure experiences in nature</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="service-item d-flex align-items-center">
                            <i class="fas fa-user-friends text-success me-3" style="font-size: 2rem;"></i>
                            <div>
                                <h5 class="text-success">Guides</h5>
                                <p class="text-light mb-0">Expert local knowledge and stories</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <p class="text-light">The view from Manali is a reminder of the vastness and beauty of the world. Lost in the beauty of the Himalayas, found in the tranquility of Manali.</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Manali Section -->
<section class="why-choose-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="display-5 fw-bold text-success mb-4">Why Choose Manali for Your Next Getaway?</h2>
                <p class="lead">Book now and unlock special discounts! Join us on a journey through Manali's most magical destinations.</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6 mb-4">
                <img src="https://images.unsplash.com/photo-1584464491033-06628f3a6b7b?ixlib=rb-4.0.3" alt="Cultural Heritage" class="img-fluid rounded">
            </div>
            <div class="col-lg-6">
                <div class="why-choose-content">
                    <div class="feature-item mb-4">
                        <h4 class="text-success">Rich Cultural Heritage</h4>
                        <p>Witness the rhythmic beats of folk dances, as locals celebrate age-old customs with colorful attire and lively music.</p>
                    </div>
                    
                    <div class="feature-item mb-4">
                        <h4 class="text-success">Natural Wonders</h4>
                        <p>Wander through dense pine forests, breathe in the crisp mountain air, and witness the serene beauty of the Himalayas.</p>
                    </div>
                    
                    <div class="feature-item">
                        <h4 class="text-success">Warm Hospitality</h4>
                        <p>Feel the genuine warmth of Pahadi hospitality wherever you go.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Travel Packages Section -->
<section class="packages-section py-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-5">
                <h2 class="text-white fw-bold">Our Exclusive Travel Packages!</h2>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="package-card bg-light p-4 rounded h-100">
                            <div class="package-icon mb-3">
                                <i class="fas fa-mountain text-success" style="font-size: 2rem;"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Package 1</h5>
                            <p class="text-muted small mb-3">2 Persons Stay for 2 nights / 3 days</p>
                            <p class="mb-3">Category: Standard</p>
                            <p class="mb-3">Luxury Villa Room with Balcony and Mountain View Breakfast and Dinner Free use of fast Wi-Fi</p>
                            <div class="package-rating mb-3">
                                <span class="text-warning">⭐ ⭐ ⭐</span>
                            </div>
                            <p class="mb-3">Complimentary Bonfire night with music</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-4">
                        <div class="package-card bg-light p-4 rounded h-100">
                            <div class="package-icon mb-3">
                                <i class="fas fa-hotel text-success" style="font-size: 2rem;"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Package 2</h5>
                            <p class="text-muted small mb-3">4 Persons Stay for 2 nights / 3 days</p>
                            <p class="mb-3">Category: 2 Room Set with Mountain View</p>
                            <p class="mb-3">Breakfast & Dinner Free use of fast Wi-Fi</p>
                            <div class="package-rating mb-3">
                                <span class="text-warning">⭐ ⭐ ⭐ ⭐</span>
                            </div>
                            <p class="mb-3">Complimentary Bonfire night with music</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-4">
                        <div class="package-card bg-light p-4 rounded h-100">
                            <div class="package-icon mb-3">
                                <i class="fas fa-crown text-success" style="font-size: 2rem;"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Package 3</h5>
                            <p class="text-muted small mb-3">6-10 Persons Stay for 2 nights / 3 days</p>
                            <p class="mb-3">Category: 3BHK Luxury Villa Room with Balcony and Mountain View Personalized Cook & Full Furnished Kitchen 4 Paid Bedding Free use of fast Wi-Fi</p>
                            <div class="package-rating mb-3">
                                <span class="text-warning">⭐ ⭐ ⭐ ⭐ ⭐</span>
                            </div>
                            <p class="mb-3">Complimentary Bonfire night with music</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
