<?php 

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'reveille-systems' ),
		) );
		register_nav_menus( array(
			'services-menu' => esc_html__( 'Services Menu', 'reveille-systems' ),
		) );
		register_nav_menus( array(
			'footer-pages-menu' => esc_html__( 'Footer Pages Menu', 'reveille-systems' ),
		) );
		register_nav_menus( array(
			'support-menu' => esc_html__( 'Support Menu', 'reveille-systems' ),
		) );

		register_nav_menus( array(
			'support-main-menu' => esc_html__( 'Support Main Menu', 'reveille-systems' ),
		) );

function reveille_systems_footer_services_menu_navigation() {
         wp_nav_menu(array(
        'container' => true,             // remove menu container
        'container_class' => '',          // class of container
        'menu' => 'services-menu',
        'items_wrap' => '<ul id="%1$s" class="list-unstyled footer-menu font-weight-bold">%3$s</ul>' ,                  // menu name
        'menu_class' => '',        // adding custom nav class
        'theme_location' => '',  // where it's located in the theme
        'before' => '',                   // before each link <a>
        'after' => '',                    // after each link </a>
        'link_before' => '',              // before each link text
        'link_after' => '',               // after each link text
        'depth' => 0,                     // limit the depth of the nav
    	 'fallback_cb' => 'main_nav_fb',   // fallback function (see below)
        'walker' => ''      // walker to customize menu (see foundation-nav-walker)
	));
}


function reveille_systems_footer_pages_menu_navigation() {
         wp_nav_menu(array(
        'container' => true,             // remove menu container
        'container_class' => '',          // class of container
        'menu' => 'footer-pages-menu',
        'items_wrap' => '<ul id="%1$s" class="list-unstyled footer-menu font-weight-bold">%3$s</ul>' ,                  // menu name
        'menu_class' => '',        // adding custom nav class
        'theme_location' => '',  // where it's located in the theme
        'before' => '',                   // before each link <a>
        'after' => '',                    // after each link </a>
        'link_before' => '',              // before each link text
        'link_after' => '',               // after each link text
        'depth' => 0,                     // limit the depth of the nav
    	 'fallback_cb' => '',   // fallback function (see below)
        'walker' => ''      // walker to customize menu (see foundation-nav-walker)
	));
}

function reveille_systems_support_menu_navigation() {
         wp_nav_menu(array(
        'container' => true,             // remove menu container
        'container_class' => '',          // class of container
        'menu' => 'support-menu',
        'items_wrap' => '<ul id="%1$s" class="footer-menu list-unstyled list-inline font-weight-bold">%3$s</ul>' ,                  // menu name
        'menu_class' => '',        // adding custom nav class
        'theme_location' => '',  // where it's located in the theme
        'before' => '',                   // before each link <a>
        'after' => '',                    // after each link </a>
        'link_before' => '',              // before each link text
        'link_after' => '',               // after each link text
        'depth' => 0,                     // limit the depth of the nav
    	 'fallback_cb' => '',   // fallback function (see below)
        'walker' => ''      // walker to customize menu (see foundation-nav-walker)
	));
}

function reveille_systems_support_main_menu_navigation() {
         wp_nav_menu(array(
        'container' => true,             // remove menu container
        'container_class' => '',          // class of container
        'menu' => 'support-main-menu',
        'items_wrap' => '<ul id="%1$s" class="list-inline pr-4 my-auto ml-auto font-weight-bold support-menu">%3$s</' ,                  // menu name
        'menu_class' => '',        // adding custom nav class
        'theme_location' => '',  // where it's located in the theme
        'before' => '',                   // before each link <a>
        'after' => '',                    // after each link </a>
        'link_before' => '',              // before each link text
        'link_after' => '',               // after each link text
        'depth' => 0,                     // limit the depth of the nav
    	 'fallback_cb' => '',   // fallback function (see below)
        'walker' => ''      // walker to customize menu (see foundation-nav-walker)
	));
}

?>