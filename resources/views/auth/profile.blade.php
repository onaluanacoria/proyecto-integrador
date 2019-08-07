@extends('layouts.app')

@section('content')

<link rel="stylesheet" href=  "{{asset('css/register.css')}}"/>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body profile">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                  <h1 class="profile">Mi perfil<img class="user" src="img/icon/login.png" alt=""> </h1>
                                    @if ($errors->any())
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>
                                                        {{ $error }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="profile_image">
                                          @if (auth()->user()->image)
                                          <img src="{{ asset(auth()->user()->image) }}" style="width: 221px; height: 207px; border-radius: 50%;">
                                          @else
                                          <img src="img/icon/imgDefault.jpg" alt="" style="width: 221px; height: 207px; border-radius: 50%;">
                                        @endif
                                    </div>
                                    <form action="{{ route('profile.update') }}" method="POST" role="form" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group profile row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control profile" name="name" value="{{ old('name', auth()->user()->name) }}">
                                            </div>
                                        </div>

                                        <div class="form-group profile row">
                                            <label for="last_name" class="col-md-4 col-form-label text-md-right">Apellido</label>
                                            <div class="col-md-6">
                                                <input id="last_name" type="text" class="form-control profile" name="last_name" value="{{ old('last_name', auth()->user()->last_name) }}">
                                            </div>
                                        </div>
                                        <div class="form-group profile row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                            <div class="col-md-6">
                                                <input id="email" type="text" class="form-control profile" name="email" value="{{ old('email', auth()->user()->email) }}" disabled>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group profile row">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">Imagen de Perfil</label>
                                            <div class="col-md-6">
                                                <input id="profile_image" type="file" class="form-control profile" name="profile_image">
                                                @if (auth()->user()->image)
                                                    <code>{{ auth()->user()->image }}</code>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0 mt-1">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary profile">Actualizar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
  var contenido = document.querySelector('#provincias')
  function provincias() {
    fetch('https://dev.digitalhouse.com/api/getCursos')
    .then(response => response.json())
    .then(data =>{
      console.log(data)
    })
  }
</script>
@endsection
