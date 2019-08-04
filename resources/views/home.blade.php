@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Productos
                  @can ('gifts.create')
                    <a href="{{ route ('gifts.create')}}"
                    class="btn btn-sm btn-primary pull-right">
                    Crear
                  </a>
                  @endcan

                </div>
                <div class="card-body">
                  <table class="table table-striped table-hover">

                  <thead>
                    <tr>
                      <th with="10px"> ID </th>
                      <th> Nombre </th>
                      <th colspan="3"> &nbsp;</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($products as $product)
                      <tr>
                        <td>{{ $product->id}}</td>
                        <td>{{ $product->name}}</td>

                      </tr>

                    @endforeach
                  </tbody>

                  </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
