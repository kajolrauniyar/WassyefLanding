<!-- Urban Lifestyle -->
<section class="section__urban">
	<div class="section__title">
		<h2><?php the_field('urban_slider_text_1');?>  <span><?php the_field('urbar_slider_text_2');?></span></h2>
	</div>
	<div class="urban__slider">
		<?php 

		$images = get_field('urban_photo');
		$size ='full';
		// var_dump($images);
		if( $images ): ?>
        <?php foreach( $images as $image ): ?>
		<div class="slide">

			<div class="slider__img">
			     <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			</div>
		</div>
        <?php endforeach; ?>
		<?php endif; ?>
	</div>
</section>