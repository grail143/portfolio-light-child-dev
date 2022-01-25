<?php
// enqueue parent styles

function ns_enqueue_styles() {

		//wp_enqueue_script( 'portfolio-custom', get_template_directory_uri() . '/js/jquery.custom.js', array( 'jquery', 'jquery-sidr', 'jquery-fitvids', 'jquery-colourbrightness' ), rand(111,9999), true );
    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        rand(111,9999)
    );
}
add_action( 'wp_enqueue_scripts', 'ns_enqueue_styles' );


	
function ns_load_scripts() {
	wp_enqueue_script('child-portfolio-custom', get_stylesheet_directory_uri() . '/js/jquery.custom.js', array( 'jquery', 'jquery-sidr', 'jquery-fitvids', 'jquery-colourbrightness' ), rand(111,9999), true );
}

add_action( 'wp_enqueue_scripts', 'ns_load_scripts', 15 );

?>