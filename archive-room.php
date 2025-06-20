<?php
/**
 * Template for displaying room archive
 *
 * @package AryaOdyssey
 */

get_header(); ?>

<main id="main" class="site-main rooms-archive">
    
    <!-- Archive Hero -->
    <section class="archive-hero">
        <div class="hero-background">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <div class="container">
                    <div class="hero-text text-center">
                        <h1 class="hero-title text-white">
                            <?php _e('Our Accommodations', 'aryaodyssey'); ?>
                        </h1>
                        <p class="hero-subtitle text-white">
                            <?php _e('Choose from our range of comfortable and luxurious rooms with stunning mountain views', 'aryaodyssey'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rooms Archive Content -->
    <section class="archive-content section-padding">
        <div class="container">
            
            <!-- Filter Bar -->
            <div class="filter-bar">
                <div class="filter-options">
                    <button class="filter-btn active" data-filter="all">
                        <?php _e('All Rooms', 'aryaodyssey'); ?>
                    </button>
                    <?php
                    $room_categories = get_terms(array(
                        'taxonomy' => 'room-category',
                        'hide_empty' => true,
                    ));
                    
                    if ($room_categories && !is_wp_error($room_categories)) :
                        foreach ($room_categories as $category) :
                    ?>
                    <button class="filter-btn" data-filter="<?php echo esc_attr($category->slug); ?>">
                        <?php echo esc_html($category->name); ?>
                    </button>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>
                
                <div class="filter-controls">
                    <div class="price-filter">
                        <label for="price-range"><?php _e('Max Price:', 'aryaodyssey'); ?></label>
                        <select id="price-range" class="filter-select">
                            <option value=""><?php _e('Any Price', 'aryaodyssey'); ?></option>
                            <option value="5000"><?php _e('Under ₹5,000', 'aryaodyssey'); ?></option>
                            <option value="10000"><?php _e('Under ₹10,000', 'aryaodyssey'); ?></option>
                            <option value="15000"><?php _e('Under ₹15,000', 'aryaodyssey'); ?></option>
                        </select>
                    </div>
                    
                    <div class="occupancy-filter">
                        <label for="occupancy-filter"><?php _e('Guests:', 'aryaodyssey'); ?></label>
                        <select id="occupancy-filter" class="filter-select">
                            <option value=""><?php _e('Any Size', 'aryaodyssey'); ?></option>
                            <option value="1"><?php _e('1 Guest', 'aryaodyssey'); ?></option>
                            <option value="2"><?php _e('2 Guests', 'aryaodyssey'); ?></option>
                            <option value="4"><?php _e('4 Guests', 'aryaodyssey'); ?></option>
                            <option value="6"><?php _e('6+ Guests', 'aryaodyssey'); ?></option>
                        </select>
                    </div>
                    
                    <div class="sort-options">
                        <select id="sort-rooms" class="sort-select">
                            <option value="date"><?php _e('Sort by Date', 'aryaodyssey'); ?></option>
                            <option value="price-low"><?php _e('Price: Low to High', 'aryaodyssey'); ?></option>
                            <option value="price-high"><?php _e('Price: High to Low', 'aryaodyssey'); ?></option>
                            <option value="title"><?php _e('Alphabetical', 'aryaodyssey'); ?></option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Rooms Grid -->
            <?php if (have_posts()) : ?>
            <div class="rooms-grid" id="rooms-container">
                <?php while (have_posts()) : the_post(); ?>
                    <?php 
                    $categories = get_the_terms(get_the_ID(), 'room-category');
                    $category_classes = '';
                    if ($categories && !is_wp_error($categories)) {
                        foreach ($categories as $category) {
                            $category_classes .= ' category-' . $category->slug;
                        }
                    }
                    
                    $price = get_post_meta(get_the_ID(), 'room_price', true) ?: 0;
                    $occupancy = get_post_meta(get_the_ID(), 'room_occupancy', true) ?: '2';
                    $occupancy_number = intval(preg_replace('/[^0-9]/', '', $occupancy));
                    ?>
                    <article class="room-item<?php echo $category_classes; ?>" 
                             data-price="<?php echo $price; ?>" 
                             data-title="<?php echo esc_attr(get_the_title()); ?>"
                             data-occupancy="<?php echo $occupancy_number; ?>">
                        <?php get_template_part('template-parts/room-card'); ?>
                    </article>
                <?php endwhile; ?>
            </div>

            <!-- Results Info -->
            <div class="results-info">
                <span id="results-count"><?php echo $wp_query->found_posts; ?></span>
                <?php _e('accommodations found', 'aryaodyssey'); ?>
            </div>

            <!-- Pagination -->
            <div class="archive-pagination">
                <?php
                the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => '<i data-feather="chevron-left"></i>' . __('Previous', 'aryaodyssey'),
                    'next_text' => __('Next', 'aryaodyssey') . '<i data-feather="chevron-right"></i>',
                ));
                ?>
            </div>

            <?php else : ?>
            <!-- No Rooms Found -->
            <div class="no-rooms">
                <div class="no-content-message">
                    <div class="no-content-icon">
                        <i data-feather="home"></i>
                    </div>
                    <h2><?php _e('No Accommodations Found', 'aryaodyssey'); ?></h2>
                    <p><?php _e('Sorry, we couldn\'t find any accommodations matching your criteria. Please try adjusting your filters or contact us for assistance.', 'aryaodyssey'); ?></p>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">
                        <?php _e('Contact Us', 'aryaodyssey'); ?>
                        <i data-feather="arrow-right"></i>
                    </a>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Booking CTA Section -->
    <section class="booking-cta section-padding bg-light">
        <div class="container">
            <div class="cta-content text-center">
                <h2 class="section-title">
                    <?php _e('Ready to Book Your Stay?', 'aryaodyssey'); ?>
                </h2>
                <p class="section-subtitle">
                    <?php _e('Experience the comfort and luxury of our accommodations with breathtaking mountain views', 'aryaodyssey'); ?>
                </p>
                <div class="cta-buttons">
                    <a href="<?php echo esc_url(home_url('/reservation')); ?>" class="btn btn-primary btn-lg">
                        <?php _e('Make Reservation', 'aryaodyssey'); ?>
                        <i data-feather="calendar"></i>
                    </a>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-outline btn-lg">
                        <?php _e('Ask Questions', 'aryaodyssey'); ?>
                        <i data-feather="help-circle"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<style>
.archive-hero {
    height: 60vh;
    min-height: 400px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.archive-hero .hero-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #8B4513 0%, #DEB887 100%);
}

.archive-hero .hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.3);
}

.archive-hero .hero-content {
    position: relative;
    z-index: 2;
}

.hero-title {
    font-size: 3.5rem;
    margin-bottom: 20px;
}

.hero-subtitle {
    font-size: 1.3rem;
    max-width: 600px;
    margin: 0 auto;
}

.filter-bar {
    margin-bottom: 50px;
    padding: 30px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}

.filter-options {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
    margin-bottom: 25px;
}

.filter-btn {
    padding: 10px 20px;
    border: 2px solid #e9ecef;
    background: white;
    color: #666;
    border-radius: 25px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-weight: 500;
}

.filter-btn:hover,
.filter-btn.active {
    border-color: #8B4513;
    background: #8B4513;
    color: white;
}

.filter-controls {
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
    align-items: center;
}

.price-filter,
.occupancy-filter,
.sort-options {
    display: flex;
    align-items: center;
    gap: 10px;
}

.filter-controls label {
    font-weight: 500;
    color: #333;
    white-space: nowrap;
}

.filter-select,
.sort-select {
    padding: 8px 12px;
    border: 2px solid #e9ecef;
    border-radius: 8px;
    background: white;
    color: #666;
    font-weight: 500;
    cursor: pointer;
    min-width: 120px;
}

.filter-select:focus,
.sort-select:focus {
    outline: none;
    border-color: #8B4513;
}

.rooms-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 40px;
    margin-bottom: 40px;
}

.room-item {
    opacity: 1;
    transform: scale(1);
    transition: all 0.3s ease;
}

.room-item.hidden {
    opacity: 0;
    transform: scale(0.8);
    pointer-events: none;
    height: 0;
    margin: 0;
    overflow: hidden;
}

.results-info {
    text-align: center;
    margin-bottom: 40px;
    color: #666;
    font-size: 1.1rem;
}

.results-info #results-count {
    font-weight: 600;
    color: #8B4513;
}

.archive-pagination {
    display: flex;
    justify-content: center;
    margin-top: 60px;
}

.archive-pagination .nav-links {
    display: flex;
    gap: 10px;
    align-items: center;
}

.archive-pagination a,
.archive-pagination span {
    padding: 12px 18px;
    border: 2px solid #e9ecef;
    background: white;
    color: #666;
    text-decoration: none;
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 8px;
}

.archive-pagination a:hover,
.archive-pagination .current {
    border-color: #8B4513;
    background: #8B4513;
    color: white;
}

.archive-pagination .dots {
    border: none;
    background: none;
    color: #999;
}

.no-rooms {
    text-align: center;
    padding: 80px 20px;
}

.no-content-message {
    max-width: 500px;
    margin: 0 auto;
}

.no-content-icon {
    width: 100px;
    height: 100px;
    background: linear-gradient(135deg, #e9ecef 0%, #f8f9fa 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 30px;
}

.no-content-icon i {
    width: 50px;
    height: 50px;
    color: #999;
}

.no-rooms h2 {
    color: #333;
    margin-bottom: 20px;
}

.no-rooms p {
    color: #666;
    margin-bottom: 30px;
    line-height: 1.6;
}

.booking-cta {
    text-align: center;
}

.cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    margin-top: 40px;
}

@media (max-width: 768px) {
    .hero-title {
        font-size: 2.5rem;
    }
    
    .filter-bar {
        padding: 20px;
    }
    
    .filter-controls {
        flex-direction: column;
        align-items: stretch;
        gap: 20px;
    }
    
    .price-filter,
    .occupancy-filter,
    .sort-options {
        justify-content: space-between;
    }
    
    .rooms-grid {
        grid-template-columns: 1fr;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .archive-pagination .nav-links {
        flex-wrap: wrap;
        justify-content: center;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const roomItems = document.querySelectorAll('.room-item');
    const sortSelect = document.getElementById('sort-rooms');
    const priceFilter = document.getElementById('price-range');
    const occupancyFilter = document.getElementById('occupancy-filter');
    const resultsCount = document.getElementById('results-count');
    
    let currentFilter = 'all';
    
    // Filter functionality
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            currentFilter = this.getAttribute('data-filter');
            
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            applyFilters();
        });
    });
    
    // Price and occupancy filters
    if (priceFilter) {
        priceFilter.addEventListener('change', applyFilters);
    }
    
    if (occupancyFilter) {
        occupancyFilter.addEventListener('change', applyFilters);
    }
    
    // Sort functionality
    if (sortSelect) {
        sortSelect.addEventListener('change', function() {
            const sortBy = this.value;
            const container = document.getElementById('rooms-container');
            const items = Array.from(roomItems);
            
            items.sort((a, b) => {
                switch (sortBy) {
                    case 'price-low':
                        return parseInt(a.getAttribute('data-price')) - parseInt(b.getAttribute('data-price'));
                    case 'price-high':
                        return parseInt(b.getAttribute('data-price')) - parseInt(a.getAttribute('data-price'));
                    case 'title':
                        return a.getAttribute('data-title').localeCompare(b.getAttribute('data-title'));
                    default:
                        return 0;
                }
            });
            
            // Reorder items in DOM
            items.forEach(item => {
                container.appendChild(item);
            });
        });
    }
    
    function applyFilters() {
        const maxPrice = priceFilter ? parseInt(priceFilter.value) || Infinity : Infinity;
        const minOccupancy = occupancyFilter ? parseInt(occupancyFilter.value) || 0 : 0;
        let visibleCount = 0;
        
        roomItems.forEach(item => {
            const itemPrice = parseInt(item.getAttribute('data-price')) || 0;
            const itemOccupancy = parseInt(item.getAttribute('data-occupancy')) || 0;
            
            const categoryMatch = currentFilter === 'all' || item.classList.contains('category-' + currentFilter);
            const priceMatch = itemPrice <= maxPrice;
            const occupancyMatch = itemOccupancy >= minOccupancy;
            
            if (categoryMatch && priceMatch && occupancyMatch) {
                item.classList.remove('hidden');
                visibleCount++;
            } else {
                item.classList.add('hidden');
            }
        });
        
        // Update results count
        if (resultsCount) {
            resultsCount.textContent = visibleCount;
        }
    }
});
</script>

<?php get_footer(); ?>
