<?php 
/*
 Template Name: Página: Método RTA
*/
get_header(); ?>







<section class="metodo  w-100 d-flex flex-column ">


<div class="container">
    <div class="row justify-content-lg-center">
        <div class="col-lg-8 metodo_col">
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
                
             

 <div class="col-12">
                <h1 class="ui-title ui-title--bottom-border ui-title--center">
                    <span class="ui-title__label">Método RTA</span>
                    <span class="ui-title__text">  O Método Reequilibrio   <br> Toracoabdominal - RTA   </span> 
                </h1> 
                </div>

          
            
                <?php the_content(); ?> 
    
        <?php endwhile; else: ?> 
        <?php endif; ?>

        </div> <!-- //col-12 -->
    </div> <!-- //row --> 
</div> <!-- //container -->
 
</section>
 


<?php get_template_part('template-parts/equipeRTA/widget'); ?> 


<?php get_footer(); ?>