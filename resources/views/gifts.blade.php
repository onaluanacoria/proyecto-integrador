@extends('plantilla')

@section('principal')

    <link rel="stylesheet" href=  "{{asset('css/index.css')}}"/>
    <title></title>
  </head>

  <body>


    <form class="" action="/gifts/search" method="get">
      <input type="text" name="name" value="">
      <input type="submit" name="" value="Buscar Regalo">
    </form>


    <div class="container part-three">
       <h1 class="d-flex justify-content-center">Todos los regalos</h1>
          <section class="row section-products">
            @foreach ($products as $product)
              <article class="col-9 col-md-6 col-lg-4 col-lg-4>">
                    <h2>{{$product->category->name}}</h2>
                    <img src="/storage/products/{{$product->featured_img}}" alt="">
                    <h3>{{$product->name}}</h3>
                    <h4>${{$product->price}}</h4>
                    <h5>{{$product->description}}</h5>
              <p><a href="/gift/{{$product->id}}">Ver más</a></p>
            </article>

          @endforeach
        </section>
    </div>


  </body>
</html>
@endsection
