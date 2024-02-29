<footer>
    <img src="logo.png" alt="Footer Logo" class="footer-logo">

    <div class="footer-links">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer',
            'menu_id' => 'footer-menu',
             // If you want to wrap the menu in a container, set it to 'nav' or 'div'.
        ));
        ?>
        <!--<ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul> -->
    </div>
    <div class="social-icons">
        <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
<script src="script.js"></script>
</body>
</html>
<?php
// Get the site layout setting value
$site_layout = get_theme_mod('site_layout', 'full-width');

// Output the appropriate CSS class based on the setting value
if ($site_layout == 'boxed') {
    echo '<div class="boxed-layout">';
}

// Your theme content goes here

if ($site_layout == 'boxed') {
    echo '</div><!-- .boxed-layout -->';
}
?>
