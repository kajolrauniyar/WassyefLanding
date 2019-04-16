<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<section class="section contact-blog-area single-contact-blog-area ">
	<div class="container">					
		<div class="row">
			<div class="col-lg-8 col-md-12">
			 <div class="blog-posts">
			<!-- 	blog-post start -->
				<div class="blog-part">	
					<div>
						<?php
							the_archive_title( '<h2 class="widget-title">', '</h2>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</div><!-- .page-header -->				
					<div class="row">			
						<?php if ( have_posts() ) : ?>
							<?php
							// Start the Loop.
							while ( have_posts() ) : the_post();
								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */?>
								<!-- Blog DEtails page start -->
									<?php get_template_part( 'template-parts/page/blog/blog', 'main_page' );?>
				
								
								<!-- Blog DEtails page end -->
							<?php
							// End the loop.
							endwhile;

							// Previous/next page navigation.
							the_posts_pagination( array(
								'prev_text'          => __( 'Previous page', 'twentysixteen' ),
								'next_text'          => __( 'Next page', 'twentysixteen' ),
								'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
							) );

						// If no content, include the "No posts found" template.
						else :
							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
					</div>
				</div>
			</div>
			</div>
			<!-- sidebar right start -->
			<div class="col-lg-4 col-md-12">
				<div class="sidebar-area">
					<!-- sidebar-section src-area -->
					<?php echo dynamic_sidebar( 'sidebar-1' );?>
					<?php get_template_part( 'template-parts/sidebar/sidebar', 'events_post' );?>
				</div><!-- about-author -->
			</div><!-- col-lg-4 -->

			<!-- sidebar right end -->
		</div>
	</div>
</section>


<?php get_footer(); ?>




