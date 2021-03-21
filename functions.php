

<?php
 function halim_css_js_enqueue(){
 	// add all css
 wp_enqueue_style('poppins-fonts',"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700");
 wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/assets/css/bootstrap.min.css',array(),'1.0', 'all');
 wp_enqueue_style('font-awesome-css',get_template_directory_uri().'/assets/css/font-awesome.min.css',array(),'1.0', 'all');
 wp_enqueue_style('magnific-popup-css',get_template_directory_uri().'/assets/css/magnific-popup.css',array(),'1.0', 'all');
 wp_enqueue_style('owl-carousel-css',get_template_directory_uri().'/assets/css/owl.carousel.css',array(),'1.0', 'all');
 wp_enqueue_style('style-css',get_template_directory_uri().'/assets/css/style.css',array(),'1.0', 'all');
 wp_enqueue_style('responsive-css',get_template_directory_uri().'/assets/css/responsive.css',array(),'1.0', 'all');

 //default css
 wp_enqueue_style('style-css',get_stylesheet_uri(),[], filemtime(get_template_directory().'/style.css'), 'all');

 //add all js

 wp_enqueue_script('popper-js', get_template_directory_uri().'/assets/js/popper.min.js', array('jquery'), '1.0', true);
 wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '1.0', true);
 wp_enqueue_script('owl-carousel-js', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'), '1.0', true);
 wp_enqueue_script('magnific-js', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0', true);
 wp_enqueue_script('isotope-js', get_template_directory_uri().'/assets/js/isotope.min.js', array('jquery'), '1.0', true);
 wp_enqueue_script('imageloaded-js', get_template_directory_uri().'/assets/js/imageloaded.min.js', array('jquery'), '1.0', true);
 wp_enqueue_script('counterup-js', get_template_directory_uri().'/assets/js/jquery.counterup.min.js', array('jquery'), '1.0', true);
 wp_enqueue_script('waypoint-js', get_template_directory_uri().'/assets/js/waypoint.min.js', array('jquery'), '1.0', true);
 wp_enqueue_script('main-js', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.0', true);
}

add_action( 'wp_enqueue_scripts','halim_css_js_enqueue');

//Wordpress theme setup

 function halim_theme_setup(){
 	add_theme_support( 'title-tag');
   //To enable Featured Image only for specific post types
 	//ekhane post ta hoilo wp er default post section er jonno,,post na dle feature image asbe na 
 	add_theme_support('post-thumbnails', array('post','sliders','teams','testimonials') );


 	load_theme_textdomain( 'halim', get_template_directory_uri() . '/languages' );
 	register_nav_menus( array(
 	     'main-menu' => __('Primary Menu','halim')
 	) );
 }
 add_action( 'after_setup_theme', 'halim_theme_setup');


 function halim_custome_posts(){
 //Customs posts for slider
 	register_post_type( 'sliders', array(  
 		'labels'=>array(
 			'name' => __('Sliders','halim'),
 			'singular_name' => __('Slider','halim')
 		),
 		'public' => true,
 		'supports' => array('title','editor','thumbnail','custom-fields')

 ));
//Customs posts for services
 register_post_type( 'services', array(  
 		'labels'=>array(
 			'name' => __('Services','halim'),
 			'singular_name' => __('Service','halim')
 		),
 		'public' => true,
 		'supports' => array('title','editor','custom-fields')

 ));

 //Customs posts for team
 register_post_type( 'teams', array(  
 		'labels'=>array(
 			'name' => __('Teams','halim'),
 			'singular_name' => __('Team','halim')
 		),
 		'public' => true,
 		'supports' => array('title','editor','thumbnail','custom-fields','page-attributes')

 ));

 //Customs posts for testimonials
 register_post_type( 'testimonials', array(  
 		'labels'=>array(
 			'name' => __('Testimonials','halim'),
 			'singular_name' => __('Testimonial','halim')
 		),
 		'public' => true,
 		'supports' => array('title','thumbnail','custom-fields','page-attributes')

 ));
 }
 add_action( 'init', 'halim_custome_posts');

// Add function for changing default comment design
 function halim_comment_fields($fields){
 	$comment = $fields['comment'];
 	$author = $fields['author'];
 	$email = $fields['email'];
 	$url = $fields['url'];
 	$cookies = $fields['cookies'];

 	unset($fields['comment']);
 	unset($fields['author']);
 	unset($fields['email']);
 	unset($fields['url']);
 	unset($fields['cookies']);
//set the design layout,,first name then email and others
   
 	$fields['author'] = $author;
 	$fields['email'] = $email;
 	$fields['url'] = $url;
 	$fields['comment'] = $comment;
 	$fields['cookies'] = $cookies;

 	return $fields;
 }
 add_filter('comment_form_fields','halim_comment_fields',10,1);






?>
