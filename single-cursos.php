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

                    <div class="row justify-content-center mt-4">
                        <div class="col-sm-12 col-lg-3">
                                <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/course__graphic-study.svg" alt="">
                        </div> <!-- // col-3 -->
                        <div class="col-sm-12 col-lg-6">
                            <h4 class="course__content-title">Programa teórico</h4>
                            <div class="course__content">
                                <?php the_field('acf__curso-programa_teorico') ?>
                            </div>
                        </div> <!-- // col-6 -->
                    </div> <!-- // row -->

                    <div class="row justify-content-center mt-5">
                        <div class="col-sm-12 col-lg-3">
                            <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/course__graphic-talk.svg" alt="">
                        </div> <!-- // col-3 -->
                        <div class="col-sm-12 col-lg-6">
                            <h4 class="course__content-title">Programa Prático</h4>
                            <div class="course__content">
                                <?php the_field('acf__curso-programa_pratico') ?>
                            </div>
                        </div> <!-- // col-6 -->
                    </div> <!-- // row -->

                    <div class="row justify-content-center mt-5">
                        <div class="col-sm-12 col-lg-3">
                            <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/course__graphic-calendar.svg" alt="">
                        </div> <!-- // col-3 -->
                        <div class="col-sm-12 col-lg-6">
                            <h4 class="course__content-title">Datas</h4>
                            <div class="course__content">
                                
<?php if( have_rows('acf__curso-data__repeater') ): ?>

<ul class="course__data-list">

<?php while( have_rows('acf__curso-data__repeater') ): the_row(); 

    // vars
    $data = get_sub_field('acf__curso-data');
    $hora = get_sub_field('acf__curso-hora');
    $ano = get_sub_field('acf__curso-ano');

    ?>

    <li class="course__data-item">

        <?php if( $data ): ?>
          <strong>  <?php echo $data; ?> </strong> 
        <?php endif; ?>

        <?php if( $ano ): ?>
          de  <?php echo $ano; ?>
        <?php endif; ?>

        <?php if( $hora ): ?>
           das <?php echo $hora; ?>
        <?php endif; ?>

        

    </li>

<?php endwhile; ?>

</ul>

<?php endif; ?>

                            </div>

                            <h4 class="course__content-title mt-4 ">Local</h4>
                            <div class="course__content">
                                <strong><?php the_field('acf__curso-local') ?> </strong>   <br />
                               <p> <?php the_field('acf__curso-address') ?> </p> 
                            </div>
                        </div> <!-- // col-6 -->
                    </div> <!-- // row -->
 
                  </div> <!-- // container -->
 </section>

                    
                </main>
            

<?php get_footer(); ?>