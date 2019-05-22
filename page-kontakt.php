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

		<?php
		if (wp_is_mobile()) {
			$img = get_theme_file_uri() . "/img/ph-course.jpg";
		} else {
			$img = get_theme_file_uri() . "/img/ph-course.jpg";
		}
		?>


		<?php get_template_part('template-parts/banner-page', get_post_type()); ?>

		<section id="section-main-contact">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-5 bg">
						<h2>Kontakt</h2>
						<div class="wrapper">
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
					<div class="col-12 col-md-7 form">
						<h2>Formularz kontaktowy</h2>
						<div class="wrapper">
							<?php echo do_shortcode('[contact-form-7 id="11" title="Formularz kontaktowy"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="section-map">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10245.25234135226!2d19.937351!3d50.061698!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165b0df90f6453%3A0xbb2e110fa28d685b!2zUnluZWsgR8WCw7N3bnksIDMxLTAwMCBLcmFrw7N3!5e0!3m2!1spl!2spl!4v1558021147863!5m2!1spl!2spl" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</section>



	<?php } ?>

</main>

<?php
get_footer();
