<?php
/**
 * Front-page
 */

get_header();
?>

<main>
    <?php
    while (have_posts()) {
        the_post();
        ?>

        <?php
        if (wp_is_mobile()) {
            $img = get_theme_file_uri() . "/img/banner_m.jpg";
        } else {
            $img = get_theme_file_uri() . "/img/banner.jpg";
        }
        ?>

        <section id="section-banner" style="background-image: url('<?php echo $img; ?>');">


            <h1><span class="red">Wa</span>rsztat <span class="margin"><span class="red">Qu</span>linarny</span></h1>
            <div class="wrapper">
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                <div class="double-btn">
                    <a href="google.com" class="m-btn m-btn-w">szkolenia</a>
                    <a href="google.com" class="m-btn">o mnie</a>
                </div>
            </div>


            <div class="divider">
                <svg width="100%" height="350" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">>
                    <path stroke="null" id="svg_wave" d="m-0.74801,78.23287c24.47889,15.71617 72.04526,-69.46796 128.79126,40.68002l-64.81288,0l-64.53472,0z" />
                </svg>
            </div>
        </section>



        <section id="section-courses">
            <div class="container courses">
                <div class="row">
                    <div class="col-12">
                        <div class="header">
                            <svg class="svg-knives" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 81.899 45.974">
                                <defs>
                                </defs>
                                <g id="Group_27" data-name="Group 27" transform="translate(-128.237 -860.917)">
                                    <path id="warsztat-qulinarny-01" class="cls-1" d="M0,1.94l31.959-.931L32.048,0h.611V.453a.6.6,0,0,0,.663.623H46.205c1.459,0,2.917-.049,4.373-.043a7.048,7.048,0,0,1,1.513.179,1.992,1.992,0,0,1,1.681,2.277,2.306,2.306,0,0,1-1.75,2.263A2.041,2.041,0,0,1,49.561,4.4c-.231-.646-.5-.891-1.352-.683A39.41,39.41,0,0,1,37.491,4.958c-1.338-.049-2.669-.245-4-.421a1.124,1.124,0,0,1-.663-.447c-.917-1.277-.793-1.021-2.153-1.018Q16.7,3.1,2.713,3.151H2.28c.141.159.222.259.311.349A12.312,12.312,0,0,0,7.406,6.38a25.811,25.811,0,0,0,8.844,1.3c5.232-.058,10.465-.141,15.694-.216h.432V9.343a1.24,1.24,0,0,1-.2.032c-4.2.058-8.4.17-12.6.153A41.642,41.642,0,0,1,10,8.449,19.12,19.12,0,0,1,3.37,5.624,11.563,11.563,0,0,1,.1,2.13,2.142,2.142,0,0,1,0,1.94ZM51.452,4.059a.666.666,0,0,0,.721-.7.666.666,0,0,0-.732-.577.64.64,0,1,0,0,1.271Z" transform="translate(128.237 900.153) rotate(-45)" />
                                    <path id="warsztat-qulinarny-01-2" data-name="warsztat-qulinarny-01" class="cls-1" d="M0,1.94l31.959-.931L32.048,0h.611V.453a.6.6,0,0,0,.663.623H46.206c1.459,0,2.917-.049,4.373-.043a7.048,7.048,0,0,1,1.513.179,1.992,1.992,0,0,1,1.681,2.277,2.306,2.306,0,0,1-1.75,2.263A2.041,2.041,0,0,1,49.561,4.4c-.231-.646-.5-.891-1.352-.683A39.411,39.411,0,0,1,37.491,4.958c-1.338-.049-2.669-.245-4-.421a1.124,1.124,0,0,1-.663-.447c-.917-1.277-.793-1.021-2.153-1.018Q16.7,3.1,2.713,3.151H2.28c.141.159.222.259.311.349A12.312,12.312,0,0,0,7.406,6.38a25.811,25.811,0,0,0,8.844,1.3c5.232-.058,10.465-.141,15.694-.216h.432V9.343a1.24,1.24,0,0,1-.2.032c-4.2.058-8.4.17-12.6.153A41.642,41.642,0,0,1,10,8.449,19.12,19.12,0,0,1,3.37,5.624,11.563,11.563,0,0,1,.1,2.13,2.142,2.142,0,0,1,0,1.94ZM51.452,4.059a.666.666,0,0,0,.721-.7.666.666,0,0,0-.732-.577.64.64,0,1,0,0,1.271Z" transform="translate(197.817 902.766) rotate(180)" />
                                    <path id="warsztat-qulinarny-01-3" data-name="warsztat-qulinarny-01" class="cls-1" d="M0,1.94l31.959-.931L32.048,0h.611V.453a.6.6,0,0,0,.663.623H46.205c1.459,0,2.917-.049,4.373-.043a7.048,7.048,0,0,1,1.513.179,1.992,1.992,0,0,1,1.681,2.277,2.306,2.306,0,0,1-1.75,2.263A2.041,2.041,0,0,1,49.561,4.4c-.231-.646-.5-.891-1.352-.683A39.41,39.41,0,0,1,37.491,4.958c-1.338-.049-2.669-.245-4-.421a1.124,1.124,0,0,1-.663-.447c-.917-1.277-.793-1.021-2.153-1.018Q16.7,3.1,2.713,3.151H2.28c.141.159.222.259.311.349A12.312,12.312,0,0,0,7.406,6.38a25.81,25.81,0,0,0,8.844,1.3c5.232-.058,10.465-.141,15.694-.216h.432V9.343a1.239,1.239,0,0,1-.2.032c-4.2.058-8.4.17-12.6.153A41.642,41.642,0,0,1,10,8.45,19.119,19.119,0,0,1,3.37,5.624,11.563,11.563,0,0,1,.1,2.13,2.142,2.142,0,0,1,0,1.94ZM51.452,4.059a.666.666,0,0,0,.721-.7.666.666,0,0,0-.732-.577.64.64,0,1,0,0,1.271Z" transform="translate(172.114 860.917) rotate(45)" />
                                </g>
                            </svg>
                            <h2><?php the_field('section_about_h'); ?></h2>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <?php get_template_part('template-parts/courses', get_post_type()); ?>


            <?php
            while (have_posts()) {
                the_post();
                ?>
        </section>
        <section id="section-about" class="overf">
            <div class="container">
                <div class="row row-border">
                    <div class="col-12 col-md-7 wrapper">
                        <div class="header">
                            <svg class="svg-knives" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 81.899 45.974">
                                <defs>
                                </defs>
                                <g id="Group_27" data-name="Group 27" transform="translate(-128.237 -860.917)">
                                    <path id="warsztat-qulinarny-01" class="cls-1" d="M0,1.94l31.959-.931L32.048,0h.611V.453a.6.6,0,0,0,.663.623H46.205c1.459,0,2.917-.049,4.373-.043a7.048,7.048,0,0,1,1.513.179,1.992,1.992,0,0,1,1.681,2.277,2.306,2.306,0,0,1-1.75,2.263A2.041,2.041,0,0,1,49.561,4.4c-.231-.646-.5-.891-1.352-.683A39.41,39.41,0,0,1,37.491,4.958c-1.338-.049-2.669-.245-4-.421a1.124,1.124,0,0,1-.663-.447c-.917-1.277-.793-1.021-2.153-1.018Q16.7,3.1,2.713,3.151H2.28c.141.159.222.259.311.349A12.312,12.312,0,0,0,7.406,6.38a25.811,25.811,0,0,0,8.844,1.3c5.232-.058,10.465-.141,15.694-.216h.432V9.343a1.24,1.24,0,0,1-.2.032c-4.2.058-8.4.17-12.6.153A41.642,41.642,0,0,1,10,8.449,19.12,19.12,0,0,1,3.37,5.624,11.563,11.563,0,0,1,.1,2.13,2.142,2.142,0,0,1,0,1.94ZM51.452,4.059a.666.666,0,0,0,.721-.7.666.666,0,0,0-.732-.577.64.64,0,1,0,0,1.271Z" transform="translate(128.237 900.153) rotate(-45)" />
                                    <path id="warsztat-qulinarny-01-2" data-name="warsztat-qulinarny-01" class="cls-1" d="M0,1.94l31.959-.931L32.048,0h.611V.453a.6.6,0,0,0,.663.623H46.206c1.459,0,2.917-.049,4.373-.043a7.048,7.048,0,0,1,1.513.179,1.992,1.992,0,0,1,1.681,2.277,2.306,2.306,0,0,1-1.75,2.263A2.041,2.041,0,0,1,49.561,4.4c-.231-.646-.5-.891-1.352-.683A39.411,39.411,0,0,1,37.491,4.958c-1.338-.049-2.669-.245-4-.421a1.124,1.124,0,0,1-.663-.447c-.917-1.277-.793-1.021-2.153-1.018Q16.7,3.1,2.713,3.151H2.28c.141.159.222.259.311.349A12.312,12.312,0,0,0,7.406,6.38a25.811,25.811,0,0,0,8.844,1.3c5.232-.058,10.465-.141,15.694-.216h.432V9.343a1.24,1.24,0,0,1-.2.032c-4.2.058-8.4.17-12.6.153A41.642,41.642,0,0,1,10,8.449,19.12,19.12,0,0,1,3.37,5.624,11.563,11.563,0,0,1,.1,2.13,2.142,2.142,0,0,1,0,1.94ZM51.452,4.059a.666.666,0,0,0,.721-.7.666.666,0,0,0-.732-.577.64.64,0,1,0,0,1.271Z" transform="translate(197.817 902.766) rotate(180)" />
                                    <path id="warsztat-qulinarny-01-3" data-name="warsztat-qulinarny-01" class="cls-1" d="M0,1.94l31.959-.931L32.048,0h.611V.453a.6.6,0,0,0,.663.623H46.205c1.459,0,2.917-.049,4.373-.043a7.048,7.048,0,0,1,1.513.179,1.992,1.992,0,0,1,1.681,2.277,2.306,2.306,0,0,1-1.75,2.263A2.041,2.041,0,0,1,49.561,4.4c-.231-.646-.5-.891-1.352-.683A39.41,39.41,0,0,1,37.491,4.958c-1.338-.049-2.669-.245-4-.421a1.124,1.124,0,0,1-.663-.447c-.917-1.277-.793-1.021-2.153-1.018Q16.7,3.1,2.713,3.151H2.28c.141.159.222.259.311.349A12.312,12.312,0,0,0,7.406,6.38a25.81,25.81,0,0,0,8.844,1.3c5.232-.058,10.465-.141,15.694-.216h.432V9.343a1.239,1.239,0,0,1-.2.032c-4.2.058-8.4.17-12.6.153A41.642,41.642,0,0,1,10,8.45,19.119,19.119,0,0,1,3.37,5.624,11.563,11.563,0,0,1,.1,2.13,2.142,2.142,0,0,1,0,1.94ZM51.452,4.059a.666.666,0,0,0,.721-.7.666.666,0,0,0-.732-.577.64.64,0,1,0,0,1.271Z" transform="translate(172.114 860.917) rotate(45)" />
                                </g>
                            </svg>
                            <h2>O szkoleniach</h2>
                        </div>
                        <div class="wrapper-text">
                            <?php the_field('section_about_p'); ?>
                        </div>
                    </div>
                    <div class="col-md-5 d-none d-md-block wrapper-photos">
                        <div class="photos" id="photo3" style="background-image: url('<?php echo get_theme_file_uri(); ?>/img/ph-sp.jpg');">
                        </div>
                        <div class="photos" id="photo2" style="background-image: url('<?php echo get_theme_file_uri(); ?>/img/ph-sp.jpg');">
                        </div>
                        <div class="photos" id="photo1" style="background-image: url('<?php echo get_theme_file_uri(); ?>/img/ph-sp.jpg');">
                        </div>
                    </div>
                </div>
            </div>
            <?php $img = get_theme_file_uri(); ?>
            <div class="ill cebula" style="background-image: url('<?php echo $img; ?>/img/ill/small/cebula.png');"></div>
            <?php $img = get_theme_file_uri(); ?>
            <div class="ill lisc" style="background-image: url('<?php echo $img; ?>/img/ill/small/lisc.png');"></div>
            <?php $img = get_theme_file_uri(); ?>
            <div class="ill lisc2" style="background-image: url('<?php echo $img; ?>/img/ill/small/lisc.png');"></div>
            <?php $img = get_theme_file_uri(); ?>
            <div class="ill papryka" style="background-image: url('<?php echo $img; ?>/img/ill/small/papryka.png');"></div>
            <?php $img = get_theme_file_uri(); ?>
            <div class="ill ziemniak" style="background-image: url('<?php echo $img; ?>/img/ill/small/ziemniak.png');"></div>
            <?php $img = get_theme_file_uri(); ?>
            <div class="bg-image deska" style="background-image: url('<?php echo $img; ?>/img/ill/deska.png');"></div>

        </section>




        <section id="section-black-bg">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 offset-md-6">
                            <svg class="svg-knives" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 81.899 45.974">
                                <defs>
                                </defs>
                                <g id="Group_27" data-name="Group 27" transform="translate(-128.237 -860.917)">
                                    <path id="warsztat-qulinarny-01" class="cls-1" d="M0,1.94l31.959-.931L32.048,0h.611V.453a.6.6,0,0,0,.663.623H46.205c1.459,0,2.917-.049,4.373-.043a7.048,7.048,0,0,1,1.513.179,1.992,1.992,0,0,1,1.681,2.277,2.306,2.306,0,0,1-1.75,2.263A2.041,2.041,0,0,1,49.561,4.4c-.231-.646-.5-.891-1.352-.683A39.41,39.41,0,0,1,37.491,4.958c-1.338-.049-2.669-.245-4-.421a1.124,1.124,0,0,1-.663-.447c-.917-1.277-.793-1.021-2.153-1.018Q16.7,3.1,2.713,3.151H2.28c.141.159.222.259.311.349A12.312,12.312,0,0,0,7.406,6.38a25.811,25.811,0,0,0,8.844,1.3c5.232-.058,10.465-.141,15.694-.216h.432V9.343a1.24,1.24,0,0,1-.2.032c-4.2.058-8.4.17-12.6.153A41.642,41.642,0,0,1,10,8.449,19.12,19.12,0,0,1,3.37,5.624,11.563,11.563,0,0,1,.1,2.13,2.142,2.142,0,0,1,0,1.94ZM51.452,4.059a.666.666,0,0,0,.721-.7.666.666,0,0,0-.732-.577.64.64,0,1,0,0,1.271Z" transform="translate(128.237 900.153) rotate(-45)" />
                                    <path id="warsztat-qulinarny-01-2" data-name="warsztat-qulinarny-01" class="cls-1" d="M0,1.94l31.959-.931L32.048,0h.611V.453a.6.6,0,0,0,.663.623H46.206c1.459,0,2.917-.049,4.373-.043a7.048,7.048,0,0,1,1.513.179,1.992,1.992,0,0,1,1.681,2.277,2.306,2.306,0,0,1-1.75,2.263A2.041,2.041,0,0,1,49.561,4.4c-.231-.646-.5-.891-1.352-.683A39.411,39.411,0,0,1,37.491,4.958c-1.338-.049-2.669-.245-4-.421a1.124,1.124,0,0,1-.663-.447c-.917-1.277-.793-1.021-2.153-1.018Q16.7,3.1,2.713,3.151H2.28c.141.159.222.259.311.349A12.312,12.312,0,0,0,7.406,6.38a25.811,25.811,0,0,0,8.844,1.3c5.232-.058,10.465-.141,15.694-.216h.432V9.343a1.24,1.24,0,0,1-.2.032c-4.2.058-8.4.17-12.6.153A41.642,41.642,0,0,1,10,8.449,19.12,19.12,0,0,1,3.37,5.624,11.563,11.563,0,0,1,.1,2.13,2.142,2.142,0,0,1,0,1.94ZM51.452,4.059a.666.666,0,0,0,.721-.7.666.666,0,0,0-.732-.577.64.64,0,1,0,0,1.271Z" transform="translate(197.817 902.766) rotate(180)" />
                                    <path id="warsztat-qulinarny-01-3" data-name="warsztat-qulinarny-01" class="cls-1" d="M0,1.94l31.959-.931L32.048,0h.611V.453a.6.6,0,0,0,.663.623H46.205c1.459,0,2.917-.049,4.373-.043a7.048,7.048,0,0,1,1.513.179,1.992,1.992,0,0,1,1.681,2.277,2.306,2.306,0,0,1-1.75,2.263A2.041,2.041,0,0,1,49.561,4.4c-.231-.646-.5-.891-1.352-.683A39.41,39.41,0,0,1,37.491,4.958c-1.338-.049-2.669-.245-4-.421a1.124,1.124,0,0,1-.663-.447c-.917-1.277-.793-1.021-2.153-1.018Q16.7,3.1,2.713,3.151H2.28c.141.159.222.259.311.349A12.312,12.312,0,0,0,7.406,6.38a25.81,25.81,0,0,0,8.844,1.3c5.232-.058,10.465-.141,15.694-.216h.432V9.343a1.239,1.239,0,0,1-.2.032c-4.2.058-8.4.17-12.6.153A41.642,41.642,0,0,1,10,8.45,19.119,19.119,0,0,1,3.37,5.624,11.563,11.563,0,0,1,.1,2.13,2.142,2.142,0,0,1,0,1.94ZM51.452,4.059a.666.666,0,0,0,.721-.7.666.666,0,0,0-.732-.577.64.64,0,1,0,0,1.271Z" transform="translate(172.114 860.917) rotate(45)" />
                                </g>
                            </svg>
                            <h2>Masz pytania?</h2>
                            <div class="wrapper-text">
                                <?php the_field('masz_pytania_tekst'); ?>
                            </div>
                            <div class="double-btn">
                                <a href="<?php echo site_url(); ?>/faq" class="m-btn">faq</a>
                                <a href="<?php echo site_url(); ?>/kontakt" class="m-btn">kontakt</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-courses-t">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-head">
                                <div class="header">
                                    <svg class="svg-knives" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 81.899 45.974">
                                        <defs>
                                        </defs>
                                        <g id="Group_27" data-name="Group 27" transform="translate(-128.237 -860.917)">
                                            <path id="warsztat-qulinarny-01" class="cls-1" d="M0,1.94l31.959-.931L32.048,0h.611V.453a.6.6,0,0,0,.663.623H46.205c1.459,0,2.917-.049,4.373-.043a7.048,7.048,0,0,1,1.513.179,1.992,1.992,0,0,1,1.681,2.277,2.306,2.306,0,0,1-1.75,2.263A2.041,2.041,0,0,1,49.561,4.4c-.231-.646-.5-.891-1.352-.683A39.41,39.41,0,0,1,37.491,4.958c-1.338-.049-2.669-.245-4-.421a1.124,1.124,0,0,1-.663-.447c-.917-1.277-.793-1.021-2.153-1.018Q16.7,3.1,2.713,3.151H2.28c.141.159.222.259.311.349A12.312,12.312,0,0,0,7.406,6.38a25.811,25.811,0,0,0,8.844,1.3c5.232-.058,10.465-.141,15.694-.216h.432V9.343a1.24,1.24,0,0,1-.2.032c-4.2.058-8.4.17-12.6.153A41.642,41.642,0,0,1,10,8.449,19.12,19.12,0,0,1,3.37,5.624,11.563,11.563,0,0,1,.1,2.13,2.142,2.142,0,0,1,0,1.94ZM51.452,4.059a.666.666,0,0,0,.721-.7.666.666,0,0,0-.732-.577.64.64,0,1,0,0,1.271Z" transform="translate(128.237 900.153) rotate(-45)" />
                                            <path id="warsztat-qulinarny-01-2" data-name="warsztat-qulinarny-01" class="cls-1" d="M0,1.94l31.959-.931L32.048,0h.611V.453a.6.6,0,0,0,.663.623H46.206c1.459,0,2.917-.049,4.373-.043a7.048,7.048,0,0,1,1.513.179,1.992,1.992,0,0,1,1.681,2.277,2.306,2.306,0,0,1-1.75,2.263A2.041,2.041,0,0,1,49.561,4.4c-.231-.646-.5-.891-1.352-.683A39.411,39.411,0,0,1,37.491,4.958c-1.338-.049-2.669-.245-4-.421a1.124,1.124,0,0,1-.663-.447c-.917-1.277-.793-1.021-2.153-1.018Q16.7,3.1,2.713,3.151H2.28c.141.159.222.259.311.349A12.312,12.312,0,0,0,7.406,6.38a25.811,25.811,0,0,0,8.844,1.3c5.232-.058,10.465-.141,15.694-.216h.432V9.343a1.24,1.24,0,0,1-.2.032c-4.2.058-8.4.17-12.6.153A41.642,41.642,0,0,1,10,8.449,19.12,19.12,0,0,1,3.37,5.624,11.563,11.563,0,0,1,.1,2.13,2.142,2.142,0,0,1,0,1.94ZM51.452,4.059a.666.666,0,0,0,.721-.7.666.666,0,0,0-.732-.577.64.64,0,1,0,0,1.271Z" transform="translate(197.817 902.766) rotate(180)" />
                                            <path id="warsztat-qulinarny-01-3" data-name="warsztat-qulinarny-01" class="cls-1" d="M0,1.94l31.959-.931L32.048,0h.611V.453a.6.6,0,0,0,.663.623H46.205c1.459,0,2.917-.049,4.373-.043a7.048,7.048,0,0,1,1.513.179,1.992,1.992,0,0,1,1.681,2.277,2.306,2.306,0,0,1-1.75,2.263A2.041,2.041,0,0,1,49.561,4.4c-.231-.646-.5-.891-1.352-.683A39.41,39.41,0,0,1,37.491,4.958c-1.338-.049-2.669-.245-4-.421a1.124,1.124,0,0,1-.663-.447c-.917-1.277-.793-1.021-2.153-1.018Q16.7,3.1,2.713,3.151H2.28c.141.159.222.259.311.349A12.312,12.312,0,0,0,7.406,6.38a25.81,25.81,0,0,0,8.844,1.3c5.232-.058,10.465-.141,15.694-.216h.432V9.343a1.239,1.239,0,0,1-.2.032c-4.2.058-8.4.17-12.6.153A41.642,41.642,0,0,1,10,8.45,19.119,19.119,0,0,1,3.37,5.624,11.563,11.563,0,0,1,.1,2.13,2.142,2.142,0,0,1,0,1.94ZM51.452,4.059a.666.666,0,0,0,.721-.7.666.666,0,0,0-.732-.577.64.64,0,1,0,0,1.271Z" transform="translate(172.114 860.917) rotate(45)" />
                                        </g>
                                    </svg>
                                    <h2>
                                        Nadchodzące szkolenia
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    $today = date('Ymd');
                    $i = 1;

                    // get posts
                    $posts = get_posts(array(
                        'post_type'    => 'product',
                        'meta_key'    => 'data_rozpoczecia',
                        'orderby'    => 'meta_value',
                        'order'        => 'ASC',
                        'posts_per_page'      => -1,
                        //'product_cat' => 'bez kategorii'
                    ));
                    // loop
                    if ($posts) {

                        foreach ($posts as $post) {
                            $start_date = get_field('data_rozpoczecia', false, false);
                            $start_date = new DateTime($start_date);
                            $start_date = $start_date->format('Ymd');
                            setup_postdata($post);
                            if ($start_date > $today && $i <= 3) {
                                $i++;
                                ?>

                                <div class="row wrapper">
                                    <div class="col-5 col-md-3 col-no-padding">
                                        <div class="course-img" style="background-image: url('<?php echo get_theme_file_uri(); ?>/img/ph-courses.png');">
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-6">
                                        <h3>
                                            <?php echo $product->get_name(); ?></br>
                                        </h3>
                                        <p>
                                            Rozpoczęcie: <span><?php the_field('data_rozpoczecia'); ?></span>
                                        </p>
                                        <p>
                                            Zakończenie: <span><?php the_field('data_zakonczenia'); ?></span>
                                        </p>
                                    </div>

                                    <?php
                                    //get cat link
                                    global $post;
                                    $link = '';
                                    $terms = get_the_terms($post->ID, 'product_cat');
                                    if (!empty($terms[0])) {
                                        $link = get_term_link($terms[0]->term_id, 'product_cat');
                                    }

                                    ?>

                                    <div class="col-12 col-md-3">
                                        <div class="double-btn-col">
                                            <a href="<?php echo $link; ?>" class="m-btn m-btn-w">o szkoleniu</a>
                                            <a href="<?php echo get_permalink($product->get_id()); ?>" class="m-btn">zapisz się</a>
                                        </div>
                                    </div>
                                    <div class="info price">
                                        <?php echo $product->get_price(); ?>zł
                                    </div>
                                </div>


                            <?php
                        }
                    }

                    wp_reset_postdata();
                }

                ?>


                </div>
            </div>
        </section>






        <section id="section-gallery">
            <div class="container-fluid">
                <div class="row">
                    <div class="d-none d-md-block col-md-4">
                        <div class="left">
                            <img class="lazy opacity-d" <?php img_resp(get_field('zdjecie_-_lewe'), 'xl', '1366px'); ?> alt="text" />
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="up">
                            <img class="lazy opacity-d" <?php img_resp(get_field('zdjecie_-_gora'), 'medium', '600px'); ?> alt="text" />
                        </div>
                        <div class="mid">
                            <svg class="svg-knives-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 81.899 45.974">
                                <defs>
                                </defs>
                                <g id="Group_27" data-name="Group 27" transform="translate(-128.237 -860.917)">
                                    <path id="warsztat-qulinarny-01" class="cls-1" d="M0,1.94l31.959-.931L32.048,0h.611V.453a.6.6,0,0,0,.663.623H46.205c1.459,0,2.917-.049,4.373-.043a7.048,7.048,0,0,1,1.513.179,1.992,1.992,0,0,1,1.681,2.277,2.306,2.306,0,0,1-1.75,2.263A2.041,2.041,0,0,1,49.561,4.4c-.231-.646-.5-.891-1.352-.683A39.41,39.41,0,0,1,37.491,4.958c-1.338-.049-2.669-.245-4-.421a1.124,1.124,0,0,1-.663-.447c-.917-1.277-.793-1.021-2.153-1.018Q16.7,3.1,2.713,3.151H2.28c.141.159.222.259.311.349A12.312,12.312,0,0,0,7.406,6.38a25.811,25.811,0,0,0,8.844,1.3c5.232-.058,10.465-.141,15.694-.216h.432V9.343a1.24,1.24,0,0,1-.2.032c-4.2.058-8.4.17-12.6.153A41.642,41.642,0,0,1,10,8.449,19.12,19.12,0,0,1,3.37,5.624,11.563,11.563,0,0,1,.1,2.13,2.142,2.142,0,0,1,0,1.94ZM51.452,4.059a.666.666,0,0,0,.721-.7.666.666,0,0,0-.732-.577.64.64,0,1,0,0,1.271Z" transform="translate(128.237 900.153) rotate(-45)" />
                                    <path id="warsztat-qulinarny-01-2" data-name="warsztat-qulinarny-01" class="cls-1" d="M0,1.94l31.959-.931L32.048,0h.611V.453a.6.6,0,0,0,.663.623H46.206c1.459,0,2.917-.049,4.373-.043a7.048,7.048,0,0,1,1.513.179,1.992,1.992,0,0,1,1.681,2.277,2.306,2.306,0,0,1-1.75,2.263A2.041,2.041,0,0,1,49.561,4.4c-.231-.646-.5-.891-1.352-.683A39.411,39.411,0,0,1,37.491,4.958c-1.338-.049-2.669-.245-4-.421a1.124,1.124,0,0,1-.663-.447c-.917-1.277-.793-1.021-2.153-1.018Q16.7,3.1,2.713,3.151H2.28c.141.159.222.259.311.349A12.312,12.312,0,0,0,7.406,6.38a25.811,25.811,0,0,0,8.844,1.3c5.232-.058,10.465-.141,15.694-.216h.432V9.343a1.24,1.24,0,0,1-.2.032c-4.2.058-8.4.17-12.6.153A41.642,41.642,0,0,1,10,8.449,19.12,19.12,0,0,1,3.37,5.624,11.563,11.563,0,0,1,.1,2.13,2.142,2.142,0,0,1,0,1.94ZM51.452,4.059a.666.666,0,0,0,.721-.7.666.666,0,0,0-.732-.577.64.64,0,1,0,0,1.271Z" transform="translate(197.817 902.766) rotate(180)" />
                                    <path id="warsztat-qulinarny-01-3" data-name="warsztat-qulinarny-01" class="cls-1" d="M0,1.94l31.959-.931L32.048,0h.611V.453a.6.6,0,0,0,.663.623H46.205c1.459,0,2.917-.049,4.373-.043a7.048,7.048,0,0,1,1.513.179,1.992,1.992,0,0,1,1.681,2.277,2.306,2.306,0,0,1-1.75,2.263A2.041,2.041,0,0,1,49.561,4.4c-.231-.646-.5-.891-1.352-.683A39.41,39.41,0,0,1,37.491,4.958c-1.338-.049-2.669-.245-4-.421a1.124,1.124,0,0,1-.663-.447c-.917-1.277-.793-1.021-2.153-1.018Q16.7,3.1,2.713,3.151H2.28c.141.159.222.259.311.349A12.312,12.312,0,0,0,7.406,6.38a25.81,25.81,0,0,0,8.844,1.3c5.232-.058,10.465-.141,15.694-.216h.432V9.343a1.239,1.239,0,0,1-.2.032c-4.2.058-8.4.17-12.6.153A41.642,41.642,0,0,1,10,8.45,19.119,19.119,0,0,1,3.37,5.624,11.563,11.563,0,0,1,.1,2.13,2.142,2.142,0,0,1,0,1.94ZM51.452,4.059a.666.666,0,0,0,.721-.7.666.666,0,0,0-.732-.577.64.64,0,1,0,0,1.271Z" transform="translate(172.114 860.917) rotate(45)" />
                                </g>
                            </svg>
                            <h2>Galeria zdjęć</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vulputate non libero vel aliquam.</p>
                            <div class="single-btn">
                                <a href="google.com" class="m-btn m-btn-red">zobacz</a>
                            </div>
                        </div>
                        <div class="down">
                            <img class="lazy opacity-d" <?php img_resp(get_field('zdjecie_-_dol'), 'medium', '600px'); ?> alt="text" />
                        </div>
                    </div>
                    <div class="d-none d-md-block col-md-4">
                        <div class="right">
                            <img class="lazy opacity-d" <?php img_resp(get_field('zdjecie_-_prawe'), 'xl', '1366px'); ?> alt="text" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-video">
            <video class="lazy" width="100%" height="auto" loop="loop" poster="<?php echo get_theme_file_uri(); ?>/img/poster.jpg" autoplay muted>
                <source data-src="<?php echo get_theme_file_uri(); ?>/img/vid.mp4" type="video/mp4">
            </video>
        </section>

        <section id="section-about-me">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6 col-no-padding">
                        <div class="wrapper">
                            <div class="img" style="background-image: url('<?php echo get_theme_file_uri(); ?>/img/ph-pawel.png');">
                            </div>
                            <div class="half-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 column-text">
                        <h2>
                            O mnie
                        </h2>
                        <div class="wrapper-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vulputate non libero vel
                                aliquam.
                            </p>
                            <p>
                                Curabitur varius eros ante, sed vulputate purus tincidunt eu. Duis finibus dolor finibus
                                velit consectetur fermentum. Morbi vehicula arcu ut laoreet euismod.
                            </p>
                            <p>
                                Vestibulum pretium leo pulvinar, vulputate mi non, tristique ligula. Vestibulum facilisis,
                                metus sit amet gravida mattis, dui orci tincidunt justo, sed accumsan erat enim nec massa.
                            </p>
                            <p>
                                Duis vehicula aliquam leo, eu pellentesque turpis pharetra accumsan. Pellentesque cursus
                                nunc eros, mattis venenatis ante feugiat vel. Donec turpis leo, pharetra quis enim quis,
                                venenatis semper dui. Vestibulum tristique lobortis felis pharetra condimentum.
                            </p>
                            <p>
                                Mauris scelerisque lorem ipsum.
                            </p>
                        </div>
                        <div class="single-btn">
                            <a href="google.com" class="m-btn">więcej</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="section-contact">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6 column-text">
                        <h2>
                            Kontakt
                        </h2>
                        <div class="wrapper-text">
                            <h3>
                                Warsztat Qulinarny
                            </h3>
                            <p>NIP: <?php the_field('nip', 'option'); ?></p>
                            <p>
                                <i class="far fa-envelope"></i> <a href="mailto:<?php the_field('e-mail', 'option'); ?>"><?php the_field('e-mail', 'option'); ?></a>
                            </p>
                            <p>
                                <i class="fas fa-phone"></i> <a href="tel:<?php the_field('telefon', 'option'); ?>"><?php the_field('telefon', 'option'); ?></a>
                            </p>
                            <p>
                                <i class="fas fa-home"></i> <?php the_field('adres', 'option'); ?>
                            </p>

                            <?php the_field('dodatkowe_informacje_kontaktowe', 'option'); ?>

                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-no-padding">
                        <div class="wrapper">
                            <h3>Napisz do nas</h3>
                            <?php echo do_shortcode('[contact-form-7 id="11" title="Formularz kontaktowy"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php } ?>
</main>
<?php
get_footer();
