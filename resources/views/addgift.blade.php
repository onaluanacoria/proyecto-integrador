<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Agregar Regalo</h1>
      <ul>
      @foreach ($errors->all() as $error)
        <li>
          {{$error}}
        </li>
      @endforeach
      </ul>

      <form class="" action="/addgift" method="post" enctype="multipart/form-data">
         @csrf {{-- ES OBLIGATORIO PARA FORMS METHOD POST --}}
        {{-- {{csrf_field()}} --}}
        <div class="">
          <label for="name">Nombre</label>
          <input id="name" type="text" name="name" value="{{old("name")}}">
          <small>{{$errors->first('name')}}</small>
        </div>
        <div class="">
          <label for="description">Descripcion</label>
          <input id="description" type="text" name="description" value="{{old("description")}}">
        </div>
        <div class="">
          <label for="price">Precio</label>
          <input id="price" type="text" name="price" value="{{old("price")}}">
        </div>
        <div class="">
        <label>Imagen</label>
        <input type="file" name="featured_img" value="">
        </div>
        {{-- <div class="">
          <label>categoria</label>
          <input type="text" name="categoria_id" value="{{old("categoria_id")}}">
        </div> --}}
        <div class="">
          <input type="submit" name="" value="Agregar Regalo">
        </div>
      </form>

  </body>
</html>
