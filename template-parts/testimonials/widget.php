 
<?php if (get_field('acf__depoimentos-active'))  {  ?> 

 <section class="depoimentos"> 

     <div class="container">
         <div class="row">
             

 
<div class="depoimento_header">
<h3 class="depoimento_title"> O que falam da RTA <strong>Depoimentos</strong></h3>
</div>



 <?php if( have_rows('acf__depoimentos_repeater') ) { ?>
		    
		    <?php
			    $num = 0;
			    $active = 'active';
			?>
		    
			<div id="carouselExampleIndicators" class="depoimento_carousel carousel slide" data-ride="carousel">
				
				<ol class="carousel-indicators depoimento_dots">
					
					<?php while( have_rows('acf__depoimentos_repeater') ) : the_row() ; ?>
						
					<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $num; ?>" class="depoimento_dots_item <?php echo $active; ?>"></li>
					
					<?php 
						$num++;
						$active = '';
					?>
					
					<?php endwhile; ?>
					
		  		</ol>
		  		
		  		<div class="carousel-inner">
		  			
		  			<?php $active = 'active'; ?>
		  			
		  			<?php while( have_rows('acf__depoimentos_repeater') ) : the_row() ;
			  			
			  			$nome 		= get_sub_field('acf__depoimento_nome');
			  			$profissao 	= get_sub_field('acf__depoimento_profissao');
                        $foto 	= get_sub_field('acf__depoimento_foto'); 
                        $depoimento 	= get_sub_field('acf__depoimento_depoimento'); 

		  			?>
		  			
		  			<div class="depoimento_item carousel-item <?php echo $active; ?>">
		  				 
                            <img class="depoimento_image" src="<?php echo $foto['url'];  ?>" alt="<?php echo $foto['alt'];  ?>">
                            <h4 class="depoimento_name"><?php echo $nome; ?></h4>
                            <h5 class="depoimento_profissao"><?php echo $profissao; ?></h5>
                            <p class="depoimento_depoimento"><?php echo $depoimento; ?></p>
		  				 
		    		</div>
		    		
		    		<?php $active = ''; ?>
		    		
		    		<?php endwhile; ?>

		  		
		  		</div>
		  
		  		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		  			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  			<span class="sr-only">Previous</span>
		  		</a>
		  
		  		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		  			<span class="carousel-control-next-icon" aria-hidden="true"></span>
		  			<span class="sr-only">Next</span>
		  		</a>
			
			</div>
			
            <?php  } ?>







            
            
         </div> <!-- // row -->
     </div> <!-- // container -->
				
  </section> <!-- //depoimentos -->
        




 


<?php   /* 
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
   <?php endif;  */?>

 
 
<?php }  ?>