<?php 
 
get_header(); ?>


       


<div class="container"> 

    <div class="row"> 
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php bloginfo('url') ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Artigos</li>
                </ol>
            </nav>
        </div>
    </div>




<div class="row">  
    <div class="col-12">
          <h2 class="ui-title ui-title--bottom-border ui-title--center">
               <span class="ui-title__text"> <?php the_title() ?></span> 
          </h2> 
      </div>
 </div>



 <div class="row justify-content-lg-center">  
    <div class="col-8">
        <?php  
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>

                <a href="" class="btn btn-primary btn-lg btn-block p-3 "> Clique aqui para visualizar artigo completo </a>

                <div class="share-article">
                <p><strong>Compartilhe</strong> esse artigo:</p>
                <ul>
                    <li>
                        <a href="linkedin">linkedin</a>
                    </li>
                    <li>
                        <a href="linkedin">Facebook</a>
                    </li>
                    <li>
                        <a href="linkedin">Twitter</a>
                    </li>
                    <li>
                        <a href="linkedin">Whatsapp</a>
                    </li>

                </ul>
                </div>
                <?php  endwhile;  
            else :
                _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
            endif;
        ?>
    </div>
 </div>

 
  



  <div class="row">    
      <div class="col-12">

      <h2 class="ui-title ui-title--bottom-border ui-title--center">
        <span class="ui-title__text"> Artigos relacionados</span> 
    </h2> 


        <div class="artigos__cards">
          <ul class="artigos__cards__list">
            

             <?php $args = array(
                  'post_type' => 'artigos',
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


<?php get_footer(); ?>