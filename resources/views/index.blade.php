@extends('plantilla')

@section('principal')

  <link rel="stylesheet" href=  "{{asset('css/index.css')}}"/>


  <div class="container-fluid part-one">
  <div class="banner">
    <video autoplay muted loop>
      <source src="img/index/portadaproyecto.mp4" type="video/mp4">
    </video>
    <div class="content">
      <div class="redes d-flex flex-row-reverse ">
        <ul>
          <li class="list-inline-item"><a href="https://facebook.com" target="_blank"> <img src="img/social/facebook(1).png" alt=""> </a></li>
          <li class="list-inline-item"><a href="https://twitter.com" target="_blank"><img src="img/social/twitter(1).png" alt=""> </a></li>
          <li class="list-inline-item"><a href="https://instagram.com" target="_blank"><img src="img/social/instagram(1).png" alt=""></a></li>
          <li class="list-inline-item"><a href="https://linkedin.com" target="_blank"><img src="img/social/linkedin(1).png" alt=""></a></li>
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

     {{-- @dd($categories); --}}
      <section class="row">
          <article class="col-7 col-sm-6 col-md-6 col-lg-4">
                    <div class="card" style="">
                  <img class="card-img-top" src="/storage/imgCategories/{{$categories[5]->imgCategories}}" alt="Card image cap">
                  <div class="card-body gastronomia">
                      <a href="#" class="btn btn-primary">{{$categories[5]->name}}</a>
                  </div>
              </div>
          </article>
          <article class="col-7 col-sm-6 col-md-6 col-lg-4">
              <div class="card" style="">
                <img class="card-img-top" src="/storage/imgCategories/{{$categories[0]->imgCategories}}" alt="Card image cap">
                <div class="card-body entretenimiento">
                    <a href="#" class="btn btn-primary">{{$categories[0]->name}}</a>
                </div>
              </div>
          </article>
          <article class="col-7 col-sm-6 col-md-6 col-lg-4">
            <div class="card" style="">
      <img class="card-img-top" src="/storage/imgCategories/{{$categories[3]->imgCategories}}" alt="Card image cap">
      <div class="card-body relax">
            <a href="#" class="btn btn-primary">{{$categories[3]->name}}</a>
      </div>
    </div>
          </article>
          <article class="col-7 col-sm-6 col-md-6 col-lg-4">
            <div class="card" style="">
      <img class="card-img-top" src="/storage/imgCategories/{{$categories[2]->imgCategories}}" alt="Card image cap">
      <div class="card-body viajes">
        <a href="#" class="btn btn-primary">{{$categories[2]->name}}</a>
      </div>
    </div>
          </article>
          <article class="col-7 col-sm-6 col-md-6 col-lg-4">
            <div class="card" style="">
      <img class="card-img-top" src="/storage/imgCategories/{{$categories[1]->imgCategories}}" alt="Card image cap">
      <div class="card-body cursos">
            <a href="#" class="btn btn-primary">{{$categories[1]->name}}</a>
      </div>
    </div>
          </article>
          <article class="col-7 col-sm-6 col-md-6 col-lg-4">
            <div class="card" style="">
      <img class="card-img-top" src="/storage/imgCategories/{{$categories[4]->imgCategories}}" alt="Card image cap">
      <div class="card-body aventura">
          <a href="#" class="btn btn-primary">{{$categories[4]->name}}</a>
      </div>
           </div>
          </article>
    </section>

    <hr>
</div>
      {{-- @forelse ($categories as $category)
        <li>{{$category->name}}</li>


        <ul>

        @forelse ($category->name as $vuelta)
          <li>{{$vuelta->name}}</li>
            <li>{{$id->name}}</li>
         @empty
          {{"Esta vacio"}}
        @endforelse --}}



<div class="jumbotron jumbotron-fluid" style="background-color: rgba(235, 233, 235, 1);">
<div class="container d-flex justify-content-center">
  <h1 class="">Regalá <span class="frase">experiencias</span>, que se conviertan en momentos <span class="frase">inolvidables</span></h1>
  <video autoplay muted loop>
    <source src="img/index/ofertas.mp4" type="video/mp4">
  </video>
  <p class="oferts">¡APROVECHÁ LAS OFERTAS QUE TENEMOS PARA VOS!</p>
</div>
</div>

<div class="container part-three">

   <h1 class="d-flex justify-content-center">Lo mas regalados<img class="ranking "src="img/icon/podio.png" alt=""></h1>
      <section class="row section-products">
          @foreach ($products as $product)
            @if($product->productTop())
              <article class="col-9 col-md-6 col-lg-4 col-lg-4>">
                    <h2>{{$product->category->name}}</h2>
                      <img src="/storage/products/{{$product->featured_img}}" alt="">
                      <h3>{{$product->name}}</h3>
                      <h4>${{$product->price}}</h4>
                      <h5>{{$product->description}}</h5>
                      <a href="/gift/{{$product->id}}">Ver más</a>
              </article>
            @endif
          @endforeach
      </section>
</div>




          <div class="tell-me-more col-9 d-flex justify-content-center">
              <button id="tell-me-more" role="link" onclick="window.location='/gifts'">Ver todos</button>
          </div>
      </section>
          <hr>
  </div>

@endsection
