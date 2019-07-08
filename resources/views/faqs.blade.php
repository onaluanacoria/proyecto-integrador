@extends('plantilla')

@section('principal')

<link rel="stylesheet" href=  "{{asset('css/faqs.css')}}"/>


  <div class="container">

    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            ¿Cómo hago una reserva?
            </button>
          </h2>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            Una vez que te decidas el tipo de experiencia que queres vivir o regalar, canjea el código y ya estas listo para comunicarte con el lugar elegido, y así convenir la fecha para tu reserva, no te olvides de informar tu código. Los datos de contacto de cada lugar los encontras en el catalogo online.
          </div>
        </div>
      </div>


      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              ¿Cómo veo el catalogo nuevamente?
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            Primero no te olvides de <strong>verificar que estes logueado con el usuario con el que abriste tu cuenta </strong>, en caso que ese paso este bien, entrá al home (desde aquí la encontras en la barra de navegación superior), e ingresá a la sección categorias, donde vas a encontrar todas las opciones disponibles. Si no estas logueado deberas hacerlo nuevamente.
          </div>
        </div>
      </div>


      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              ¿Puedo hacer cambios en los mismos puntos de venta?
            </button>
          </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            Los cambios de código unicamente se realizan via web, <strong> no es posible hacerlo en los puntos de venta</strong>.
            Si tu código esta vigente, y fuiste beneficiario de una experiencia! debes dirigirte a tu usuario (en "regalos recibidos") y podrás efectuar el cambio, si es mas de uno comunicate via e-mail con nosotros que te indicaremos los pasos a seguir.
          </div>
        </div>
      </div>


        <div class="card">
          <div class="card-header" id="headingFour">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Si no puedo asistir al evento, ¿debo cancelar la reserva efectuada?
              </button>
            </h2>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
              <strong>Si</strong>, debes hacerlo con el prestador de servicios lo antes posible, dependiendo de los mismos las formas y condiciones para hacerlo, conviene interiorizarse de las mismas al momento de la reserva.
          </div>
        </div>
      </div>


          <div class="card">
            <div class="card-header" id="headingFive">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  ¿Tiene vencimiento mi código de <em>GiftCompany</em>?
                </button>
              </h2>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
              <div class="card-body">
              <strong>Sí</strong>, podes encontrarlo en el e-mail enviado al hacer la reserva.
            </div>
          </div>
        </div>


          <div class="card">
            <div class="card-header" id="headingSix">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  ¿El mismo día que vence puedo usar mi reserva?
                </button>
              </h2>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
              <div class="card-body">
              Sí, el único requisito es hacer la reserva con el lugar, <strong>pasada la fecha de vencimiento queda inhabilitado el <em>GiftCompany</em> </strong>y tendrás que activarlo nuevamente.
            </div>
          </div>
          </div>


          <div class="card">
            <div class="card-header" id="headingSeven">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                  ¿Puedo usar el código <em>GiftCompany</em> más de una vez?
                </button>
              </h2>
            </div>
            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
              <div class="card-body">
            No es posible, cada código puede ser canjeado solo una vez.
            </div>
          </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingEight">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                  ¿Hay límite de personas por código <em> GiftCompany</em>?
                </button>
              </h2>
            </div>
            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
              <div class="card-body">
            En cada código canjeado, se especifica, el límite mínimo y máximo de asistentes. En caso de querer agregar algun miembro que no esta especificado en la reserva, <strong>deberas comunicarte con el lugar 48 hs antes de la fecha original reservada </strong>(el lugar se reserva el derecho de aumentar o no el cupo).
            </div>
          </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingNine">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                  ¿En caso de regalar mi <em> GiftCompany</em>, el agasajado tiene que abonar algo más?
                </button>
              </h2>
            </div>
            <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
              <div class="card-body">
            Todo lo que figure en el catalogo online, esta incluido en el código. En caso de querer ampliar sus experiencias, y utilizar servicios que no esten especificados en la reserva, deberá arreglar con el prestador el costo adicional de lo que quiera agregar o hacerlo de forma online hasta 48hs antes.
            </div>
          </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingTen">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                  ¿Puedo llevar mascotas?
                </button>
              </h2>
            </div>
            <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
              <div class="card-body">
            Sólo si especifica expresamente en el catalogo online, con la etiqueta <mark> "pet friendly"</mark>, en caso de no hacerlo,<strong> esta prohibido llevar mascotas al lugar</strong>, quedando inhabilitada la reserva en caso de hacerlo.
            </div>
          </div>
          </div>
    </div>
  </div>


@endsection
