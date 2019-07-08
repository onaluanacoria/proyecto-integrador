<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Lista de productos</h1>
    <section>
      @foreach ($products as $product)
      <article>
        <img src="/storage/product/{{$product->featured_img}}" alt="">
        <p>{{$product->name}}</p>
        <p>{{$product->description}}</p>
        <p>{{$product->price}}</p>
        
        <p><a href="/product/{{$product->id}}">Ver más</a></p>

      </article>
      @endforeach
    </section>

  </body>
</html>
