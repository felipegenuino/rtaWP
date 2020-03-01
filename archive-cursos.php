<?php 
 
 
get_header(); ?>
 
 
 
    <div class="col-12">
      <h2 class="ui-title ui-title--bottom-border ui-title--center">
          <span class="ui-title__label">Próximos</span>
          <span class="ui-title__text">  Cursos  <span class="fw-l">e</span>   Eventos   </span> 
      </h2> 
    </div> 
 
 <div class="d-flex w-100">
    <div class="col-12 col-lg-4 ml-auto mr-2"> 
        <div class="form-group">
            <label for="inputSearch" class="sr-only sr-only-focusable">Buscar artigos</label>
            <div class="ui-seach">
                <input  data-search type="text" class="ui-seach-input form-control" id="inputSearch" aria-describedby="textHelp" placeholder="Buscar artigos">
                <button class="ui-seach-button ui-seach-button--default" title="Buscar"> </button>
                <button type="reset" class="ui-seach-button ui-seach-button--close" title="limpar"> </button>
            </div>
            <!-- <small id="textHelp" class="form-text text-muted">Precisa de ajuda?</small> -->
        </div>  
     </div>  
 </div>
 

<?php $args = array(
                  'post_type' => 'cursos',
                  'posts_per_page'=> -1, 
                  'orderby'  => array( 
                      'ID' => 'DESC' ,
                  ),
                ); ?>
                

                <div class="col-12">
        <div class="artigos__cards">
          <ul id="myUL" class="cursos__cards__list">
           

                <?php $loop = new WP_Query($args); ?>
                        <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

                 
                    <li class="cursos__cards__item">
                          <div class="cursos__cards__item__body"> 
                            <?php the_title() ?>
                          </div>
                           
                        </li>

                 
                    
                        
                        <?php endwhile; else: ?>
                            <div class="artigo">
                                <h2>Nada Encontrado</h2>
                                <p>Erro 404</p>
                                <p>Lamentamos mas não foram encontrados artigos.</p>
                            </div>            
                        <?php endif; ?>
                            
                            
                        </ul>
        </div>
        </div>
                       
                

<?php get_footer(); ?>