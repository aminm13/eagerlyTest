<?php 


add_theme_support('post-thumbnails');
add_post_type_support( 'schedule', 'thumbnail' );

function create_post_type() {
    register_post_type( 'schedule',
        array(
            'labels' => array(
                'name' => __( 'Products' ),
                'singular_name' => __( 'Product' )
            ),
            'public' => true,
            'has_archive' => true
        )
    );
}
add_action( 'init', 'create_post_type' );

function eagerlyCalendar_register_styles(){
	wp_enqueue_style('calendar_style',get_template_directory_uri()."/style.css",array(),'1.0','all');

	wp_enqueue_style('calendar_style',"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css
	"."/style.css",array(),'1.0','all');

}

function EagerlyMenus(){
	$locations=array(
		'primary'=>"Desktop Primary Left Sidebar",
		'footer'=>"Footer Menu Items"	
	);
	register_nav_menus($locations);
}

add_action('init','EagerlyMenus');

function eagerlyCalendar_register_scripts(){
	wp_enqueue_style('calendar_scripts',get_template_directory_uri()."/style.css",array(),'1.0','all');
		wp_enqueue_style('calendar-jQuery',"//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js",array(),'1.0','all');
					wp_enqueue_style('',"//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"."/style.css",array(),'1.0','all');
				}


add_action('wp_enqueue_scripts','eagerlyCalendar_register_scripts');


function calendar_postType(){

$args=array(
'labels'=>array(
'name'=>'Events',
'singular_name'=>'program_item',
),	
'menu_icon'=>'dashicons-images-alt2',
'hierarchial'=>true,
'public'=>true,
'has_archive'=>true,
'view_item' => __('View Event'),
'supports' =>array('title', 'editor', 'thumbnail', 'custom-fields','excerpt'),
'can_export'=>true

);
register_post_type('schedule',$args);

}

add_action('init','calendar_postType');

function calendar_Genre_taxonomy(){

			$args = array(

				'labels' => array(
					'name' => 'Genre',
					'singular_name' => 'Genre',
				),

				'public' => true,
				'hierarchical' => true,

			);
		register_taxonomy('genre', array('schedule'), $args);

}

add_action('init', 'calendar_Genre_taxonomy');

function calendar_Location_taxonomy(){

			$args = array(

				'labels' => array(
					'name' => 'Location',
					'singular_name' => 'Location',
				),

				'public' => true,
				'hierarchical' => true,

			);
		register_taxonomy('location', array('schedule'), $args);

}

add_action('init', 'calendar_Location_taxonomy');


function ImportAddToDashboard(){
	wp_add_dashboard_widget('owner_dashboard_widget', 'Import XML File to populate your Events ', 'ImportXMLForm');
}


function ImportXMLForm(){

	$value = esc_attr( get_option( 'importLink' ) );
	echo '
	
	<h1>import form</h1>
	<form type="post" action=".\importXml.php" >
	<button > Import </button>
	</form>
	
	
	';
} 

add_action('wp_dashboard_setup','ImportAddToDashboard');


?>