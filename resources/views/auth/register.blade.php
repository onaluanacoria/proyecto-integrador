@extends('layouts.app')

<link rel="stylesheet" href=  "{{asset('css/register.css')}}"/>
<link href="{{ asset('css/footer.css') }}" rel="stylesheet">

@section('content')
<div class="container">
    <div class="row justify-content-end">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                      <h1>Registrate Acá</h1>
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="Last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de nacimiento') }}</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="birth_year" value="{{ old('date') }}" required autocomplete="date">

                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <label>
                            <div class="form-group terminosycondiciones">
                                <div class="col-9 col-md-10 col-sm-10">
                                    <input type="checkbox" class="" name="terms" required>
                                        <span class="terms">
                                            He leído y acepto todos los
                                          <a class="termnsandcondition" href="/terminos-y-condiciones/" target="_blank">términos y condiciones</a> del sitio.
                                        </span>
                              </div>
                          </div>
                      </label>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrate') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="col-12 col-md-12 col-sm-12 ingreso-directo">
                      <div class=" d-flex justify-content-center">
                        <a class="" href="login">Ingresar</a>
                        <span class="">¿Ya estás registrado?</span>
                      </div>
                    </div>
                </div>
            </div>
        </div>
          <div class="col-md-6 fondo-register"> </div>
    </div>
</div>
<div class="container-fluid footer">
  <footer class="site-footer">
        <div class="row">
      <div class="footer-about col-ls-4 col-md-4">
          <h3> About<span> GiftCompany </span></h3>
            <p> Regalá Experiencias, porque los mejores regalos no son cosas, son momentos.</p>
      </div>
      <div class="medios-pago col-ls-4 col-md-4">
          <h3>Medios de <span>Pago</span></h3>
          <ul>
            <li><i class="fab fa-cc-mastercard"></i> <i class="fab fa-cc-visa"></i> <i class="fab fa-cc-amex"></i> <i class="fab fa-cc-paypal"></i></li>
          </ul>
      </div>
      <div class="menu col-ls-4 col-md-4">
        <h3>Redes <span>sociales</span></h3>
          <div class="redes">
            <ul>
            <li class="list-inline-item"><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
            <li class="list-inline-item"><a href="https://twitter.com" target="_blank"><i class="fab fa-twitter-square"></i> </a></li>
            <li class="list-inline-item"><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i> </a></li>
            <li class="list-inline-item"><a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i>  </a></li>
          </ul>
          </div>
      </div>

</div>
</div>
<p class="copyrights">Copyright &copy Todos los derechos reservados GiftCompany- 2019</p>
</footer>
@endsection
