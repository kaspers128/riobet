<?php
/**
* Чистый Шаблон для разработки
* Функции шаблона
* @package WordPress
* @subpackage clean
*/


add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'top' => 'Верхнее меню',
		'footer' => 'Подвал',
		'left' => 'Нижнее',
	] );
} );

add_theme_support('post-thumbnails'); // Включаем поддержку миниатюр
set_post_thumbnail_size(254, 190); // Задаем размеры миниатюре

if ( function_exists('register_sidebar') )
register_sidebar(); // Регистрируем сайдбар

?>