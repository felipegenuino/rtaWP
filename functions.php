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

  // if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
  //   wp_enqueue_script( 'comment-reply' );
  // }

  wp_enqueue_script( 'rta-jq', get_template_directory_uri() . '/js/jquery-3.3.1.js');
  wp_enqueue_script( 'rta-popper', get_template_directory_uri() . '/js/popper.min.js');
  wp_enqueue_script( 'rta-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
  wp_enqueue_script( 'rta-fontawesome',  'https://kit.fontawesome.com/66c5adcbe3.js');
  wp_enqueue_script( 'rta-main-js', get_template_directory_uri() . '/js/main.js');
}    
add_action( 'wp_enqueue_scripts', 'rta_scripts' );





//menu customizado
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Menu Principal' ),
      // 'extra-menu' => __( 'Extra Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

 
/*  function executar_na_home() { ?>
//   <section>
//     <h1>Titulo</h1>
//     <p>Conteudo da function</p>
//   </section>
//  <?php } 
//     add_action('dentro_da_home', 'executar_na_home');
  */   



// function mudar_titulo($titulo){
//   return '<span class="bg-primary">' . $titulo . '</span>  ';
// }
// add_filter('the_title', 'mudar_titulo');



function rta_add_woocommerce_support(){
  add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'rta_add_woocommerce_support');  


//remove action breadcrumb
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
 


 

/*** Página do curso: content-sincle-product ***/

//Alterar nome do botão adquirir
add_filter('woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text');
function woo_custom_cart_button_text() {
return __('Inscrever-se', 'woocommerce');
}

//remove texto in-stock na página de produto
 add_filter( 'woocommerce_get_stock_html', '__return_empty_string', 10, 2 );
 
/*** ************************************** ***/
 