@extends('plantilla')

@section('principal')

  <link rel="stylesheet" href=  "{{asset('css/index.css')}}"/>

<div class="">


  <div class="addgift d-flex justify-content-center">
      <ul>
      @foreach ($errors->all() as $error)
        <li>
          {{$error}}
        </li>
      @endforeach
      </ul>


      <form class="form-addgift" action="/editgift/{{$product->id}}" method="post" enctype="multipart/form-data">
        <h1 class=""> Editar Regalo <img class="lista" src="img/regalo.png" alt=""></h1>
         @csrf {{-- ES OBLIGATORIO PARA FORMS METHOD POST --}}
        {{-- {{csrf_field()}} --}}
              <div class="form-group">
                <label for="name">Nombre</label>
                <input id="name" type="text" name="name" value="{{ $product->name }}">
              </div>
              <div class="form-group">
                <label for="description">Descripción</label>
                <input id="description" type="text" name="description" value="{{ $product->description}} ">
            </div>
            <div class="form-group">
              <label for="price">Precio</label>
              <input id="price" type="text" name="price" value="{{$product->price}}">
            </div>
            <div class="form-group">
              <label>Imagen</label>
            <span>  <input type="file" name="featured_img" value="{{$product->featured_img}}"></span>
            </div>
            <div class="form-group">
              <label>Categoria</label>
                <select name="categoria_id" class="select"required>
                  @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                  @endforeach
                </select>
            </div>

            <div class="submit-form">
              <input type="submit" name="" value="Editar Regalo">
            </div>
        </form>
    </div>

    <div class="fondo-add-gift">    </div>
  </div>


@endsection
