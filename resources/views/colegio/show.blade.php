@extends('layout')

@section('title')
  Colegio: {{$colegio->id}}
@endsection

@section('bienvenida')
  <h1 class="text-danger">Datos del colegio "{{$colegio->nombre}}"</h1>
@endsection

@section('content')
  <ul class="list-group">
    <li class="list-group-item">Nombre del colegio: {{$colegio->nombre}} </li>
    <li class="list-group-item">Distrito: {{$colegio->distrito}}</li>
    <li class="list-group-item">Direccion: {{$colegio->direccion}}</li>
    <li class="list-group-item">Capacidad: {{$colegio->capacidad}} Estudiantes</li>
  </ul>
@endsection

@section('menu')
  @parent
  <a href="{{route('maestro.index')}}" class="btn btn-danger">Volver atras</a>
@endsection
