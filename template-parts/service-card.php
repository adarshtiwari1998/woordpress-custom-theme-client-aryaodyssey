<?php
/**
 * Template part for displaying service cards
 *
 * @package AryaOdyssey
 */

$service_price = get_post_meta(get_the_ID(), 'service_price', true);
$service_duration = get_post_meta(get_the_ID(), 'service_duration', true);
$service_difficulty = get_post_meta(get_the_ID(), 'service_difficulty', true);
$service_categories = get_the_terms(get_the_ID(), 'service-category');
?>

<div class="service-card">
    <?php if (has_post_thumbnail()) : ?>
        <div class="service-image">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('service-card'); ?>
            </a>
            <?php if ($service_categories && !is_wp_error($service_categories)) : ?>
                <div class="service-category">
                    <span class="category-badge"><?php echo esc_html($service_categories[0]->name); ?></span>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    
    <div class="service-content">
        <header class="service-header">
            <h3 class="service-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
        </header>

        <div class="service-excerpt">
            <?php the_excerpt(); ?>
        </div>

        <div class="service-meta">
            <?php if ($service_duration) : ?>
                <span class="service-duration">
                    <i data-feather="clock"></i>
                    <?php echo esc_html($service_duration); ?>
                </span>
            <?php endif; ?>

            <?php if ($service_difficulty) : ?>
                <span class="service-difficulty">
                    <i data-feather="trending-up"></i>
                    <?php echo esc_html($service_difficulty); ?>
                </span>
            <?php endif; ?>

            <?php if ($service_price) : ?>
                <span class="service-price">
                    <i data-feather="tag"></i>
                    ₹<?php echo number_format($service_price); ?>
                </span>
            <?php endif; ?>
        </div>

        <footer class="service-footer">
            <a href="<?php the_permalink(); ?>" class="btn btn-outline">
                <?php _e('Learn More', 'aryaodyssey'); ?>
                <i data-feather="arrow-right"></i>
            </a>
        </footer>
    </div>
</div>

<style>
.service-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    position: relative;
}

.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
}

.service-image {
    position: relative;
    aspect-ratio: 4/3;
    overflow: hidden;
}

.service-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.service-card:hover .service-image img {
    transform: scale(1.1);
}

.service-category {
    position: absolute;
    top: 15px;
    left: 15px;
}

.category-badge {
    background: rgba(45, 80, 22, 0.9);
    color: white;
    padding: 6px 12px;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 500;
}

.service-content {
    padding: 30px;
}

.service-title {
    margin-bottom: 15px;
    font-size: 1.3rem;
}

.service-title a {
    color: #333;
    text-decoration: none;
    transition: color 0.3s ease;
}

.service-title a:hover {
    color: #2d5016;
}

.service-excerpt {
    margin-bottom: 20px;
    color: #666;
    line-height: 1.6;
}

.service-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    margin-bottom: 25px;
    padding-bottom: 20px;
    border-bottom: 1px solid #eee;
}

.service-meta span {
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 0.9rem;
    color: #666;
}

.service-meta i {
    width: 16px;
    height: 16px;
    color: #2d5016;
}

.service-price {
    color: #2d5016 !important;
    font-weight: 600;
    font-size: 1rem !important;
}

.service-footer {
    text-align: center;
}

@media (max-width: 768px) {
    .service-content {
        padding: 20px;
    }
    
    .service-meta {
        flex-direction: column;
        gap: 10px;
    }
}
</style>
