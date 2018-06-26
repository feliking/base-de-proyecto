@extends('layout')
@section('title')
  Colegios Registrados
@endsection
@section('bienvenida')
  <h1 class="text-center text-warning">Colegios registrados</h1>
@endsection
@section('content')
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>NRO</th>
        <th>Nombre</th>
        <th>Distrito</th>
        <th>Direccion</th>
        <th>Capacidad</th>
      </tr>
    </thead>
    <tbody>
      @foreach($colegios as $colegio)
        @php
          $count++;
        @endphp
        <tr>
          <th>{{$count}}</th>
          <th>{{$colegio->nombre}}</th>
          <th>{{$colegio->distrito}}</th>
          <th>{{$colegio->direccion}}</th>
          <th>{{$colegio->capacidad}} Estudiantes</th>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
