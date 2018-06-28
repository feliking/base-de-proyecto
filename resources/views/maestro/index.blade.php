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
        <th></th>
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
          <th><a href="{{route('maestro.edit', ['maestro' => $maestro])}}"><i class="fa fa-edit"></i></a>
            <form action="{{route('maestro.destroy', ['maestro' => $maestro])}}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit">Eliminar</button>
            </form>
          </th>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
