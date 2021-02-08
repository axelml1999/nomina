@extends('layout.main')

@section('content')
    <div class="container">
      <div class="container1">
        <h1>Modulo Cargo</h1>
      </div>
      <div class="form__top pt-4">
        <h2>Cargo</h2>
      </div>		
        <form class="form__reg" action="">
  
          <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="Ingresar Cargo">
            <br>
            <h2>Empleado</h2>
            <input type="text" class="form-control" placeholder="Ingresar Empleado"><br>
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
          <th>Cargo</th>
          <th>Empleado</th>
        </tr>
      </thead>
      <tbody>

          <td>Gerente</td>

          <td>Yosua&nbsp;Sanchez&nbsp; Cruz</td>
      </tbody>
    </table>
  </div>


  <button type="button" class="btn btn-dark">Eliminar</button>
@endsection