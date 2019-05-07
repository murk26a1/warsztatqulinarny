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

    <header class="site-header">
        <div class="logo">
            <img src="<?php echo get_theme_file_uri(); ?>/img/ph-logo-w.png" />
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Szkolenia</a></li>
                <li><a href="#">O mnie</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Faq</a></li>
                <li><a href="#">Kontakt</a></li>
            </ul>
            <div class="social">
                <a href="#">fb</a>
                <a href="#">aa</a>
                <a href="#">bb</a>
            </div>
        </nav>
        <div class="basket">
            KK
        </div>


        <button class=" hamburger" aria-label="Menu">
            <span class="hamburger__container" tabindex="-1">
                <span class="hamburger__bars">
                </span>
            </span>
        </button>
    </header>