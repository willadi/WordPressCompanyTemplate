<?php get_header(); ?>

    <!-- content area -->
    <div class="container content">
        <h1>at the archive</h1>
        <div class="main block">
            <h1 class="page-header">
                <?php 
                    if(is_category()){
                        single_cat_title();
                    } else if(is_author()){
                        the_post();
                        echo 'Archives By Authors: ' .get_the_author();
                        rewind_posts();
                    } else if(is_tag()){
                        single_tag_title();
                    } else if(is_day()){
                        echo 'Archives By Day: ' .get_the_date();
                    } else if(is_month()){
                        echo 'Archives By Month: ' .get_the_date('F Y');
                    } else if(is_year()){
                        echo 'Archives By Year: ' .get_the_date('Y');
                    } else {
                        echo 'Archives';
                    }
                ?>
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
