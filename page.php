<?php get_header(); ?> 
<div class="container">
            <div class="row">
                <div class="col-12">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
                        <div class="artigo">
                            <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                            <p><?php the_content(); ?></p>
                        </div>
                    <?php endwhile; else: ?>
                        <div class="artigo">
                            <h2>Nada Encontrado</h2>
                            <p>Erro 404</p>
                            <p>Lamentamos mas não foram encontrados artigos.</p>
                        </div>            
                    <?php endif; ?>
            </div>
    </div>
</div>

<?php get_footer(); ?>