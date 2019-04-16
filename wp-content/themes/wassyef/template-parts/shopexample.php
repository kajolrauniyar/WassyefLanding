<div  class="shop-now">
	<h2>Shop
		<div class="imge"><img src="images/hat.png" alt=""></div>
	</h2>
	<div class="slider">
		<div id="homepage" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item">
				<!-- 	<?php echo do_shortcode( '[featured_products per_page="12" columns="1"]' );?> -->
					<?php $args = array(  
					'post_type' => 'product',  
					'meta_key' => '_featured',  
					'meta_value' => 'yes',  
					'posts_per_page' => 1  
					);  

					$featured_query = new WP_Query( $args );  

					if ($featured_query->have_posts()) :   

					while ($featured_query->have_posts()) :   

					$featured_query->the_post();  

					$product = get_product( $featured_query->post->ID );  
					?>
					// Output product information here  
					 <h2>hdifgdjgf;hb</h2>
					 <?php
					endwhile;  

					endif;  

					wp_reset_query();?>
				</div>
				<div class="carousel-item">
					<h2>hdifgdjgf;hb</h2>
				</div>
				<div class="carousel-item">
				 	<h2>hdklghosd;g</h2>
				</div>
				<div class="carousel-item">
					<h2>shdfjgsiufd</h2>
				</div>
				<div class="carousel-item">
					<h2>cdslkvhdfkjv</h2>
				</div>
				<div class="carousel-item">
					<h2>hdvfjhbvodfi</h2>
				</div>
			</div>
		</div>
	</div>
</div>

<div  class="shop-now">
<h2>Shop
<div class="imge"><img src="images/hat.png" alt=""></div>
</h2>
<div class="slider">
<div id="homepage" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
<div class="carousel-item">
<div class="images-block">
<a href="#">
<img src="images/shop-1.jpg" alt="Autohr Image">
</a>
<div class="add-product"><a href="#">Add to Craft</a></div>
</div>
<div class="product-block">
<div class="info">
<a href="#">Dream Catchers</a>
</div>
<span class="price">
<ins>
<span class="Price-amount amount">
	<span class="Price-currencySymbol">$</span>
	100
</span>
</ins>
<!-- <del>
<span class="Price-amount amount">
	<span class="Price-currencySymbol">$</span>
	222
</span>
</del> -->
</span>
</div>
</div>
<div class="carousel-item">
<div class="images-product">
<div class="images-block">
<a href="#">
<img src="images/shop-2.png" alt="Autohr Image">
</a>
<div class="add-product"><a href="#">Add to Craft</a></div>
</div>
<div class="product-block">
<div class="info">
<a href="#">Crystals</a>
</div>
<span class="price">
<ins>
<span class="Price-amount amount">
	<span class="Price-currencySymbol">$</span>
	1000
</span>
</ins>
<del>
<span class="Price-amount amount">
	<span class="Price-currencySymbol">$</span>
	90
</span>
</del>
</span>
</div>
</div>
</div>
<div class="carousel-item">
<div class="images-product">
<div class="images-block">
<a href="#">
<img src="images/shop-3.png" alt="Autohr Image">
</a>
<div class="add-product"><a href="#">Add to Craft</a></div>
</div>
<div class="product-block">
<div class="info">
<a href="#">Crystal Yoni Egg</a>
</div>
<span class="price">
<ins>
<span class="Price-amount amount">
	<span class="Price-currencySymbol">$</span>
	121
</span>
</ins>
<!-- <del>
<span class="Price-amount amount">
	<span class="Price-currencySymbol">$</span>
	222
</span>
</del> -->
</span>
</div>
</div>
</div>
<div class="carousel-item">
<div class="images-product">
<div class="images-block">
<a href="#">
<img src="images/shop-3.png" alt="Autohr Image">
</a>
<div class="add-product"><a href="#">Add to Craft</a></div>
</div>
<div class="product-block">
<div class="info">
<a href="#">Crystal Yoni Egg</a>
</div>
<span class="price">
<ins>
<span class="Price-amount amount">
	<span class="Price-currencySymbol">$</span>
	121
</span>
</ins>
<!-- <del>
<span class="Price-amount amount">
	<span class="Price-currencySymbol">$</span>
	222
</span>
</del> -->
</span>
</div>
</div>
</div>
<div class="carousel-item">
<div class="images-product">
<div class="images-block">
<a href="#">
<img src="images/shop-3.png" alt="Autohr Image">
</a>
<div class="add-product"><a href="#">Add to Craft</a></div>
</div>
<div class="product-block">
<div class="info">
<a href="#">Crystal Yoni Egg</a>
</div>
<span class="price">
<ins>
<span class="Price-amount amount">
	<span class="Price-currencySymbol">$</span>
	121
</span>
</ins>
<!-- <del>
<span class="Price-amount amount">
	<span class="Price-currencySymbol">$</span>
	222
</span>
</del> -->
</span>
</div>
</div>
</div>
<div class="carousel-item">
<div class="images-product">
<div class="images-block">
<a href="#">
<img src="images/shop-3.png" alt="Autohr Image">
</a>
<div class="add-product"><a href="#">Add to Craft</a></div>
</div>
<div class="product-block">
<div class="info">
<a href="#">Crystal Yoni Egg</a>
</div>
<span class="price">
<ins>
<span class="Price-amount amount">
	<span class="Price-currencySymbol">$</span>
	121
</span>
</ins>
<!-- <del>
<span class="Price-amount amount">
	<span class="Price-currencySymbol">$</span>
	222
</span>
</del> -->
</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php echo do_shortcode('[add_to_cart id="99"]');?>

<?php echo do_shortcode('[woocommerce_cart]');?>

<?php echo do_shortcode('[woocommerce_order_tracking]');?>

<?php echo do_shortcode('[woocommerce_checkout]');?>

<?php 
echo do_shortcode('[add_to_cart_url id="2"]');?>

<div class="register__panel__list mobile__register__panel">
	<div class="cart__block__holder">
		<ul class="d-flex align-items-center">
			<li>
				<div class="cart__holder">
					<a class="cart-customlocation" href="https://proposalsforngos.com/cart/" title="View your shopping cart">
						<svg width="14" height="18" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.15 16.18"><defs><style>.cartbag-1{fill:#231f20;}</style></defs><title>Shopping cart</title><path class="cartbag-1" d="M11.77,3.18H9.6a3.55,3.55,0,0,0-7.05,0H.3l-.3,12a1,1,0,0,0,1,1H11.14a1,1,0,0,0,1-1ZM6.07.64A2.92,2.92,0,0,1,9,3.18H3.19A2.92,2.92,0,0,1,6.07.64Z"/></svg>
						<span class="cart__num">
							
							4									
						</span>
					</a>
				</div>
			</li>
			
		</ul>
	</div>
</div>
