<style>
    /* HERO */

.ui-hero-inner {
  position: relative;
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  display: flex;
  margin-bottom: 30px;
  margin-top: 20px;
  flex-direction: column-reverse;
  align-items: center;
}
.ui-hero_2c {
  flex: 0 0 100%;
  max-width: 100%;
  display: flex;
}

.ui-hero__content {
  align-self: center;
}
.ui-hero__text {
  font-size: 28px;
  font-weight: var(--type-bold);
  /* color: var(--color-5); */
  color: #42495b;
  letter-spacing: -1.6px;
  line-height: 1.2;
}

.ui-hero__call {
  margin-top: 0px;
  font-size: 14px
}
.ui-hero__player {
  width: 257px;
    height: 151px;
  background-color: #fff;
  box-shadow: -11px 9px 11px rgba(122, 131, 158, 0.2);
  border-radius: 20px 4px;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  overflow: hidden;
  margin-bottom: 10px; 
}

.ui-hero__player:hover::after{
        background-color: #fff;
 }
.ui-hero__player::after{
    content: "";
    background-image: var(--hero-player-background);
    height: 100%;
    width: 100%;
    position: absolute;
    background-repeat: no-repeat;
    background-size: cover;
    z-index: 1;
    background-blend-mode: multiply;
    background-color: var(--color-4);
    transition: all 0.2s linear;
     
}




.ui-hero__player__button {
  display: flex;
  flex-direction: column;
  width: 140px;
  height: 180px;
  justify-content: center;
  align-items: center;
  background: no-repeat;
  border: none;
   z-index: 2;
}



.ui-hero__player__button__icon {
    width: 97px;
    height: 97px;
}


.ui-hero__player__button__text {
  font-weight: var(--type-regular);
  text-transform: uppercase;
  font-size: 12px;
  letter-spacing: 1px;
  text-align: center;
  color: #fff;
  transform: translateY(-20px);
}

.ui-hero.page {
}



@media (min-width: 768px) {

.ui-hero__player__button__text { font-size: 14px}
.ui-hero__player__button__icon { width: 157px;   height: 157px; }  
.ui-hero__player { width: 337px; height: 243px;} 
.ui-hero__call { margin-top: 20px; font-size: 14px}
.ui-hero__text { font-size: 33px;} 
.ui-hero-inner{ flex-direction: row; }
.ui-hero_2c { flex: 0 0 50%;  max-width: 50%;  }
}



@media (min-width: 1200px) { 
  .ui-hero__player__button__text { font-size: 14px}
  .ui-hero__player__button__icon { width: 157px;   height: 157px; }  
  .ui-hero__player {  width: 627px; height: 383px;} 
  .ui-hero__call {  margin-top: 20px; font-size: 14px}
  .ui-hero__text {  font-size: 48px;}

  .ui-hero-inner{ flex-direction: row; }
  .ui-hero_2c { flex: 0 0 50%;  max-width: 50%;  }
}
/* end HERO */

</style>



<section class="ui-hero"> 
    <div class="container">  
        <div class="ui-hero-inner">
              <div class="ui-hero_2c">  
                  <div class="ui-hero__content">
                      <h1 class="ui-hero__text"> <?php the_field('acf_banner-main-title') ?>  </h1>
                      <?php 
                        $link = get_field('acf_banner-main_button-link');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="ui-hero__call btn btn-lg btn-primary rounded-pill" href="<?php echo esc_url( $link_url ); ?>" role="button" target="<?php echo esc_attr( $link_target ); ?>">
                              <?php echo esc_html( $link_title ); ?>
                            </a>
                    <?php endif; ?>

                  </div>
              </div> <!-- // ui-hero_2c -->
              
              <div class="ui-hero_2c">
                  <div class="ui-hero__player" style="--hero-player-background: url(<?php if( get_field('acf_banner-main_video-gif') ):   the_field('acf_banner-main_video-gif');   endif; ?>"> 
                  <button class="ui-hero__player__button"  
                      data-toggle="modal" 
                      data-target="#heroModal"
                      data-video="https://www.youtube.com/embed/<?php the_field('acf_banner-main_video-id') ?>?autoplay=1&modestbranding=1"
                      > 
                        <img class="ui-hero__player__button__icon" src="<?php bloginfo('template_url'); ?>/template-parts/hero/icon__player.svg" alt="">
                        <span class="ui-hero__player__button__text" >Assista o VÍDEO</span>
                    </button> 
                  </div> <!-- // ui-hero__player -->
            </div> <!-- // ui-hero_2c -->
          </div><!-- // ui-hero -->
      </div> <!-- // container -->
  </section>