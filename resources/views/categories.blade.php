@extends('plantilla')

@section('principal')


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container part-two">
        <h1>Categorias</h1>
        {{-- @forelse ($categories as $category)
          <li>{{$category->name}}</li>


          <ul>

          @forelse ($category->name as $vuelta)
            <li>{{$vuelta->name}}</li>
              <li>{{$id->name}}</li>
           @empty

          @endforelse --}}
     {{-- @dd($categories); --}}
      <section class="row">
          <article class="col-7 col-sm-6 col-md-6 col-lg-4">
                    <div class="card" style="">
                  @forelse ($categories as $category)
                    <img class="card-img-top" src="/storage/imgCategories/{{$categories->imgCategories}}" alt="Card image cap">
                    <div class="card-body gastronomia">
                        <a href="#" class="btn btn-primary">{{$categories->name}}</a>
                    </div>
                    </div>

                  @forelse ($category->id as $vuelta)
                    <li>{{$vuelta->name}}</li>

                  @empty
                    {{"Esta vacio"}}
                  @endforelse

          </article>
          {{-- <section class="row section-products allgifts">
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
        </section> --}}
    </section>

    <hr>
</div>


@endsection
