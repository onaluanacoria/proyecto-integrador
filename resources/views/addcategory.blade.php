<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Agregar Categoria</h1>
      <ul>
      @foreach ($errors->all() as $error)
        <li>
          {{$error}}
        </li>
      @endforeach
      </ul>

      <form class="" action="/addcategory" method="post" enctype="multipart/form-data">
         @csrf {{-- ES OBLIGATORIO PARA FORMS METHOD POST --}}
        {{-- {{csrf_field()}} --}}
        <div class="">
          <label for="name">Nombre</label>
          <input id="name" type="text" name="name" value="{{old("name")}}">
        </div>

        <div class="">
        <label>Portada</label>
        <input type="file" name="imgCategories" value="">
        </div>


        <div class="">
          <input type="submit" name="" value="Agregar Categoria">
        </div>
      </form>

  </body>
</html>
