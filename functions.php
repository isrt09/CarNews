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

add_theme_support('post-thumbnails', array('post','page','gallery'));
set_post_thumbnail_size(400,500,true);
add_image_size('gallery',1900,900, true);



function car_widgets(){
	register_sidebar( array(
			'name'          => __( 'Calender', 'carnews' ),
			'id'            => 'widget-calender',
			'before_widget' => '<div class="footer-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2> ',
	) );

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
		register_sidebar( array(
		'name'          => __( 'Emergency Call', 'carnews' ),
		'id'            => 'widget-footer-emergecy',
		'before_widget' => '<div class="emergency-call mrb-50">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'car_widgets' );


add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

function my_show_extra_profile_fields( $user ) { ?>
	<h3>Extra profile information</h3>
	<table class="form-table">
	    <tr>
			<th><label for="facebook">Facebook</label></th>
			<td>
	      		    <input type="text" name="facebook" id="facebook" value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
			     <span class="description">Please enter your facebook username. [e.g http://www.facebook.com/ruhul.phyi]</span>
			</td>
	   </tr>
	   <tr>
			<th><label for="facebook">Twitter</label></th>
			<td>
	      		    <input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
			     <span class="description">Please enter your twitter username. [e.g http://www.twitter.com/ruhul.phyi]</span>
			</td>
	   </tr>
	   <tr>
			<th><label for="youtube">YouTube</label></th>
			<td>
	      		    <input type="text" name="youtube" id="youtube" value="<?php echo esc_attr( get_the_author_meta( 'youtube', $user->ID ) ); ?>" class="regular-text" /><br />
			     <span class="description">Please enter your youtube username. [e.g http://www.youtube.com/ruhul.phyi]</span>
			</td>
	   </tr>
	</table>
<?php }

add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

function my_save_extra_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

		/* Copy and paste this line for additional fields. Make sure to change 'facebook' to the field ID. */
		update_user_meta( $user_id, 'facebook', $_POST['facebook'] );
		update_user_meta( $user_id, 'youtube',  $_POST['youtube'] );
		update_user_meta( $user_id, 'twitter',  $_POST['twitter'] );
	}

function carnews_slider(){
	register_post_type('gallery',[
	'public' => true,
		'labels' => array(
			'name'    			=> __("Slider","carnews"),
			'add_new' 			=> __("Add New","carnews"),
			'add_new_item'  	=> __("Add New Slider","carnews"),
			'edit_item'      	=> __("Edit Slider","carnews"),
			'all_items'     	=> __("All Sliders","carnews"),
			'featured_image'	=> __("Slider Image","carnews"),
			'set_featured_image'=> __("Set Slider Image","carnews"),				
		),
		'supports'		=> array('title','editor','thumbnail'),
		'menu_position'	=>10,
		'menu_icon'     => 'dashicons-format-image'	
	]);
}
add_action('init','carnews_slider');