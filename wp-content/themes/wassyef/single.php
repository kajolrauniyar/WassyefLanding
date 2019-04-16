<?php 
get_header();?>
<section class="contact-blog-area single-contact-blog-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12">
				<div class="blog-posts single-blog-post">
					
				<!-- blog details page start-->
				<?php get_template_part( 'template-parts/page/blog/blog', 'details_page' );?>
				<!-- blog details page end & blog post-author author info start-->
				<?php get_template_part( 'template-parts/page/blog/blog', 'author_info' );?>
				<!-- blog post-author author info end & blog post-author comments-area start -->
				<?php get_template_part( 'template-parts/page/blog/blog', 'author_comment' );?>
				<!-- blog post-author comments-area end -->
				</div>
			</div>
			<!-- sidebar right start -->
			<div class="col-lg-4 col-md-12">
				<div class="sidebar-area">
					<!-- sidebar-section src-area -->
					<?php  dynamic_sidebar( 'sidebar-1' );?>
					<?php get_template_part( 'template-parts/sidebar/sidebar', 'events_post' );?>
				</div><!-- about-author -->
			</div><!-- col-lg-4 -->

			<!-- sidebar right end -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- section -->

<?php get_footer();?>