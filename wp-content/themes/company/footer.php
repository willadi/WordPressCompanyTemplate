    <!-- footer -->
    <footer class="main-footer">
        <div class="container">
            <div class="f_left">
                <p>&copy; 2017 - Advanced WP Theme</p>
            </div>
            <div class="f_right">
                <?php
                    // Display the footer menu
                    wp_nav_menu(array(
                        'theme_location' => 'footer',   
                    ));
                ?>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>