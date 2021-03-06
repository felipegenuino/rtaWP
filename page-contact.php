<?php 
/*
 Template Name: Página: Contato
*/
get_header(); ?>
 <main class="container"> 

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="w-100 d-flex  flex-column">

                <section >
                    <h1 class="ui-title ui-title--bottom-border ui-title--center">
                        <span class="ui-title__text"> <?php the_title(); ?> </span> 
                    </h1> 
                </section>
                <section class="d-flex  ">
                    <div class="row row--bt py-4">
                        <div class="col-12 col-lg-6  px-4  py-4">
                            <h2 class="fs-24 fw-r">Para entrar em contato preencha o formulário</h2>
                            <p><?php the_content(); ?></p>
                        </div>

                        <div class="col-12 col-lg-6  px-4">
                            <div class="row py-4">
                                <div class="col-12">
                                    <p class="lead">Se preferir utilize um dos canais abaixo</p> 
                                </div>
                            </div>
                            <div class="row row--bt py-4 p-r">      
                                <div class="col-6">
                                    <div class="contato__info">
                                        <div class="contato__info-icon-wrap">
                                            <i class="contato__info-icon fas fa-phone-alt"></i>
                                        </div>
                                        <div class="contato__info-text-wrap" >
                                            <span class="fs-14 color-6">Telefone</span>
                                            <span class="fs-16 fw-m">48 3223.4233</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="contato__info">
                                        <div class="contato__info-icon-wrap"> 
                                            <i class="contato__info-icon fab fa-whatsapp"></i>
                                        </div>
                                        <div class="contato__info-text-wrap" >
                                            <span class="fs-14 color-6">Whatsapp</span>
                                            <span class="fs-16 fw-m"> <a href="https://api.whatsapp.com/send?phone=5548999164520" target="_blank" data-toggle="tooltip" data-placement="top" title="Clique para falar conosco direto pelo Whatsapp"> 48 9 9916.4520 </a> </span>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="row row--bt py-4 p-r">
                                <div class="col-12">
                                    <div class="contato__info">
                                            <div class="contato__info-icon-wrap"> 
                                                <i class="contato__info-icon fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="contato__info-text-wrap" >
                                                <span class="fs-14 color-6">Endereço</span>
                                                <span class="fs-14 fw-m">Rua João Mathias Cordeiro, 83, Córrego Grande / Florianópolis </span>
                                            </div>
                                        </div>
                                </div> 
                            </div>

                            <div class="row row--bt py-4 p-r">
                                <div class="col-12">
                                    <ul class="contato__social-list">
                                        <li class="contato__social-item ">
                                            <a href="https://www.facebook.com/rta.metodo" target="_blank" class="contato__social-link"><i class="fab fa-facebook-f"></i></a>
                                        </li> 
                                        <li class="contato__social-item">
                                            <a href="https://twitter.com/RtaMetodo" target="_blank" class="contato__social-link"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="contato__social-item">
                                            <a href="https://www.instagram.com/rtaonline/" target="_blank" class="contato__social-link"><i class="fab fa-instagram"></i></a>
                                        </li> 
                                        <li class="contato__social-item">
                                            <a href="https://www.youtube.com/channel/UCzZCIcrSwvHfR4M0Vws5LSQ?view_as=subscriber" target="_blank" class="contato__social-link"><i class="fab fa-youtube"></i></a>
                                        </li> 
                                        <li class="contato__social-item">
                                            <a href="https://api.whatsapp.com/send?phone=5548999164520" target="_blank" class="contato__social-link"><i class="fab fa-whatsapp"></i></a>
                                        </li> 
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                

                

                    
                </article>
            <?php endwhile; else: ?>
                <div class="artigo">
                    <h2>Nada Encontrado</h2>
                    <p>Erro 404</p>
                    <p>Lamentamos mas não foram encontrados artigos.</p>
                </div>            
            <?php endif; ?>


            <?php get_template_part('template-parts/courses-and-events/widget'); ?>  

            </main> <!-- container -->  
<?php get_footer(); ?>