<!-- FLOOR PLAN -->
<section class="section__payment" id="paymentplan">
		<div class="section__title">
			<h2><?php the_field('payment_plan_title');?> <span><?php the_field('payment_plan_title_part');?> </span></h2>
		</div>
		 <?php if( have_rows('payment_plan_repeter') ): ?>
		<div class="row">
			<?php while( have_rows('payment_plan_repeter') ): the_row();
                    // vars
                $percentage = get_sub_field('payment_plan_percentage');
                $desc = get_sub_field('payment_plan_description');
                ?>
			<div class="col-sm-3">
			
				<div class="payment__infoHolder">
					<div class="payment__percent">
						<p><?php echo  $percentage ; ?></p>
					</div>
					<div class="payment__desc">
						<p><?php echo $desc; ?>t</p>
					</div>
				</div>
				
			</div>
				<?php endwhile; ?>
		</div>
     	<?php endif; ?>
</section>