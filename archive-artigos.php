<?php 
 
 
get_header(); ?>
 
 <main class="container"> 

    <div class="col-12">
      <h2 class="ui-title ui-title--bottom-border ui-title--center">
          <span class="ui-title__label">Conheça</span>
          <span class="ui-title__text">  ARTIGOS  <span class="fw-l">QUE</span> <br> TRANSFORMAM   </span> 
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
            <!-- <small id="textHelp" class="form-text text-muted">Precisa de ajuda?<csmall> -->
        </div>  
     </div>  
 </div>
 

<?php $args = array(
                  'post_type' => 'artigos',
                  'posts_per_page'=> -1, 
                  'orderby'  => array( 
                      'ID' => 'DESC' ,
                  ),
                ); ?>
                

                <div class="col-12">
        <div class="artigos__cards">
          <ul id="myUL" class="artigos__cards__list">
           

                <?php $loop = new WP_Query($args); ?>
                        <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

                 
                    <li class="artigos__cards__item"
                        data-filter-item 
                        data-filter-title="<?php the_title() ?>" 
                        data-filter-authors="<?php the_field('acf__artigos_autores');?>" >
                          <div class="artigos__cards__item__body">
                            <h3><?php the_title() ?></h3>
                            <em>Escrito por</em> 
                            <p> <?php the_field('acf__artigos_autores');?> </p> 
                          </div>
                          <div  class="artigos__cards__item__footer">
                            <a type="button" class="btn btn-link btn-sm" href="<?php the_permalink() ?>'"> <i class="fa fa-angle-right"></i> Saiba mais</a>
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
                       
  </main> <!-- container -->  
        


<?php get_footer(); ?>