@extends('layout')

@section('title')
  Maestros Registrados
@endsection

@section('bienvenida')
  <h1 class="text-warning">Maestros registrados</h1>
@endsection

@section('content')
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>NRO</th>
        <th>Carnet de identidad</th>
        <th>Nombre</th>
        <th>Colegio</th>
        <th>Materia</th>
        <th>Anos de experiencia</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($maestros as $maestro)
        @php
          $count++;
        @endphp
        <tr>
          <th>{{$count}}</th>
          <th>{{$maestro->ci}}</th>
          <th>{{$maestro->nombre}}</th>
          <th><a href="{{route('colegio.show', ['id' => $maestro->colegio->id])}}">{{$maestro->colegio->nombre}}</a></th>
          <th>{{$maestro->materia}}</th>
          <th>{{$maestro->experiencia}}</th>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
