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
set_post_thumbnail_size(400,300,true);