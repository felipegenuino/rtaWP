<?php

 
//GUTEMBERG 
// disable for posts
add_filter('use_block_editor_for_post', '__return_false', 10);
// disable for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);





function rta_scripts() { 
    wp_enqueue_style( 'rta-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'rta-style', get_stylesheet_uri() );
    wp_enqueue_style( 'rta-styleguide', get_template_directory_uri() . '/css/styleguide.css' );
    wp_enqueue_style( 'rta-font-roboto', "https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" );
    wp_enqueue_style( 'rta-font-awesome', "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" ); 
    wp_enqueue_style( 'rta-slick-css', "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" );
    wp_enqueue_style( 'rta-slick-css-theme', "https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" );
 

    // if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    //   wp_enqueue_script( 'comment-reply' );
    // }

    wp_enqueue_script( 'rta-jq', get_template_directory_uri() . '/js/jquery-3.3.1.slim.min.js');
    wp_enqueue_script( 'rta-popper', get_template_directory_uri() . '/js/popper.min.js');
    wp_enqueue_script( 'rta-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script( 'rta-slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
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



 


//  function theme_options_panel(){
//   add_menu_page('Theme page title', 'Theme menu label', 'manage_options', 'theme-options', 'wps_theme_func');
//   add_submenu_page( 'theme-options', 'Settings page title', 'Settings menu label', 'manage_options', 'theme-op-settings', 'wps_theme_func_settings');
//   add_submenu_page( 'theme-options', 'FAQ page title', 'FAQ menu label', 'manage_options', 'theme-op-faq', 'wps_theme_func_faq');
// }
// add_action('admin_menu', 'theme_options_panel');
 
// function wps_theme_func(){
//         echo '<div class="wrap"><div id="icon-options-general" class="icon32"><br></div>
//         <h2>Theme</h2></div>';
// }
// function wps_theme_func_settings(){
//         echo '<div class="wrap"><div id="icon-options-general" class="icon32"><br></div>
//         <h2>Settings</h2></div>';
// }
// function wps_theme_func_faq(){
//         echo '<div class="wrap"><div id="icon-options-general" class="icon32"><br></div>
//         <h2>FAQ</h2></div>';
// }