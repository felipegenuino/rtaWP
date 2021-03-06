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

  if ( is_front_page()  ) {
    wp_enqueue_script( 'rta-home-hero', get_template_directory_uri() . '/template-parts/hero/scripts.js');
  };

  if ( is_post_type_archive('artigos') ) {
    wp_enqueue_script( 'rta-article-script', get_template_directory_uri() . '/template-parts/articles/scripts.js');
  }; 
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
 



// remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );



/*** Atualiza numero de itens dentro do icone de Carinho: header.php ***/ 
add_filter( 'woocommerce_add_to_cart_fragments', 'wc_refresh_mini_cart_count');
function wc_refresh_mini_cart_count($fragments){
    ob_start();
    ?>
    <div id="mini-cart-count">
        <?php echo WC()->cart->get_cart_contents_count(); ?>
    </div>
    <?php
        $fragments['#mini-cart-count'] = ob_get_clean();
    return $fragments;
}
/*** ************************************** ***/




// function adicionar_antes_do_carrinho(){
//   echo '<div style="background: blue">';
// }


// function adicionar_depois_do_carrinho(){
//   echo '</div>';
// }
// add_action('woocommerce_before_cart', 'adicionar_antes_do_carrinho');
// add_action('woocommerce_after_cart', 'adicionar_depois_do_carrinho');


function modificar_thumbnail($img){
  //print_r($img);
  return false;
}
add_filter('woocommerce_cart_item_thumbnail', 'modificar_thumbnail' );





/**
* filter translations, to replace some WooCommerce text with our own
* @param string $translation the translated text
* @param string $text the text before translation
* @param string $domain the gettext domain for translation
* @return string
*/
function wpse_77783_woo_bacs_ibn($translation, $text, $domain) {
  if ($domain == 'woocommerce') {
      switch ($text) {
          case 'IBAN':
              $translation = 'CNPJ';
              break;

          case 'BIC / Swift':
              $translation = 'COD';
              break;
      }
  }

  return $translation;
}

add_filter('gettext', 'wpse_77783_woo_bacs_ibn', 10, 3);







// add_filter( 'woocommerce_get_price_html', 'wpa83367_price_html', 100, 2 );
// function wpa83367_price_html( $price, $product ){
//     return 'À vista1: ' . str_replace( '<ins>', ' À vista2: <ins>', $price );
// }

 




add_filter( 'woocommerce_taxonomy_args_product_cat', 'custom_wc_taxonomy_label_product_cat' );
function custom_wc_taxonomy_label_product_cat( $args ) {
	$args['label'] = 'Formações';
	$args['labels'] = array(
        'name' 				=> 'Formação',
        'singular_name' 	=> 'Formação',
        'menu_name'			=> 'Formações'
	);

	return $args;
} 