<?php

/**
 *Banner-page
 */

?>


<section id="section-banner-page" style="height:300px;">
	<div class="overlay">
		<div class="header">
			<h1> Blog
			</h1>
		</div>

	</div>




</section>

<?php
$show = true;
while (have_posts()) {
	the_post();
	if ($show == true) {
		if (!is_single() & !is_archive()) {
?>

			<div class="container">
				<div class="row">
					<div class="col-12">
						<nav class="bc">
							<ul id="breadcrumbs" class="breadcrumbs">
								<li class="item-home"><a class="bread-link bread-home" href="https://warsztatqulinarny.pl" title="Home">Home</a></li>
								<li class="separator separator-home"> &gt; </li>
								<li class="item-current item-cat"><strong class="bread-current bread-cat">Blog</strong></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
<?php
		} else {
			custom_breadcrumbs();
		}

		$show = false;
	}
} ?>