@extends('plantilla')

@section('principal')
  
  <link rel="stylesheet" href=  "{{asset('css/index.css')}}"/>

  <div class="container-fluid part-one">
  <div class="banner">
    <video autoplay muted loop>
      <source src="img/portadaproyecto.mp4" type="video/mp4">
    </video>
    <div class="content">
      <div class="redes d-flex flex-row-reverse ">
    <ul>
      <li class="list-inline-item"><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
      <li class="list-inline-item"><a href="https://twitter.com" target="_blank"><i class="fab fa-twitter-square"></i> </a></li>
      <li class="list-inline-item"><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i> </a></li>
      <li class="list-inline-item"><a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i>  </a></li>
    </ul>
    </div>
      <div class="title col-md-12 col-lg-10">
        <h1 class="d-flex justify-content-center"><i class="fas fa-hand-holding-heart"></i>GiftCompany</h1>
        <p> Los mejores regalos <span> son los que no se envuelven</span> </p>
      </div>
            <div class="d-flex flex-row-reverse">
              <button type="button" class="btn btn-outline-dark">Ayuda?</button>
        </div>
    </div>
    </div>
    </div>

      <div class="container part-two">
        <h1>Categorias</h1>
        <section class="row">
          <article class="col-7 col-sm-6 col-md-6 col-lg-4">
            <div class="card" style="">
      <img class="card-img-top" src="img/gastronomia.jpg" alt="Card image cap">
      <div class="card-body gastronomia">
            <a href="#" class="btn btn-primary">Gastronomia</a>
      </div>
    </div>
          </article>
          <article class="col-7 col-sm-6 col-md-6 col-lg-4">
            <div class="card" style="">
      <img class="card-img-top" src="img/entretenimiento.jpg" alt="Card image cap">
      <div class="card-body entretenimiento">
            <a href="#" class="btn btn-primary">entretenimiento</a>
      </div>
    </div>
          </article>
          <article class="col-7 col-sm-6 col-md-6 col-lg-4">
            <div class="card" style="">
      <img class="card-img-top" src="img/relax.jpg" alt="Card image cap">
      <div class="card-body relax">
            <a href="#" class="btn btn-primary">Relax</a>
      </div>
    </div>
          </article>
          <article class="col-7 col-sm-6 col-md-6 col-lg-4">
            <div class="card" style="">
      <img class="card-img-top" src="img/viajes.jpeg" alt="Card image cap">
      <div class="card-body viajes">
        <a href="#" class="btn btn-primary">Viajes</a>
      </div>
    </div>
          </article>
          <article class="col-7 col-sm-6 col-md-6 col-lg-4">
            <div class="card" style="">
      <img class="card-img-top" src="img/cursos.jpg" alt="Card image cap">
      <div class="card-body cursos">
            <a href="#" class="btn btn-primary">Cursos</a>
      </div>
    </div>
          </article>
          <article class="col-7 col-sm-6 col-md-6 col-lg-4">
            <div class="card" style="">
      <img class="card-img-top" src="img/aventura.jpg" alt="Card image cap">
      <div class="card-body aventura">
          <a href="#" class="btn btn-primary">Aventura</a>
      </div>
           </div>
          </article>
    </section>
    <hr>
</div>


<div class="jumbotron jumbotron-fluid" style="background-color: rgba(235, 233, 235, 1);">
<div class="container d-flex justify-content-center">
  <h1 class="">Regalá <span class="frase">experiencias</span>, que se conviertan en momentos <span class="frase">inolvidables</span></h1>
  <video autoplay muted loop>
    <source src="img/ofertas.mp4" type="video/mp4">
  </video>
  <p class="oferts">¡APROVECHÁ LAS OFERTAS QUE TENEMOS PARA VOS!</p>
</div>
</div>

<div class="container part-three">
          <h1 class="d-flex justify-content-center">Lo mas buscado</h1>
      <section class="row section-products">
          <article class="col-9 col-md-6 col-lg-4 col-lg-4>">
              <img src="img/rosellBoher.jpg" alt="">
              <img class="carrito" src="./img/icono.carrito.png" alt="" height="10px" width="5px">
              <h3>Rosell Boher Lodge</h3>
              <h4>$34900</h4>
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </article>

          <article class="col-9 col-md-6 col-lg-4">
              <img src="img/piedrasBlancas.jpg" alt="">
              <img class="carrito" src="./img/icono.carrito.png" alt="" height="10px" width="5px">
              <h3>Estadia Piedras Blancas</h3>
              <h4>$8.350</h4>
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididuntut labore et dolore magna aliqua.
          </article>
          <article class="col-9 col-md-6 col-lg-4">
              <img src="img/beauty.png" alt="">
              <img class="carrito" src="./img/icono.carrito.png" alt="" height="10px" width="5px">
              <h3>Spa para 2 personas</h3>
              <h4>$3.300</h4>
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </article>
          <article class="col-9 col-md-6 col-lg-4">
              <img src="img/paracaidas.jpg" alt="">
              <img class="carrito" src="./img/icono.carrito.png" alt="" height="10px" width="5px">
              <h3>Salto en Paracaídas</h3>
              <h4>$6.700</h4>
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </article>
          <article class="col-9 col-md-6 col-lg-4">
              <img src="img/cabalgata.jpg" alt="">
              <img class="carrito" src="./img/icono.carrito.png" alt="" height="10px" width="5px">
              <h3>Cabalgata</h3>
              <h4>$4.500</h4>
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </article>
          <article class="col-9 col-md-6 col-lg-4">
              <img src="img/azurRealHotel.jpg" alt="">
              <img class="carrito" src="./img/icono.carrito.png" alt="" height="10px" width="5px">
              <h3>Estadia en Azur Real Hotel</h3>
              <h4>$8.900</h4>
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </article>
          <article class="col-9 col-md-6 col-lg-4">
              <img src="img/alvearGrill.jpg" alt="">
              <img class="carrito" src="./img/icono.carrito.png" alt="" height="10px" width="5px">
              <h3>Cena en Alvear Grill</h3>
              <h4>$2.300</h4>
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </article>
          <article class="col-9 col-md-6 col-lg-4">
              <img src="img/hotelHood.jpg" alt="">
              <img class="carrito" src="./img/icono.carrito.png" alt="" height="10px" width="5px">
              <h3>Food in the Hood</h3>
              <h4>$1.200</h4>
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </article>
          <article class="col-9 col-md-6 col-lg-4">
              <img src="img/globo.jpg" alt="">
              <img class="carrito" src="./img/icono.carrito.png" alt="" height="10px" width="5px">
              <h3>Vuelo en Globo</h3>
              <h4>$7.600</h4>
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </article>
          <article class="col-9 col-md-6 col-lg-4">
              <img src="img/cafayate.jpg" alt="">
              <img class="carrito" src="./img/icono.carrito.png" alt="" height="10px" width="5px">
              <h3>Estadia Hotel Grace Cafayate</h3>
              <h4>$5.900</h4>
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </article>
          <article class="col-9 col-md-6 col-lg-4">
              <img src="img/fotografia.jpg" alt="">
              <img class="carrito" src="./img/icono.carrito.png" alt="" height="10px" width="5px">
              <h3>Curso de fotografia</h3>
              <h4>$1.700</h4>
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </article>
          <article class="col-9 col-md-6 col-lg-4">
              <img src="img/corteyConfeccion.jpg" alt="">
              <img class="carrito" src="./img/icono.carrito.png" alt="" height="10px" width="5px">
              <h3>Curso de corte y confeccion</h3>
              <h4>$34900</h4>
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </article>
          <div class="tell-me-more col-9 d-flex justify-content-center">
              <button id="tell-me-more">Ver todos</button>
          </div>
      </section>
          <hr>
  </div>

@endsection
