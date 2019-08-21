<?php /* Template Name: Standard */ ?>

<?php
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

		<section id="section-standard">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</section>



	<?php } ?>

</main>


<?php
get_footer();
