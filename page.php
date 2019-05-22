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

	<?php
endwhile; // End of the loop.
?>

</main>

<?php
get_footer();
