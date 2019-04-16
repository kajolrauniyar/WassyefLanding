	<!-- FLOOR PLAN -->
		<section class="section__floor" id="floorplan">
			<div class="section__title">
				<h2><?php the_field('floor_location_tittle') ?>  <span><?php the_field('floor_location_sub_title') ?></span></h2>
			</div>
			
			<div class="row">
				
		
				<?php if( have_rows('floor_location_tab') ): ?>
			
					<div class="col-sm-8 col-lg-6 offset-sm-0 offset-lg-2">
						<div class="tab-content">
					<?php
					$x = 0; 
					while( have_rows('floor_location_tab') ): the_row();
						$x++;
							        $title = get_sub_field('floor_location_tab_title');
					        $icon = get_sub_field('floor_location_tab_icon');
				         	$link = get_sub_field('floor_location_link_text');
				         	$floor_location_link = get_sub_field('floor_location_link');

				         	?>
												
							<div id="<?php echo $link;?>" class="tab-pane fade <?php echo $x==1?"active show":"";?>">
									<?php if( $floor_location_link ): ?>
				        		<div class="floor__planSlider">
				        			<?php foreach( $floor_location_link as $floor_link):
										//print_r($floor_link);

							            // vars
							        $title = $floor_link['floor_location_tab_click_title'];
							        $subtitle =  $floor_link['floor_location_tab_click_sub_title'];
						          	$image =  $floor_link['floor_location_tab_click_image'];
					        		?>
									<div class="slides">
										<div class="sider-header">
											<div class="content">
												<p><span class="schedule"><?php echo $title;?></span></p>
												<p><span class="title"><?php echo $subtitle;?></span></p>
											</div>
										</div>
										<div class="floor__img">
											<?php if( !empty($image) ): ?>

											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

											<?php endif; ?>
										</div>
										
									
								</div>
									<?php endforeach;?>
								</div>
									<?php endif;?>						
							</div>
								
							<?php endwhile;?></div>
					</div>
				<?php endif;?>	

				<div class="col-sm-3"><?php if( have_rows('floor_location_tab') ): ?>			 	
					<ul class="floor__planList nav nav-tabs">
						<?php $y=0; while( have_rows('floor_location_tab') ): the_row(); $y++;
				            // vars
				        $title = get_sub_field('floor_location_tab_title');
				        $icon = get_sub_field('floor_location_tab_icon');
			         	$link = get_sub_field('floor_location_link_text');
			        	?>
						<li>
							<a class="floor__tabHolder <?php echo $y==1?"active show":"";?> " data-toggle="tab" href="#<?php echo $link;?>">	
								<div class="floor__planIcon">
									<span class="icon <?php echo $icon;?>"></span>
								</div>
								<div class="floor__planTitle">
									<span><?php echo $title;?></span>
								</div>
							</a>
						</li>
						<?php endwhile; ?>					
					</ul><?php endif; ?>
				</div>
				
			</div>
			
		</section>