<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package warsztatqulinarny
 */


get_header();
?>

<main>


<?php get_template_part('template-parts/blog-page', get_post_type()); ?>

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

						get_template_part('template-parts/content', get_post_type());

					endwhile;

					the_posts_navigation();

				else :

					get_template_part('template-parts/content', 'none');

				endif;
				?>
<?php wpex_pagination(); ?>

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
