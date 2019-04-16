<!-- Content -->
<section class="section__banner" id="registerinterest">
	<div class="slider__landing">
		<div class="slide">
			<div class="slider__image">
		  	<?php                                       
		        $image = get_field('b_image');
		        if( !empty($image) ): ?>
		        
		        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

		    <?php endif; ?>
			</div>
			
			<div class="slider__desc">
				<div class="title">
					<h1><?php the_field('banner_offer');?></h1>
				</div>
				<div class="notice">
					<p><?php the_field('b_content');?></p>
				</div>
			</div>
			<div class="slider__form" id="registerForm">
			    <div class="title">
			      <p><?php the_field('contact_title')?></p>
			   </div>
			   <div class="input-field">
				<?php echo do_shortcode('[contact-form-7 id="84" title="Landing Contact Form"]')?>
			    	<div class="form-group form-desc">
						<p><span class="icon icon-lock"></span> <?php the_field('contact_sub_title')?></p>
					</div>
				 </div>
			</div>
		</div>
	</div>
</section>
