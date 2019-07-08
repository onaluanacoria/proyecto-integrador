
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/fonts.css">


    <title>GiftCo</title>

    <style media="screen">
    * {
      margin:0;
      padding:0;
    }

    body {
      background:#FFFFFA;
    }

    header {
      width:100%;
      display: flex;
      position: fixed;
      z-index: 100;
    }
    li{
      list-style: none;
    }

    header nav {
      width:100%;
      margin:20px auto;
      background-color: rgba(255,168, 184, 0.8);
    }

    header nav ul li span {
      margin-left: 23px;
    }

    header nav ul li a{
      color: #222222;
    }
    .ingreso {
      padding:20px;
    }

    </style>

  </head>

<header>
  <nav class="navbar navbar-expand-lg">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <i class="fas fa-hand-holding-heart"> GiftCompany </i>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a href="{{route('home')}}"><span class="icon-home2"></span> Home</a>
        </li>
        <li class="categorias">
          <a href="{{route('categorias')}}"><span class="icon-plus"></span> Categorias</a>
        </li>
        <li class="nav-item">
          <a href=""><span class="icon-user-plus"></span> Registro</a>
        </li>
        <li class="nav-item">
          <a href="{{route('login')}}" ><span class="icon-key2"></span>Login</a>
        </li>
        <li class="nav-item">
          <a href="{{route('FQaA')}}"><span class="icon-point-right"></span>FQaA</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Busca tu regalo" aria-label="Search">
        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
      </form>
          <li><i class="ingreso far fa-user fa-2x"></i></li>
          <li><i class="carrito fas fa-shopping-cart fa-2x"></i></li>
    </div>
  </nav>
</header>


<body>
@yield('principal')
</body>

<div class="container-fluid footer">
  <footer class="site-footer">
        <div class="row">
      <div class="footer-about col-ls-4 col-md-4">
          <h3> About<span> GiftCompany </span></h3>
            <p> Regalá Experiencias, porque los mejores regalos no son cosas, son momentos.</p>
      </div>
      <div class="medios-pago col-ls-4 col-md-4">
          <h3>Medios de <span>Pago</span></h3>
          <ul>
            <li><i class="fab fa-cc-mastercard"></i> <i class="fab fa-cc-visa"></i> <i class="fab fa-cc-amex"></i> <i class="fab fa-cc-paypal"></i></li>
          </ul>
      </div>
      <div class="menu col-ls-4 col-md-4">
        <h3>Redes <span>sociales</span></h3>
          <div class="redes">
            <ul>
            <li class="list-inline-item"><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
            <li class="list-inline-item"><a href="https://twitter.com" target="_blank"><i class="fab fa-twitter-square"></i> </a></li>
            <li class="list-inline-item"><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i> </a></li>
            <li class="list-inline-item"><a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i>  </a></li>
          </ul>
          </div>
      </div>

</div>
</div>
<p class="copyrights">Copyright &copy Todos los derechos reservados GiftCompany- 2019</p>
</footer>
</html>
