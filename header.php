<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
  *
  * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
  *
  * @package reveille-systems
  */
  ?>
  <!doctype html>
  <html <?php language_attributes(); ?>>
    <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="profile" href="https://gmpg.org/xfn/11">
      <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
      <a class="sr-only sr-only-focusable" href="#content"><?php _e('skip to main content', 'reveille-systems'); ?></a>
      <header class="masthead">
        
        <div class="navbar fixed-top navbar-light m-0" id="banner">
          <div class="container-fluid">
            
            <div class="navbar-brand">
              <?php
              the_custom_logo();
              if ( is_front_page() && is_home() ) :
              ?>
              <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
              <?php
              else :
              ?>
              <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
              <?php
              endif;
              $reveille_systems_description = get_bloginfo( 'description', 'display' );
              if ( $reveille_systems_description || is_customize_preview() ) :
              ?>
              <p class="site-description"><?php echo $reveille_systems_description; /* WPCS: xss ok. */ ?></p>
              <?php endif; ?>
              </div><!-- .site-branding -->


              <ul class="list-inline pr-4 my-auto ml-auto font-weight-bold support-menu">
                <li class="list-inline-item"><a href="" class="active">support</a></li>
                <li class="list-inline-item"><a href="">client portal</a></li>
                <li class="list-inline-item active"><a href="">request a quote</a></li>
              </ul>              

              <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-ellipsis-h fa-stack-1x fa-inverse"></i>
              </button>

            </div>
           
            <div class="overlay">
              
              <div class="collapse navbar-collapse" id="navbarsExample01">
                <div class="container-fluid">

                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fa fa-ellipsis-h fa-stack-1x fa-inverse"></i>
                </button>
                  
                  <div class="navbar-brand">
                    <?php
                    the_custom_logo();
                    if ( is_front_page() && is_home() ) :
                    ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php
                    else :
                    ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php
                    endif;
                    $reveille_systems_description = get_bloginfo( 'description', 'display' );
                    if ( $reveille_systems_description || is_customize_preview() ) :
                    ?>
                    <p class="site-description"><?php echo $reveille_systems_description; /* WPCS: xss ok. */ ?></p>
                    <?php endif; ?>
                  </div>
              




                  <!-- .site-branding -->
                  <nav class="py-md-5 d-flex justify-content-center align-content-center px-sm-0">

                        <?php wp_nav_menu(array(
                            'menu'       => 'primary', // specify the menu name
                            'menu_class' => 'dropdown-menu forAnimate', // add classes for the dropdown
                            'container'  => '', // don't wrap the menu in <div>
                            'items_wrap' => '<ul id="%1$s" class="mobile-nav pl-0 mb-5" role="menu" >%3$s</ul>',
                        ));?>      

                  </nav>

                  <div class="social-icons d-flex justify-content-center align-content-end">
                    
                    <ul class="d-flex d-inline-block list-unstyled">
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
     
      </header>
