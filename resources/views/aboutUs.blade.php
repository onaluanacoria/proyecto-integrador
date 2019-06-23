@extends('plantilla')
@section('principal')
      <h1>About Us</h1>
    <h2>Integrantes del equipo</h2>

    <ul>
      <li>
        @foreach ($equipo as $equipo)
        <a href="{{route('aboutUs', $equipo)}}">{{$equipo}}</a>
        @endforeach

        @if (!empty ($nombre));
          <p>La variable existe</p>

    //es necesario para que en caso de que no se pase un parámetro, no pase nada.



        @endif
      </li>
    </ul>



@endsection
