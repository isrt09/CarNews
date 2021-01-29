<?php 
/*
Register Menu Support
*/

function carnewsMenu(){
	if(function_exists('register_nav_menu')){
		register_nav_menu('header_top_menu',__('Header Menu','carnews'));		
	}
}
add_action('init','carnewsMenu');

add_theme_support('post-thumbnails', array('post','page'));
set_post_thumbnail_size(400,500,true);

function car_widgets(){
		register_sidebar( array(
		'name'          => __( 'Footer Widget-1', 'carnews' ),
		'id'            => 'widget-footer-1',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2> ',
	) );
		register_sidebar( array(
		'name'          => __( 'Footer Widget-2', 'carnews' ),
		'id'            => 'widget-footer-2',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2> ',
	) );
		register_sidebar( array(
		'name'          => __( 'Footer Widget-3', 'carnews' ),
		'id'            => 'widget-footer-3',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2> ',
	) );
		register_sidebar( array(
		'name'          => __( 'Footer Copyright', 'carnews' ),
		'id'            => 'widget-footer-copyright',
		'before_widget' => '<div class="copyright">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'car_widgets' );