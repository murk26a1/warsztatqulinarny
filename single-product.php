<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

get_header('shop'); ?>












<?php
/**
 * woocommerce_before_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 */
do_action('woocommerce_before_main_content');
?>

<?php while (have_posts()) : the_post(); ?>
	<div class="container" style="margin-top:110px; background:#fff; padding:30px;padding-bottom:50px; margin-bottom:80px;">
		<div class="row">
			<div class="col-12">
				<?php wc_get_template_part('content', 'single-product'); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<?php
				//get cat link
				global $post;
				$link = '';
				$terms = get_the_terms($post->ID, 'product_cat');
				if (!empty($terms[0])) {
					$link = get_term_link($terms[0]->term_id, 'product_cat');
				}

				?>
				<a href="<?php echo $link; ?>" class="m-btn">szczegółowy opis kursu</a>

			</div>
		</div>
	</div>
<?php endwhile;
?>



<?php get_footer('shop');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
