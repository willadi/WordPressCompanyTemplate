<?php get_header(); ?>

    <!-- content area -->
    <div class="container content">
        <h1>at the archive</h1>
        <div class="main block">
            <h1 class="page-header">
                Search Results for: <?php echo get_search_query(); ?>
            </h1>
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/content', get_post_format()); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <?php echo wpautop('Sorry, no posts were found'); ?>
            <?php endif; ?>

        </div>
        <!-- sidebar -->
        <?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>
