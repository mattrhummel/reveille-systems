<?php 

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function reveille_systems_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'reveille-systems' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'reveille-systems' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Career Sidebar', 'reveille-systems' ),
		'id'            => 'careers-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'reveille-systems' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'Footer Col 1', 'reveille-systems' ),
		'id'            => 'footer-col-1',
		'description'   => esc_html__( 'Add widgets here.', 'reveille-systems' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'Footer Col 2', 'reveille-systems' ),
		'id'            => 'footer-col-2',
		'description'   => esc_html__( 'Add widgets here.', 'reveille-systems' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'Footer Col 3', 'reveille-systems' ),
		'id'            => 'footer-col-3',
		'description'   => esc_html__( 'Add widgets here.', 'reveille-systems' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'reveille_systems_widgets_init' );
