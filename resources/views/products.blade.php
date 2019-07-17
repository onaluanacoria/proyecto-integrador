<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href=  "{{asset('css/index.css')}}"/>
    <title></title>
  </head>

  <body>
    <form class="" action="/products/search" method="get">
      <input type="text" name="name" value="">
      <input type="submit" name="" value="Buscar Regalo">
    </form>

    <div class="container part-three">
       <h1 class="d-flex justify-content-center">Lo mas buscado</h1>
          <section class="row section-products">
            @foreach ($products as $product)
              <article class="col-9 col-md-6 col-lg-4 col-lg-4>">
                    <img src="/storage/products/{{$product->featured_img}}" alt="">
                    <img class="carrito" src="./img/icono.carrito.png" alt="" height="10px" width="5px">
                    <h3>{{$product->name}}</h3>
                    <h4>${{$product->price}}</h4>
                    <h5>{{$product->description}}</h5>
              <p><a href="/product/{{$product->id}}">Ver más</a></p>
            </article>
          @endforeach
        </section>

  </body>
</html>
