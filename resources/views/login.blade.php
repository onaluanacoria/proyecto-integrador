@extends('plantilla')

@section('principal')
  <div class="container d-flex justify-content-center">

    <form class="form" action="" method="post" enctype="multipart/form-data">
    <fieldset>
      <h1 class="titulo col-md-10" style="padding-left: 25%;"> Ingresa!</h1>
    <div class="form-group col-md-12">
      <label for="InputEmail"></label>
      <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Email" name="email" value="">
    </div>
    <div class="form-group col-md-12">
      <label for="Password1"></label>
      <input type="password" class="form-control" id="Password1" placeholder="Password"name="contraseña" value="">
    </div>
    <div class="form-group form-check col-md-12">
      <input type="checkbox" name="recordar" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1" style="left: 30px;">Recordarme</label>
    </div>
    <button type="submit" class="btn btn-primary col-md-12">Ingresar</button>
      <div class="registro col-md-12">
    <a class="" href="register.php">Registrate</a>
      <span class="">¿No estas Registrado?</span>
    </div>

    <div class="recuperar-contraseña col-md-12">
    <a class="" href="/registro.php"> Olvidé mi contraseña</a>
    </div>

  </section>
    </fieldset>
  </form>
  </div>


@endsection
