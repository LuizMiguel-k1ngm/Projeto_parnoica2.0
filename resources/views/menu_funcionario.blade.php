 <!-- //MENU DE ADM -->
 <a class="btn btn-primary mt-1" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
     MENU DE SELEÇÃO
 </a>

 <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
     <div class="offcanvas-header">
         <h5 class="offcanvas-title mt-2" id="offcanvasExampleLabel">MENU</h5>
         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
     </div>
     <div class="offcanvas-body">
         <div class="fw-bold">
             OPÇÕES:
         </div>

         <div class="dropdown mt-3">
             <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                 <i class="bi bi-person-fill-add"></i> CADASTRO
             </button>
             <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="#">FRIGOBAR</a></li>
                 <li><a class="dropdown-item" href="#">ITENS</a></li>
                 <li><a class="dropdown-item" href="#">CONSUMO</a></li>
                 <li><a class="dropdown-item" href="#">ACOMODAÇÃO</a></li>
             </ul>
         </div>

         <div class="dropdown mt-3">
             <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                 <i class="bi bi-telephone-fill"></i> RECEPÇÃO
             </button>
             <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="#">CADASTRO CLIENTE</a></li>
                 <li><a class="dropdown-item" href="#">CADASTRO RESERVA</a></li>
                 <li><a class="dropdown-item" href="#">CHECK-IN</a></li>
                 <li><a class="dropdown-item" href="#">CHECK-OUT</a></li>
             </ul>
         </div>

     </div>
 </div>



 <!-- //coisas dentro da pagina  -->

 <div class="card-group mt-3">
     <div class="card">
         <img src="{{ asset('img/2.png') }}" class="card-img-top" alt="...">
         <div class="card-body">
             <h5 class="card-title">suítes</h5>
             <p class="card-text">O seu refúgio de aconchego e privacidade.

                 O que oferece: Cama queen size, enxoval premium, ar-condicionado e smart TV.

                 Ideal para: Casais e viajantes que buscam relaxamento e uma atmosfera intimista após um dia de passeios.</p>
         </div>
         <div class="card-footer">
             <small class="text-body-secondary">Last updated 3 mins ago</small>
         </div>
     </div>
     <div class="card">
         <img src="{{ asset('img/3.png') }}" class="card-img-top" alt="...">
         <div class="card-body">
             <h5 class="card-title">apartamento</h5>
             <p class="card-text">Espaço, praticidade e conforto para todos.

                 O que oferece: Quartos amplos, sala de estar integrada e minicozinha equipada.

                 Ideal para: Famílias ou grupos de amigos que amam a liberdade de se sentir em casa.</p>
         </div>
         <div class="card-footer">
             <small class="text-body-secondary">Last updated 3 mins ago</small>
         </div>
     </div>
     <div class="card">
         <img src="{{ asset('img/1.png') }}" class="card-img-top" alt="...">
         <div class="card-body">
             <h5 class="card-title">lazer</h5>
             <p class="card-text">O coração da pousada e o cenário das suas melhores memórias.

                 O que oferece: Piscina cristalina, espreguiçadeiras, bar de apoio e jardim integrado.

                 Ideal para: Renovar as energias, tomar um bom drink e aproveitar o sol em um ambiente instagramável.</p>
         </div>
         <div class="card-footer">
             <small class="text-body-secondary">Last updated 3 mins ago</small>
         </div>
     </div>
 </div>
 @yield('content')