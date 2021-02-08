@extends('layout.main')

@section('content')
  <div class="container">
    <div class="">
      <div class="container1">
        <h1>Modulo Descuentos</h1>
      </div>
      <div class="">
        <div class="form__top pt-4">
          <h2>Descuento</h2>
        </div>
        <form class="form__reg" action="">

          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Ingresar Descuento">
              <br>
              <div class="row">
                <div class="col">


                  <br>

                  <input class="btn btn-outline-info" type="submit" value="REGISTRAR">&nbsp;&nbsp;
                  <input class="btn btn-outline-danger" type="reset" value="LIMPIAR">
                  <button type="button" class="btn btn-danger">Eliminar</button>
                </div>
        </form>
      </div>
    </div>

    <br><br><br>

    <div class="col-6">
      <div class="container">
        <h2></h2>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Codigo</th>
              <th>Descripcion</th>
              <th>Valor Aproximado</th>
            </tr>
          </thead>
          <tbody>

            <td>123</td>
            <td>Retardo</td>

            <td>$100</td>
          </tbody>
        </table>
      </div>

    </div>
  </div>
@endsection
  