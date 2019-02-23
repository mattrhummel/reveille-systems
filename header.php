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
            
            <div class="navbar-brand pl-2">
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
              <button class="navbar-toggler border-0 pr-2" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-ellipsis-h fa-stack-1x fa-inverse"></i>
              </button>
            </div>
            <div class="overlay">
              
              <div class="collapse navbar-collapse h-100 bg-white p-0 m-0 w-100" id="navbarsExample01">
                <div class="container-fluid p-2">
                  
                  <div class="navbar-brand ">
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
                  <nav class="p-5 d-flex justify-content-center align-content-center">

                        <?php wp_nav_menu(array(
            'menu'       => 'menu-1', // specify the menu name
            'menu_class' => 'dropdown-menu forAnimate', // add classes for the dropdown
            'container'  => '', // don't wrap the menu in <div>
            'items_wrap' => '<ul id="%1$s" class="list-unstyled text-center" role="menu" >%3$s</ul>',
        ));?>      

                  </nav>
                  <div class="social-icons d-flex justify-content-center align-content-center p-5">
                    
                    <ul class="d-flex d-inline-block list-unstyled">
                      <li ><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li ><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                      <li ><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                      <li ><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                  
                  <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fa fa-ellipsis-h fa-stack-1x fa-inverse"></i>
                  </button>
                  
                </div>
                
              </div>
            </div>
          </div>
     
      </header>
