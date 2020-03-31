<?php 
 
get_header(); ?>


       


<div class="container"> 

    <div class="row justify-content-lg-center"> 
        <div class="col-xl-9 col-lg-10">
            <nav aria-label="breadcrumb">
                <ol class="ui-breadcrumb ui-breadcrumb--center">
                    <li class="ui-breadcrumb-item"><a href="<?php bloginfo('url') ?>">Home</a></li>
                    <li class="ui-breadcrumb-item active" aria-current="page">Artigos</li>
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

                <a href="#" class="artigo__download btn btn-primary" type="button" data-toggle="modal" data-target="#modalDownload"> <span> Clique aqui para </span> <strong> visualizar artigo completo</strong> </a>
                <!-- Modal -->
                <div class="modal modal--download fade" id="modalDownload" tabindex="-1" role="dialog" aria-labelledby="modalDownloadLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header" > 
                         <h5 class="modal-title" id="modalDownloadLabel">Preencha o formulário abaixo para <br/> visualizar o artigo completo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body "> 
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail1">Seu nome</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nameHelp" placeholder="Seu nome">
                            <small class="sr-only" id="nameHelp" class="form-text text-muted">Nome obrigatório</small>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail1">Seu email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                            <small class="sr-only" id="emailHelp" class="form-text text-muted">Email obrigatório</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Não quero ver o artigo</button>
                        <button type="button" class="btn btn-primary rounded-pill ml-auto">Ver artigo</button>
                    </div>
                    </div>
                </div>
                </div>

                <div class="artigo__share">
                <p class="artigo__share-text"><strong>Compartilhe</strong> esse artigo:</p>
                <ul class="artigo__share-list">
                    <li class="artigo__share-item artigo__share-item--linkedin">
                        <a href="#" class="artigo__share-link"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                    <li class="artigo__share-item artigo__share-item--facebook">
                        <a href="#" class="artigo__share-link"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="artigo__share-item artigo__share-item--twitter">
                        <a href="#" class="artigo__share-link"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="artigo__share-item artigo__share-item--whatsapp">
                        <a href="#" class="artigo__share-link"><i class="fab fa-whatsapp"></i></a>
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

 
  



 <div class="row justify-content-lg-center">   
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