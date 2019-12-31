<style>
    /* HERO */

.ui-hero {
  position: relative;
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  display: flex;
  margin-bottom: 30px;
}
.ui-hero_2c {
  flex: 0 0 50%;
  max-width: 50%;
  display: flex;
}

.ui-hero__content {
  align-self: center;
}
.ui-hero__text {
  font-size: 48px;
  font-weight: var(--type-bold);
  /* color: var(--color-5); */
  color: #42495b;
  letter-spacing: -1.6px;
  line-height: 1.2;
}

.ui-hero__call {
  margin-top: 20px;
}
.ui-hero__player {
  width: 627px;
  height: 383px;
  background-color: #fff;
  box-shadow: 0 12px 42px 0 rgba(122, 131, 158, 0.2);
  border-radius: 20px 4px;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
    overflow: hidden;
       
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
  width: 157px;
  height: 157px;
}
.ui-hero__player__button__text {
  font-weight: var(--type-regular);
  text-transform: uppercase;
  font-size: 14px;
  letter-spacing: 1px;
  text-align: center;
  transform: translateY(-20px);
}

.ui-hero.page {
}

/* end HERO */

</style>




<div class="container">  
    <section class="ui-hero">
          <div class="ui-hero_2c">  
              <div class="ui-hero__content">
                  <h1 class="ui-hero__text">RTA um sucesso no <br> tratamento de doenças<br> respitarórias</h1>
                  <a class="ui-hero__call btn btn-lg btn-primary rounded-pill" href="#" role="button">Conheça o método</a>
              </div>
          </div> <!-- // ui-hero_2c -->
          
          <div class="ui-hero_2c">
              <div class="ui-hero__player" style="--hero-player-background: url(<?php bloginfo('template_url'); ?>/template-parts/hero/demo.gif)"> 
              <button class="ui-hero__player__button"  
                  data-toggle="modal" 
                  data-target="#heroModal"
                  data-video="https://www.youtube.com/embed/Z0hU4QfhBqA?autoplay=1&modestbranding=1"
                  > 
                    <img class="ui-hero__player__button__icon" src="<?php bloginfo('template_url'); ?>/template-parts/hero/icon__player.svg" alt="">
                    <span class="ui-hero__player__button__text" >Assista o VÍDEO</span>
                 </button> 
              </div> <!-- // ui-hero__player -->
        </div> <!-- // ui-hero_2c -->
    </section><!-- // ui-hero -->
  </div> <!-- // container -->