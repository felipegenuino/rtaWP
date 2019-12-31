<?php 
 
get_header(); ?>


        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="w-100 d-flex  flex-column">

                <section>

                <?php the_title( '<h1>', '</h1>' ); ?>


                <?php

// check if the repeater field has rows of data
if( have_rows('acf_publicacoes_repetidor_autor') ):

 	// loop through the rows of data
    while ( have_rows('acf_publicacoes_repetidor_autor') ) : the_row();

        // display a sub field value
        the_sub_field('acf_publicacoes_autor');

    endwhile;

else :

    // no rows found

endif;

?>


<?php the_field('acf_publicacoes_observacao') ?>
 

<?php if( get_field('acf_publicacoes_carregar_publicacao') ): ?>
    <a target="_blank" href="<?php the_field('acf_publicacoes_carregar_publicacao'); ?>" >Download File</a>
<?php endif; ?>




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