@extends('plantilla')

@section('principal')

<link rel="stylesheet" href=  "{{asset('css/register.css')}}"/>

  <div class="container-form-registro d-flex justify-content-end">
    <form class="form" action="" method="post" enctype="multipart/form-data">
      <h1>Registrate Acá!</h1>
      <div class="form-group row">
        <label for="input-nombre" class="form-label"></label>
        <div class="col-10 col-md-10 col-sm-10">
          <input type="text" class="form-control" id="input-nombre" name="nombre" value="" placeholder="Nombre" >
          <span class="error-form">  </span>
        </div>
      </div>
      <div class="form-group row">
        <label for="input-apellido" class="form-label"></label>
        <div class="col-10 col-md-10 col-sm-10">
          <input type="text" class="form-control" id="input-apellido" name="apellido" value="" placeholder="Apellido" >
          <span class="error-form"> </span>
        </div>
      </div>

      <fieldset class="form-group">
        <div class="row">
          <div class="col-10 col-sm-10">
            <div class="form-check-inline" style="padding-left: 50px;">
              <input type="radio" name="genero" value="F">
              <label class="genero-label" for="genero">
                Femenino
              </label>
            </div>
            <div class="form-check-inline">
              <input type="radio" name="genero" value="M">
              <label class="genero-label" for="genero">
                Masculino
              </label>
            </div>
          </div>
          <span class="error-form"> </span>
        </div>
      </fieldset>

      <div class="form-group row">
        <label for="inputEmail" class=""></label>
        <div class="col-10 col-md-10 col-sm-10">
          <input type="email" class="form-control" id="inputEmail" name="email" value="" placeholder="correo electrónico" >
          <span class="error-form"></span>
        </div>
      </div>


      <div class="calen-form-group row">
        <div class="calen-form col-10 col-md-3 col-sm-3">
          <select class="select col-12 col-sm-12 col-md-12" name ="calendario1">
            <option name ="calendario" value="">Dia</option>

              <option name ="calendario" value=""> </option>

              </select>
          </div>
          <div class="calen-form col-10 col-md-3 col-sm-3" name="calendario">
            <select class="select col-12 col-sm-12 col-md-12" name ="calendario2">
              <option name ="calendario" value=""> Mes </option>
                          <option name ="calendario" value="">  </option>
            </select>
          </div>
          <div class="calen-form col-10 col-md-3 col-sm-3" name="calendario">
            <select class="select col-12 col-sm-12 col-md-12"name ="calendario3">
                <option name ="calendario" value=""> Año</option>
              </select>
            </div>
            <span class="error-form"> </span>
          </div>

          <div class="form-group-file row">
            <div class="col-9 col-md-8 col-sm-8">
              <input type="file" name="foto" value="" class="custom-file-input" id="File">
              <label class="custom-file-label" for="customFile"><span > </span></label>

            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword" class=""></label>
            <div class="col-10 col-md-10 col-sm-10">
              <input type="password" name="contraseña" class="form-control" id="inputPassword" placeholder="Contraseña">
              <span class="error-form"> </span>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword" class=""></label>
            <div class="col-10 col-md-10 col-sm-10">
              <input type="password" name="confirmarContraseña" class="form-control" id="inputPassword2" placeholder="Repetir contraseña">
            </div>
          </div>

          <div class="botton-form-group row">
            <div class="col-9 col-md-11 col-sm-8">
              <button type="submit" class="col-md-8 btn btn-primary">Registrarme</button>
            </div>
          </div>

          <label>
            <div class="terminosycondiciones">
              <div class="col-9 col-md-10 col-sm-10">
                <input type="checkbox" class=" bb-checkbox ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-bb-field" name="terms" ng-model="$ctrl.form.terms" bb-bind-model-value="" bb-field="" >
                <span class="registerView-loginLink">
                  He leído y acepto todos los
                  <a class="registerView-termsAnchor" href="/terminos-y-condiciones/" target="_blank">términos y condiciones</a>
                  del sitio.
                </span>
                <br>
                <span class="error-form"> </span>
              </div>
            </div>
          </label>

          <div class="col-10 col-md-10 col-sm-10">
            <div class="ingreso-directo d-flex justify-content-center">
              <a class="" href="login.php">Ingresar</a>
              <span class="">¿Ya estás registrado?</span>
            </div>
          </div>
        </form>
      </div>

@endsection
