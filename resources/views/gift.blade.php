<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Detalle del producto</h1>
    <section>
      <article>
        <p>{{$product->name}}</p>
        <p>{{$product->description}}</p>
        <p>{{$product->price}}</p>
        {{-- <p><a href="#">Comprar</a></p> --}}
        <form class="" action="/addtocart" method="post">
          @csrf
          <input type="number" name="quantity" value="" placeholder="Cantidad">
          <input type="hidden" name="id" value="{{$product->id}}">
          <p></p>
          <button type="submit">Agregar al carrito</button>
        </form>
        <img src="/storage/products/{{$product->featured_img}}" alt="">

        <form class="" action="/editgift/{{$product->id}}" method="get">
          {{-- <input type="hidden" name="id" value="{{$movie->id}}"> --}}
          @csrf
          <input type="submit" name="" value="Editar">

          </form>

          <form class="" action="/deletegift/{{$product->id}}" method="get">
            {{-- <input type="hidden" name="id" value="{{$movie->id}}"> --}}
            <input type="submit" name="" value="Borrar Regalo">
            @csrf

        </form>
      </article>
    </section>

  </body>
</html>
