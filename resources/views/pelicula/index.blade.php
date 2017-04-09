@extends('layouts/app')


@section('content')

    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Lista de Peliculas</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                </tr>
                </thead>
                <tbody>
                @foreach($peliculas as $pelicula)
                    <tr>
                        <td>{{ $pelicula->titulo }}</td>
                        <td>{{ $pelicula->descripcion }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection