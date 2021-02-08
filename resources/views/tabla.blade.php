@extends('layout.main')
@section('content')
<div class="container">
  <div class="container1">
    <h1>Modulo de Pago</h1>
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link text-white" href="/pago">Registro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="/tabla">Pagos</a>
      </li>
    </ul>
  </div>
  <h2 class="pt-4">Empleados</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Numero de Cuentra</th>
        <th>Numero de Tarjeta</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Yosua&nbsp;Sanchez&nbsp; Cruz</td>
        <td>a3518110461@alumno.uttehuacan.edu.mx</td>
        <td>2381112233</td>
        <td>123456789123456789</td>
        <td>987654321987654321</td>
      </tr>
    </tbody>
  </table>
  <button type="button" class="btn btn-dark">Eliminar</button>
</div>






@endsection