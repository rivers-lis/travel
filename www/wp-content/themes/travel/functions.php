<?php
/*
 * загружаемые стили и скрипты
 * */
function load_style_script() {
	wp_enqueue_script('jquery-1', get_template_directory_uri() . '/js/jquery-1.js');
	wp_enqueue_script('jquery00', get_template_directory_uri() . '/js/jquery00.js');
	wp_enqueue_script('init0000', get_template_directory_uri() . '/js/init0000.js');

	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}

/*
 * загружаем стили и скрипты
 * */
add_action('wp_enqueue_scripts', 'load_style_script');

?>