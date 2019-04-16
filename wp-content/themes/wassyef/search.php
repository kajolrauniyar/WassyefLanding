<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Proposal_For_NGO
 */

get_header();
?>
<section>
	<div class="container">					
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
			 <div class="blog-posts">
				<div class="blog-part">	
				<?php if ( have_posts() ) : ?>

					<div class="page-header">
						<h2 class="page-title">
							<?php
							/* translators: %s: search query. */
							printf( esc_html__( 'Search Results for: %s', 'witche' ), '<span>' . get_search_query() . '</span>' );
							?>
						</h2>
					</div><!-- .page-header -->
					<div class="row">
					<?php

					while ( have_posts() ) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;
					echo '</div>';

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</section>
<?php
get_footer();
