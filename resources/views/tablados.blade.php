@extends('layout.main')
@section('content')
<div class="container">
  <div class="container1">
    <h1>Modulo de Pago</h1>
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link text-white" href="/empleados">Registro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="/tablados">Empleados</a>
      </li>
    </ul>
  </div>
  <h2 class="pt-4">Empleados</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Correo Electronico</th>
          <th>Fecha de Nacimiento</th>
          <th>Sexo</th>
          <th>CURP</th>
          <th>Horario</th>
          <th>Puesto</th>
          <th>Departamento</th>
          <th>Fecha de Ingreso</th>
          <th>Salario</th>
          <th>NSS</th>
          <th>RFC</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  <button type="button" class="btn btn-dark">Eliminar</button>
</div>
@endsection