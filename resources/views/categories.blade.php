@extends('plantilla')

@section('principal')
      <link rel="stylesheet" href=  "{{asset('css/index.css')}}"/>
        <title>Categoria</title>

  <div class="container part-three">
     <h1 class="d-flex justify-content-center">Categoría {{$category->name}}<img class="allgifts"src="../img/icon/lista.png" alt="" ></h1>

        <section class="row category section-products allgifts">
          @foreach ($products as $product)
            <article class="category col-9 col-md-6 col-lg-4 col-lg-4>">
              <div class="carritoImg category offset-3">
                <img class="carrito category" src="..\img\icon\carro.png" alt="carrito" onclick ="producto(this)">
              </div>

                  <img src="/storage/products/{{$product->featured_img}}" alt="">
                  <h3>{{$product->name}}</h3>
                  <h4>${{$product->price}}</h4>
                  <h5>{{$product->description}}</h5>
            <a href="/gift/{{$product->id}}">Ver más</a>
            <form class="categoryAdd" action="/addtocart" role="form" method="post">
                @csrf
                <div class="a">
                  <input type="hidden" name="id" value="{{$product->id}}">
                      <input type="number" hidden name="quantity" value="1" placeholder="Cantidad">
                      <div class="form-group row mb-0 mt-1">
                      <div class="">
                        <button type="submit" class="btn btn-primary profile">Añadir al carrito</button>
                      </div>
                  </div>
                </div>
              </form>
          </article>

        @endforeach
      </section>
      {{-- {!! $products->render() !!} --}}
  </div>




@endsection
