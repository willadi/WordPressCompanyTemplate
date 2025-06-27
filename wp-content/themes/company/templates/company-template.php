<?php
/*
    Template Name: Company Layout
*/

get_header(); ?>

    <!-- content area -->
    <div class="container content">
        <h1>Page Here</h1>
        <div class="main block">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <?php if(page_is_parent() || $post->post_parent > 0): ?>
                        <nav class="nav sub-nav">
                            <ul>
                                <span class="parent-link"><a href="<?php echo 
                                    get_the_permalink(get_top_parent()); ?>"><?php
                                    echo get_the_title(get_top_parent()); ?></a>
                                </span>
                                <?php
                                    $args = array(
                                        'child_of' => get_top_parent(),
                                        'title_li' => ''
                                    );
                                ?>
                                <?php wp_list_pages($args); ?>
                            </ul>
                        </nav>
                    <?php endif; ?>
                    <article class="page">
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
