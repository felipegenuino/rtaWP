<?php if (get_field('acf__banner-active'))  {  ?> 


<style>
/*Banner*/
.ui-banner {
  background-color: var(--color-3);
  border-radius: 22px;
  padding: 20px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 30px;
  margin-top: 50px;
  flex-direction: column;
}

.ui-banner__content {}
.ui-banner__content h2 {
  font-size: 16px;
  color: var(--color-11); 
  font-weight: var(--type-bold);
  margin-bottom: 0;
}
.ui-banner__content p {
  font-size: 14px;
  color: var(--color-11);
  font-weight: var(--type-medium);
  margin-bottom: 10px;
}
.ui-banner__call {}
.ui-banner--events {background: var(--color-1);  width: 100%;  display: flex;}

/* breackpoints*/
@media (min-width: 576px) {
  .ui-banner {}
}

@media (min-width: 768px) {
  .ui-banner__content h2 {font-size: 36px;  text-transform: uppercase;}
  .ui-banner__content p {font-size: 18px;  text-transform: uppercase;  }
}

@media (min-width: 1024px) {
  .ui-banner {
    display: flex;
    flex-direction: row;
    padding: 35px 50px;
    margin-bottom: 0px;
  }
}
@media (min-width: 1200px) {
  .ui-banenr{ padding: 30px 50px; } 
  .ui-banner__content p {font-size: 22px;  }
} 
</style>





 


<div class="container"> 
  <div class="row justify-content-lg-center">

    <div class="col-12 col-lg-10">
      <section class="ui-banner">
        <div class="ui-banner__content" >
            <?php if( get_field('acf__banner-title') ): ?>
              <h2><?php the_field('acf__banner-title'); ?></h2>
            <?php endif; ?>
           
            <?php if( get_field('acf__banner-subtitle') ): ?>
              <p><?php the_field('acf__banner-subtitle'); ?></p>
            <?php endif; ?>
        </div>
        <div class="ui-banner__call ">
            <a class="btn btn-lg btn-primary rounded-pill" target="<?php echo (get_field('acf__banner-button-link-new_page')) ? '_blank' : '_self' ?>" role="button" href="<?php the_field('acf__banner-button-link'); ?>"><?php the_field('acf__banner-button-text'); ?></a>
        </div>
      </section> 
    </div> 
    
  </div> <!-- // row -->
</div> <!-- // container -->


<?php }  ?>