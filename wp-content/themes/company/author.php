<?php get_header(); ?>

    <!-- content area -->
    <div class="container content">
        <h1>Posts by <?php the_author(); ?></h1>
        <?php if(get_the_author_meta('description')) : ?>
            <div class="author-description">
                <h2>About the Author</h2>
                <p><?php echo get_the_author_meta('description'); ?></p>
            </div>
        <?php endif; ?>
        <div class="main block">
            <?php if(have_posts()) : ?>

                <?php while(have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/content', get_post_format()); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <?php echo wpautop('Sorry, no posts were found'); ?>
            <?php endif; ?>

        </div>
        <!-- sidebar -->
        <div class="side">
            <div class="block">
                <h3>Sidebar Head</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Nam vel diam hendrerit erat fermentum aliquet sed eget arcu.</p>
                <a class="button">More</a>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
