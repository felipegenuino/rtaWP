 
<section class="equipe">




<div class="container">  
  <div class="row ">


  <div class="col-12">
  <h1 class="ui-title ui-title--bottom-border ui-title--center"> 
      <span class="ui-title__text"> <span class="ui-title__text--regular">Equipe</span> RTA  </span> 
  </h1> 
  </div>


  <div class="col col-12 ">

    <ul class="equipe_list">

    
<?php 
    $args = array(
      'post_type' => 'equipe',
      'posts_per_page' => -1,
      'orderby' => 'menu_order',
      'order'    => 'ASC'
      );
    $query = new WP_Query($args); 
?> 

   <?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
 
<?php 
   if( get_field('acf__team_default')  ) { ?> 
        <li class="equipe_item equipe_item--default <?php if( current_user_can('editor') || current_user_can('administrator') ) { echo 'has-edit'; }; ?> ">
              <?php if( current_user_can('editor') || current_user_can('administrator') ) {   
                        echo edit_post_link( __( 'Editar', 'textdomain' ), '<small class="has-edit_w-btn">', '</small>', null, 'has-edit_btn' );
              } ?>
            <div class="row justify-content-lg-center align-items-center">
              <div class="col-12 col-lg-4">
                <div class="equipe_image-box"> 
                    <img class="equipe_image-background" src="<?php echo get_template_directory_uri(); ?>/images/team-item-background.svg" alt="" >
                    <img class="equipe_image" src="<?php the_field('acf__team_image'); ?>" alt="" >
                </div> <!-- // equipe_image-box --> 
             </div>

             <div class="col-12 col-lg-6">
               <div class="equipe_info">
                  <h4 class="equipe_item-title"><?php the_title() ?></h4>
                  <h5 class="equipe_item-position"><?php the_field('acf__team_position'); ?></h5>
                  <p class="equipe_item-resumo"><?php the_field('acf__team_resumo'); ?></p>
               </div> <!-- // equipe_info -->
             </div>
          </div>     
        </li> <!-- //equipe_item --> 
    <?php  } else { ?>

      
    <li class="equipe_item <?php if( current_user_can('editor') || current_user_can('administrator') ) { echo 'has-edit'; }; ?> ">
              <?php if( current_user_can('editor') || current_user_can('administrator') ) {   
                        echo edit_post_link( __( 'Editar', 'textdomain' ), '<small class="has-edit_w-btn">', '</small>', null, 'has-edit_btn' );
              } ?>
              <div class="equipe_image-box">
              <?php get_bloginfo('template_directory') ?>
                <img class="equipe_image" src="<?php the_field('acf__team_image'); ?>" alt="" >
                <img class="equipe_image-background" src="<?php echo get_template_directory_uri(); ?>/images/team-item-background.svg" alt="" >
              </div> <!-- // equipe_image-box --> 
              <div class="equipe_info">
                <h4 class="equipe_item-title"><?php the_title() ?></h4>
                <h5 class="equipe_item-position"><?php the_field('acf__team_position'); ?></h5>
                <p class="equipe_item-resumo"><?php the_field('acf__team_resumo'); ?></p>
              </div> <!-- // equipe_info -->
    </li> <!-- //equipe_item -->
     

      <?php  } ?>


 
 
    <?php endwhile; endif; wp_reset_postdata(); ?>

    </ul>

    </div> <!-- // col -->  
  </div> <!-- // row -->  
</div> <!-- // container -->
</section>
 