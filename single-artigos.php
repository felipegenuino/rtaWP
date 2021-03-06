<?php 
 
get_header(); ?>


       


<div class="container"> 

    <div class="row justify-content-lg-center"> 
        <div class="col-xl-9 col-lg-10">
            <nav aria-label="breadcrumb">
                <ol class="ui-breadcrumb ui-breadcrumb--center">
                    <li class="ui-breadcrumb-item"><a href="<?php bloginfo('url') ?>">Home</a></li>
                    <li class="ui-breadcrumb-item"><a href="<?php bloginfo('url') ?>/artigos">Artigos</a></li>
                </ol>
            </nav>
        </div>
    </div>




<div class="row justify-content-lg-center">  
    <div class="col-xl-9 col-lg-8">
        <div class="ui-block-title align-items-xl-center justify-content-xl-center  ui-block-title--bottom-border">
            <h2 class="ui-title__text text-xl-center mb-2">  <?php the_title() ?> </h2> 
            <em class="artigo__header-meta mb-2">Escrito por</em> 
            <p class="artigo__header-authors text-xl-center mb-4"> <?php the_field('acf__artigos_autores');?> </p>
        </div>
      </div>
 </div>



 <div class="row justify-content-lg-center">  
    <div class="col-xl-8 col-lg-8">
        <?php  
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>

                <a href="<?php the_field('acf__artigos_arquivo');?>" target="_blank" class="artigo__download btn btn-primary" type="button">  <span> Clique aqui para </span> <strong> visualizar artigo completo</strong> </a>
                
                <div class="artigo__share d-none" >
                    <p class="artigo__share-text"><strong>Compartilhe</strong> esse artigo:</p>
                    <ul class="artigo__share-list">
                        <li class="artigo__share-item artigo__share-item--linkedin">
                            <a href="#" class="artigo__share-link"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li class="artigo__share-item artigo__share-item--facebook">
                            <a href="#" class="artigo__share-link"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="artigo__share-item artigo__share-item--twitter">
                            <a href="https://twitter.com/RtaMetodo" class="artigo__share-link"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="artigo__share-item artigo__share-item--whatsapp">
                            <a href="" class="artigo__share-link"><i class="fab fa-whatsapp"></i></a>
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

 
  








<?php 
$artigosRelacionado = get_field('acf__artigos_relacionados');  
if( $artigosRelacionado ): ?>
<div class="row justify-content-lg-center">   
    <div class="col-12">
        <h2 class="ui-title ui-title--bottom-border ui-title--center">  <span class="ui-title__text"> Artigos relacionados</span>  </h2> 
        <div class="artigos__cards">
            <ul class="artigos__cards__list"> 
                <?php foreach( $artigosRelacionado as $artigo ): ?> 
                    <li class="artigos__cards__item" onclick="location.href='<?php echo get_permalink( $artigo->ID );  ?>'">
                        <div class="artigos__cards__item__body">
                            <h3><?php echo get_the_title( $artigo->ID ); ?></h3>
                            <em>Escrito por</em> 
                            <p> <?php the_field('acf__artigos_autores', $artigo->ID);?> </p> 
                        </div>
                        <div  class="artigos__cards__item__footer">
                            <button type="button" class="btn btn-link btn-sm" onclick="location.href='<?php echo get_permalink( $artigo->ID );  ?>'"> <i class="fa fa-angle-right"></i> Saiba mais</button>
                        </div>
                    </li>  
                <?php endforeach; ?>
            </ul>
        </div>
    </div> 
</div> 
<?php endif; ?> 




<?php   if(!$artigosRelacionado) : ?>

    <div class="row justify-content-lg-center">   
    <div class="col-12">
        <h2 class="ui-title ui-title--bottom-border ui-title--center">  <span class="ui-title__text"> Conheça outros artigos  </span>  </h2> 


        <div class="artigos__cards">
          <ul class="artigos__cards__list">  
             <?php $args = array(
                  'post_type' => 'artigos',
                  'posts_per_page'=> 3, 
                  'orderby' => 'rand',
                  'order'    => 'DESC' 
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
                        <?php  endif; ?>
                        <?php wp_reset_postdata(); ?> 
          </ul> 
        </div> 

        </div>
    </div> 
<?php endif;    ?>

  

  
</div> <!-- //container -->




<?php get_footer(); ?>