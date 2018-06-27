<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      @section('title')
        Proyecto CRUD de maestros
      @show
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row py-3 text-center">
        @section('bienvenida')
          <h1 class="">Bienvenido al CRUD de maestros</h1>
        @show
      </div>
      <div class="row">
        <div class="col-10">
          @yield('content')
        </div>
        <div class="col-2">

            <div class="form-group">
              @section('menu')

                <a href="{{route('colegio.create')}}" class="form-control btn btn-info">Agregar Colegio</a>
                <a href="{{route('maestro.create')}}" class="form-control btn btn-info">Agregar Maestro</a>
                <a href="{{route('colegio.index')}}" class="form-control btn btn-info">Lista de Colegios</a>
                <a href="{{route('maestro.index')}}" class="form-control btn btn-info">Lista de Maestros</a>
              @show
            </div>

        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
