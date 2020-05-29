<?php
/**
 * The header for our theme.
 *
 * @package Botega_Scratch_Theme
 *
 */
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>> 

<?php if ( is_home() ) {  ?>
  <div aria-hidden="true" class="ui-header__background"></div> 
 <?php } ?>

 
<header class="ui-header" role="navigation">
  <div class="container"> 
    <div class="col-12">

    <div class="d-flex flex-row justify-content-between  ui-header__top">
    <ul class="ui-header__flags__list">
        <li class="ui-header__flags__item"> 
            <a href="#" class="ui-header__flags__link">
              <img class="ui-header__flags__image" src="<?php bloginfo('template_url'); ?>/images/lang-ptbr.svg" alt="imagem: Bandeira do Brasil">
          </a>
        </li>
        <li class="ui-header__flags__item"> 
            <a href="#" class="ui-header__flags__link">
              <img class="ui-header__flags__image" src="<?php bloginfo('template_url'); ?>/images/lang-eng.svg" alt="imagem: Bandeira Americana">
          </a>
        </li>
        <li class="ui-header__flags__item"> 
            <a href="#" class="ui-header__flags__link">
              <img  class="ui-header__flags__image" src="<?php bloginfo('template_url'); ?>/images/lang-es.svg" alt="imagem: Bandeira da Espanha">
          </a>
        </li>
      </ul>

    </div> <!-- //ui-header__top -->

   <div class="d-flex flex-row justify-content-between ui-header__main"> 
     
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"> 
        <img src="<?php bloginfo('template_url'); ?>/images/logo_RTA.svg" alt="Logotipo RTA">
      </a> 
      <nav class="ui-header__nav"> 
        <?php
        wp_nav_menu( array(  
        'menu'            => '',
        'container'       => '',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'ui-header__menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'item_spacing'    => 'preserve',
        'depth'           => 2,
        'walker'          => '',
        'theme_location'  => 'header-menu', 
        ) );

       // wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
        ?>
        <a href="#" aria-label="Abrir Menu" class="ui-header__menu-mobile" data-toggle="modal" data-target="#modalMenu">
          <i aria-hidden="true" class="fas fa-bars"></i>
        </a>
 
        <a class="ui-header__cart"  href="<?php echo esc_url( home_url( '/carrinho/' ) ); ?>" > 
          <img src="<?php bloginfo('template_url'); ?>/images/icon__cart.svg" alt="imagem: carrinho de compras">
          
            <span class="ui-header__cart-alert"> <span id="mini-cart-count"></span> </span>
          
        </a>

      </nav> 
    </div> <!-- // ui-header__main -->


      </div> <!-- // col-12 -->
    </div> <!-- // container -->
  </header>

 
 