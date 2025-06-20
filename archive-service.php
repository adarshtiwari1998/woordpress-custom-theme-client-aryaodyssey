<?php
/**
 * Template for displaying service archive
 *
 * @package AryaOdyssey
 */

get_header(); ?>

<main id="main" class="site-main services-archive">
    
    <!-- Archive Hero -->
    <section class="archive-hero">
        <div class="hero-background">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <div class="container">
                    <div class="hero-text text-center">
                        <h1 class="hero-title text-white">
                            <?php _e('Our Services', 'aryaodyssey'); ?>
                        </h1>
                        <p class="hero-subtitle text-white">
                            <?php _e('Discover our range of adventure and hospitality services in Manali', 'aryaodyssey'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Archive Content -->
    <section class="archive-content section-padding">
        <div class="container">
            
            <!-- Filter Bar -->
            <div class="filter-bar">
                <div class="filter-options">
                    <button class="filter-btn active" data-filter="all">
                        <?php _e('All Services', 'aryaodyssey'); ?>
                    </button>
                    <?php
                    $service_categories = get_terms(array(
                        'taxonomy' => 'service-category',
                        'hide_empty' => true,
                    ));
                    
                    if ($service_categories && !is_wp_error($service_categories)) :
                        foreach ($service_categories as $category) :
                    ?>
                    <button class="filter-btn" data-filter="<?php echo esc_attr($category->slug); ?>">
                        <?php echo esc_html($category->name); ?>
                    </button>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>
                
                <div class="sort-options">
                    <select id="sort-services" class="sort-select">
                        <option value="date"><?php _e('Sort by Date', 'aryaodyssey'); ?></option>
                        <option value="price-low"><?php _e('Price: Low to High', 'aryaodyssey'); ?></option>
                        <option value="price-high"><?php _e('Price: High to Low', 'aryaodyssey'); ?></option>
                        <option value="title"><?php _e('Alphabetical', 'aryaodyssey'); ?></option>
                    </select>
                </div>
            </div>

            <!-- Services Grid -->
            <?php if (have_posts()) : ?>
            <div class="services-grid" id="services-container">
                <?php while (have_posts()) : the_post(); ?>
                    <?php 
                    $categories = get_the_terms(get_the_ID(), 'service-category');
                    $category_classes = '';
                    if ($categories && !is_wp_error($categories)) {
                        foreach ($categories as $category) {
                            $category_classes .= ' category-' . $category->slug;
                        }
                    }
                    ?>
                    <article class="service-item<?php echo $category_classes; ?>" data-price="<?php echo get_post_meta(get_the_ID(), 'service_price', true) ?: 0; ?>" data-title="<?php echo esc_attr(get_the_title()); ?>">
                        <?php get_template_part('template-parts/service-card'); ?>
                    </article>
                <?php endwhile; ?>
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
            <!-- No Services Found -->
            <div class="no-services">
                <div class="no-content-message">
                    <div class="no-content-icon">
                        <i data-feather="search"></i>
                    </div>
                    <h2><?php _e('No Services Found', 'aryaodyssey'); ?></h2>
                    <p><?php _e('Sorry, we couldn\'t find any services matching your criteria. Please try adjusting your filters or check back later.', 'aryaodyssey'); ?></p>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">
                        <?php _e('Contact Us', 'aryaodyssey'); ?>
                        <i data-feather="arrow-right"></i>
                    </a>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- CTA Section -->
    <?php get_template_part('template-parts/cta-section'); ?>

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
    background: linear-gradient(135deg, #2d5016 0%, #4a7c59 50%, #7ba05b 100%);
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
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 50px;
    padding: 30px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    flex-wrap: wrap;
    gap: 20px;
}

.filter-options {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
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
    border-color: #2d5016;
    background: #2d5016;
    color: white;
}

.sort-select {
    padding: 10px 15px;
    border: 2px solid #e9ecef;
    border-radius: 8px;
    background: white;
    color: #666;
    font-weight: 500;
    cursor: pointer;
}

.sort-select:focus {
    outline: none;
    border-color: #2d5016;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 40px;
    margin-bottom: 60px;
}

.service-item {
    opacity: 1;
    transform: scale(1);
    transition: all 0.3s ease;
}

.service-item.hidden {
    opacity: 0;
    transform: scale(0.8);
    pointer-events: none;
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
    border-color: #2d5016;
    background: #2d5016;
    color: white;
}

.archive-pagination .dots {
    border: none;
    background: none;
    color: #999;
}

.no-services {
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

.no-services h2 {
    color: #333;
    margin-bottom: 20px;
}

.no-services p {
    color: #666;
    margin-bottom: 30px;
    line-height: 1.6;
}

@media (max-width: 768px) {
    .hero-title {
        font-size: 2.5rem;
    }
    
    .filter-bar {
        flex-direction: column;
        align-items: stretch;
    }
    
    .filter-options {
        justify-content: center;
    }
    
    .services-grid {
        grid-template-columns: 1fr;
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
    const serviceItems = document.querySelectorAll('.service-item');
    const sortSelect = document.getElementById('sort-services');
    
    // Filter functionality
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Filter items
            serviceItems.forEach(item => {
                if (filter === 'all' || item.classList.contains('category-' + filter)) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
        });
    });
    
    // Sort functionality
    if (sortSelect) {
        sortSelect.addEventListener('change', function() {
            const sortBy = this.value;
            const container = document.getElementById('services-container');
            const items = Array.from(serviceItems).filter(item => !item.classList.contains('hidden'));
            
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
});
</script>

<?php get_footer(); ?>
