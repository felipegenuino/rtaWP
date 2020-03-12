<?php

 
//GUTEMBERG 
// disable for posts
add_filter('use_block_editor_for_post', '__return_false', 10);
// disable for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);




add_theme_support( 'post-thumbnails' );


function rta_scripts() { 
    wp_enqueue_style( 'rta-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'rta-style', get_stylesheet_uri() );
    wp_enqueue_style( 'rta-styleguide', get_template_directory_uri() . '/css/styleguide.css' );
    wp_enqueue_style( 'rta-font-roboto', "https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" );
    wp_enqueue_style( 'rta-font-awesome', "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" ); 
   

    // if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    //   wp_enqueue_script( 'comment-reply' );
    // }

    wp_enqueue_script( 'rta-jq', get_template_directory_uri() . '/js/jquery-3.3.1.slim.min.js');
    wp_enqueue_script( 'rta-popper', get_template_directory_uri() . '/js/popper.min.js');
    wp_enqueue_script( 'rta-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
      wp_enqueue_script( 'rta-main-js', get_template_directory_uri() . '/js/main.js');
}    
add_action( 'wp_enqueue_scripts', 'rta_scripts' );





//menu customizado
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Menu do cabeçalho' ),
      'extra-menu' => __( 'Extra Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

 