@extends('plantilla')
@section('principal')

  @section("titulo")
    Mi carrito
  @endsection

<link rel="stylesheet" href=  "{{asset('css/index.css')}}"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js">

</script>

  <div class="container cart">
      <div class="row justify-content-center">
          <div class="col-md-6">

              <div class="carts">
                  <div class="buygift">
                      <h1> Mi carrito<img class="lista" src="img/icon/tranvia.png" alt=""></h1>
                          <table class="tableGifts">
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

                          <input id="buyButton" type="submit" name="" value="Comprar" >

                    </div>
                </div>
            </div>
        </div>
<script>
            window.onload = function () {
              var buyGift = document.querySelector('input#buyButton')
              buyGift.addEventListener('click',function(){
              $(".tableGifts").remove();
              alert("Felicitaciones por su compra, por correo le enviaremos las instrucciones para adquirir su regalo!!")
              setTimeout("location.href = '/'",1200);
            });
            }


</script>
@endsection
