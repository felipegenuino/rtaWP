<?php if (get_field('acf__case-active'))  {  ?> 



<style> 
  .case__widget{}
  .case__widget-list{ 
    justify-content: center;
      display: flex;  flex-direction: column;   margin: 0; padding: 0;  list-style: none;      align-items: center;}




  .case__widget-item {
    width: 100%;
    max-width: 100%;
    height: 170px;
    display: flex;
    position: relative;
    border-radius: 10px 2px;
    opacity: 1;
    overflow: hidden;
    background: #42495B;
    margin: 15px;
}

  
  
 
 
  .case__widget-item:hover,
  .case__widget-item:focus
  {} 


 

  .case__widget-info{ 
    position: absolute;
    left: 0;
    right: 0;
    height: 100%;
    width: 100%;
    display: flex;
    z-index: 3;
  } 

  .case__widget-info h2 { color: #fff; font-size: 28px; font-weight: 600 }

  .case__widget-info-inner {
    margin-left: 30px;
    align-self: center;
    max-width: 400px;
}


  .case__widget-gradient{
    mix-blend-mode: multiply;
    background: #d2d2d200 linear-gradient(55deg, #FA7C92 0%, #2DCCF6 100%) 10% 0% no-repeat padding-box;
    position: absolute;
    left: 0;
    right: 0;
    height: 100%;
    width: 100%;
    z-index: 1;
  }
  .case__widget-image{
    position: absolute;
    left: 0;
    right: 0;
    height: 100%;
    width: 100%;
    opacity: 0.5;
    background-color: #42495B;
    z-index: 2;
    background-repeat: no-repeat;
    background-size: cover;
  }
  .case__item{}


 

  @media (min-width: 1200px) {
    .case__widget-list{     flex-direction: row;  }
   
       .case__widget-item{   
        flex-direction: row;

        width: 636px;
       height: 394px; 

          /* width: 452px;
          height: 280px; */


          max-width: 100%;
      
       }
      .case__widget-info h2 {  font-size: 28px;  }

  }

  
</style>



 <section class="case">
 
<div class="container"> 
  <div class="row"> 
      <div class="col-12">
          <h2 class="ui-title ui-title--bottom-border ui-title--center">
               <span class="ui-title__text"> Casos <span class="fw-l">de</span> Sucesso   </span> 
          </h2> 
      </div> <!-- // col-12 -->

      <div class="col-12">


      <?php if( have_rows('acf__case-repeat') ): ?>

<ul class="case__widget-list">

<?php while( have_rows('acf__case-repeat') ): the_row(); 

  // vars
  $status = get_sub_field('acf__case-public');
  $title = get_sub_field('acf__case-title');
  $image = get_sub_field('acf__case-thumb'); 
  $link = get_sub_field('acf__case-link');

 //var_dump( $link)
  ?>

 <?php if( $status ): ?>
  <li class="case__widget-item"> 



  <div class="case__widget-info">
    <div class="case__widget-info-inner">
        <?php if( $title ): ?> <h2> <?php echo $title; ?> </h2> <?php endif; ?>
      <a  <?php if( $link ): ?>  href="<?php echo $link['url']; ?>" <?php endif; ?>    target="<?php echo $link['target']; ?>"  type="button" class="btn btn-lg btn-primary rounded-pill">Assistir case</a>
    </div>
  </div> <!--  // cases__widget-info --> 

  <div aria-hidden="true" class="case__widget-gradient"></div>
  <div aria-hidden="true" class="case__widget-image" style="background-image: url(<?php echo $image['url']; ?>)"> </div>

  </li>
  <?php endif; ?> 

<?php endwhile; ?>

</ul>

<?php endif; ?>




   


      </div> <!-- // col-12 -->
  </div>
</div>



</section>

<?php }  ?>