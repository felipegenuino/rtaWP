<?php 
/*
 Template Name: Página: Método RTA
*/
get_header(); ?>


        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="w-100 d-flex  flex-column">

                <section >
                    <h1 class="ui-title ui-title--bottom-border ui-title--center">
                        <span class="ui-title__text"> <?php the_title(); ?> </span> 
                    </h1> 
                </section>
                <section class="d-flex  ">
                   <div>
                    <p><?php the_content(); ?></p>
                   </div>

                    <div>
                       <p>Se preferir utilize um dos canais abaixo</p>

                       <div>
                            <div>
                                <span>Telefone</span>
                                <span>48 3223.4233</span>
                            </div>
                            <div>
                                <span>Whatsapp</span>
                                <span>48 9 9916.4520</span>
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

<?php get_footer(); ?>