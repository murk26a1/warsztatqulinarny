<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package warsztatqulinarny
 */

get_header();
?>
<?php $img = get_theme_file_uri(); ?>
<style>
	body {
		background-color: #3c3f61;
		background-image: url('<?php echo $img; ?>/img/textures/low-contrast-linen.png');');
	}
</style>

<main id="main" class="site-main">

	<div class="container" style="margin-top:110px; background:#fff; padding:30px;padding-bottom:50px; margin-bottom:80px; min-height:600px;">
		<div class="row">
			<div class="col-12" style="text-align:center;">
				<h1 style=" margin-top:30px;">Błąd #404</h1>
				<h2 style="font-size:2.2rem; margin-top:10px;">Strona nie została znaleziona</h2>
				<p style="margin-top:10px;">Strona została usunięta lub wpisany adres jest nieprawidłowy.</p>
				<div class="single-btn" style="margin-top:40px;">
					<a href="<?php echo site_url(); ?>" class="m-btn m-btn-red">strona główna</a>
				</div>
			</div>
		</div>
	</div>


</main><!-- #main -->


<?php
get_footer();
