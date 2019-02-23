<?php  


/**
 * Enqueue scripts and styles.
 */
function reveille_systems_scripts() {

wp_enqueue_style( 'reveille-systems-theme-styles', get_template_directory_uri() . '/css/theme.min.css');
wp_enqueue_style( 'reveille-systems-slider', get_template_directory_uri() . '/css/owl.carousel.min.css');
wp_enqueue_style( 'reveille-systems-typekit', 'https://use.typekit.net/tgx1xmo.css');
wp_enqueue_script( 'reveille-systems-jquery',  'https://code.jquery.com/jquery-3.3.1.slim.min.js?ver=20151215', array(), '20151215', true );
wp_enqueue_script( 'reveille-systems-bootstrap', get_template_directory_uri() . '/js/theme.min.js', array(), '20151215', true );
wp_enqueue_script( 'reveille-systems-slider', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151215', true );
wp_enqueue_script( 'reveille-systems-custom', get_template_directory_uri() . '/js/custom-javascript.js', array(), '20151215', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'reveille_systems_scripts' );