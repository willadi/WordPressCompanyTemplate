<?php get_header(); ?>

    <!-- content area -->
    <div class="container content">
        <h1>Page Here</h1>
        <div class="main block">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <article class="post">
                        <h2><?php the_title(); ?></h2>
                        
                        <?php the_content(); ?>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <?php echo wpautop('Sorry, no posts were found'); ?>
            <?php endif; ?>

        </div>
        <!-- sidebar -->
        <?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>
