<section class="banner-2 clear" style="background-color: white;">
    <div class="col-md-12" style="background-image: url('<?php echo get_template_directory_uri() . "/assets/images/home/banner-2.png"; ?>');background-size: cover;background-position: center;">
        <div class="banner-b center" style="">
          <h1 class="color-white uppercase">Proin suscipit luctus orci placerat</h1>
          <br class="clear">
          <a href="#" style="font-weight:600 !important;">Learn More</a>
        </div>
    </div>
</section>
<section class="footer clear" style="background-color:#ffffff;">
    <div class="container footer-container">
        <div class="col-md-5 footer-content left">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
            <?php endif; ?>
        </div>
        <div class="col-md-4 footer-content left">
            <h4 class="bold uppercase title">services</h4>
            <?php 
              $v = 0;
              $menuargs = array(
                "theme_location" => "primary",
                "menu_class" => "s-menu",
                "menu_id" => "footer-b",
              );
              $items = wp_get_nav_menu_items( 'footer-b', $menuargs); 
            ?> 
            <?php foreach( $items as $item ){ ?>
               <a hre="<?php echo $item->url; ?>"><p class="bold"><?php echo $item->title; ?></p></a>
            <?php } ?>
        </div>
        <div class="col-md-3 footer-content left" style="border-right: none !important;">
            <div class="footer-logo">
              <a href="<?php echo get_option('home'); ?>">
                <?php the_custom_logo(); ?>
              </a>
            </div>
            <br class="clear" />
            <div class="col-md-12 social-media">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
              <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section class="social-media" style="background-color: black;">
  <div class="container" style="padding-top: 10px;padding-bottom: 4px;">
    <div class="col-md-12 left center copyright-container" style="padding-top: 5px; width: 100%;">
          <p class="copyright" style="color: white;font-weight: 400;font-size: 15px;">©2017 Firewood in CT  Website – All Rights Reserved. – All Rights Reserved.</p>
    </div>

  </div>
</section>
<?php wp_footer();?>
<!-- jQuery -->
<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/owl.carousel.js"></script>
<script>
  $(document).ready(function() {
    $('.owl-1').owlCarousel({
      items: 1,
      loop: true,
      autoplay: true,
      margin: 10,
      dots: true,
      autoHeight: false
    });
  })
</script>
</body>
</html> 