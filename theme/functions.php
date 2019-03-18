<?php

add_action( 'wp_enqueue_scripts', 'test_styles' );
add_action( 'wp_enqueue_scripts', 'test_scripts' );



function test_styles() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/styles/bootstrap.min.css', array(), null );
	//wp_enqueue_style( 'custom', get_template_directory_uri().'/styles/style.scss', array( 'bootstrap' ), null );
	wp_enqueue_style( 'custom', get_template_directory_uri().'/styles/style.css', array( 'bootstrap' ), null );
}

function test_scripts() {
	wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/scripts/bootstrap.js', array( 'jquery' ), null, 'in_footer' );
	wp_enqueue_script( 'customda', get_template_directory_uri().'/scripts/main.js', array( 'jquery' ), null, 'in_footer' );
}


remove_action( 'wp_head', 'wp_generator' );


function myphpinformation_scripts() {    


if( !is_admin()){
	 wp_deregister_script('jquery');
	 wp_register_script('jquery', get_template_directory_uri().'/scripts/jquery.min.js', false, null);
	 wp_enqueue_script('jquery');
	}
}
add_action( 'wp_enqueue_scripts', 'myphpinformation_scripts' );
?>