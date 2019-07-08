@extends('plantilla')

@section('principal')
  <style media="screen">
  @import url('https://fonts.googleapis.com/css?family=Bitter|Lobster|Playfair+Display&display=swap');

  @import url('https://fonts.googleapis.com/css?family=Ranga&display=swap');

  body{
    margin: 0;
    padding: 0;
    height: 1000px;
   }
  .banner{
    width: 100%;
    height: 100vh;
    overflow: hidden;
    display: flex;
    justify-content: flex-start;
    align-items: center;
   }
  .banner video {
    position: absolute;
    top:0;
    left: 0;
    object-fit: cover;
    width: 100%;
    height: 45%;
    pointer-events: none;
   }
  .banner .content{
    position: relative;
    z-index: 1;
    max-width: 1000px;
    margin: 0;
   }
  .banner ul{
    position: relative;
    bottom: -20px;
    left: 35%;
    }
  .banner button{
    position: absolute;
    right: -50%;
    top:230px;
    border: 1px white double;
    color: white;
    }
  .banner p span{
    font-size: 55px;
    padding-top: 50px;
    font-family:'Lobster', sans-serif;
    color: white;
    }
  .banner p{
    font-size: 50px;
    font-family:'Lobster', sans-serif;
    color: rgb(222, 64, 64);
    }
  .title h1{
    font-family: 'Ranga', cursive;
    font-size: 80px;
    padding-top: 15px;
    padding-bottom: 15px;
    background-color: rgb(0,0,0,0.3);
    color: #FFF;
    text-transform: uppercase;
    }
  .redes li i{
    color: rgb(30, 228, 191);
    }
  .list-inline-item i{
    font-size: 35px;
    color: white;
    padding-top: 10px;
    padding-left: 7px;
    }
  .part-two {
    padding-top: 5%;
    padding-bottom:5%;
    }
  .part-two h1{
    text-align: center;
    padding-bottom: 50px;
    font-family: 'Bitter', sans-serif;
    }
  .part-two article{
    padding-bottom: 25px;
    height: auto;
    }
  .part-two img{
    width: 100%;
    height: 162px;
    }
  .card-body{
    display: flex;
    justify-content: center;
    }
  .card-body a{
    border: 2px solid;
    color: white;
    font-weight: bold;
    padding-left: 20px;
    padding-right: 20px;
  }
  .entretenimiento a{
    background-color: rgba(255, 168, 184);
  }
  .gastronomia a{
    background-color: rgba(169, 229, 227);
  }
  .viajes a{
    background-color: rgba(250, 225, 135);
  }
  .cursos a{
    background-color: rgba(220, 217, 248);
  }
  .relax a{
    background-color: rgba(181, 220, 249);
  }
  .aventura a{
    background-color: rgba(229, 190, 221);
  }
  .jumbotron-fluid{
    height: 346px;
  }
  .jumbotron-fluid video{
    position: relative;
    max-width: 30%;
    top: -60px;
  }
  .jumbotron-fluid h1{
  font-size: 40px;
  font-family:'Lobster', sans-serif;
  color: rgb(222, 64, 64);
  }
  .jumbotron-fluid span{
    font-size: 45px;
    color:  rgb(30, 228, 191);
  }
  .jumbotron-fluid p{
  font-size: 20px;
  padding: 5%;
  font-weight: bolder;
  text-decoration: underline;
  font-style: italic;
  font-family: 'Bitter', sans-serif;
  border: 2px solid;
  margin: auto;
 }

  .section-products article{
    padding-bottom: 5%;
  }
  .section-products article img{
    border: none;
    width: 100%;
    height: 200px;
    position: relative;
    border-radius: 15px;
  }

  section article img.carrito{
    width: 67px;
    height: 67px;
    position: absolute;
    top: 7px;
    right: 25px;
  }
  .part-three{
    padding-top: 5%;
  }
  .part-three h1{
    text-align: center;
    padding-bottom: 50px;
    font-family: 'Bitter', sans-serif;
  }
  .section-products article{
    padding: 2%;
  }
  .section-products article h4{
    display: flex;
    justify-content: center;
    font-weight: bold;
    color:rgb(177, 13, 156);
    font-size: 22px;
  }
  .section-products article h3{
    display: flex;
    justify-content: center;
    font-size: 25px;
    font-family: 'Lobster', sans-serif;
  }
  .section-products article h5{
    text-align: center;
    font-size: 15px;
    font-style: italic;
  }
  .tell-me-more{
    margin: auto;
    padding-top: 5%;
  }
  button#tell-me-more{
    background-color: rgb(104, 125, 222);
    border-radius: 5px;
    padding: 10px;
    font-size: 20px;
    font-family: 'Lobster', sans-serif;
    height: 57px;
    width: 218px;
  }
  .col-7{
    margin: auto;
    height: auto;
  }
  article.col-9{
    margin: auto;
  }

@media (min-width: 1281px) {
.jumbotron p{
  margin-bottom: 17%;
}
}

@media (min-width: 1025px) and (max-width: 1280px) {
.banner video{
height: 60%;
}
.jumbotron p{
  margin-bottom: 17%;
}
}
@media (min-width: 790px) and (max-width: 1024px) {
.banner video{
  display: none;
}
.banner{
  background: url(./img/fondo.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  height: 450px;
}
.redes li i{
  display: none;
}
.title h1{
  position: absolute;
  top: -30%;
}
.title p {
  position: relative;
  top: 80px;
}
.jumbotron p{
  margin-bottom: 17%;
}
}
@media (min-width: 481px) and (max-width: 789px) {
.banner video{
display: none;
}
.banner{
background: url(./img/fondo.jpg);
background-repeat: no-repeat;
background-size: cover;
height: auto;
}
.jumbotron video{
display: none;
}
.jumbotron p{
padding: 5%;
}
}
@media (min-width: 0px) and (max-width:480px) {
.part-two h1{
  color: violet;
}
.banner video{
  display: none;
}
.banner{
  background: url(./img/fondo.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  height: auto;
}
.jumbotron video{
  display: none;
}
}
  </style>


  <div class="container-fluid part-one">
  <div class="banner">
    <video autoplay muted loop>
      <source src="./img/portadaproyecto.mp4" type="video/mp4">
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
      <img class="card-img-top" src="categories\gastronomia.jpg" alt="Card image cap">
      <div class="card-body gastronomia">
            <a href="#" class="btn btn-primary">Gastronomia</a>
      </div>
    </div>
          </article>
          <article class="col-7 col-sm-6 col-md-6 col-lg-4">
            <div class="card" style="">
      <img class="card-img-top" src="./img/entretenimiento.jpg" alt="Card image cap">
      <div class="card-body entretenimiento">
            <a href="#" class="btn btn-primary">entretenimiento</a>
      </div>
    </div>
          </article>
          <article class="col-7 col-sm-6 col-md-6 col-lg-4">
            <div class="card" style="">
      <img class="card-img-top" src="./img/relax.jpg" alt="Card image cap">
      <div class="card-body relax">
            <a href="#" class="btn btn-primary">Relax</a>
      </div>
    </div>
          </article>
          <article class="col-7 col-sm-6 col-md-6 col-lg-4">
            <div class="card" style="">
      <img class="card-img-top" src="./img/viajes.jpeg" alt="Card image cap">
      <div class="card-body viajes">
        <a href="#" class="btn btn-primary">Viajes</a>
      </div>
    </div>
          </article>
          <article class="col-7 col-sm-6 col-md-6 col-lg-4">
            <div class="card" style="">
      <img class="card-img-top" src="./img/cursos.jpg" alt="Card image cap">
      <div class="card-body cursos">
            <a href="#" class="btn btn-primary">Cursos</a>
      </div>
    </div>
          </article>
          <article class="col-7 col-sm-6 col-md-6 col-lg-4">
            <div class="card" style="">
      <img class="card-img-top" src="./img/aventura.jpg" alt="Card image cap">
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
    <source src="./img/ofertas.mp4" type="video/mp4">
  </video>
  <p class="oferts">¡APROVECHÁ LAS OFERTAS QUE TENEMOS PARA VOS!</p>
</div>
</div>

<div class="container part-three">
          <h1 class="d-flex justify-content-center">Lo mas buscado</h1>
      <section class="row section-products">
          <article class="col-9 col-md-6 col-lg-4 col-lg-4>">
              <img src="./img/rosellBoher.jpg" alt="">
              <img class="carrito" src="./img/icono.carrito.png" alt="" height="10px" width="5px">
              <h3>Rosell Boher Lodge</h3>
              <h4>$34900</h4>
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </article>

          <article class="col-9 col-md-6 col-lg-4">
              <img src="./img/piedrasBlancas.jpg" alt="">
              <img class="carrito" src="./img/icono.carrito.png" alt="" height="10px" width="5px">
              <h3>Estadia Piedras Blancas</h3>
              <h4>$8.350</h4>
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididuntut labore et dolore magna aliqua.
          </article>
          <article class="col-9 col-md-6 col-lg-4">
              <img src="./img/beauty.png" alt="">
              <img class="carrito" src="./img/icono.carrito.png" alt="" height="10px" width="5px">
              <h3>Spa para 2 personas</h3>
              <h4>$3.300</h4>
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </article>
          <article class="col-9 col-md-6 col-lg-4">
              <img src="./img/paracaidas.jpg" alt="">
              <img class="carrito" src="./img/icono.carrito.png" alt="" height="10px" width="5px">
              <h3>Salto en Paracaídas</h3>
              <h4>$6.700</h4>
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </article>
          <article class="col-9 col-md-6 col-lg-4">
              <img src="./img/cabalgata.jpg" alt="">
              <img class="carrito" src="./img/icono.carrito.png" alt="" height="10px" width="5px">
              <h3>Cabalgata</h3>
              <h4>$4.500</h4>
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </article>
          <article class="col-9 col-md-6 col-lg-4">
              <img src="./img/azurRealHotel.jpg" alt="">
              <img class="carrito" src="./img/icono.carrito.png" alt="" height="10px" width="5px">
              <h3>Estadia en Azur Real Hotel</h3>
              <h4>$8.900</h4>
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </article>
          <article class="col-9 col-md-6 col-lg-4">
              <img src="./img/alvearGrill.jpg" alt="">
              <img class="carrito" src="./img/icono.carrito.png" alt="" height="10px" width="5px">
              <h3>Cena en Alvear Grill</h3>
              <h4>$2.300</h4>
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </article>
          <article class="col-9 col-md-6 col-lg-4">
              <img src="./img/hotelHood.jpg" alt="">
              <img class="carrito" src="./img/icono.carrito.png" alt="" height="10px" width="5px">
              <h3>Food in the Hood</h3>
              <h4>$1.200</h4>
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </article>
          <article class="col-9 col-md-6 col-lg-4">
              <img src="./img/globo.jpg" alt="">
              <img class="carrito" src="./img/icono.carrito.png" alt="" height="10px" width="5px">
              <h3>Vuelo en Globo</h3>
              <h4>$7.600</h4>
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </article>
          <article class="col-9 col-md-6 col-lg-4">
              <img src="./img/cafayate.jpg" alt="">
              <img class="carrito" src="./img/icono.carrito.png" alt="" height="10px" width="5px">
              <h3>Estadia Hotel Grace Cafayate</h3>
              <h4>$5.900</h4>
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </article>
          <article class="col-9 col-md-6 col-lg-4">
              <img src="./img/fotografia.jpg" alt="">
              <img class="carrito" src="./img/icono.carrito.png" alt="" height="10px" width="5px">
              <h3>Curso de fotografia</h3>
              <h4>$1.700</h4>
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </article>
          <article class="col-9 col-md-6 col-lg-4">
              <img src="./img/corteyConfeccion.jpg" alt="">
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
