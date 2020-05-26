- instalar wordpress
- adicionar o template rtaonline
- criar paginas e aplicar modelo de página
    - contato
    - Encontre um profissional
    
- instalar Contact Form 7





  <?php

      function puxarProdutos(){
        return new WP_Query([
          'post_type' => 'product'
        ]);
      }
      $query = puxarProdutos();

      foreach( $query->posts as $post) { ?>
        <h2><?= $post->post_title; ?> <?= $post->ID; ?>  </h2>

        <h1> <?php the_title() ?></h1>
      <?php  } ?> 
<pre>
<?php  
$product = wc_get_product(279);
echo $product->get_price();
echo $product->get_name();
// echo $product->get_type();
// echo $product->get_name();
// echo $product->get_slug();
// echo $product->get_date_created();
// echo $product->get_date_modified();
// echo $product->get_status();
// echo $product->get_featured();
// echo $product->get_catalog_visibility();
// echo $product->get_description();
// echo $product->get_short_description();
// echo $product->get_sku();
// echo $product->get_menu_order();
// echo $product->get_virtual();
//echo get_permalink( $product->get_id() );
 ?> 

<?php  
$product = wc_get_product(279);
echo $product->get_price();
echo $product->get_name();
// echo $product->get_type();
// echo $product->get_name();
// echo $product->get_slug();
// echo $product->get_date_created();
// echo $product->get_date_modified();
// echo $product->get_status();
// echo $product->get_featured();
// echo $product->get_catalog_visibility();
// echo $product->get_description();
// echo $product->get_short_description();
// echo $product->get_sku();
// echo $product->get_menu_order();
// echo $product->get_virtual();
//echo get_permalink( $product->get_id() );
 ?> 