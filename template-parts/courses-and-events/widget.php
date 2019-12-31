<style>
  .courses-and-events__list{ padding: 0;  margin: 0; }
  .courses-and-events__list__item {  list-style: none; margin: 0;  }
  .courses-and-events__list__item h3{ font-size: 24px; font-weight: var(--type-bold); display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; }
  .courses-and-events__list__item h4{font-size: 18px; font-weight: var(--type-bold); display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; }
  .courses-and-events__list__item h5{ font-size: 18px; font-weight: var(--type-regular); text-transform: uppercase;  }
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

      <ul class="courses-and-events__list row">


             <?php $args = array(
                  'post_type' => 'curso',
                  'posts_per_page'=> 6, 
                  'orderby'  => array( 
                      'ID' => 'DESC' ,
                  ),
                ); ?>
                        <?php $loop = new WP_Query($args); ?>
                        <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>



        <li class="courses-and-events__list__item col-6">
          <div class="courses-and-events__list__card">
            <span class="courses-and-events__list__card__badge">ÚLTIMAS VAGAS</span>

               <div class="d-flex">
                  <div class="flex-grow-1 flex-column">
                      <h3> <?php the_title() ?></h3>
                      <h4> <?php the_field('acf_curso_data'); ?> </h4>
                      <h5> Curso <?php $terms = get_the_terms( $post->ID , 'formacao' ); foreach ( $terms as $term ) {   echo $term->name; }?> </h5>
	                </div>
                  <div class="align-self-center p-2" style="min-width: 150px;">
                    <button type="button" class="btn btn-sm btn-primary rounded-pill align-self-center" onclick="location.href='<?php the_permalink() ?>'">Inscreva-se</button>
                  </div>
               </div>

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


