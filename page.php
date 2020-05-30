<?php get_header(); ?> 
<main>
    <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
                            <div class="page-entry">
                                <h1 class="page-title"> <?php the_title(); ?> </h1>
                                <p><?php the_content(); ?></p>
                            </div>
                        <?php endwhile; else: ?>
                            <div class="page-title">
                                <h2>Nada Encontrado</h2>
                                <p>Erro 404</p>
                                <p>Lamentamos mas não foram encontrados artigos.</p>
                            </div>            
                        <?php endif; ?>
                </div>
        </div>
    </div>
</main>


<?php get_footer(); ?>