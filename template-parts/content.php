<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package warsztatqulinarny
 */

?>

<article class="article-blog" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="thumbnail">
		<?php warsztatqulinarny_post_thumbnail(); ?>
	</div>
	<header class="entry-header">
		<?php
		if ('post' === get_post_type()) :
			?>
			<div class="entry-meta">
				<?php
				warsztatqulinarny_posted_on();
				?>

<?php warsztatqulinarny_entry_footer(); ?>

			</div>
		<?php endif; ?>
		<?php
		if (is_singular()) :
			the_title('<h1 class="entry-title">', '</h1>');
		else :
			the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;

		?>
	</header>
	<div class="entry-content">

		<?php
		if (!is_singular()) { ?>


			<p>
				<?php echo wp_trim_words(get_the_excerpt(), 60); ?>
			</p>
		<?php } else { ?>

			<?php echo the_content(); ?>

		<?php } ?>
		<?php
		if (!is_singular()) { ?>
			<div class="single-btn">
				<a href="<?php the_permalink(); ?>" class="m-btn">więcej</a>
			</div>

		<?php } ?>

		<?php


		wp_link_pages(array(
			'before' => '<div class="page-links">' . esc_html__('Pages:', 'warsztatqulinarny'),
			'after'  => '</div>',
		));
		?>



	</div><!-- .entry-content -->

	<footer>
		<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Udostępnij</a></div>
	</footer>
</article><!-- #post-<?php the_ID(); ?> -->