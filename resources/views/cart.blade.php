<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Carrito</h1>
    <section>
      <article>
        <ul>
          @foreach ($carts as $item)
              <li>Nombre: {{$item->name}} | Cantidad: {{$item->quantity}} | Precio: {{$item->price}} | sub-total: {{$item->price * $item->quantity}} <a href="/delete/{{$item->id}}">Eliminar</a></li>
          @endforeach
        </ul>
      
      </article>
      <p>Total: {{$total}}</p>
      {{-- <p>Total2: {{$total2}}</p> --}}
    </section>


  </body>
</html>
