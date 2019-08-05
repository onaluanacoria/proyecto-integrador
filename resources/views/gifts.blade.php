@extends('plantilla')


@section('principal')
    <script type="text/javascript" src="{{asset('js/giftcompany.js')}}"></script>
    <link rel="stylesheet" href=  "{{asset('css/index.css')}}"/>
    <title>Regalos</title>
  </head>

  <body>

<div class="container-fluid gifts">
  <form class="gift-search" action="/gifts/search" method="get">
    <input type="submit" name="" value="Buscar Regalo">
    <input type="text" name="name" value="">
  </form>
</div>

<div class="buttonDeAddGift">
    @can ('add.gift')
  <form class="" action="/addgift" method="get">
    @csrf
    <input type="submit" name="" class="" value="Agregar Regalo">
  </form>
    @endcan
</div>
<div class="buttonDeAddCategory">
      @can ('addcategory')
  <form class="" action="/addcategory" method="get">
    @csrf
    <input type="submit" name="" class="" value="Agregar Categoria">

  </form>
    @endcan
</div>


    <div class="container part-three">
       <h1 class="d-flex justify-content-center">Todos los regalos<img class="allgifts"src="img/icon/regaloAll.png" alt="" ></h1>
         {{-- <p> {{$products-> total()}} Regalos |
              pagina {{$products->currentPage()}}
              de {{$products->lastPage()}}
         </p> --}}

          <section class="row section-products allgifts">
            @foreach ($products as $product)
              <article class="col-9 col-md-6 col-lg-4 col-lg-4>">
                
                <div class="card-body categorias">
                    <a href="#" class="btn btn-primary">{{ !empty ($product->category)? $product->category->name: '' }}</a>
                </div>
                    <img src="/storage/products/{{$product->featured_img}}" alt="">
                    <h3>{{$product->name}}</h3>
                    <h4>${{$product->price}}</h4>
                    <h5>{{$product->description}}</h5>
              <a href="/gift/{{$product->id}}">Ver más</a>
            </article>
          @endforeach
        </section>
        {{-- {!! $products->render() !!} --}}
    </div>
  </body>
</html>
@endsection
