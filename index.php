<?php get_header(); ?>

<main id="main-content" class="main-content">
    <?php if (have_posts()) : ?>
        <div class="posts-container">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
                    <header class="post-header">
                        <h2 class="post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <div class="post-meta">
                            <span class="post-date"><?php echo get_the_date(); ?></span>
                            <span class="post-author"><?php echo get_the_author(); ?></span>
                        </div>
                    </header>
                    
                    <div class="post-content">
                        <?php the_excerpt(); ?>
                    </div>
                    
                    <footer class="post-footer">
                        <a href="<?php the_permalink(); ?>" class="read-more-btn">
                            <?php esc_html_e('Read More', 'aryaodyssey'); ?>
                        </a>
                    </footer>
                </article>
            <?php endwhile; ?>
            
            <div class="pagination">
                <?php
                the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => __('Previous', 'aryaodyssey'),
                    'next_text' => __('Next', 'aryaodyssey'),
                ));
                ?>
            </div>
        </div>
    <?php else : ?>
        <div class="no-posts">
            <h2><?php esc_html_e('No Posts Found', 'aryaodyssey'); ?></h2>
            <p><?php esc_html_e('Sorry, no posts were found.', 'aryaodyssey'); ?></p>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
