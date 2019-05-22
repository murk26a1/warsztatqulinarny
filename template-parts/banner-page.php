<?php
/**
 *Banner-page
 */

?>





<section id="section-banner-page">
	<div class="img-wrap">
		<?php echo get_the_post_thumbnail($post_id, 'large'); ?>
	</div>
	<div class="overlay">
		<div class="header">
			<h1> <?php the_title(); ?>
			</h1>
		</div>
		<h4><?php the_field('podtytul'); ?></h4>
	</div>
</section>