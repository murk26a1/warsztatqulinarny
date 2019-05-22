<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package warsztatqulinarny
 */

?>

<div class="container" style="margin-top:150px;">
	<div class="row">
		<div class="col-12">
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>