<?php
/**
 * Created by PhpStorm.
 * User: monir
 * Date: 5/5/2021
 * Time: 7:59 PM
 */


/**
 * @function: curotec_register_styles
 * Uses to register stylesheets to the theme.
 */
function echocabins_register_styles() {

    wp_enqueue_style( 'echocabins-app', get_template_directory_uri().'/dist/app.css', array(), '1.0' );
    wp_enqueue_style( 'echocabins-style', get_template_directory_uri().'/style.css', array(), '1.0' );

    // Add print CSS.
    wp_enqueue_style( 'curotec-print-style', get_template_directory_uri() . '/style-print.css', null, '1.0', 'print' );
}

add_action( 'wp_enqueue_scripts', 'echocabins_register_styles' );


/**
 * @function: curotec_register_scripts
 * Register and Enqueue Scripts.
 */
function echocabins_register_scripts() {

    wp_enqueue_script('jquery');
    wp_enqueue_script( 'echocabins-js', get_template_directory_uri() . '/dist/app.js', array('jquery'), '1.0', false );
    wp_enqueue_script( 'echocabins-loader', 'https://unpkg.com/aos@next/dist/aos.js', array('jquery'), '1.0', false );
}

add_action( 'wp_enqueue_scripts', 'echocabins_register_scripts' );


/**
 * Theme support added for the page and posts.
 * By adding this support the theme able to get the featured image
 * for a page or post.
 */
add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
add_theme_support( 'post-thumbnails' );


/**
 * @function  custom_logo_setup used for
 * registering the custom logo uploading function from wordpress customizer.
 */
function custom_logo_setup() {
    $defaults = array(
        'height'      => 80,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'custom_logo_setup' );


/**
 * @function  curotec_theme_menu uses for
 * registering the nav menu. That shows the dynamic menu item created
 * from the admin panel.
 */
function echocabins_theme_menu() {
    register_nav_menus(
        array(
            'echocabins-menu' => __( 'Header Menu' )
        )
    );
}
add_action( 'init', 'echocabins_theme_menu' );