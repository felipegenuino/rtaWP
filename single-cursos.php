<?php  get_header(); ?>
 
 <main class="w-100 d-flex  flex-column">  
                <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6 curso__hero-wrapper">
                            <div class="curso__hero">
                            <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/course__graphic-hero.svg" alt="">

                            <div class="curso__hero-image curso__hero-image--2"> 
                                    <?php 
                                        $image2 = get_field('acf__curso-imagem-2');
                                        $size = 'large'; // (thumbnail, medium, large, full or custom size)
                                        if( $image2 ) {
                                            echo wp_get_attachment_image( $image2, $size );
                                        }
                                        ?>   
                                    </div>


                                    <div class="curso__hero-image curso__hero-image--1">  
                                            <?php 
                                                $image1 = get_field('acf__curso-imagem-1');
                                                $size = 'large'; // (thumbnail, medium, large, full or custom size)
                                                if( $image1 ) {
                                                    echo wp_get_attachment_image( $image1, $size );
                                                }
                                                ?>  
                                    </div>

                                    
                            </div>
                            
                        </div>




                        <div class="col-12 col-lg-6">
                        
                        <div class="curso__main">
                            <h1 class="ui-title"> 
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




<?php if( have_rows('acf__curso-data__repeater') ): ?>
    <ul class="course__data-list">
        <?php while( have_rows('acf__curso-data__repeater') ): the_row(); 
            // vars
            $data = get_sub_field('acf__curso-data');
            $hora = get_sub_field('acf__curso-hora');
            $ano = get_sub_field('acf__curso-ano');  ?> 
                <li class="course__data-item">
                    <strong>
                        <?php if( $data ): ?>   <?php echo $data; ?>  <?php endif; ?>
                        <?php if( $ano ): ?> de <?php echo $ano; ?> <?php endif; ?> 
                        <?php if( $hora ): ?> das <?php echo $hora; ?>  <?php endif; ?> 
                    </strong> 
                </li> 
        <?php endwhile; ?> 
    </ul> 
<?php endif; ?>

<p> <?php the_field('acf__curso-resumo') ?>   </p>
<p>Carga horária: <strong> <?php the_field('acf__curso-carga-horaria') ?>   horas/aula </strong></p>



        <section class="curso__pay"> 
            <div class="curso__pay-box">
                <div class="curso__pay-badge">
                    <span>20 VAGAS DISPONÍVEIS </span>
                </div>

                
                    <p class="curso__pay-price">
                        <strong>12x R$ 180,00 </strong>
                        <span>à vista R$ 2.500,00</span>
                    </p>
                <div class="curso__pay-button">
                    <a href="#inscrever-se" class="btn pl-4 pr-4  btn-primary btn-lg rounded-pill" type="button">Inscrever-se</a>
                </div>
                    
                
            </div>
            <div class="curso__pay-subtitle">
                <p>ACEITAMOS CARTÃO DE CRÉDITO, TRANSFERÊNCIA BANCÁRIA OU BOLETO</p>
            </div>
        </section>
   </div> <!-- // curso__main-info --> 




 
                        

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
                                            $ano = get_sub_field('acf__curso-ano');  ?> 
                                                <li class="course__data-item">
                                                    <?php if( $data ): ?> <strong>  <?php echo $data; ?> </strong>   <?php endif; ?>
                                                    <?php if( $ano ): ?> de <?php echo $ano; ?> <?php endif; ?> 
                                                    <?php if( $hora ): ?> das <?php echo $hora; ?>  <?php endif; ?> 
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



                    <div class="row justify-content-center mt-5">
                        <div class="col-sm-12 col-lg-8">
                    <section class="curso__pay curso__pay--full"> 
                        <div class="curso__pay-box">
                            <div class="curso__pay-badge">
                                <span>20 VAGAS DISPONÍVEIS </span>
                            </div> 
                            <div class="curso__pay-info">
                                <h4 class="curso__pay-title">Garanta já a sua vaga!</h4>
                                <p class="curso__pay-price curso__pay-price--horizontal">
                                    <strong>12x R$ 180,00 </strong>
                                    <span>à vista R$ 2.500,00</span>
                                </p>
                            </div>
                            <div class="curso__pay-button">
                                <a href="#inscrever-se" class="btn pl-4 pr-4  btn-primary btn-lg rounded-pill" type="button">Inscrever-se</a>
                            </div>
                                
                            
                        </div>
                        <div class="curso__pay-subtitle">
                            <p>ACEITAMOS CARTÃO DE CRÉDITO, TRANSFERÊNCIA BANCÁRIA OU BOLETO</p>
                        </div>
                    </section>
                    </div> <!-- // col-6 -->
                    </div> <!-- // row -->
                    
 
                  </div> <!-- // container -->
 </section>

                    
                </main> 

<?php get_footer(); ?>