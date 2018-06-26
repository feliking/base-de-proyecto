@extends('layout')

@section('title')
  Nuevo Colegio
@endsection

@section('bienvenida')
  <h1 class="text-warning">Registrar Nuevo Colegio</h1>
@endsection

@section('content')
  @if ($errors->any())
    <div class="row">
      <div class="alert alert-warning">
        Ocurrio un error: Arregla los errores que aparecen
      </div>
    </div>
    {{--@foreach ($errors->all() as $error)
      <div class="row">
        {{$error}}
      </div>
    @endforeach--}}
  @endif
  <form action="{{route('colegio.store')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="">Nombre del colegio</label>
      <input type="text" class="form-control" name="nombre" placeholder="Introduzca el nombre del colegio" value="{{ old('nombre')}}">
      @if ($errors->has('nombre'))
        <div class="alert-danger">
          <small class="form-text text-muted">Debe llenar este campo de forma obligatoria</small>
        </div>
      @endif
    </div>
    <div class="form-group">
      <label for="">Distrito</label>
      <input type="text" class="form-control" name="distrito" placeholder="Introduzca el distrito" value="{{ old('distrito')}}">
    </div>
    <div class="form-group">
      <label for="">Direccion</label>
      <input type="text" class="form-control" name="direccion" placeholder="Introduzca la direccion" value="{{ old('direccion')}}">
    </div>
    <div class="form-group">
      <label for="">Capacidad</label>
      <input type="number" class="form-control" name="capacidad" placeholder="Introduzca la capacidad" value="{{ old('capacidad')}}">
    </div>
    <div class="form-group">
      <input type="submit" class="form-control btn btn-info" value="Agregar Colegio">
    </div>
  </form>
@endsection
