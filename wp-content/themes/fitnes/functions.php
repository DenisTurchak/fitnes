<?php
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'fitnes_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function fitnes_scripts() {
    wp_enqueue_style( 'style-css', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri(). '/css/bootstrap-grid.min.css' );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'bootsstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
}

add_theme_support('custom-logo', array(
    'height' => 79,
    'width' => 270,
));