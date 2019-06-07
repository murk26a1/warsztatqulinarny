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



	<?php } ?>

	<section id="section-courses">
		<div class="container courses">

			<?php get_template_part('template-parts/courses', get_post_type()); ?>

		</div>
	</section>

	<section id="section-courses-t" style="padding-top:0">
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
									Terminarz szkoleń
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
						if ($start_date > $today && $i <= 14) {
							$i++;
							?>

							<?php

							$dateformatstring = "F";
							$unixtimestamp = strtotime($start_date);

							$month_current =  date_i18n($dateformatstring, $unixtimestamp);


							if ($month_current != $month) {
								$month = $month_current; ?>

								<div class="row month">
									<span><?php echo $month; ?></span>
								</div>

							<?php }
						?>
							<div class="row wrapper">
								<div class="col-5 col-md-3 col-no-padding">
									<div class="course-img">
										<?php the_post_thumbnail('medium'); ?>
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


</main>

<?php
get_footer();
