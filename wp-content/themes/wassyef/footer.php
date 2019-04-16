   <?php wp_footer();?>
    <!-- Footer -->
    <footer>
      <div class="footer__top">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
                <a href="<?php the_field('instagram');?> " class="social-link"><span class="fa fa-instagram"></span></a>
                <a href="<?php the_field('facebook');?> " class="social-link"><span class="fa fa-facebook"></span></a>
                <a href="<?php the_field('twitter');?> " class="social-link"><span class="fa fa-twitter"></span></a>
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
              <p><?php the_field('footer_content');?><span class="fa fa-heart"></span> <span class="company"> by <a href="<?php the_field('site_link');?>"><?php the_field('site_name');?></a></span></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
</body>
</html>