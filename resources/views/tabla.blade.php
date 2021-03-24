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
  <table id="pagos" class="table table-bordered" style="width:100%">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Numero de Cuentra</th>
        <th>Numero de Tarjeta</th>
        <th>Acción</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pagos as $pago)
      <tr>
        <td>{{ $pago->nombre_empleado }}</td>
        <td>{{ $pago->correo }}</td>
        <td>{{ $pago->telefono }}</td>
        <td>{{ $pago->num_cuenta }}</td>
        <td>{{ $pago->num_tarjeta }}</td>
        <td><a href="/delete/{{ $pago->id }}" type="button" class="btn btn-dark">Eliminar</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>






@endsection