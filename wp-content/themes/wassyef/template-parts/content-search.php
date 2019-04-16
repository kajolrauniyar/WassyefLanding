<div class="col-lg-4 col-md-4 col-sm-12"> 	
	<div class="single-post">
		<div class="image-wrapper">
		<?php 
	        $image = get_field('blogs_post_img');
	        if( !empty($image) ): ?>
			<a href="<?php the_permalink(); ?>"> 
	     					
			<?php 
				if($image['url']=='' || $image['url']==null)
					$fimg = WIT_IMG.'/logo.png';
				else 
					$fimg = $image['url'];
		
			$rsize = witche_imgsize('350', '280',$fimg);?>
	     				
				<img src="<?php echo $rsize; ?>" alt="<?php echo $image['alt']; ?>" >
			</a>
	    <?php endif; ?>
		</div>
	 	<div class="blog-wrap blog-main-wrap">
			<div class="icons">
				<div class="left-area blog-left-area">
					<a class="blog-title" href="<?php the_permalink();?>"><b>
					<?php the_title(); ?>	
					</b></a>
				</div>
			</div>
		<p class="blog-para"><?php the_excerpt();?></p>
<!-- 		<a class="btn read-more-btn" href="<?php the_permalink();?>">
	<b><?php the_field('blogs_post_button_title');?></b></a> -->
		</div>
	</div><!-- single-post -->
</div>




