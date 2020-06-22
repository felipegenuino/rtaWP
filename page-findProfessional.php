<?php 
/*
 Template Name: Página: Encontre um profissional
*/
get_header(); ?>





<script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js'></script>
<script>
    $(document).ready(function() {
        $('.phone_with_ddd').mask('(00) 0000-0000');
        $('#profissional__table').DataTable({
            scrollX: true,
            initComplete: function( settings, json ) {
                    $('div.loading').remove();
                   $('.container-datatables').removeClass('container-datatables--loading')
                },

        language: {
            processing:     "Processando..",  
            lengthMenu:     "Resultados por página _MENU_",
            info:           "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            infoEmpty:      "Mostrando 0 até 0 de 0 registros",
            infoFiltered:   "(Filtrados de _MAX_ registros)",
            infoPostFix:    "",
            loadingRecords: "Carregando...",
            zeroRecords:    "Nenhum registro encontrado",
            emptyTable:     "Nenhum registro encontrado",
            paginate: {
                first:      "Primeiro",
                previous:   "Anterior",
                next:       "Próximo",
                last:       "Último"
            },
            aria: {
                sortAscending:  ": Ordenar colunas de forma ascendente",
                sortDescending: ": Ordenar colunas de forma descendente"
            }
        }
        });


        var table = $('#profissional__table').DataTable();
  
            $('#inputSearch').on( 'keyup', function () {
                table.search( this.value ).draw();
            } ); 
            $('#inputSearchClean').on( 'click', function () {
                table.search('').draw();
            } );




           // $('<div class="loading">Carregando</div>').appendTo('body');
 
 



    } );
</script>


<link rel="stylesheet" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css"> 
<style> 



#profissional__table { border-collapse: collapse; }


    #profissional__table .dataTable.display tbody tr{ background: #eee; } 
    #profissional__table_length, #profissional__table_filter{display:none}


    table.dataTable thead th, table.dataTable thead td {
        padding: 6px 18px;
    border-bottom: 1px solid transparent;
    font-size: 12px;
    color: #aaa;
}

table.dataTable thead .sorting_desc,
table.dataTable thead .sorting_asc {  color: #7a80dd; }

  

.dataTables_scrollFoot {
    display: none;
}





    table.dataTable.order-column tbody tr>.sorting_1, 
    table.dataTable.order-column tbody tr>.sorting_2, 
    table.dataTable.order-column tbody tr>.sorting_3, 
    table.dataTable.display tbody tr>.sorting_1, 
    table.dataTable.display tbody tr>.sorting_2, 
    table.dataTable.display tbody tr>.sorting_3,
    table.dataTable.display tbody tr.even>.sorting_1, 
    table.dataTable.order-column.stripe tbody tr.even>.sorting_1 {  background-color: transparent  } 

    table.dataTable tbody tr {  border-top: 10px solid #fff; font-size:14px }
 

    table.dataTable.row-border tbody th, table.dataTable.row-border tbody td, table.dataTable.display tbody th, table.dataTable.display tbody td { border-top: 0 solid #fff;   background: #eee !important; } 
    .dataTables_wrapper .dataTables_paginate {   font-size: 12px; }

    #profissional__table tr:hover .post-edit{ display:flex; } 
    #profissional__table .post-edit{ display:none;  position: absolute;  top: -6px; left: 8px;}
    #profissional__table .dataTables_processing { z-index: 1; }
 

    #profissional__table_info {
        font-size: 13px;
    color: #999;
    margin-top: 7px;
}

#profissional__table_paginate{
    font-size: 12px;
    margin-top: 10px;
}

 

#profissional__table_paginate a.current{}

.dataTables_wrapper .dataTables_paginate .paginate_button{ border: none;   color: #999 !important }
   
.dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover,
.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    background: linear-gradient(to bottom, var(--color-1) 0%, var(--color-2) 100%);
    border: none;
    color: #fff !important;
}


table.dataTable tbody th, table.dataTable tbody td {
    padding: 15px 10px;
}

.col-name{ position: relative;  max-width: 230px; width: 230px !important;    } 
.col-telefone{}
.col-email{ max-width: 210px; width: 210px !important; }
.col-cidade{ font-size: 13px;}
.col-estado{ font-size: 13px;}
.col-formacao{ font-size: 13px;}

.col-name .col-text,
.col-telefone .col-text,
.col-email .col-text,
.col-cidade .col-text,
.col-estado .col-text,
.col-formacao .col-text { display: block}

.container-datatables{ position:relative; }
.container-datatables--loading{ height:400px; overflow:hidden}

.loading{
    position: absolute;
    background: #eee;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    height: 100%;
    width: 100%;
    z-index: 1;
    padding-top: 0;
    display: flex;
    justify-content: center;
    align-items: center;
}

.loading .loading__content{
    display: flex;
    width: 320px; 
    margin: 0 auto;
    flex-direction: column;
    align-items: center;
}


</style>

 
 
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


         <section class="d-flex flex-column container-datatables container-datatables--loading"> 

         <div class="loading"> 
                <div class="loading__content"> 
                    <div class="spinner-border text-secondary" role="status">
                        <span class="sr-only">Carregando Tabela</span>
                    </div>
                    <div class="mt-2">
                        <p>Carregando Tabela...</p>
                    </div>
                </div>  
    </div>

                <div class="container"> 
                    <div class="row justify-content-lg-center">
                        <div class="col-12">
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
                            <div class="col-12 col-lg-4 _offset-lg-1  "> 
                                <div class="form-group">
                                    <label for="inputSearch" class="sr-only sr-only-focusable">Pesquisar por cidade ou nome</label>
                                    <div class="ui-seach">
                                        <input  type="text" class="ui-seach-input form-control" id="inputSearch" aria-describedby="textHelp" placeholder="Pesquisar por cidade ou nome">
                                        <button class="ui-seach-button ui-seach-button--default" title="Buscar"> </button>
                                        <button id="inputSearchClean" type="reset"  class="ui-seach-button ui-seach-button--close" title="limpar"> </button>
                                    </div>
                                    <!-- <small id="textHelp" class="form-text text-muted">Precisa de ajuda?</small> -->
                                </div>  
                                
                            </div>  
                    </div> <!-- //row -->

                    <div class="row justify-content-lg-center">  
                            <div class="col-12 col-lg-12 "> 

                                <?php $args = array( 'post_type' => 'profissional', 'posts_per_page' => -1  ); $query = new WP_Query($args); ?>
                                                    
                                                    <table id="profissional__table" class="display table-card nowrap" cellspacing="2" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th class="col-name">Name</th>
                                                                    <th class="col-telefone">Telefone</th>
                                                                    <th class="col-email">Email</th> 
                                                                    <th class="col-cidade">Cidade</th>
                                                                    <th class="col-estado">Estado</th>
                                                                    <th class="col-formacao">Formação</th>
                                                                </tr>
                                                            </thead>
                                                            <tfoot>
                                                                <tr>
                                                                    <th class="col-name">Name</th>
                                                                    <th class="col-telefone">Telefone</th>
                                                                    <th class="col-email">Email</th> 
                                                                    <th class="col-cidade">Cidade</th>
                                                                    <th class="col-estado">Estado</th>
                                                                    <th class="col-formacao">Formação</th>
                                                                </tr>
                                                            </tfoot>
                                                            <tbody>
                                                            <?php  if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); 
                                                                $name = get_the_title();  
                                                                $formacao = get_field('acf__profissionais_formacao');
                                                                $pais = get_field('acf__profissionais_pais'); 
                                                                $estado = get_field('acf__profissionais_uf');  
                                                                $cidade = get_field('acf__profissionais_cidade');
                                                                $telefone = get_field('acf__profissionais_telefone');
                                                                $email = get_field('acf__profissionais_email'); 
                                                            ?>
                                                                <tr>
                                                                    <td class="col-name" data-label="Nome"> <span class="col-text text-truncate">  <strong> <?php echo $name; ?> </strong>  </span>   <?php edit_post_link('Editar', '<small class="post-edit">', '</small>'); ?>   </td>
                                                                    <td class="col-telefone" data-label="Telefone">  <span class="col-text text-truncate">  <strong> <?php  if( $telefone ): echo $telefone;  endif; ?> </strong>   </span>    </td>
                                                                    <td class="col-email" data-label="Email" >  <span class="col-text text-truncate"> <?php  if( $email ): echo $email; endif; ?>  </span>   </td> 
                                                                    <td class="col-cidade" data-label="Cidade">  <span class="col-text text-truncate"> <?php  if( $cidade ): echo $cidade;  endif; ?>  </span>   </td>
                                                                    <td class="col-estado" data-label="estado">  <span class="col-text text-truncate"><?php  if( $estado ): echo $estado;  endif; ?>  </span>  </td>
                                                                    <td class="col-formacao" data-label="Formação">  <span class="col-text text-truncate"> <?php if( $formacao ): echo $formacao; endif; ?>  </span>  </td>
                                                                </tr>
                                                            <?php endwhile; endif; wp_reset_postdata();  ?>
                                                            </tbody>
                                                        </table>
   
</div >  
</div >  
</section>
</article>

<?php get_footer(); ?>