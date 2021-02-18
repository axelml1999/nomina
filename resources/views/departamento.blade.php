@extends('layout.main')

@section('content')
    <div class="container">

      <div class="container1">
        <h1>Modulo Departamento</h1>
      </div>
      <div class="form__top pt-4">
        <h2>Area Laboral</h2>
      </div>		
        <form class="form__reg" action="/departamento" method="POST">
          @csrf
          <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="Departamento" name="nombre_dep">
            <br>
            <h2>Numero de trabajadores</h2>
            <input type="number" class="form-control" placeholder="Cantidad de trabajadores" name="num_trab"> <br>       
            <input class="btn btn-outline-info" type="submit" value="REGISTRAR">&nbsp;&nbsp;
            <input class="btn btn-outline-danger" type="reset" value="LIMPIAR">
          </div>         
      </form>
    </div>
      <br><br><br>

      <div class="container">
    <h2></h2>          
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Departamento</th>
          <th>Numero de empleados</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($departamentos as $dep)
          <tr>
            <td>{{$dep->nombre_dep}}</td>
            <td>{{$dep->num_trab}}</td>
            <td><button type="button" class="btn btn-dark">Editar</button>
            <button type="button" class="btn btn-danger">Eliminar</button></td>
          </tr>
        @endforeach  
      </tbody>
    </table>
  </div>


@endsection