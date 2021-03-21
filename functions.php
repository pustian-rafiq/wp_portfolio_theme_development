

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

?>
 