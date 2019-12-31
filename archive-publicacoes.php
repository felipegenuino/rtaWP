<?php 
 
 
get_header(); ?>
 
 <script>
function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementsByClassName('artigos__cards__input');
  filter = input.value.toUpperCase();
  ul = document.getElementsByClassName("artigos__cards__list");
  li = ul.getElementsByClassName('artigos__cards__item');

  console.log()

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("h3")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>
 
 
 <div class="col-12">
        <h2 class="ui-title ui-title--bottom-border ui-title--center">
              <span class="ui-title__label">Conheça</span>
              <span class="ui-title__text">  ARTIGOS  <span class="fw-l">QUE</span> <br> TRANSFORMAM   </span> 
          </h2>
          
</div>

<div class="col-12">
    <input class="artigos__cards__input" type="text" onkeyup="myFunction()"> 
</div>

<?php $args = array(
                  'post_type' => 'publicacoes',
                  'posts_per_page'=> -1, 
                  'orderby'  => array( 
                      'ID' => 'DESC' ,
                  ),
                ); ?>
                

                <div class="col-12">
        <div class="artigos__cards">
          <ul id="myUL" class="artigos__cards__list">
           

                <?php $loop = new WP_Query($args); ?>
                        <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

                 
                    <li class="artigos__cards__item">
                          <div class="artigos__cards__item__body">
                            <h3><?php the_title() ?></h3>
                            <em>Escrito por</em>

                            <?php

                              // check if the repeater field has rows of data
                              if( have_rows('acf_publicacoes_repetidor_autor') ):

                                // loop through the rows of data
                                  while ( have_rows('acf_publicacoes_repetidor_autor') ) : the_row(); ?>

                                    <p> <?php the_sub_field('acf_publicacoes_autor');?> </p>

                              <?php endwhile;

                              else :

                                  // no rows found

                              endif;

                              ?>


                             
                          </div>
                          <div  class="artigos__cards__item__footer">
                            <button type="button" class="btn btn-link btn-sm" onclick="location.href='<?php the_permalink() ?>'"> <i class="fa fa-angle-right"></i> Saiba mais</button>
                          </div>
                        </li>

                 
                    
                        
                        <?php endwhile; else: ?>
                            <div class="artigo">
                                <h2>Nada Encontrado</h2>
                                <p>Erro 404</p>
                                <p>Lamentamos mas não foram encontrados artigos.</p>
                            </div>            
                        <?php endif; ?>
                            
                            
                        </ul>
        </div>
        </div>
                       
                

<?php get_footer(); ?>