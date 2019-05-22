<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package warsztatqulinarny
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

	<section id="section-banner-page" style="background-image: url('<?php echo $img; ?>');">

		<div class="header">
			<h1> Blog
			</h1>
		</div>

	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-9">
					<?php
					if (have_posts()) :

						if (is_home() && !is_front_page()) :
							?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>
						<?php
					endif;

					/* Start the Loop */
					while (have_posts()) :
						the_post();

						get_template_part( 'template-parts/content', 'search' );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part('template-parts/content', 'none');

				endif;
				?>

				</div>
				<aside class="col-12 col-lg-3 parallax">

					<?php
					get_sidebar();

					?>

				</aside>
			</div>
		</div>
		</div>
	</section>
</main>

<?php
get_footer();
