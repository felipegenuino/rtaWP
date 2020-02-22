


<?php 
// check if the repeater field has rows of data
if( have_rows('acf__depoimentos_repeater') ):  ?>
<ul>
<?php // loop through the rows of data
    while ( have_rows('acf__depoimentos_repeater') ) : the_row(); ?>

       

    <li style="margin-bottom: 20px">
    <?php  the_sub_field('acf__depoimento_nome');  ?>
     <?php    the_sub_field('acf__depoimento_profissao');  ?>
     <?php    the_sub_field('acf__depoimento_foto'); ?>
    <?php    the_sub_field('acf__depoimento_depoimento'); ?>
    </li>
     <?php  endwhile;?>

     <?php else : ?> 

   'Nenhum comentario cadastrado'

   </ul>
   <?php endif; ?>

 
 
