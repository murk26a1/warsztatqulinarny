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

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php
		while (have_posts()) :
			the_post();

			get_template_part('template-parts/content', 'page');

			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		<ul class="products">
			<?php
			$args = array(
				'post_type' => 'product',
				'posts_per_page' => 12
			);
			$loop = new WP_Query($args);
			if ($loop->have_posts()) {
				while ($loop->have_posts()) : $loop->the_post(); ?>
					<div class="szkolenie">
						<?php
						wc_get_template_part('content', 'product');
						?>
						<div class="cena2">
							<?php the_field('cena'); ?>
						</div>
					</div>
				<?php
			endwhile;
		} else {
			echo __('No products found');
		}
		wp_reset_postdata();
		?>
		</ul>
		<!--/.products-->

	</main><!-- #main -->
</div><!-- #primary -->


<div class="container">
        <div class="row">
            <div class="col-12">
                <img class="my_class" <?php img_resp(get_field('test'), 'xxl', '1920px'); ?> alt="text" style="width:100%" />
                <?php
                $image = get_field('test2');
                $url = $image['url'];
                $size = 'xxl';
                if (wp_is_mobile()) {
                    $size = 'medium';
                }
                $link = $image['sizes'][$size];
                ?>
                <div style="height:500px; background-size:cover; width: 500px; background-image: url('<?php echo $link; ?>');">
                </div>
            </div>
        </div>
    </div>




<?php
get_sidebar();
get_footer();
