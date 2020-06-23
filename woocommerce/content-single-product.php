

 
<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;  

add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

?>





 
 






 

<!-- <pre> 
<?php //  print_r( $product ) ?>
</pre>   -->



<section class="w-100 d-flex  flex-column"  id="product-<?php the_ID(); ?>" <?php  wc_product_class( '', $product ); ?>>  
 
                <section>
                <div class="container">
						<div class="row">
							<div class="col-12">
								<?php echo wc_print_notices();  ?>
							</div>
						</div>

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

							<?php // $product->get_stock_quantity(); ?>
						<!-- <div class="curso__pay-badge">
							<span><?php //  echo $product->get_stock_quantity(); ?> VAGAS DISPONÍVEIS </span>
						</div> -->

						

 
					  
 
				<?php if ($product->get_stock_status() == 'instock' ) : ?>
					<div class="curso__pay-badge">
						<?php if (  $product->get_stock_quantity() === 1 ) : ?>
							<span> ÚLTIMA VAGA </span> 
 						<?php elseif ($product->get_stock_quantity() <= $product->get_low_stock_amount()) :  ?>
							<span>ÚLTIMAS <?php echo $product->get_stock_quantity(); ?> VAGAS </span>
						<?php else : ?>
							<span><?php echo $product->get_stock_quantity(); ?>  VAGAS DISPONÍVEIS </span>
						<?php endif ?> 
					</div>
				<?php  endif ?>
                
                    <p class="curso__pay-price">
                        <strong>Pague em até 12x</strong>
                        <span> à vista  <?php echo $product->get_price_html(); ?></span>
                    </p>
					

					<div class="curso__pay-button">
						<?php if ($product->get_stock_status() == 'instock' ) : ?>
								<?php woocommerce_template_single_add_to_cart(); ?>  
						<?php else : ?>
							<?php if ($product->stock_status) : ?>
								<button type="button" class="btn btn-lg btn-primary pl-4 pr-4 rounded-pill disabled" disabled >Lotado</button> 
							<?php  endif ?>
						<?php endif ?> 		
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

                            <?php if( have_rows('acf__curso-data__repeater') ): 
                            $count = 0;
                            while( have_rows('acf__curso-data__repeater') ): the_row();  
                                $count ++;
                                endwhile; ?> 

                            <h4 class="course__content-title"> <?php echo ($count >= 2) ? 'Datas' :  'Data';  ?> </h4>
                            <?php endif; ?>

 
                            <div class="course__content"> 
                                <?php if( have_rows('acf__curso-data__repeater') ): ?>
                                    <ul class="course__data-list">
                                        <?php while( have_rows('acf__curso-data__repeater') ): the_row(); 
                                            // vars
                                            $data = get_sub_field('acf__curso-data');
                                            $hora = get_sub_field('acf__curso-hora');
                                            $ano = get_sub_field('acf__curso-ano'); 
                                            $cont ++;
                                            ?> 
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



				 <?php if ($product->get_stock_status() == 'instock' ) : ?>
                    <div class="row justify-content-center mt-5">
                        <div class="col-sm-12 col-lg-8">
                    <section class="curso__pay curso__pay--full"> 
                        <div class="curso__pay-box">
						
							<div class="curso__pay-badge">
								<?php if (  $product->get_stock_quantity() === 1 ) : ?>
									<span> ÚLTIMA VAGA </span> 
								<?php elseif ($product->get_stock_quantity() <= $product->get_low_stock_amount()) :  ?>
									<span>ÚLTIMAS <?php echo $product->get_stock_quantity(); ?> VAGAS </span>
								<?php else : ?>
									<span><?php echo $product->get_stock_quantity(); ?>  VAGAS DISPONÍVEIS </span>
								<?php endif ?> 
							</div>
						
                            <div class="curso__pay-info">
                                <h4 class="curso__pay-title">Garanta já a sua vaga!</h4>
                                <p class="curso__pay-price xcurso__pay-price--horizontal">
                                    <span> Pagamento em até 12x no cartão </span>
                                     <!-- <strong> <?php // echo $product->get_price_html(); ?> </strong>    -->
                                </p>
                            </div>
                            <div class="curso__pay-button"> 
									<?php woocommerce_template_single_add_to_cart(); ?>  
							</div>
                        </div>
                        <div class="curso__pay-subtitle">
                            <p>ACEITAMOS CARTÃO DE CRÉDITO, TRANSFERÊNCIA BANCÁRIA OU BOLETO</p>
                        </div>
                    </section> 
                    </div> <!-- // col-6 -->
                    </div> <!-- // row -->
                    <?php endif ?>
                    


                    

<?php 
$faqs = get_field('acf__curso-perquntas-frequentes');  
if( $faqs ): ?>
 

 <div class="row justify-content-center  mt-5">
    <div class="col-12">
            <h2 class="ui-title ui-title--bottom-border ui-title--center"> 
                <span class="ui-title__text"> Perguntas  <span class="fw-l"> frequentes</span>    </span> 
            </h2> 
    </div> <!-- // col-12 -->
</div>


 <div class="row justify-content-center">
    <!-- <div class="col-sm-12 col-lg-3">
        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/course__graphic-talk.svg" alt="">
    </div>   -->
    <div class="col-sm-12 col-lg-8">
         
        <div class="course__content">

        <div class="accordion" id="accordionFaq"> 
                <?php foreach( $faqs as $faq ): ?> 
                    <?php // print_r( $faq); ?> 

                    <div class="card">
                        <div class="card-header" id="faq-heading-<?php echo $faq->ID ; ?>">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left d-flex align-items-center" type="button" data-toggle="collapse" data-target="#faq-collapse-<?php echo $faq->ID ; ?>" aria-expanded="true" aria-controls="faq-collapse-<?php echo $faq->ID ; ?>">
                                <i class="far fa-dot-circle"></i>
                                <?php echo get_the_title( $faq->ID ); ?>
                                <?php echo edit_post_link('Editar', '<small class="badge badge-light ml-auto">', '</small>', $faq->ID); ?>
                            </button> 
                        </h2>
                        </div>

                        <div id="faq-collapse-<?php echo $faq->ID ; ?>" class="collapse" aria-labelledby="faq-heading-<?php echo $faq->ID ; ?>" data-parent="#accordionFaq">
                        <div class="card-body">
                                <?php echo  wpautop($faq->post_content); ?>
                        </div>
                        </div>
                    </div> 
                   
                <?php endforeach; ?>
                </div>
        </div>
    </div> <!-- // col-6 -->
</div> <!-- // row -->

<?php endif; ?> 


                    
                    
 
                  </div> <!-- // container -->
 </section>

                    
</section>  
 
  


