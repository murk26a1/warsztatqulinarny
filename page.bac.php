<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package warsztatqulinarny
 */

get_header();
?>

<main>
	<?php
	while (have_posts()) :
		the_post();
		get_template_part('template-parts/content', 'page'); ?>

		<?php
		if (wp_is_mobile()) {
			$img = get_theme_file_uri() . "/img/banner_m.jpg";
		} else {
			$img = get_theme_file_uri() . "/img/banner.jpg";
		}
		?>

		<section id="section-banner-page" style="background-image: url('<?php echo $img; ?>');">

			<div class="header">
				<h1> Szkolenia kucharskie
				</h1>
			</div>

		</section>

		<section id="section-standard">
			<div class="container">
				<div class="row">
					<div class="col-12">
						Szkolenia kucharskie
					</div>
				</div>
			</div>
		</section>




	<?php
endwhile; // End of the loop.
?>

</main>

<?php
get_footer();
