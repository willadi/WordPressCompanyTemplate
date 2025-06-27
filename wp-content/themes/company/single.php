<?php get_header(); ?>

    <!-- content area -->
    <div class="container content">
        <h1>Post Here</h1>
        <div class="main block">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/content', get_post_format()); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <?php echo wpautop('Sorry, no posts were found'); ?>
            <?php endif; ?>

            <?php
                $form_args = array(
                        // change the title of send button 
                        'label_submit'=>'Send now',
                        // change the title of the reply section
                        'title_reply'=>'Write a Reply or Comment',
                        // remove "Text or HTML to be displayed after the set of comment 
                        // fields"
                        'comment_notes_after' => '',
                        // redefine your own textarea (the comment body)
                        'comment_field' => '<p class="comment-form-comment">
                        <label for="comment">' . _x( 'Comment', 'noun' ) . '</label>
                        <br /><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">
                        </textarea></p>',
                ); 
                
                comment_form($form_args);
            ?>

        </div>
        <!-- sidebar -->
        <?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>
