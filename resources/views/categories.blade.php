@extends('plantilla')

@section('principal')

  <div class="titulo-seccion">
            <h2>{{$category['name']}}</h2>

  </div>
  @foreach ($products as $product)
        <article class="producto">
            <a style="text-decoration:none;" href="/gift/{{$product['id']}}">
                <div class="p-imagen">
                    <img src="/storage/products/{{$product["featured_img"]}}" alt="{{$product["name"]}}">
                </div>
                <div class="producto-texto">
                    <h3>{{$product["name"]}}</h3>
                </div>
            </a>
            <div class="producto-boton">
                <p class="precio">${{$product["price"]}}</p>
                <form class="" action="/addtocart" method="post">
                  @csrf
                    <input type="text" hidden name="id" value="{{$product['id']}}">
                    <button class="comprar" type="submit" name="button">Comprar</button>
                </form>
            </div>
        </article>
    @endforeach


@endsection
    {{-- @forelse ($category as $item => $value)
      @dd($value);
    @empty

    @endforelse --}}


    {{-- @dd($category->products)
   --}}

{{-- @extends('plantilla')



  @section("titulo")
    GiftCompany/ Categorias
  @endsection
  @extends('plantilla')

  @section('principal')
      <script type="text/javascript" src="{{asset('js/giftcompany.js')}}"></script>
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
         <h1 class="d-flex justify-content-center">Categorias<img class="allgifts"src="img/icon/regaloAll.png" alt="" ></h1>
           <p> {{$products->total()}} Regalos |
                pagina {{$products->currentPage()}}
                de {{$products->lastPage()}}
           </p>

           <div class="card-body categorias">
               <a href="#" class="btn btn-primary">{{$product->category->name}}</a>
           </div>
            <section class="row section-products allgifts">
              @foreach ($products as $product)
                <article class="col-9 col-md-6 col-lg-4 col-lg-4>">

                      <img src="/storage/products/{{$product->featured_img}}" alt="">
                      <h3>{{$product->name}}</h3>
                      <h4>${{$product->price}}</h4>
                      <h5>{{$product->description}}</h5>
                <a href="/gift/{{$product->id}}">Ver más</a>
              </article>
            @endforeach
          </section>
          {!! $products->render() !!}
      </div>
    </body>
  </html>


  @endsection --}}
