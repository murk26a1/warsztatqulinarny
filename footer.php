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
            <div class="col-12 logo">
                <?php the_custom_logo() ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="social">
                    <a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    <a href="<?php the_field('instagram', 'option'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="<?php the_field('twitter', 'option'); ?>" target="_blank"><i class="fab fa-twitter-square"></i></a>
                    <a href="mailto:<?php the_field('e-mail', 'option'); ?>"><i class="far fa-envelope"></i></a>
                </div>
            </div>
        </div>
        <div class="row footer-info">
            <div class="col-12 col-md-4 wrapper">
                <h3>Warsztat Qulinarny</h3>
                <p><?php the_field('opis', 'option'); ?></p>
            </div>
            <div class="col-12 col-md-4 wrapper">
                <h3>Kontakt</h3>
                <ul>
                    <li><i class="far fa-envelope"></i><a href="mailto:<?php the_field('e-mail', 'option'); ?>"><?php the_field('e-mail', 'option'); ?></a></li>
                    <li><i class="fas fa-phone"></i><a href="tel:<?php the_field('telefon', 'option'); ?>"><?php the_field('telefon', 'option'); ?></a></li>
                    <li><i class="fas fa-home"></i><?php the_field('adres', 'option'); ?></li>
                </ul>
            </div>
            <div class="col-12 col-md-4 wrapper">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2561.312902567514!2d19.935162815837085!3d50.06170142318025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165b0df90f6453%3A0xbb2e110fa28d685b!2zUnluZWsgR8WCw7N3bnksIDMxLTAwMCBLcmFrw7N3!5e0!3m2!1spl!2spl!4v1557427176032!5m2!1spl!2spl" width="350" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="col-12">
            <span>Copyright © 2019 warsztatqulinarny.pl</span>
        </div>
    </div>
</footer>
<script>
var lazyLoadInstance = new LazyLoad({
    elements_selector: ".lazy",
});
</script>
<?php wp_footer(); ?>

</body>

</html>