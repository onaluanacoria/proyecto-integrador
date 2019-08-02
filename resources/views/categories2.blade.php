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
      @forelse ($categories as $category)
        <li>{{$category->name}}</li>


        <ul>

        @forelse ($category->name as $vuelta)
          <li>{{$vuelta->name}}</li>
            <li>{{$id->name}}</li>
         @empty
          {{"Esta vacio"}}
        @endforelse

@endsection
