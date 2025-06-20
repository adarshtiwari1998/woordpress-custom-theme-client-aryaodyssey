<?php
/**
 * Template part for displaying hero section
 *
 * @package AryaOdyssey
 */

$hero_title = aryaodyssey_get_option('aryaodyssey_hero_title', __('Discover the Magic of Manali', 'aryaodyssey'));
$hero_subtitle = aryaodyssey_get_option('aryaodyssey_hero_subtitle', __('Experience the breathtaking beauty of the Himalayas with our luxury accommodations and adventure packages.', 'aryaodyssey'));
$hero_background = aryaodyssey_get_option('aryaodyssey_hero_background', '');
?>

<section class="hero-section">
    <div class="hero-background">
        <?php if ($hero_background) : ?>
            <div class="hero-image" style="background-image: url('<?php echo esc_url($hero_background); ?>')"></div>
        <?php endif; ?>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="container">
                <div class="hero-text text-center">
                    <h1 class="hero-title text-white">
                        <?php echo wp_kses_post($hero_title); ?>
                    </h1>
                    <p class="hero-subtitle text-white">
                        <?php echo wp_kses_post($hero_subtitle); ?>
                    </p>
                    <div class="hero-buttons">
                        <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn btn-primary btn-lg">
                            <?php _e('Explore Services', 'aryaodyssey'); ?>
                            <i data-feather="arrow-right"></i>
                        </a>
                        <a href="<?php echo esc_url(home_url('/reservation')); ?>" class="btn btn-outline btn-lg">
                            <?php _e('Book Now', 'aryaodyssey'); ?>
                            <i data-feather="calendar"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
