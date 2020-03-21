<?php 
/*
 Template Name: Página: Método RTA
*/
get_header(); ?>







<section class="metodo  w-100 d-flex flex-column ">
 
<div class="container">


<div class="row">
    <div class="col-12"> 
        <h1 class="ui-title ui-title--bottom-border ui-title--center">
            <span class="ui-title__label">Método RTA</span>
            <span class="ui-title__text">  O Método Reequilibrio   <br> Toracoabdominal - RTA   </span> 
        </h1> 
    </div> 
</div>       

<div class="row">
    <div class="col-12 col-lg-11 mt-3 mb-4 "> 
        <blockquote class="ui-blockote"> 
            <p>O método Reequilíbrio Toracoabdominal – RTA é uma abordagem da fisioterapia que avalia e trata o sistema respiratório de maneira integral em todas as idades – bebês, crianças e adultos.</p>
        </blockquote>  
    </div> 
</div>


 
    <div class="row justify-content-lg-center">
        <div class="col-12 col-lg-8 "> 
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
                        <?php the_content(); ?>  
                <?php endwhile; else: ?> 
                <?php endif; ?>
        </div>
    </div> <!-- //row --> 


    </div> <!-- //container --> 
</section>
 


<?php get_template_part('template-parts/equipeRTA/widget'); ?> 


<?php get_footer(); ?>