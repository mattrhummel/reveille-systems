<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package reveille-systems
*/
?>
<footer class="text-muted bg-primary py-5">
  <div class="container">
    <div class="row no-gutters align-items-center">
      <div class="col-md col-sm-12 col-lg-4 pr-md-5 footer-logo">
      <?php dynamic_sidebar( 'footer-col-1' ); ?> 
      <p class="footer-address text-white" >
              <?php the_field('address', 'option'); ?><br/>
             <?php the_field('phone_number', 'option'); ?>
      </p>
      </div>
      <div class="col-sm-12 col-md-8 footer-links pl-md-5">

        <div class="row pb-md-4">
          <div class="col col-md-7 pl-md-0 ">
               <?php  
               reveille_systems_footer_services_menu_navigation(); ?>
              <?php dynamic_sidebar( 'footer-col-2' ); ?> 
          </div>
          <div class="col-md col-md-5 pl-md-0 font-weight-bold">
             <?php 
               reveille_systems_footer_pages_menu_navigation(); ?>
              <?php dynamic_sidebar( 'footer-col-3' ); ?> 
          </div>
        </div>
        <div class="col-md col-md-12 footer-contact pt-3 p-sm-0">
          <div class="row pt-3">
            <div class="col-md-7 pl-md-0">
               <?php  
               reveille_systems_support_menu_navigation(); ?>
            </div>
            <div class="col-md-5  pl-md-0">
              <div class="social-icons list-inline pl-md-0 text-left">

                <ul>
                  <li ><a href="<?php echo esc_html('https://www.facebook.com/', 'reveille-systems'); echo the_field('facebook_id', 'option'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li ><a href="<?php echo  esc_html('https://www.twitter.com/', 'reveille-systems'); echo the_field('twitter_id', 'option'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li ><a href="<?php echo  esc_html('https://www.instagram.com/', 'reveille-systems'); echo the_field('instagram_id', 'option'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  <li ><a href="<?php echo  esc_html('https://www.linkedin.com/company/', 'reveille-systems'); echo the_field('linkedin_url', 'option'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
