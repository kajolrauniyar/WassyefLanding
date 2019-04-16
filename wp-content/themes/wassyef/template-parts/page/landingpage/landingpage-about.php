<!-- Invest Section -->
		<section class="section__invest" id="about">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="section__title">
							<h2><?php the_field('invest_title_part_1');?>  <span><?php the_field('invest_title_part_2');?></span></h2>
						</div>
						 <?php if( have_rows('invest_plan') ): ?>
						<div class="section__download">
						<?php while( have_rows('invest_plan') ): the_row();
                    				// vars
			               $file = get_sub_field('plan_file');
			                ?>
						<?php 
					
						if( $file ) {
							$url = wp_get_attachment_url( $file );							
							?><a href="<?php echo $file['url']; ?>"><?php echo $file['title']; ?>
							<span class="icon icon-brochure"></span></a>
						<?php } ?>
							<?php endwhile; ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="intro">
				<div class="row">
					<div class="col-sm-6">
						<h3><?php the_field('about_title');?></h3>
						<ul class="site__list">	
							<?php the_field('about_content');?>
						</ul>
					</div>
					<div class="col-sm-6">
						<div class="intro__img">
							<?php                                       
						        $image = get_field('about_image');
						        if( !empty($image) ): ?>
						        
						        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

						    <?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</section>