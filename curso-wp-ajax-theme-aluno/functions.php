<?php

/*********************************************
* INCLUDES
**********************************************/



/*********************************************
* ASSETS
**********************************************/

function app_scripts() {

	// assets folder

	$css_folder =  get_template_directory_uri() . '/_assets/_css';
	$js_folder	=  get_template_directory_uri() . '/_assets/_js';

	// versão
	$versao 	= 3;


	// jQuery
	wp_enqueue_script('jquery');


	// bootstrap
	wp_enqueue_script( 'popper', $js_folder . '/popper.min.js', null, 1, true );
	wp_enqueue_script( 'bootstrap', $js_folder . '/bootstrap.js', null, 1, true );
	wp_enqueue_style( 'bootstrap', $css_folder . '/bootstrap.css', 1, 1, 'all' );

	// tema
	
	wp_enqueue_style( 'theme', get_stylesheet_uri(), 1, $versao, 'all' );
	

}

add_action("wp_enqueue_scripts", "app_scripts");