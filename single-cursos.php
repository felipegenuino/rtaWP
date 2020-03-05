<?php  get_header(); ?>


       
                <main class="w-100 d-flex  flex-column">



                <section>
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <img class="img-fluid" src=" https://via.placeholder.com/500x300" alt="">
                        </div>
                        <div class="col-8">
                        
                       

                       
                        

<ul>
    <li>
        <h1 class="ui-title ui-title--bottom-border  ">

        <?php $formacao = get_the_terms($post->ID, 'formacao');
      if ($formacao && !is_wp_error($formacao)) {
          $formacao_names = array();
          foreach ($formacao as $term)
              $formacao_names[$term->term_id] = $term->parent==0 ?   $term->name : 'em ' . $term->name ;
          ksort($formacao_names);
          $formacaos = implode(" ", $formacao_names); 
        //  echo    $formacaos;
      } ?>


            <span class="ui-title__label" > <?php echo $formacaos; ?></span>
            <span class="ui-title__text"> <?php the_field('acf__curso-estado-uf') ?> </span>  
        </h1> 
    </li>
    <li>
        <em><?php the_field('acf__curso-data') ?> </em>
    </li>
    <li>
    <p> <?php the_field('acf__curso-resumo') ?>   </p>
    </li>
    <li>
    <div>
    Carga horária: <strong> <?php the_field('acf__curso-carga-horaria') ?>   horas/aula </strong>
    </div>
    </li>

    <li>
      <?php the_field('acf__curso-programa_teorico') ?>
    </li>

    <li>
      <?php the_field('acf__curso-programa_pratico') ?>
    </li>
</ul>
                        

                        </div>
                    </div>
                </div>

                
  
                </section>



                 
                <section>


                <div class="container">
                    <div class="row">
                        <div class="col-12">
                                <h2 class="ui-title ui-title--bottom-border ui-title--center"> 
                                    <span class="ui-title__text">  Descrição  <span class="fw-l"> do curso</span>    </span> 
                                </h2> 
                        </div> <!-- // col-12 -->
                    </div> <!-- // row -->

                    <div class="row justify-content-center">
                        <div class="col-3">
                                <img class="img-fluid" src=" https://via.placeholder.com/277x206" alt="">
                        </div> <!-- // col-3 -->
                        <div class="col-6">
                        <h4>Programa teórico</h4>
                        <?php the_field('acf__curso-programa_teorico') ?>
                        </div> <!-- // col-6 -->
                    </div> <!-- // row -->


                    <div class="row justify-content-center">
                        <div class="col-3">
                                <img class="img-fluid" src=" https://via.placeholder.com/277x206" alt="">
                        </div> <!-- // col-3 -->
                        <div class="col-6">
                        <h4>Programa Prático</h4>
                        <?php the_field('acf__curso-programa_pratico') ?>
                        </div> <!-- // col-6 -->
                    </div> <!-- // row -->


                    <div class="row justify-content-center">
                        <div class="col-3">
                                <img class="img-fluid" src=" https://via.placeholder.com/277x206" alt="">
                        </div> <!-- // col-3 -->
                        <div class="col-6">
                        <h4>Datas</h4>
                        </div> <!-- // col-6 -->
                    </div> <!-- // row -->



                  </div> <!-- // container -->


 
</section>

                    
                </main>
            

<?php get_footer(); ?>