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
        <p>Nombre: {{$product->name}}</p>
        <p>Descripción: {{$product->description}}</p>
        <p>Precio: {{$product->price}}</p>
        {{-- <p><a href="#">Comprar</a></p> --}}
        <form class="" action="/addtocart" method="post">
          @csrf
          <input type="number" name="quantity" value="" placeholder="Cantidad">
          <input type="hidden" name="id" value="{{$product->id}}">
          <p></p>
          <button type="submit">Agregar al carrito</button>
        </form>
        <img src="/storage/product/{{$product->featured_img}}" alt="">

      </article>
    </section>

  </body>
</html>
