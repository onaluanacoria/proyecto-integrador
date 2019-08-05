@extends('plantilla')

@section('content')

  <link rel="stylesheet" href=  "{{asset('css/index.css')}}"/>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card producDetail">

                    <div class="card-body profile">
                          <div class="container">
                            <div class="row">
                                <div class="col-12">
                                  <h1 class="productDetail">Detalle del Regalo<img class="detalle" src="../img/icon/busqueda.png" alt=""> </h1>
                                  <div class="carritoImg offset-3">
                                    <img class="carrito" src="..\img\icon\carro.png" alt="carrito" onclick ="producto(this)">
                                  </div>
                                      <div class="product">
                                        <img src="/storage/products/{{$product->featured_img}}" alt="">
                                      </div>
                                        <article class="detail">
                                          <div class="">
                                            <h3>{{$product->name}}</h3>
                                          </div>
                                          <div class="">
                                            <h5>{{$product->description}}</h5>
                                          </div>
                                          <div class="">
                                            <h4>${{$product->price}}</h4>
                                          </div>

                                        </article>

                                        <form class="addcart" action="/addtocart" role="form" method="get">
                                            @csrf
                                            <div class="add">
                                              <input type="number" name="quantity" value="1" placeholder="Cantidad">
                                              <input type="hidden" name="id" value="{{$product->id}}">
                                              <input type="hidden" name="user_id" value="{{Auth::user("user_id")}}">
                                              <input type="hidden" name="name" value="{{$product->name}}">
                                              <input type="hidden" name="description" value="{{$product->description}}">
                                              <input type="hidden" name="price" value="{{$product->price}}">
                                            </div>
                                            <div class="form-group add row mb-0 mt-1">
                                                <div class="col-md-7 offset-md-4">
                                                    <button type="submit" class="btn btn-primary profile">Añadir al carrito</button>
                                                </div>
                                            </div>
                                          </form>
                                          <div class="actionButtons">
                                            @can ('gift.edit')
                                              <form class="editgift" action="/editgift/{{$product->id}}" method="get">
                                                @csrf
                                                  <input type="submit" name="" value="Editar">
                                              </form>
                                            @endcan
                                            @can ('gift.destroy')
                                              <form class="delategift" action="/deletegift/{{$product->id}}" method="get">
                                                  @csrf
                                                <input type="submit" name="" value="Borrar Regalo">
                                            </form>
                                            @endcan
                                            </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
