@extends('layout')

@section('title')
  Nuevo Maestro
@endsection

@section('bienvenida')
  <h1 class="text-warning">Registrar Nuevo Maestro</h1>
@endsection

@section('content')
  @if ($errors->any())
    <div class="row">
      <div class="alert alert-warning">
        Ocurrio un error: Arregla los errores que aparecen debajo
      </div>
    </div>
  @endif
  <form action="{{route('maestro.store')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="">Carnet de identidad del maestro</label>
      <input type="text" class="form-control" name="ci" placeholder="Introduzca el carnet de identidad" value="{{ old('ci')}}">
      @if ($errors->has('ci'))
        <div class="alert-danger">
          Debe llenar este campo de forma obligatoria y no debe repetirse
        </div>
      @endif
    </div>
    <div class="form-group">
      <label for="">Nombre del maestro</label>
      <input type="text" class="form-control" name="nombre" placeholder="Introduzca nombre del maestro" value="{{ old('nombre')}}">
    </div>
    <div class="form-group">
      <label for="">Direccion</label>
      <select class="form-control" name="colegio_id">
        <option disabled selected>
          @if (old('colegio_id'))
            @php
              $pre = $colegios->find(old('colegio_id'));
            @endphp
            {{$pre->nombre}}
          @else
            Seleccione el colegio
          @endif
        </option>
        @foreach ($colegios as $colegio)
          <option value="{{$colegio->id}}">{{$colegio->nombre}}</option>
        @endforeach
      </select>
    </div>
    @if ($errors->has('colegio_id'))
      <div class="alert-danger">
        Debe seleccionar un colegio
      </div>
    @endif
    <div class="form-group">
      <label for="">Materia</label>
      <input type="text" class="form-control" name="materia" placeholder="Introduzca la materia que dicta" value="{{ old('materia')}}">
    </div>
    <div class="form-group">
      <label for="">Años de experiencia</label>
      <input type="text" class="form-control" name="experiencia" placeholder="Introduzca la cantidad de años de experiencia" value="{{ old('experiencia')}}">
    </div>
    <div class="form-group">
      <input type="submit" class="form-control btn btn-info" value="Agregar Maestro">
    </div>
  </form>
@endsection
