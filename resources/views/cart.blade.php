@extends('plantilla')
@section('principal')

<link rel="stylesheet" href=  "{{asset('css/index.css')}}"/>


  <div class="container cart">
      <div class="row justify-content-center">
          <div class="col-md-6">
              <div class="card carts">

  <h1>Carrito <img class="lista" src="img/icon/tranvia.png" alt=""></h1>
                  <div class="card-body">

                      <section>
                        <article>
                          <ul>
                            @foreach ($carts as $item)
                              <li>
                                  {{$item->featured_img}}
                                  Nombre: {{$item->name}} |
                                  Cantidad: {{$item->quantity}} |
                                  Precio: {{$item->price}} |
                                  sub-total: {{$item->price * $item->quantity}}

                                  <div class="">
                                    <a href="/delete/{{$item->id}}">  <img class="lista" src="img/icon/review.png" alt=""></a>
                                  </div>

                              </li>
                            @endforeach
                          </ul>

                        </article>

                        <p>Total: {{$total}}</p>
      {{-- <p>Total2: {{$total2}}</p> --}}
                        </section>
                      </div>

                    </div>
                </div>
            </div>
        </div>

@endsection
