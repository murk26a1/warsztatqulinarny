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
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
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
                    <a class="menu_szkolenia_link" href="<?php echo site_url(); ?>/szkolenia">Szkolenia</a>
                    <ul>
                        <?php
                        $szkolenia = new WP_Query(array(
                            'posts_per_page' => -1,
                            'post_type' => 'szkolenia'
                        ));
                        while ($szkolenia->have_posts()) : $szkolenia->the_post(); ?>
                            <li><a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail');?><?php the_title();?></a></li>
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