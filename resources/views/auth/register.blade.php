@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

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
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

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

                            <div class="col-md-6">
                              <input id="gender" type="radio" class="form-control @error('gender') is-invalid @enderror" name="gender" value="F" required autofocus>
                              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Femenino') }}</label>


                              <input id="gender" type="radio" class="form-control @error('gender') is-invalid @enderror" name="gender" value="M" required autofocus>
                              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Masculino') }}</label>
                            </div>
                        </div>

                        <div class="calen-form-group row">
                          <div class="calen-form col-10 col-md-3 col-sm-3">
                            <select class="select col-12 col-sm-12 col-md-12" name ="calendario1">
                              <option name ="calendario" value="">Dia</option>
                           </select>
                          </div>

                            <div class="calen-form col-10 col-md-3 col-sm-3" name="calendario">
                              <select class="select col-12 col-sm-12 col-md-12" name ="calendario2">
                                <option name ="calendario" value=""> Mes </option>
                              </select>
                            </div>

                            <div class="calen-form col-10 col-md-3 col-sm-3" name="calendario">
                              <select class="select col-12 col-sm-12 col-md-12"name ="calendario3">
                                <option name ="calendario" value=""> Año </option>
                              </select>
                            </div>

                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

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
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <label>
                      <div class="terminosycondiciones">
                        <div class="col-9 col-md-10 col-sm-10">
                          <input type="checkbox" class=" bb-checkbox ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-bb-field" name="terms" ng-model="$ctrl.form.terms" bb-bind-model-value="" bb-field="" >
                          <span class="registerView-loginLink">
                            He leído y acepto todos los
                            <a class="registerView-termsAnchor" href="/terminos-y-condiciones/" target="_blank">términos y condiciones</a>
                            del sitio.
                          </span>
                        </div>
                      </div>
                    </label>
                    <div class="col-10 col-md-10 col-sm-10">
                      <div class="ingreso-directo d-flex justify-content-center">
                        <a class="" href="login">Ingresar</a>
                        <span class="">¿Ya estás registrado?</span>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
