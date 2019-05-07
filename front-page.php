<?php
/**
 * Front-page
 */

get_header();
?>

<main>
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

            <div class="row wrapper">
                <div class="col-1 col-md-3 parallax">

                    <div class="courses-btn follow">
                        <button class="btn btn-primary btn-course" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Kurs kucharski</button>
                        <button class="btn btn-primary btn-course" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Kurs szefa kuchni</button>
                    </div>

                </div>
                <div class="col-11 col-md-9" id="courses-info">

                    <div class="collapse show multi-collapse" data-parent="#courses-info" id="multiCollapseExample1">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-12 col-md-7">
                                    <h4>Dla początkujących</h4>
                                    <h3>Kurs kucharski</h3>

                                    <p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                    </p>
                                    <p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        cusamus terry richardson ad squid.
                                    </p>
                                    <p>
                                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                    </p>
                                    <div class="single-btn">
                                        <a href="google.com" class="m-btn">zobacz</a>
                                    </div>
                                </div>
                                <div class="col-md-5 d-none d-md-block">
                                    <div class="img-wrap">
                                        <img src="<?php echo get_theme_file_uri(); ?>/img/banner.jpg" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="collapse multi-collapse" data-parent="#courses-info" id="multiCollapseExample2">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-7">
                                    <h4>Dla początkujących</h4>
                                    <h3>Kurs szefa kuchni</h3>

                                    <p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                    </p>
                                    <p>
                                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                    </p>
                                    <div class="single-btn">
                                        <a href="google.com" class="m-btn">zobacz</a>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="img-wrap">
                                        <img src="<?php echo get_theme_file_uri(); ?>/img/ph-pawel.png" />
                                    </div>
                                </div>
                            </div </div> </div> </div> </div> </section> <section id="section-about" class="overf">

















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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vulputate non libero vel
                                aliquam.
                                Curabitur varius eros ante, sed vulputate purus tincidunt eu.
                            </p>
                            <p>
                                Duis finibus dolor finibus velit consectetur fermentum. Morbi vehicula arcu ut laoreet
                                euismod.
                            </p>
                            <p>
                                Vestibulum pretium leo pulvinar, vulputate mi non, tristique ligula. Vestibulum
                                facilisis,
                                metus sit amet gravida mattis, dui orci tincidunt justo, sed accumsan erat enim nec
                                massa.
                            </p>
                        </div>
                        <div class="double-btn">
                            <a href="google.com" class="m-btn">faq</a>
                            <a href="google.com" class="m-btn">kontakt</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-courses-t" style="background-attachment:fixed; background-image: url('https://www.transparenttextures.com/patterns/white-diamond.png');">
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
                <div class="row wrapper">
                    <div class="col-12 col-md-3 col-no-padding">
                        <div class="course-img" style="background-image: url('<?php echo get_theme_file_uri(); ?>/img/ph-courses.png');">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <h3>
                            Kurs szefa kuchni
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vulputate non libero vel
                            aliquam.
                        </p>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="double-btn-col">
                            <a href="google.com" class="m-btn m-btn-w">o szkoleniu</a>
                            <a href="google.com" class="m-btn">zapisz się</a>
                        </div>
                    </div>
                    <div class="info price">
                        899zł
                    </div>
                    <div class="info date">
                        11 kwi 2019 - 18 kwi 2019
                    </div>
                    <div class="info full">
                        wolne miejsca
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-gallery">
        <div class="container-fluid">
            <div class="row">
                <div class="d-none d-md-block col-md-4">
                    <div class="left">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/poster.jpg" />
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="up">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/poster.jpg" />
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
                        <img src="<?php echo get_theme_file_uri(); ?>/img/poster.jpg" />
                    </div>
                </div>
                <div class="d-none d-md-block col-md-4">
                    <div class="right">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/poster.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-video">
        <video class="lozad" width="100%" height="auto" loop="loop" poster="<?php echo get_theme_file_uri(); ?>/img/poster.jpg" autoplay muted>
            <source data-src="<?php echo get_theme_file_uri(); ?>/img/vid.mp4" type="video/mp4">
        </video>
        <div class="overlay"></div>
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
                </div>
                <div class="col-12 col-md-6 col-no-padding">
                    <div class="wrapper">
                        <?php echo do_shortcode('[contact-form-7 id="11" title="Formularz kontaktowy"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>
<script>
    const el = document.querySelector('video');
    const observer = lozad(el); // passing a `NodeList` (e.g. `document.querySelectorAll()`) is also valid
    observer.observe();
</script>
<?php
get_footer();
