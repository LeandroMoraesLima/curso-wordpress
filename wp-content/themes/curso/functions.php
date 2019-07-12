<?php 
	define('IMG', get_template_directory_uri().'/assets/img');
	define('CSS', get_template_directory_uri().'/assets/css');
	define('JS', get_template_directory_uri().'/assets/js');

// Função para carregamento dos scripts
function carrega_scripts(){

	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
	wp_enqueue_script( 'template', get_template_directory_uri() . '/js/template.js', array(), null, true);
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), '4.1.3', 'all');
	wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'carrega_scripts');

// Função para menus
register_nav_menus(
	array(
		'meu_menu_principal' => 'Menu Principal',
		'menu_rodape' => 'Menu Rodapé'
		
	)
);

add_theme_support('custom-background');
add_theme_support('custom-header');