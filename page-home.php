<?php 
/*
 Template Name: Página: Página inicial
*/
get_header(); ?>  
<main> 
    <?php get_template_part('template-parts/hero/widget'); ?> 
    <?php get_template_part('template-parts/banners/widget'); ?> 
    <?php get_template_part('template-parts/cases/widget'); ?> 
    <?php get_template_part('template-parts/courses-and-events/widget'); ?>  
    <?php get_template_part('template-parts/testimonials/widget'); ?>  
    <?php get_template_part('template-parts/articles/widget'); ?> 
</main>
<?php get_footer(); ?>