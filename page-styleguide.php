<?php 
/*
 Template Name: Styleguide 
*/
get_header(); ?>

<div id="styleguide-page" class="col-12 ">
  
  <section>
    <h2 class="tt-u">Cores</h2> 
    <ul class="styleguide__color-blocks">
      <li class="bgcolor-1" data-toggle="tooltip" data-placement="top" title="--bgcolor-1"></li>
      <li class="bgcolor-2" data-toggle="tooltip" data-placement="top" title="--bgcolor-2"></li>
      <li class="bgcolor-3" data-toggle="tooltip" data-placement="top" title="--bgcolor-3"></li>
      <li class="bgcolor-4" data-toggle="tooltip" data-placement="top" title="--bgcolor-4"></li>
      <li class="bgcolor-5" data-toggle="tooltip" data-placement="top" title="--bgcolor-5"></li>
      <li class="bgcolor-6" data-toggle="tooltip" data-placement="top" title="--bgcolor-6"></li>
      <li class="bgcolor-7" data-toggle="tooltip" data-placement="top" title="--bgcolor-7"></li>
      <li class="bgcolor-8" data-toggle="tooltip" data-placement="top" title="--bgcolor-8"></li>
      <li class="bgcolor-9" data-toggle="tooltip" data-placement="top" title="--bgcolor-9"></li>
      <li class="bgcolor-10" data-toggle="tooltip" data-placement="top" title="--bgcolor-10"></li>
      <li class="bgcolor-11" data-toggle="tooltip" data-placement="top" title="--bgcolor-11"></li>
    </ul>
  </section>
 
  <section>
    <h2> 
      <span class="tt-u">Typografia </span> 
      <small class="text-muted"> Roboto - Google Fonts</small>
    </h2> 
    <div class="styleguide__type">
      <ul class="styleguide__type-blocks">
        <li>
          <strong class="fw-l">Aa</strong>
          <span>Light</span>
        </li>
        <li>
          <strong class="fw-r">Aa</strong>
          <span>Regular</span>
        </li>
        <li>
          <strong class="fw-m">Aa</strong>
          <span>Medium</span>
        </li>
        <li>
          <strong class="fw-b">Aa</strong>
          <span >Bold</span>
        </li>
      </ul> 
      <div class="styleguide__type-post">
        <h3>Influência do método</h3>
        <em>Eduardo Matias dos Santos Steidl2, Cadi Caroline da Rocha Tassinari3</em>
        <p>Objetivo: Avaliar a influência do método Reequilíbrio Toracoabdominal (RTA) em recém-nascidos pré-termos pós-Síndrome do Desconforto Respi-ratório (SDR).  </p>
      </div> 
    </div>  
  </section>

  <section>
    <h2>BOTÕES</h2> 

    <h3>Large</h3>
    <ul class="styleguide__buttons">
      <li>
        <span>Normal</span>
        <button type="button" class="btn btn-lg btn-primary rounded-pill">Label Button</button>
      </li>
      <li>
        <span>Hover</span>
        <button type="button" class="btn btn-lg btn-primary rounded-pill hover">Label Button</button>
      </li>
      <li>
        <span>Disabled</span>
        <button type="button" class="btn btn-lg btn-primary rounded-pill disabled" disabled>Label Button</button>
      </li>
    </ul>


    <h3>Normal</h3>
    <ul class="styleguide__buttons">
      <li>
        <span>Normal</span>
        <button type="button" class="btn btn-primary rounded-pill">Label Button</button>
      </li>
      <li>
        <span>Hover</span>
        <button type="button" class="btn btn-primary rounded-pill hover">Label Button</button>
      </li>
      <li>
        <span>Disabled</span>
        <button type="button" class="btn btn-primary rounded-pill disabled" disabled>Label Button</button>
      </li>
    </ul>


    <h3>Small</h3>
    <ul class="styleguide__buttons">
      <li>
        <span>Normal</span>
        <button type="button" class="btn btn-primary rounded-pill btn-sm">Label Button</button>
      </li>
      <li>
        <span>Hover</span>
        <button type="button" class="btn btn-primary rounded-pill btn-sm hover">Label Button</button>
      </li>
      <li>
        <span>Disabled</span>
        <button type="button" class="btn btn-primary rounded-pill btn-sm disabled" disabled>Label Button</button>
      </li>
    </ul>


    <h3>Small Link</h3>
    <ul class="styleguide__buttons">
      <li>
        <span>Normal</span>
        <button type="button" class="btn btn-link btn-sm"> <i class="fa fa-angle-right"></i> Label Button</button>
      </li>
      <li>
        <span>Hover</span>
        <button type="button" class="btn btn-link btn-sm hover"><i class="fa fa-angle-right"></i> Label Button</button>
      </li>
      <li>
        <span>Disabled</span>
        <button type="button" class="btn btn-link btn-sm disabled" disabled> <i class="fa fa-angle-right"></i> Label Button</button>
      </li>
    </ul> 
</section>

  <section>
    <h2>FORMULÁRIOS</h2>
     <ul class="styleguide__buttons">
      <li>
         <div class="form-group">
            <label for="exampleInputEmail1">Normal</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
      </li>
      <li>
         <div class="form-group">
            <label for="exampleInputEmail1">Hover</label>
            <input type="email" class="form-control hover" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
      </li>
      <li>
          <div class="form-group">
            <label for="exampleInputEmail1">Disabled</label>
            <input disabled type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
      </li>
    </ul> 
</section>


  <section>
    <h2>PILLS</h2>
</section>

  <section>
    <h2>INPUTS</h2>
</section>

  <section>
    <h2>
      <span class="tt-u">Icons </span> 
      <small class="text-muted"> FontAwesome</small>
    </h2>

    <ul>
      <li>

      </li>
    </ul>
</section>


</div>






        <?php  
        // if ( have_posts() ) :
        //   /* Start the Loop */
        //    while ( have_posts() ) :
        //        the_post();
        //    endwhile;
        // endif; 
        ?>

<?php get_footer(); ?>


    

 