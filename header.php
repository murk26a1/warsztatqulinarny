<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package warsztatqulinarny
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142221261-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-142221261-1');
    </script>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<style>
    body {
        overflow: hidden;
    }
</style>

<body <?php body_class(); ?>>

    <div id="preloader">
        <svg class="svg-knives-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 81.899 45.974">
            <defs>
            </defs>
            <g id="Group_27" data-name="Group 27" transform="translate(-128.237 -860.917)">
                <path id="warsztat-qulinarny-01" class="cls-1" d="M0,1.94l31.959-.931L32.048,0h.611V.453a.6.6,0,0,0,.663.623H46.205c1.459,0,2.917-.049,4.373-.043a7.048,7.048,0,0,1,1.513.179,1.992,1.992,0,0,1,1.681,2.277,2.306,2.306,0,0,1-1.75,2.263A2.041,2.041,0,0,1,49.561,4.4c-.231-.646-.5-.891-1.352-.683A39.41,39.41,0,0,1,37.491,4.958c-1.338-.049-2.669-.245-4-.421a1.124,1.124,0,0,1-.663-.447c-.917-1.277-.793-1.021-2.153-1.018Q16.7,3.1,2.713,3.151H2.28c.141.159.222.259.311.349A12.312,12.312,0,0,0,7.406,6.38a25.811,25.811,0,0,0,8.844,1.3c5.232-.058,10.465-.141,15.694-.216h.432V9.343a1.24,1.24,0,0,1-.2.032c-4.2.058-8.4.17-12.6.153A41.642,41.642,0,0,1,10,8.449,19.12,19.12,0,0,1,3.37,5.624,11.563,11.563,0,0,1,.1,2.13,2.142,2.142,0,0,1,0,1.94ZM51.452,4.059a.666.666,0,0,0,.721-.7.666.666,0,0,0-.732-.577.64.64,0,1,0,0,1.271Z" transform="translate(128.237 900.153) rotate(-45)" />
                <path id="warsztat-qulinarny-01-2" data-name="warsztat-qulinarny-01" class="cls-1" d="M0,1.94l31.959-.931L32.048,0h.611V.453a.6.6,0,0,0,.663.623H46.206c1.459,0,2.917-.049,4.373-.043a7.048,7.048,0,0,1,1.513.179,1.992,1.992,0,0,1,1.681,2.277,2.306,2.306,0,0,1-1.75,2.263A2.041,2.041,0,0,1,49.561,4.4c-.231-.646-.5-.891-1.352-.683A39.411,39.411,0,0,1,37.491,4.958c-1.338-.049-2.669-.245-4-.421a1.124,1.124,0,0,1-.663-.447c-.917-1.277-.793-1.021-2.153-1.018Q16.7,3.1,2.713,3.151H2.28c.141.159.222.259.311.349A12.312,12.312,0,0,0,7.406,6.38a25.811,25.811,0,0,0,8.844,1.3c5.232-.058,10.465-.141,15.694-.216h.432V9.343a1.24,1.24,0,0,1-.2.032c-4.2.058-8.4.17-12.6.153A41.642,41.642,0,0,1,10,8.449,19.12,19.12,0,0,1,3.37,5.624,11.563,11.563,0,0,1,.1,2.13,2.142,2.142,0,0,1,0,1.94ZM51.452,4.059a.666.666,0,0,0,.721-.7.666.666,0,0,0-.732-.577.64.64,0,1,0,0,1.271Z" transform="translate(197.817 902.766) rotate(180)" />
                <path id="warsztat-qulinarny-01-3" data-name="warsztat-qulinarny-01" class="cls-1" d="M0,1.94l31.959-.931L32.048,0h.611V.453a.6.6,0,0,0,.663.623H46.205c1.459,0,2.917-.049,4.373-.043a7.048,7.048,0,0,1,1.513.179,1.992,1.992,0,0,1,1.681,2.277,2.306,2.306,0,0,1-1.75,2.263A2.041,2.041,0,0,1,49.561,4.4c-.231-.646-.5-.891-1.352-.683A39.41,39.41,0,0,1,37.491,4.958c-1.338-.049-2.669-.245-4-.421a1.124,1.124,0,0,1-.663-.447c-.917-1.277-.793-1.021-2.153-1.018Q16.7,3.1,2.713,3.151H2.28c.141.159.222.259.311.349A12.312,12.312,0,0,0,7.406,6.38a25.81,25.81,0,0,0,8.844,1.3c5.232-.058,10.465-.141,15.694-.216h.432V9.343a1.239,1.239,0,0,1-.2.032c-4.2.058-8.4.17-12.6.153A41.642,41.642,0,0,1,10,8.45,19.119,19.119,0,0,1,3.37,5.624,11.563,11.563,0,0,1,.1,2.13,2.142,2.142,0,0,1,0,1.94ZM51.452,4.059a.666.666,0,0,0,.721-.7.666.666,0,0,0-.732-.577.64.64,0,1,0,0,1.271Z" transform="translate(172.114 860.917) rotate(45)" />
            </g>
        </svg>
        <div id="status" style="background-image: url('<?php echo get_theme_file_uri(); ?>/img/preloader2.svg');">&nbsp;</div>
    </div>


    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v3.3"></script>

    <header class="site-header">
        <div class="logo">

            <?php the_custom_logo() ?>
        </div>
        <nav>
            <ul>
                <li class="menu_li"><a href="<?php echo site_url(); ?>">Home</a></li>
                <li class="menu_szkolenia">
                    <a class="menu_szkolenia_link" href="<?php echo site_url(); ?>/szkolenia">Szkolenia</a><i class="fas fa-caret-down"></i>
                    <ul>
                        <?php
                        $szkolenia = new WP_Query(array(
                            'posts_per_page' => -1,
                            'post_type' => 'szkolenia',
                            'order' => 'asc'
                        ));
                        while ($szkolenia->have_posts()) : $szkolenia->the_post(); ?>
                            <li><a href="<?php the_permalink(); ?>">
                                    <?php
                                    if (!wp_is_mobile()) { ?>
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    <?php } ?>
                                    <?php the_title(); ?></a></li>
                        <?php endwhile; ?>
                    </ul>
                </li>
                <li class="menu_li"><a href="<?php echo site_url(); ?>/faq">FAQ</a></li>
                <li class="menu_li"><a href="<?php echo site_url(); ?>/o-mnie">O mnie</a></li>
                <li class="menu_li"><a href="<?php echo site_url(); ?>/blog">Blog</a></li>
                <li class="menu_li"><a href="<?php echo site_url(); ?>/kontakt">Kontakt</a></li>
            </ul>
            <div class="social">
                <a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <a href="<?php the_field('instagram', 'option'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="<?php the_field('twitter', 'option'); ?>" target="_blank"><i class="fab fa-twitter-square"></i></a>
                <a href="mailto:<?php the_field('e-mail', 'option'); ?>"><i class="far fa-envelope"></i></a>
            </div>
        </nav>
        <div class="basket">

            <?php
            if (function_exists('warsztatqulinarny_woocommerce_header_cart')) {
                warsztatqulinarny_woocommerce_header_cart();
            }
            ?>

        </div>


        <button class=" hamburger" aria-label="Menu">
            <span class="hamburger__container" tabindex="-1">
                <span class="hamburger__bars">
                </span>
            </span>
        </button>
    </header>