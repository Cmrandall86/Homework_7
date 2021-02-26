<?php

if(!function_exists('my_enqueue_style')) {
    function my_enqueue_style() {
        wp_register_style('my-style', get_stylesheet_uri());
        wp_enqueue_style('my-style');
    }
}
add_action('wp_enqueue_scripts', 'my_enqueue_style');

if(!function_exists('my_enqueue_script')) {
    function my_enqueue_script() {
        wp_register_script('my-script',
            get_template_directory_uri() . '/my.js');
        wp_enqueue_script('my-script');
    }
}
add_action('wp_enqueue_scripts', 'my_enqueue_script');

if(!function_exists('my_widgets_init')) {
    function my_widgets_init() {
        register_sidebar( array(
            'name' => 'Primary Sidebar',
            'id' => 'my-sidebar',
            'description' => 'This is a sidebar.'
        ) );
    }
}
add_action('widgets_init', 'my_widgets_init');

if(!function_exists('my_setup_theme')) {
    function my_setup_theme() {
        register_nav_menu('primary-menu', 'Primary Menu');
    }
}
add_action( 'after_setup_theme', 'my_setup_theme' );
