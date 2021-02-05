@extends('layout.main')
@section('content')
  <div class="container pt-5">
    <div class="container1">
      <h1>Modulo de ingeso para Nuevos horarios</h1>
    </div>
    <div class="form__top pt-4">
      <h2>Hora de entrada</h2>
    </div>
    <form class="form__reg" action="">

      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Ingresar Hora">
          <br>
          <div class="row">
            <div class="col">
              <h2>Hora de salida</h2>
              <input type="text" class="form-control" placeholder="Ingresar Hora">
              <br>
              <h2>Turno</h2>
              <input type="text" class="form-control" placeholder="Ingresar Turno"> <br>
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
          <th>Hora de entrada</th>
          <th>Hora de salida</th>
          <th>Turno</th>
        </tr>
      </thead>
      <tbody>

        <td>8:00 am</td>
        <td>2:00 pm</td>

        <td>Matutino</td>
      </tbody>
    </table>
  </div>


  <button type="button" class="btn btn-danger">Eliminar</button>
@endsection