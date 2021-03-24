@extends('layout.main')

@section('content')
<div class="container">
  <div class="container1 ">
    <h1>Modulo de Asistencias de Empleados</h1>
  </div>


  <form action="" class="form-inline pt-4">

    <div class="form-group d-flex">

      <input type="number" class="form-control" placeholder="Ingrese número de empleado">
      <button type="submit" class="btn btn-dark ml-auto">Buscar</button>
    </div>

</div>

</form>
<br>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

<div class="container">
  <table id="asistencias" class="table table-bordered" style="width:100%">
    <thead>
      <tr>
        <th></th>
        <th>Title 1</th>
        <th>Title 2</th>
        <th>Title 3</th>
        <th>Title 4</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2"></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th>4</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <th>5</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <th>6</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <th>7</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <th>8</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>


    </tbody>
  </table>


  <button type="submit" class="btn btn-primary">GENERAR +</button>
</div>
@endsection