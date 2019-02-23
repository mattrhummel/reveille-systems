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
      <div class="col-md col-sm-12 col-md-4 pr-md-5">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/reveille-systems-logo-light.png" alt="reveille systems lite log" width="400" height="102"  /></a>
      </div>
      
      <div class="col-md col-sm-12 col-md-8 footer-links pl-md-5">
        
        <div class="row pl-md-0 pb-md-4">

        <div class="col col-md-6">
          <ul class="list-unstyled footer-menu font-weight-bold">
            <!--services menu-->
            <li><a href="#" class="text-lowercase">managed services</a></li>
            <li><a href="#" class="text-lowercase">it consulting</a></li>
            <li><a href="#" class="text-lowercase">network & cybersecurity</a></li>
            <li><a href="#" class="text-lowercase">backup, storage & recovery</a></li>
            <li><a href="#" class="text-lowercase">cloud computing</a></li>
          </ul>
        </div>
        <div class="col-md col-md-5 pl-md-0 font-weight-bold">
          <!--sitemap menu-->
          <ul class="list-unstyled footer-menu">
            <li><a href="#" class="text-lowercase">service plan</a></li>
            <li><a href="#" class="text-lowercase">case studies</a></li>
            <li><a href="#" class="text-lowercase">our company</a></li>
            <li><a href="#" class="text-lowercase">contact us</a></li>
          </ul>
        </div>
      </div>


        <div class="col-md col-md-12 footer-contact pt-3 p-sm-0">

          <div class="row pt-3">

          <div class="col-md-7 pl-md-0">
            <ul class="footer-menu list-unstyled list-inline  font-weight-bold">
              <li><a href="#">support</a></li>
              <li><a href="#">client portal</a></li>
              <li><a href="#">request a quote</a></li>
            </ul>
          </div>

          <div class="col-md-4  pl-md-0">
            <div class="social-icons list-inline pl-md-0 text-left">
              
              <ul>
                <li ><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li ><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li ><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li ><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
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