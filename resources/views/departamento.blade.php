@extends('layout.main')

@section('content')
<div class="container">

<<<<<<< HEAD
      <div class="container1">
        <h1>Modulo Departamento</h1>
      </div>
      <div class="form__top pt-4">
        <h2>Area Laboral</h2>
      </div>		
        <form class="form__reg" action="">
  
          <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="Departamento">
            <br>
            <h2>Numero de trabajadores</h2>
            <input type="number" class="form-control" placeholder="Cantidad de trabajadores"> <br>       
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
        </tr>
      </thead>
      <tbody>

          <td>Cocina</td>

          <td>4</td>
      </tbody>
    </table>
    <button type="button" class="btn btn-dark">Eliminar</button>
=======
  <div class="container1">
    <h1>Modulo Departamento</h1>
  </div>
  <div class="form__top pt-4">
    <h2>Area Laboral</h2>
>>>>>>> 73b8da77334d3006f770ed3435ebfe064247c2d2
  </div>
  <form class="form__reg" action="/departamento" method="POST">
    @if($errors->isEmpty())

    @else
    <div class="alert alert-danger">
      @foreach($errors -> all() as $messages)
      <li>{{$messages}}</li>
      @endforeach
    </div>
    @endif
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

<<<<<<< HEAD
=======
<div class="container">
  <h2></h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Departamento</th>
        <th>Numero de empleados</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      @foreach($departamentos as $dep)
      <tr>
        <td>{{$dep->nombre_dep}}</td>
        <td>{{$dep->num_trab}}</td>
        <td><a href="/editDepartamento/{{$dep->id}}"><button type="button" class="btn btn-dark">Editar</button></a> 
        </td>
        <form method="POST" action="{{ url('/departamento/'.$dep->id) }}">
          @csrf
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <td><button type="submit" onclick="return confirm ('¿Eliminar?')" class="btn btn-danger">Eliminar</button></td>
        </form>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
>>>>>>> 73b8da77334d3006f770ed3435ebfe064247c2d2


@endsection