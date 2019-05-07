<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package warsztatqulinarny
 */

?>


<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-3 col-md-2">
                <img src="<?php echo get_theme_file_uri(); ?>/img/ph-logo.png" />
            </div>
            <div class="col-8 col-md-5 wrapper">
                <h3>Warsztat Qulinarny</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate non libero vel aliquam. </p>
                <ul>
                    <li>kontakt@warsztatqulinarny.pl</li>
                    <li>123 456 789</li>
                    <li>30-001 Kraków, Rynek 1</li>
                </ul>
            </div>

        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="col-12">
            <span>Copyright © 2019 warsztatqulinarny.pl</span>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>