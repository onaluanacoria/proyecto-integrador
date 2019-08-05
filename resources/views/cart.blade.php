@extends('plantilla')
@section('principal')

  @section("titulo")
    Mi carrito
  @endsection

<link rel="stylesheet" href=  "{{asset('css/index.css')}}"/>


  <div class="container cart">
      <div class="row justify-content-center">
          <div class="col-md-6">

              <div class="carts">
                  <div class="buygift">
                      <h1> Mi carrito<img class="lista" src="img/icon/tranvia.png" alt=""></h1>
                          <table>
                              <tr>
                                <th scope="col">Regalo</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Subtotal</th>
                                <th scope="col"></th>
                              </tr>
                              <tr>
                                @forelse($cart as $item)
                                      <td>{{$item->name}} </td>
                                      <td>{{$item->price}}</td>
                                      <td>  {{$item->quantity}}</td>
                                      <td> {{$item->price * $item->quantity}}</td>
                                      <td>  <a href="/delete/{{$item->id}}">  <img class="lista" src="img/icon/cancel.png" alt=""></a></td>
                              </tr>
                                @empty
                                <div class="emty-cart">
                                  <p>"No añadiste ningún producto"</p>
                                </div>
                              @endforelse

                                <tr class="total">
                                  @if($total != '')
                                    <th scope="row">TOTAL</th>
                                        <td>-</td>
                                        <td></td>
                                      <td><strong>{{ $total }}</strong></td>
                                    </tr>
                                  @endif

                          </table>
                      </div>

                    </div>
                </div>
            </div>
        </div>

@endsection
