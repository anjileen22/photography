<?php

function register_menus() { 
    register_nav_menu('main-menu',__('Main Menu')); 
} 
add_action('init', 'register_menus');

function add_themescripts() {
wp_enqueue_style( 'style', get_stylesheet_uri() );

wp_enqueue_script( 'scripts', get_template_directory_uri() . '/scripts.js');
}
add_action('wp_enqueue_scripts', 'add_themescripts');

add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'Sidebar' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}