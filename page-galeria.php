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

		<section id="section-gallery-full">

			<div class="container-fluid ">


				<?php
				$reverse = false;
				if (have_rows('sekcja')) :
					while (have_rows('sekcja')) : the_row();


						?>



						<div class="row no-gutters gallery-row">
							<div class="col-12 col-md-8 big <?php if ($reverse == true) { ?>order-last <?php } ?>">
								<img class="lazy opacity-d" <?php img_resp(get_sub_field('obrazek_duzy'), 'xl', '1366px'); ?> alt="text" />
							</div>
							<div class="col-12 col-md-4 small">
								<div class="double-img <?php if ($reverse == true) { ?>reverse <?php $reverse = false;
																								} else {
																									$reverse = true;
																								} ?>">
									<div class="s-img">
										<img class="lazy opacity-d" <?php img_resp(get_sub_field('obrazek_maly_gora'), 'xl', '1366px'); ?> alt="text" />
									</div>
									<div class="s-img">
										<img class="lazy opacity-d" <?php img_resp(get_sub_field('obrazek_maly_dol'), 'xl', '1366px'); ?> alt="text" />
									</div>
								</div>
							</div>
						</div>


					<?php endwhile;
			endif;
			?>



		</section>



	<?php } ?>

</main>





<?php
get_footer();
