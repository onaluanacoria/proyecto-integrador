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
      <section class="row">
          <article class="col-7 col-sm-6 col-md-6 col-lg-4">
              <div class="card" style="">
                  <img class="card-img-top" src="img/categories/gastronomia.jpg" alt="Card image cap">
                  <div class="card-body gastronomia">
                      <a href="#" class="btn btn-primary">Gastronomia</a>
                  </div>
              </div>
          </article>
          <article class="col-7 col-sm-6 col-md-6 col-lg-4">
              <div class="card" style="">
                <img class="card-img-top" src="img/categories/entretenimiento.jpg" alt="Card image cap">
                <div class="card-body entretenimiento">
                    <a href="#" class="btn btn-primary">Entretenimiento</a>
                </div>
              </div>
          </article>
          <article class="col-7 col-sm-6 col-md-6 col-lg-4">
            <div class="card" style="">
      <img class="card-img-top" src="img/categories/relax.jpg" alt="Card image cap">
      <div class="card-body relax">
            <a href="#" class="btn btn-primary">Relax</a>
      </div>
    </div>
          </article>
          <article class="col-7 col-sm-6 col-md-6 col-lg-4">
            <div class="card" style="">
      <img class="card-img-top" src="img/categories/viajes.jpeg" alt="Card image cap">
      <div class="card-body viajes">
        <a href="#" class="btn btn-primary">Viajes</a>
      </div>
    </div>
          </article>
          <article class="col-7 col-sm-6 col-md-6 col-lg-4">
            <div class="card" style="">
      <img class="card-img-top" src="img/categories/cursos.jpg" alt="Card image cap">
      <div class="card-body cursos">
            <a href="#" class="btn btn-primary">Cursos</a>
      </div>
    </div>
          </article>
          <article class="col-7 col-sm-6 col-md-6 col-lg-4">
            <div class="card" style="">
      <img class="card-img-top" src="img/categories/aventura.jpg" alt="Card image cap">
      <div class="card-body aventura">
          <a href="#" class="btn btn-primary">Aventura</a>
      </div>
           </div>
          </article>
    </section>
    <hr>
</div>
      {{-- @forelse ($categories as $category)
        <li>{{$category->name}}</li>

{{--
        <ul>

        @forelse ($category->name as $vuelta)
          <li>{{$vuelta->name}}</li>
            {{-- <li>{{$id->name}}</li> --}}
        {{-- @empty
          {{"Esta vacio"}}

        @endforelse --}} --}}

@endsection
