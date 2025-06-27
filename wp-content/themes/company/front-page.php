<?php get_header(); ?>

    <!-- content area -->
    <div class="container content">
        <h1>Page Here</h1>
        <div class="block">
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
        <?php if(is_active_sidebar('box1')) : ?>
            <?php dynamic_sidebar('box1'); ?>
        <?php endif; ?>
        
        <?php if(is_active_sidebar('box2')) : ?>
            <?php dynamic_sidebar('box2'); ?>
        <?php endif; ?>
        
        <?php if(is_active_sidebar('box3')) : ?>
            <?php dynamic_sidebar('box3'); ?>
        <?php endif; ?>
        
    </div>

<?php get_footer(); ?>
