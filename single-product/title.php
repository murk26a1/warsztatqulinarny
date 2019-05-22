<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @package    WooCommerce/Templates
 * @version    1.6.4
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

the_title('<h1 class="product_title entry-title">', '</h1>');

?>
<div style="margin-top:30px; padding-bottom:10px;">
	<div style="font-size:14px;">
		Rozpoczęcie: <span style="font-weight:bold"> <?php the_field('data_rozpoczecia'); ?> </span>
	</div>

</div>
<div style="padding-bottom:20px;">
<div style="font-size:14px;">
		Zakończenie: <span style="font-weight:bold"> <?php the_field('data_zakonczenia'); ?>  </span>
	</div>
</div>
<div style="margin-bottom:100px;">
	<div style="float:left; font-size:16px;">
		Miejsce szkolenia: <span style="font-weight:bold"><?php the_field('adres', 'option'); ?></span>
	</div>
	<div style="float:left; font-size:16px; margin-top:10px;">
		Telefon kontaktowy: <span style="font-weight:bold"><a href="tel:<?php the_field('telefon', 'option'); ?>"><?php the_field('telefon', 'option'); ?></a></span>
	</div>
</div>
<?php
