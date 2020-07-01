<style>
  .courses-and-events__list{ padding: 0;  margin: 0; }
  .courses-and-events__list__item {  list-style: none; margin: 0;  }
  .courses-and-events__list__item h3{ font-size: 24px; font-weight: var(--type-bold); display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; }
  .courses-and-events__list__item h4{font-size: 18px; font-weight: var(--type-bold); display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; }
  .courses-and-events__list__item h5{ font-size: 18px; font-weight: var(--type-regular); color:#5D626D }
  .courses-and-events__list__card{
        border: 1px solid var(--color-7);
    border-radius: 10px;
    padding: 20px;
    margin-top: 30px;
    position: relative;
  }
  .courses-and-events__list__card__badge{
    background-color: var(--color-3);
    color: var(--color-11);
    border-radius: 10px;
    padding: 2px 10px;
    position: absolute;
    top: -11px;
    left: 0;
    font-size: 12px;
    font-weight: var(--type-regular);
  }
  .courses-and-events__more {
    align-items: flex-end;
    display: flex;
    align-content: flex-end;
    justify-content: flex-end;
    margin-top: 10px;
    padding-right: 10px;
}
</style>


 

<div class="container"> 
  <div class="row"> 
      <div class="col-12">
          <h2 class="ui-title ui-title--bottom-border ui-title--center">
              <span class="ui-title__label" >PRÓXIMOS</span>
              <span class="ui-title__text"> Cursos <span class="fw-l">&</span> Eventos   </span> 
          </h2> 
      </div>
  </div>

    <div class="row"> 
      <div class="col-12">


      





      <ul class="courses-and-events__list row justify-content-center">
 

    
             <?php
 

 $posts_per_page =  is_post_type_archive('product')  ?  -1  :  6 ;
               

             $args = array(
                  'post_type' => 'product',
                  'posts_per_page'=> $posts_per_page, 
                  'orderby'  => array( 
                      'ID' => 'DESC' ,
                  ),
                ); ?>
                        <?php $loop = new WP_Query($args); ?>
                        <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); 
                          global $product; 
                          $product = wc_get_product();
                        ?> 



 

        <li class="courses-and-events__list__item col-12 col-lg-6">
          <div class="courses-and-events__list__card"> 


          <?php if ($product->get_stock_status() == 'instock' ) : ?>
              <?php if ( $product->get_stock_quantity() <= $product->get_low_stock_amount()) : ?>
                <div class="curso__pay-badge">
                    <span>ÚLTIMAS <?php echo $product->get_stock_quantity(); ?> VAGAS </span>
                </div>
              <?php endif ?>  


              <?php if ( $product->get_stock_quantity() === 1 ) : ?>
                <div class="curso__pay-badge">
                  <span> ÚLTIMA VAGA </span> 
                </div>
              <?php endif ?>  
               
        <?php  endif ?>    


       <?php // echo $product->get_price_html() ?>

               <div class="d-flex flex-column flex-md-row">
                  <div class="flex-grow-1 flex-column">

                  <h3>
                  <?php if( get_field('acf__curso-online')  ) : ?>  
                   <?php the_title() ;?>
                  <?php else:  ?>
                    <?php the_field('acf__curso-estado-uf') ?>
                  <?php endif; ?>  
                     </h3>

                      <?php if( have_rows('acf__curso-data__repeater') ): ?>
                          <ul class="course__data-list">
                              <?php while( have_rows('acf__curso-data__repeater') ): the_row(); 
                                  // vars
                                  $data = get_sub_field('acf__curso-data');
                                  $hora = get_sub_field('acf__curso-hora');
                                  $ano = get_sub_field('acf__curso-ano');  ?> 
                                      <li >
                                          <h4>
                                              <?php if( $data ): ?>   <?php echo $data; ?>  <?php endif; ?>
                                              <?php if( $ano ): ?> de <?php echo $ano; ?> <?php endif; ?>  
                                              </h4> 
                                      </li> 
                              <?php endwhile; ?> 
                          </ul> 
                      <?php endif; ?>
 
                      <!-- <h5> Curso <?php //$terms = get_the_terms( $post->ID , 'formacao' ); foreach ( $terms as $term ) {   echo $term->name; }?> </h5> -->
 
                      <h5> Curso
                      <?php $formacao = get_the_terms($post->ID, 'product_cat');
                        if ($formacao && !is_wp_error($formacao)) {
                            $formacao_names = array();
                            foreach ($formacao as $term)
                                $formacao_names[$term->term_id] = $term->parent==0 ?   $term->name : 'em ' . $term->name ;
                            ksort($formacao_names);
                            $formacaos = implode(" ", $formacao_names); 
                            echo    $formacaos;
                        } ?> 
                        
                        <?php if( get_field('acf__curso-online')  ) : ?>ao vivo e online<?php endif; ?>  
                        
                          </h5>
  

	                </div>
                  <div class="align-self-center p-2" style="min-width: 150px;">
                    <button type="button" class="btn btn-sm btn-primary rounded-pill align-self-center" onclick="location.href='<?php the_permalink() ?>'">Inscreva-se</button>
                  </div>
               </div>

          </div> 
        </li>

        <?php endwhile; ?>

                        <?php else: ?> 
                            <div class="col-lg-7">
                              
                              <div class="courses-and-events__list__card text-center"> 
                                <h1><i class="fas fa-thumbs-up"></i></h1>
                                <h4>Aguarde, estamos cadastrando novos cursos.</h4>
                                <p class="lead"> Está com dúvida, fale conosco pelo <a class="btn btn-secondary rounded-pill" href="https://api.whatsapp.com/send?phone=5548999164520" target="_blank" > <i class="fab fa-whatsapp"></i> whatsapp </a> </p>
                            </div> 
                        </div>
                         
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>



      </ul>


      <?php if(!is_post_type_archive('product')) :  ?>
        <div class="courses-and-events__more">
          <?php 
            $args = array(
            'post_type' => 'product'
            );
            $the_query = new WP_Query( $args );
            $totalpost = $the_query->found_posts; 
            ?> 

            <?php if($totalpost >= 6) :  ?>  
            <button type="button" class="btn btn-link "  onclick="location.href='<?php bloginfo('url');?>/cursos-e-eventos/'"   > <i class="fa fa-angle-right"></i> Conheça nossos cursos </button>
            <?php  else: ?>  
            <?php  endif; ?> 
        </div>
            

      <?php endif;   ?>
     

           
           



      </div>
    </div>

</div>