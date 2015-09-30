<?php 

if ( ! function_exists( 'material_scripts' ) ){
	
	function material_scripts() {
		
		wp_enqueue_style( 'parent-style-custom', get_template_directory_uri() . '/stylesheets/styles.css' );

    	wp_enqueue_style( 'parent-style-main', get_template_directory_uri()  . '/style.css' );

    	wp_enqueue_style( 'child-style', get_stylesheet_uri() );

    	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/javascripts/bootstrap.min.js', array( 'jquery' ), false, true );
		
		wp_enqueue_script( 'material-custom', get_template_directory_uri() . '/javascripts/main.js', array( 'jquery' ), false, true );

	}

	add_action( 'wp_enqueue_scripts', 'material_scripts' );

}


?>