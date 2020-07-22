 


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
                  'post_type' => 'artigos',
                  'posts_per_page'=> 3, 
                  // 'orderby'  => array( 
                  //     'ID' => 'DESC' ,
                  // ),
                  'orderby' => 'rand',
                  'order'    => 'DESC' 
                ); ?>
                        <?php $loop = new WP_Query($args); ?>
                        <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

                        <li class="artigos__cards__item"
                          onclick="location.href = '<?php the_permalink() ?>'">
                          <div class="artigos__cards__item__body">
                            <h3><?php the_title() ?></h3>
                            <em>Escrito por</em>

                            <p> <?php the_field('acf__artigos_autores');?> </p>
 
                             
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



