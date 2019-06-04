<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package warsztatqulinarny
 */

get_header();
?>
<main>
	<?php
	while (have_posts()) {
		the_post();
		?>

		<?php get_template_part('template-parts/banner-page', get_post_type()); ?>

		<section id="section-about-me2">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6">
						<h2>O firmie</h2>
						<?php the_field('o_firmie'); ?>
					</div>
					<div class="col-12 col-md-6 margin2">
						<h2>Misja</h2>
						<?php the_field('misja'); ?>
					</div>
				</div>
				<div class="row about-me">
					<div class="col-12 col-md-6">
						<div class="img-wrap">
							<img class="lazy opacity-d" <?php img_resp(get_field('zdjecie'), 'medium', '650px'); ?> alt="text" />
						</div>

					</div>
					<div class="col-12 col-md-6">
						<h2>O mnie</h2>
						<?php the_field('o_mnie'); ?>
					</div>
				</div>
			</div>
		</section>



		<section id="section-cert">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header header-center">
							<svg class="svg-knives" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 81.899 45.974">
								<defs>
								</defs>
								<g id="Group_27" data-name="Group 27" transform="translate(-128.237 -860.917)">
									<path id="warsztat-qulinarny-01" class="cls-1" d="M0,1.94l31.959-.931L32.048,0h.611V.453a.6.6,0,0,0,.663.623H46.205c1.459,0,2.917-.049,4.373-.043a7.048,7.048,0,0,1,1.513.179,1.992,1.992,0,0,1,1.681,2.277,2.306,2.306,0,0,1-1.75,2.263A2.041,2.041,0,0,1,49.561,4.4c-.231-.646-.5-.891-1.352-.683A39.41,39.41,0,0,1,37.491,4.958c-1.338-.049-2.669-.245-4-.421a1.124,1.124,0,0,1-.663-.447c-.917-1.277-.793-1.021-2.153-1.018Q16.7,3.1,2.713,3.151H2.28c.141.159.222.259.311.349A12.312,12.312,0,0,0,7.406,6.38a25.811,25.811,0,0,0,8.844,1.3c5.232-.058,10.465-.141,15.694-.216h.432V9.343a1.24,1.24,0,0,1-.2.032c-4.2.058-8.4.17-12.6.153A41.642,41.642,0,0,1,10,8.449,19.12,19.12,0,0,1,3.37,5.624,11.563,11.563,0,0,1,.1,2.13,2.142,2.142,0,0,1,0,1.94ZM51.452,4.059a.666.666,0,0,0,.721-.7.666.666,0,0,0-.732-.577.64.64,0,1,0,0,1.271Z" transform="translate(128.237 900.153) rotate(-45)" />
									<path id="warsztat-qulinarny-01-2" data-name="warsztat-qulinarny-01" class="cls-1" d="M0,1.94l31.959-.931L32.048,0h.611V.453a.6.6,0,0,0,.663.623H46.206c1.459,0,2.917-.049,4.373-.043a7.048,7.048,0,0,1,1.513.179,1.992,1.992,0,0,1,1.681,2.277,2.306,2.306,0,0,1-1.75,2.263A2.041,2.041,0,0,1,49.561,4.4c-.231-.646-.5-.891-1.352-.683A39.411,39.411,0,0,1,37.491,4.958c-1.338-.049-2.669-.245-4-.421a1.124,1.124,0,0,1-.663-.447c-.917-1.277-.793-1.021-2.153-1.018Q16.7,3.1,2.713,3.151H2.28c.141.159.222.259.311.349A12.312,12.312,0,0,0,7.406,6.38a25.811,25.811,0,0,0,8.844,1.3c5.232-.058,10.465-.141,15.694-.216h.432V9.343a1.24,1.24,0,0,1-.2.032c-4.2.058-8.4.17-12.6.153A41.642,41.642,0,0,1,10,8.449,19.12,19.12,0,0,1,3.37,5.624,11.563,11.563,0,0,1,.1,2.13,2.142,2.142,0,0,1,0,1.94ZM51.452,4.059a.666.666,0,0,0,.721-.7.666.666,0,0,0-.732-.577.64.64,0,1,0,0,1.271Z" transform="translate(197.817 902.766) rotate(180)" />
									<path id="warsztat-qulinarny-01-3" data-name="warsztat-qulinarny-01" class="cls-1" d="M0,1.94l31.959-.931L32.048,0h.611V.453a.6.6,0,0,0,.663.623H46.205c1.459,0,2.917-.049,4.373-.043a7.048,7.048,0,0,1,1.513.179,1.992,1.992,0,0,1,1.681,2.277,2.306,2.306,0,0,1-1.75,2.263A2.041,2.041,0,0,1,49.561,4.4c-.231-.646-.5-.891-1.352-.683A39.41,39.41,0,0,1,37.491,4.958c-1.338-.049-2.669-.245-4-.421a1.124,1.124,0,0,1-.663-.447c-.917-1.277-.793-1.021-2.153-1.018Q16.7,3.1,2.713,3.151H2.28c.141.159.222.259.311.349A12.312,12.312,0,0,0,7.406,6.38a25.81,25.81,0,0,0,8.844,1.3c5.232-.058,10.465-.141,15.694-.216h.432V9.343a1.239,1.239,0,0,1-.2.032c-4.2.058-8.4.17-12.6.153A41.642,41.642,0,0,1,10,8.45,19.119,19.119,0,0,1,3.37,5.624,11.563,11.563,0,0,1,.1,2.13,2.142,2.142,0,0,1,0,1.94ZM51.452,4.059a.666.666,0,0,0,.721-.7.666.666,0,0,0-.732-.577.64.64,0,1,0,0,1.271Z" transform="translate(172.114 860.917) rotate(45)" />
								</g>
							</svg>
							<h2>Certyfikaty</h2>
						</div>
					</div>
				</div>
				<div class="row wrapper">

					<?php if (have_rows('certyfikaty')) :
						while (have_rows('certyfikaty')) : the_row(); ?>

							<div class="col-12 col-md-4 cert">
								<?php $url = wp_get_attachment_url(get_sub_field('certyfikat')); ?>
								<a href="<?php echo $url; ?>" data-lightbox="certyfikaty" ><img class="lazy" <?php img_resp(get_sub_field('certyfikat'), 'medium', '600px'); ?> alt="certyfikat" /></a>
							</div>

						<?php
					endwhile;
				endif; ?>

				</div>
			</div>
		</section>




	<?php } ?>

</main>

<script>
    lightbox.option({
		showImageNumberLabel: false,
	  disableScrolling: true
    })
</script>

<?php
get_footer();
