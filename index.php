<?php get_header(); ?>



<div class="container">
    <div class="row">
        <div class="col-12">
                <!-- Começa o Loop. -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <!-- Mostra o conteúdo do post em uma DIV -->
                        <div class="entry"> 
                        <?php the_content(); ?>
                        </div>
                
                <!-- Termina o Loop (mas repare no "else" - veja próxima linha) -->
                <?php endwhile; else: ?>

                <!-- O primeiro IF testou para ver se havia posts a serem mostrados -->
                <!-- Este ELSE diz ao WordPress o que fazer se não houver nenhum -->
                <p>Sorry, no posts matched your criteria.</p>

                <!-- Término verdadeiro do Loop -->
                <?php endif; ?>

        </div>
    </div>
</div>


<?php get_footer(); ?>