<style> 
 
.ui-footer__newslatter { margin-top: 100px; margin-bottom: 40px; }

.ui-footer__newslatter input[type="email"] {
  transform: translate(52px, 0px);
  position: relative;
  z-index: 1;
  padding-right: 110px;
}

.ui-footer__newslatter button[type="submit"] {
  transform: translate(-53px, 0px);
  position: relative;
  z-index: 3;
}

.ui-footer__newslatter h2 {
  text-align: center;
  font-size: 38px;
  font-weight: var(--type-light);
}

.ui-footer__newslatter strong {
  font-weight: var(--type-bold);
}
.ui-footer__newslatter form {
  display: flex;
  justify-content: center;
  width: 560px;
  margin: 0 auto;
}
 
</style>

 <section class="ui-footer__newslatter">
  <div class="container"> 
    <div class="row justify-content-md-center"> 
        <div class="col col-8">
            <h2 class="ui-title--center">
                <strong>Cadastre-se</strong> para receber informações sobre os <strong>próximos cursos e eventos</strong> 
            </h2> 

            <form class="form-inline">
                <div class="input-group w-100">
                    <input type="email" class="form-control rounded-pill form-control-lg" aria-label="Digite seu e-mail aqui" placeholder="Digite seu e-mail aqui">

                  <div class="input-group-append">
                    <button class="btn btn-lg btn-primary rounded-pill" type="submit">Cadastrar</button>
                  </div>
                </div>
            </form> 
              
        </div> <!-- //col-8 -->
    </div> <!-- //row -->
  </div> <!-- //container -->
</section>