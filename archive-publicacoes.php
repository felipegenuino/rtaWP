<?php 
 
get_header(); ?>



<?php $args = array(
                  'post_type' => 'publicacoes',
                  'posts_per_page'=> -1, 
                  'orderby'  => array( 
                      'ID' => 'DESC' ,
                  ),
                ); ?>
                
                <?php $loop = new WP_Query($args); ?>
                        <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

                <article class="w-100 d-flex  flex-column">

                <section> 
                    <a href="<?php the_permalink() ?>">
                        <span > <?php the_title(); ?> </span> 
                    </a> 
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