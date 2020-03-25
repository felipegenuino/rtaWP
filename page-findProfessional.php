<?php 
/*
 Template Name: Página: Encontre um profissional
*/
get_header(); ?>





        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="col-12">

                
                <section> 
                    <div class="container"> 
                        <div class="row"> 
                            <div class="col-12">
                                <h2 class="ui-title ui-title--bottom-border ui-title--center">
                                        <span class="ui-title__label">CONHEÇA</span>
                                        <span class="ui-title__text"> ENCONTRE UM PROFISSIONAL <br> 
                                        <span class="fw-l">CERTIFICADO RTA</span> 
                                </h2> 
                            </div>
                        </div> 
                    </div> <!-- // container -->
                </section>


                <section class="d-flex flex-column"> 
                <div class="container"> 
                    <div class="row justify-content-lg-center">
                        <div class="col-10">
                            <div class="row"> 
                                <div class="col-12 col-lg-5 ml-lg-auto "> 
                                    <blockquote class="ui-blockote"> 
                                        <p>Se você fez o curso e deseja que seu contato apareça na lista mande um e-mail com seus dados e cópia do certificado para rtaonline@gmail.com</p>
                                    </blockquote>  
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="row">  
                            <div class="col-12 col-lg-4 offset-lg-1  "> 
                                <div class="form-group">
                                    <label for="inputSearch" class="sr-only sr-only-focusable">Pesquisar por cidade ou nome</label>
                                    <div class="ui-seach">
                                        <input  data-search type="text" class="ui-seach-input form-control" id="inputSearch" aria-describedby="textHelp" placeholder="Pesquisar por cidade ou nome">
                                        <button class="ui-seach-button ui-seach-button--default" title="Buscar"> </button>
                                        <button type="reset" class="ui-seach-button ui-seach-button--close" title="limpar"> </button>
                                    </div>
                                    <!-- <small id="textHelp" class="form-text text-muted">Precisa de ajuda?</small> -->
                                </div>  
                            </div>  
                    </div> <!-- //row -->

                    <div class="row justify-content-lg-center">  
                            <div class="col-12 col-lg-10 "> 
                                    <ul class="encontre-profissional_list">
                                        <li  class="encontre-profissional_item" 
                                        data-filter-item 
                                        data-filter-name="adalberto Oliveira" 
                                        data-filter-city="porto alegre"
                                        >
                                            <div class="encontre-profissional_item-name"  >  <span> Adalberto Oliveira Soares Junior </span>  </div>
                                            <div class="encontre-profissional_item-phone"> <span>(48) 99911-3048 </span> </div>
                                            <div class="encontre-profissional_item-email"> <span>email@email.com</span></div>
                                            <div class="encontre-profissional_item-state"> <span>Rio grande do sul</span></div>
                                            <div class="encontre-profissional_item-city"> <span>Porto Alegre</span> </div>
                                        </li>
                                        <li  class="encontre-profissional_item" 
                                        data-filter-item 
                                        data-filter-name="maria joana" 
                                        data-filter-city="curitiba"
                                        >
                                            <div class="encontre-profissional_item-name" >  <span> Maria joana </span>  </div>
                                            <div class="encontre-profissional_item-phone"> <span>(55) 99531026 </span> </div>
                                            <div class="encontre-profissional_item-email"> <span>maria@email.com</span></div>
                                            <div class="encontre-profissional_item-state"> <span>Paraná</span></div>
                                            <div class="encontre-profissional_item-city"> <span>Curitiba</span> </div>
                                        </li>

                                        <li 
                                        class="encontre-profissional_item" 
                                        data-filter-name="zurilda"  
                                        data-filter-item   
                                        data-filter-city="marilia" 
                                        >
                                            <div class="encontre-profissional_item-name">  <span> Zurilda </span>  </div>
                                            <div class="encontre-profissional_item-phone"> <span>(11) 99999-9999 </span> </div>
                                            <div class="encontre-profissional_item-email"> <span>zurilda@email.com</span></div>
                                            <div class="encontre-profissional_item-state"> <span>São Paulo</span></div>
                                            <div class="encontre-profissional_item-city"> <span>Marilia</span> </div>
                                        </li> 
                                    </ul>
                       </div>  
                    </div> <!-- //row -->

                     </div> <!-- // container -->
                </section>
                
                    
                </article>
            <?php endwhile; else: ?>
                <div class="artigo">
                    <h2>Nada Encontrado</h2>
                    <p>Erro 404</p>
                    <p>Lamentamos mas não foram encontrados artigos.</p>
                </div>            
            <?php endif; ?>



            <script type="text/javascript"> 

jQuery( document ).ready( function( $ ) {  

    $('[data-search]').on('keyup', function() {
	var searchVal = $(this).val();
	var filterItems = $('[data-filter-item]');

	if ( searchVal != '' ) {
        filterItems.addClass('hidden');
        if('[data-filter-item][data-filter-name*="' + searchVal.toLowerCase() + '"]') {
            $('[data-filter-item][data-filter-name*="' + searchVal.toLowerCase() + '"]').removeClass('hidden');
        }
        if('[data-filter-item][data-filter-email*="' + searchVal.toLowerCase() + '"]') {
            $('[data-filter-item][data-filter-email*="' + searchVal.toLowerCase() + '"]').removeClass('hidden');
        }
        if('[data-filter-item][data-filter-phone*="' + searchVal.toLowerCase() + '"]') {
            $('[data-filter-item][data-filter-phone*="' + searchVal.toLowerCase() + '"]').removeClass('hidden');
        }
        if('[data-filter-item][data-filter-state*="' + searchVal.toLowerCase() + '"]') {
            $('[data-filter-item][data-filter-state*="' + searchVal.toLowerCase() + '"]').removeClass('hidden');
        }
        if('[data-filter-item][data-filter-city*="' + searchVal.toLowerCase() + '"]') {
            $('[data-filter-item][data-filter-city*="' + searchVal.toLowerCase() + '"]').removeClass('hidden');
        } 

	} else {
		filterItems.removeClass('hidden');
	}
});


$('.ui-seach-button--close').click(function(){
        $('.ui-seach-input').val('');
        $('[data-filter-item]').removeClass('hidden');
    });


} );

           
         
        </script>

<?php get_footer(); ?>