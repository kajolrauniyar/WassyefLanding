<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Witche
 */

get_header();
?>
<div class="section featured-error">
	<section class="error-404 not-found">
		<div class="container">
			<span class="info">Seems like you have a entered a wrong place</span>
			<strong class="fof-page">404</strong>
			<div class="btn__holder">
				<a class="btn btn--blue btn__spacing" href="<?php echo site_url() ?>" title="go homepage"> Go Homepage</a>
			</div>
		</div>
	</section>
</div>

<?php
get_footer();
?>
