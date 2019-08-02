
    <!DOCTYPE html>

    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- <title>{{ config('app.name', 'GitfCompany') }}</title> --}}
        <title>@yield("titulo")</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    </head>
<header>
  <div id="app">

      <nav class="navbar navbar-expand-md navbar-light bg-black shadow-sm" style="z-index: 100;background-color: rgba(255,168, 184, 0.8);">
          <div class="container">
              <a class="navbar-brand" href="{{ url('/') }}">
                <img class="lista" src="img/icon/regalo (1).png" alt="">  GiftCompany
              </a>
              <a class = "navbar-brand" href="{{ url('/categories') }}"> Categorias </a>

              <a class = "navbar-brand" href="{{ url('/faqs') }}"> Preguntas frecuentes </a>

              <a class = "navbar-brand" href="{{ url('/cart') }}"> Mi carrito </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">

                  </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                      @guest
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>

                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>

                          @endif
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <em>Bienvenido</em>  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Salir') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest
                  </ul>
              </div>
          </div>
      </nav>

      <main class="py-4">
          @yield('content')
      </main>
  </div>
</header>


<body>
@yield('principal')
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
            <li class="list-inline-item"> <img src="img/payment/visa.png" alt=""> </li>
              <li class="list-inline-item"> <img src="img/payment/mastercard.png" alt=""> </li>
                <li class="list-inline-item"> <img src="img/payment/american-express.png" alt=""> </li>
                  <li class="list-inline-item"> <img src="img/payment/paypal.png" alt=""> </li>
                    <li class="list-inline-item"> <img src="img/payment/bitcoin.png" alt=""> </li>
          </ul>
      </div>
      <div class="menu col-ls-4 col-md-4">
        <h3>Redes <span>sociales</span></h3>
          <div class="redes">
            <ul>
            <li class="list-inline-item"><a href="https://facebook.com" target="_blank"> <img src="img/social/facebook.png" alt=""> </a></li>
            <li class="list-inline-item"><a href="https://twitter.com" target="_blank"> <img src="img/social/twitter.png" alt=""> </a></li>
            <li class="list-inline-item"><a href="https://instagram.com" target="_blank"><img src="img/social/instagram.png" alt=""> </a></li>
            <li class="list-inline-item"><a href="https://linkedin.com" target="_blank"> <img src="img/social/linkedin.png" alt=""></a></li>
          </ul>
          </div>
      </div>

</div>
</div>
<p class="copyrights">Copyright &copy Todos los derechos reservados GiftCompany- 2019</p>
</footer>
</body>

</html>
