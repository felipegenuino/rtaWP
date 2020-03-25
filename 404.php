<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */
 
get_header(); ?>

<style>
    .page-wrap {  min-height: 600px; } 
    .page-error .list-group{ width: 300px;  margin: 0 auto;}
</style>
 <section class="  page-error  w-100 d-flex flex-column ">
 

<div class="page-wrap d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <span class="display-1 d-block">404</span>
                <div class="mb-4 lead"> A página que você está procurando pode ter sido removida, 
                    <br> teve seu nome alterado ou está temporariamente indisponível. 
                    <br>  <br> Por favor, tente o seguinte:   </div> 

                <ul class="list-group" >
                    <li class="list-group-item">Verifique o nome digitado</li>
                    <li class="list-group-item"><a href="<?php bloginfo('url') ?>" class="btn btn-primary btn-lg">  Volte para página inicial </a> </li>
                    <li class="list-group-item">  <a href="javascript:void(0)" onClick="history.go(-1); return false;" class="btn btn-link"> Voltar para a página anterior</a>   </li>
                    <li class="list-group-item">   <a href="mailto:rtaonline@gmail.com" class="btn btn-link"> Fale conosco </a></li> 
                </ul>

                 
            </div>
        </div>
    </div>
</div>


</section>
<?php get_footer(); ?>