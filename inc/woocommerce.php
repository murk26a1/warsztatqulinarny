<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package warsztatqulinarny
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
 *
 * @return void
 */
function warsztatqulinarny_woocommerce_setup()
{
	add_theme_support('woocommerce');
	add_theme_support('wc-product-gallery-zoom');
	add_theme_support('wc-product-gallery-lightbox');
	add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'warsztatqulinarny_woocommerce_setup');

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function warsztatqulinarny_woocommerce_scripts()
{
	wp_enqueue_style('warsztatqulinarny-woocommerce-style', get_template_directory_uri() . '/woocommerce.css');

	$font_path   = WC()->plugin_url() . '/assets/fonts/';
	$inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';

	wp_add_inline_style('warsztatqulinarny-woocommerce-style', $inline_font);
}
add_action('wp_enqueue_scripts', 'warsztatqulinarny_woocommerce_scripts');

/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
 */
/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function warsztatqulinarny_woocommerce_active_body_class($classes)
{
	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter('body_class', 'warsztatqulinarny_woocommerce_active_body_class');

/**
 * Products per page.
 *
 * @return integer number of products.
 */
function warsztatqulinarny_woocommerce_products_per_page()
{
	return 12;
}
add_filter('loop_shop_per_page', 'warsztatqulinarny_woocommerce_products_per_page');

/**
 * Product gallery thumnbail columns.
 *
 * @return integer number of columns.
 */
function warsztatqulinarny_woocommerce_thumbnail_columns()
{
	return 4;
}
add_filter('woocommerce_product_thumbnails_columns', 'warsztatqulinarny_woocommerce_thumbnail_columns');

/**
 * Default loop columns on product archives.
 *
 * @return integer products per row.
 */
function warsztatqulinarny_woocommerce_loop_columns()
{
	return 3;
}
add_filter('loop_shop_columns', 'warsztatqulinarny_woocommerce_loop_columns');

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function warsztatqulinarny_woocommerce_related_products_args($args)
{
	$defaults = array(
		'posts_per_page' => 3,
		'columns'        => 3,
	);

	$args = wp_parse_args($defaults, $args);

	return $args;
}
add_filter('woocommerce_output_related_products_args', 'warsztatqulinarny_woocommerce_related_products_args');

if (!function_exists('warsztatqulinarny_woocommerce_product_columns_wrapper')) {
	/**
	 * Product columns wrapper.
	 *
	 * @return  void
	 */
	function warsztatqulinarny_woocommerce_product_columns_wrapper()
	{
		$columns = warsztatqulinarny_woocommerce_loop_columns();
		echo '<div class="columns-' . absint($columns) . '">';
	}
}
add_action('woocommerce_before_shop_loop', 'warsztatqulinarny_woocommerce_product_columns_wrapper', 40);

if (!function_exists('warsztatqulinarny_woocommerce_product_columns_wrapper_close')) {
	/**
	 * Product columns wrapper close.
	 *
	 * @return  void
	 */
	function warsztatqulinarny_woocommerce_product_columns_wrapper_close()
	{
		echo '</div>';
	}
}
add_action('woocommerce_after_shop_loop', 'warsztatqulinarny_woocommerce_product_columns_wrapper_close', 40);

/**
 * Remove default WooCommerce wrapper.
 */
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

if (!function_exists('warsztatqulinarny_woocommerce_wrapper_before')) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function warsztatqulinarny_woocommerce_wrapper_before()
	{
		?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
			<?php
		}
	}
	add_action('woocommerce_before_main_content', 'warsztatqulinarny_woocommerce_wrapper_before');

	if (!function_exists('warsztatqulinarny_woocommerce_wrapper_after')) {
		/**
		 * After Content.
		 *
		 * Closes the wrapping divs.
		 *
		 * @return void
		 */
		function warsztatqulinarny_woocommerce_wrapper_after()
		{
			?>
			</main><!-- #main -->
		</div><!-- #primary -->
	<?php
}
}
add_action('woocommerce_after_main_content', 'warsztatqulinarny_woocommerce_wrapper_after');

/**
 * Sample implementation of the WooCommerce Mini Cart.
 *
 * You can add the WooCommerce Mini Cart to header.php like so ...
 *
	<?php
		if ( function_exists( 'warsztatqulinarny_woocommerce_header_cart' ) ) {
			warsztatqulinarny_woocommerce_header_cart();
		}
	?>
 */

if (!function_exists('warsztatqulinarny_woocommerce_cart_link_fragment')) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function warsztatqulinarny_woocommerce_cart_link_fragment($fragments)
	{
		ob_start();
		warsztatqulinarny_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter('woocommerce_add_to_cart_fragments', 'warsztatqulinarny_woocommerce_cart_link_fragment');

if (!function_exists('warsztatqulinarny_woocommerce_cart_link')) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function warsztatqulinarny_woocommerce_cart_link()
	{
		?>
		<a class="cart-contents" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php esc_attr_e('Zobacz koszyk', 'warsztatqulinarny'); ?>">
			<?php
			$item_count_text = sprintf(
				/* translators: number of items in the mini cart. */
				_n('%d', '%d', WC()->cart->get_cart_contents_count(), 'warsztatqulinarny'),
				WC()->cart->get_cart_contents_count()
			);
			?>
			<span class="amount"><?php echo wp_kses_data(WC()->cart->get_cart_subtotal()); ?></span> <span class="count"><?php echo esc_html($item_count_text); ?></span>
		</a>
	<?php
}
}

if (!function_exists('warsztatqulinarny_woocommerce_header_cart')) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function warsztatqulinarny_woocommerce_header_cart()
	{
		if (!WC()->cart->is_empty()) {
			if (is_cart()) {
				$class = 'current-menu-item';
			} else {
				$class = '';
			}
			?>
			<div id="site-header-cart" class="site-header-cart">
				<i class="fas fa-cart-arrow-down"></i>
				<div class="cart_hov <?php echo esc_attr($class); ?>">
					<?php warsztatqulinarny_woocommerce_cart_link(); ?>
				</div>
				<div>
					<?php
					$instance = array(
						'title' => '',
					);

					the_widget('WC_Widget_Cart', $instance);
					?>
				</div>
			</div>
		<?php
	}
}
}
// Hook in
add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields($fields)
{
	$fields['order']['order_comments']['placeholder'] = 'Jeśli inne niż dane płatności';
	$fields['order']['order_comments']['label'] = 'Dane uczestnika szkolenia';
	return $fields;
}

remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);


add_filter( 'woocommerce_get_availability', 'wcs_custom_get_availability', 1, 2);
function wcs_custom_get_availability( $availability, $_product ) {
   global $product;
 
   // Change In Stock Text
    if ( $_product->is_in_stock() ) {
		$stock = $product->get_stock_quantity();
        $availability['availability'] = __('Dostępne miejsca: <span style="font-weight:bold; color:#333">' . $stock . '</span>', 'woocommerce');
    }
 
    // Change Out of Stock Text
    if ( ! $_product->is_in_stock() ) {
    	$availability['availability'] = __('Brak miejsc: <a href="https://warsztatqulinarny.pl/kontakt">Zapis na listę rezerwową</a>', 'woocommerce');
    }
 
    return $availability;
}