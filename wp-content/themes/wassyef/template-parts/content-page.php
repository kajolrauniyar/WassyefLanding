<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="section contact-blog-area cart">
	<div class="container">
		<div class="entry-header">
				<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
			</div><!-- .entry-header -->
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<div class="entry-content woo-entry-content">
					<?php the_content();?>
				</div><!-- .entry-content -->
			</div>
			<!-- sidebar right start -->

			<!-- sidebar right end -->
		</div>
	</div>
</section>
<?php
	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
			get_the_title()
		),
		'<footer class="entry-footer"><span class="edit-link">',
		'</span></footer><!-- .entry-footer -->'
	);
?>

</article><!-- #post-## -->
