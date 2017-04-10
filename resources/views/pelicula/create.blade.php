@extends('layouts/app')


@section('content')

    <form method="post" action="{{ route('peliculas.store') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
            <label for="titulo" class="control-label">Titulo</label>
            <input type="text" name="titulo" value="{{ old('titulo') }}" class="form-control" id="titulo">
            @if ($errors->has('titulo'))
                <span class="help-block">
                    <strong>{{ $errors->first('titulo') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
            <label for="descripcion" class="control-label">Descripcion</label>
            <input type="text" name="descripcion" value="{{ old('descripcion') }}" class="form-control" id="descripcion">
            @if ($errors->has('descripcion'))
                <span class="help-block">
                    <strong>{{ $errors->first('descripcion') }}</strong>
                </span>
            @endif
        </div>
        <button type="submit" class="btn btn-default">Agregar</button>
    </form>


@endsection