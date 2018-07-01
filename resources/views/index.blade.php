@extends('layout')

@section('title')
  Bienvenido
@endsection

@section('bienvenida')
  <h1 class="text-danger"><p class="text-center">Bienvenido al CRUD de maestros</p></h1>
@endsection

@section('content')
  <h2>Esta Aplicacion: </h2>
  <ul>
    <li>Crea</li>
    <li>Muestra</li>
    <li>Edita</li>
    <li>Elimina</li>
  </ul>
  <h2>Registros de maestros y colegios</h2>
@endsection
