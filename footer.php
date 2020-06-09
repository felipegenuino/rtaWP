<?php
/**
 * Footer template partial
 *
 * @package RTA_Theme
 *
 */
?>
 

 


<!-- Footer -->
<footer class="ui-footer">
  <?php  get_template_part('template-parts/footer/newslatter/widget'); ?>
  <?php get_template_part('template-parts/footer/nav-info/widget'); ?>
</footer>


  


<!-- Modal Hero -->
<div class="modal modal--dark fade" id="heroModal" tabindex="-1" role="dialog" aria-labelledby="heroModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="heroModalLabel"> <span class="sr-only">Modal de Video</span> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="close-text">Fechar video</span>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" allowfullscreen></iframe> 
      </div> <!-- // embed-responsive -->
  
      </div> <!-- // modal-body -->
       
    </div>
  </div>
</div>


 

<!-- Modal Menu -->
<div class="modal right fade modal__menu" id="modalMenu" tabindex="-1" role="dialog" aria-labelledby="modalMenuLabel" aria-hidden="true">
  <div class="modal-dialog  modal__menu-dialog " role="document">
    <div class="modal-content modal__menu-content">
      <div class="modal-header modal__menu-header">
        <h5 class="modal-title" id="modalMenuLabel">Lista de páginas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="close-text"> Fechar</span> 
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
      <div class="ui-menu_mobile__login">
        <a class="btn btn-primary rounded-pill btn-sm" style="white-space: nowrap;" href="http://localhost/wp-rtaonline/minha-conta%20/">
            Acesso Aluno
        </a>
      </div>
       
      <?php
        wp_nav_menu( array(  
        'menu'            => 'menu',
        'container'       => 'nav',
        'container_class' => 'ui-menu_mobile',
        'container_id'    => '3',
        'menu_class'      => '',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul aria-label="Lista de páginas"  id="%1$s" class="%2$s">%3$s</ul>',
        'item_spacing'    => 'preserve',
        'depth'           => 2,
        'walker'          => '',
        'theme_location'  => 'header-menu', 
        ) ); 
        ?>
       
       
    </div>
  </div>
</div>


<?php wp_footer(); ?>

</body>
</html>