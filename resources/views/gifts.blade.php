@extends('plantilla')

@section('principal')

    <link rel="stylesheet" href=  "{{asset('css/index.css')}}"/>
    <title></title>
  </head>

  <body>

<div class="container-fluid gifts">
  <form class="gift-search" action="/gifts/search" method="get">
    <input type="submit" name="" value="Buscar Regalo">
    <input type="text" name="name" value="">
  </form>
</div>


    <div class="container part-three">
       <h1 class="d-flex justify-content-center">Todos los regalos<img class="allgifts"src="img/regaloAll.png" alt=""></h1>
          <section class="row section-products allgifts">
            @foreach ($products as $product)
              <article class="col-9 col-md-6 col-lg-4 col-lg-4>">
                    <h2>{{$product->category->name}}</h2>
                    <img src="/storage/products/{{$product->featured_img}}" alt="">
                    <h3>{{$product->name}}</h3>
                    <h4>${{$product->price}}</h4>
                    <h5>{{$product->description}}</h5>
              <a href="/gift/{{$product->id}}">Ver más</a>
            </article>
          @endforeach
        </section>
    </div>
  </body>
</html>


@endsection
