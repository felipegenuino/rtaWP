
<style>
  
/*
Slider*/


.cases__widget{}
.cases__widget__list{ }
.cases__widget__item{}



.slider {
  width: 100%;
  margin: 100px auto;
}
.slick-slide {
  margin: 0px;
}
.slick-slide img {
  width: 100%;
}
.slick-prev:before,
.slick-next:before {
  color: black;
}
.slick-slide {
  transition: all ease-in-out 0.3s;
  opacity: 0.2;
}

.slick-list{}

.slick-active {
  opacity: 0.5;
}
 
.slick-current {
    transform: scale(1.4);
    background: #fff;
    box-shadow: 0 4px 4px rgba(0,0,0,0.5);

}

  </style>






<div class="container"> 
  <div class="row"> 
      <div class="col-12">
          <h2 class="ui-title ui-title--bottom-border ui-title--center">
               <span class="ui-title__text"> Casos <span class="fw-l">de</span> Sucesso   </span> 
          </h2> 
      </div> <!-- // col-12 -->

      <div class="col-12">
<div class="slick-slide slider cases__widget__list"> 
    <div class="cases__widget__item">
          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/template-parts/cases/bg-2.png" alt="Carousel 2">
          <div class="">
            <h2> <a href="#">Atendimento de adulto asmático com o método RTA</a> </h2>
            <button type="button" class="btn btn-lg btn-primary rounded-pill">Assistir case</button>
          </div> 
      </div>
   
      <div class="cases__widget__item">
          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/template-parts/cases/bg-1.png" alt="Carousel 1">
          <div class="">
              <h2>
                <a href="#">Tratamento de bebê com BroncodisplasiaPulmonar</a>
              </h2> 
              <button type="button" class="btn btn-lg btn-primary rounded-pill">Assistir case</button>
          </div>
      </div>

        <div class="cases__widget__item">
          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/template-parts/cases/bg-3.png" alt="Carousel 3">
          <div class="">
               <h2> <a href>Atendimento com o método RTA em Neonatologia</a> </h2>
          </div>
      </div>
 <div class="cases__widget__item">
          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/template-parts/cases/bg-2.png" alt="Carousel 2">
          <div class="">
            <h2> <a href="#">Atendimento de adulto asmático com o método RTA</a> </h2>
            <button type="button" class="btn btn-lg btn-primary rounded-pill">Assistir case</button>
          </div> 
      </div>
   
      <div class="cases__widget__item">
          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/template-parts/cases/bg-1.png" alt="Carousel 1">
          <div class="">
              <h2>
                <a href="#">Tratamento de bebê com BroncodisplasiaPulmonar</a>
              </h2> 
              <button type="button" class="btn btn-lg btn-primary rounded-pill">Assistir case</button>
          </div>
      </div>

        <div class="cases__widget__item">
          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/template-parts/cases/bg-3.png" alt="Carousel 3">
          <div class="">
               <h2> <a href>Atendimento com o método RTA em Neonatologia</a> </h2>
          </div>
      </div>
  

  </div>  
      </div> <!-- // col-12 -->
  </div>
</div>



