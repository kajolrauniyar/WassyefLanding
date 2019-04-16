

    <!-- Footer -->
    <footer>
      <div class="footer__top">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
                <a href="<?php the_field('instagram');?> " class="social-link" target="_blank"><span class="fab fa-instagram"></span></a>
                <a href="<?php the_field('facebook');?> " class="social-link"  target="_blank"><span class="fab fa-facebook"></span></a>
                <a href="<?php the_field('twitter');?> " class="social-link"  target="_blank"><span class="fab fa-twitter"></span></a>
            </div>
            <div class="col-sm-4">
              <a href="<?php the_field('email_link');?>" class="email-link"><?php the_field('email');?> </a>
            </div>
            <div class="col-sm-4">
              <a href="<?php the_field('phone_link');?>" class="phone-link"><?php the_field('phone');?></a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__bottom">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p><?php the_field('footer_text');?></p>
            </div>
            <div class="col-sm-6">
              <p><?php the_field('footer_content');?><span class="fas fa-heart"></span> <span class="company"> by <a href="<?php the_field('site_link');?>"><?php the_field('site_name');?></a></span></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
<?php
    // Remove default jQuery.
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'wit-jquery',  get_template_directory_uri(). '/landing-assets/js/jquery-3.3.1.min.js', array(), 'v3.3.1', false );
	wp_enqueue_script( 'wit-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), '', true );
	wp_enqueue_script( 'wit-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), '', true );
	wp_enqueue_script( 'wit-slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '', true );
  wp_enqueue_script( 'script_country_js',  get_template_directory_uri().'/landing-assets/country-select/build/js/countrySelect.min.js', array(), '', true );
  wp_enqueue_script('script_js',  get_template_directory_uri().'/landing-assets/js/app.js',array(), null );
  ?>

<?php wp_footer();?>
      <script type="text/javascript">
    // script for select country auto 

    $("#nationality_user").countrySelect({

      initialCountry: "auto",

      geoIpLookup: function(callback) {

        $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {

          var countryCode = (resp && resp.country) ? resp.country : "";

          callback(countryCode);

        });

      }

    });
    </script>
</body>
</html>