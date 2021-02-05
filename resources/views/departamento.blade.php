@extends('layout.main')

@section('content')
    <div class="container pt-5">

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
  </div>


  <button type="button" class="btn btn-dark">Eliminar</button>


@endsection