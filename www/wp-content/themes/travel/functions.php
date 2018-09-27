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

/*
 * поддержка миниатюр
 * */
add_theme_support('post-thumbnails');

/*
 * меню
 * */
register_nav_menu('menu', 'Меню');

/*
 * сайтбар
 * */
register_sidebar(array(
	'name' => 'Виджеты сайдбара',
	'id' => 'sidebar',
	'description' => 'Здесь размещайте виджеты сайдбара',
	'before_widget' => '<div class="vidget">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>'
));

/*
 * футер
 * */
register_sidebar(array(
	'name' => 'Виджеты футера',
	'id' => 'footer',
	'description' => 'Здесь размещайте виджеты футера',
	'before_widget' => '<div class="menu-foot">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>'
));
?>