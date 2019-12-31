<style>


  .artigos__cards {}
  .artigos__cards__list {
    list-style: none;
    margin: 0;
    padding: 0;

    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
  }

  .artigos__cards__item {
    background-color: #f4f4ee;
    border: 2px solid transparent;
    margin: 10px;
    z-index: 1;
    padding: 30px;
    min-height: 400px;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: all 0.2s linear;
  }

  .artigos__cards__item:hover,
  .artigos__cards__item:focus {
    border: 2px solid #fa7c92;
    background: #fff;
    box-shadow: 0 18px 32px 0 rgba(157, 160, 168, 0.5);
  }

  .artigos__cards__item h3 {
    font-size: 28px;
    font-weight: var(--type-regular);
    line-height: 1.37;
   
   /* exibe somente 3 linhas */
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;  
    overflow: hidden;
  }
  .artigos__cards__item em {
    font-size: 14px;
    color: var(--color-6);
    font-weight: var(--type-medium);
  }
  .artigos__cards__item p {
    font-size: 14px;

    font-weight: var(--type-regular);
  }

</style>


<div class="container"> 
  <div class="row"> 
      <div class="col-12">
          <h2 class="ui-title ui-title--bottom-border ui-title--center">
               <span class="ui-title__text"> Artigos <span class="fw-l">que</span> transformam   </span> 
          </h2> 
      </div>



    

      <div class="col-12">
        <div class="artigos__cards">
          <ul class="artigos__cards__list">
           
          

             <?php $args = array(
                  'post_type' => 'publicacoes',
                  'posts_per_page'=> 3, 
                  'orderby'  => array( 
                      'ID' => 'DESC' ,
                  ),
                ); ?>
                        <?php $loop = new WP_Query($args); ?>
                        <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

                        <li class="artigos__cards__item">
                          <div class="artigos__cards__item__body">
                            <h3><?php the_title() ?></h3>
                            <em>Escrito por</em>

                            <?php

// check if the repeater field has rows of data
if( have_rows('acf_publicacoes_repetidor_autor') ):

 	// loop through the rows of data
    while ( have_rows('acf_publicacoes_repetidor_autor') ) : the_row(); ?>

       <p> <?php the_sub_field('acf_publicacoes_autor');?> </p>

 <?php endwhile;

else :

    // no rows found

endif;

?>


                             
                          </div>
                          <div  class="artigos__cards__item__footer">
                            <button type="button" class="btn btn-link btn-sm" onclick="location.href='<?php the_permalink() ?>'"> <i class="fa fa-angle-right"></i> Saiba mais</button>
                          </div>
                        </li>

                        <?php endwhile; ?>

                        <?php else: ?>
                            <h1>No posts here!</h1>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>


 
          </ul>
        </div>
      </div>

         
  </div>
</div>
