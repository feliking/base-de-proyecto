@extends('layout')

@section('title')
  Error - 404
@endsection

@section('bienvenida')
  <h1 class="text-danger">!!!!Error 404!!!</h1>
@endsection

@section('content')
  <h1>Pagina no encontrada</h1>
@endsection

@section('menu')
  <a href="{{route('index')}}" class="btn btn-danger">Volver a la pagina principal</a>
@endsection
