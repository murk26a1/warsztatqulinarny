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

		<section id="section-faq">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<span class="faq-header">
							Pytania i odpowiedzi
						</span>
						<div class="accordion" id="faq">

							<?php

							// check if the repeater field has rows of data
							if (have_rows('faq')) :
								$i = 0;
								// loop through the rows of data
								while (have_rows('faq')) : the_row();
									$i++;
									?>

									<div class="card">
										<div class="card-header" id="heading-<?php echo $i ?>">
											<h2>
												<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#card-<?php echo $i ?>" aria-expanded="false" aria-controls="card-<?php echo $i ?>">
													<?php the_sub_field('pytanie'); ?>
												</button>
											</h2>
										</div>

										<div id="card-<?php echo $i ?>" class="collapse" aria-labelledby="heading-<?php echo $i ?>" data-parent="#faq">
											<div class="card-body">
												<?php the_sub_field('odpowiedz'); ?>
											</div>
										</div>
									</div>

								<?php endwhile;
						endif;
						?>

						</div>
					</div>
				</div>
			</div>
		</section>



	<?php } ?>

</main>


<script>
	$(".btn").click(function() {
		$(".card-header").removeClass('card-header-active');
		$(this).parent().parent().addClass('card-header-active');
		$(".btn").attr("disabled", false);
		setTimeout(() => {
			$(this).attr("disabled", true);
		}, 200);

	});
</script>



<?php
get_footer();
