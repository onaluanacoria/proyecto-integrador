@extends('plantilla')
@section('principal')

  @section("titulo")
    GiftCompany/ agregar categoria
  @endsection

  <link rel="stylesheet" href=  "{{asset('css/index.css')}}"/>

  <div class="container d-flex justify-content-center">
    <div class="addcategory d-flex justify-content-center">
      <ul>
      @foreach ($errors->all() as $error)
        <li>
          {{$error}}
        </li>
      @endforeach
      </ul>
      <form class="form-addcategory" action="/addcategory" method="post" enctype="multipart/form-data">
        <h1>Agregar Categoria <img class="lista"src="img/icon/lista.png" alt=""></h1>
         @csrf
        <div class="form-group">
          <label for="name">Nombre</label>
          <input id="name" type="text" name="name" value="{{old("name")}}">
        </div>

        <div class="form-group">
        <label>Portada</label>
        <input type="file" name="imgCategories" value="">
        </div>

        <div class="submit-form">
          <input type="submit" name="" value="Agregar Categoria">
        </div>
      </form>
  </div>
</div>
@endsection
