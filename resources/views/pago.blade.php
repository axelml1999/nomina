@extends('layout.main')
@section('content')
<div class="container pt-5">
  <div class="container1">
    <h1>Modulo de Pago</h1>
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="/pago">Registro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/tabla">Pagos</a>
      </li>
    </ul>
  </div>
  <div class="form__top pt-4">
    <h2>Formulario <span>Registro</span></h2>
  </div>
  <form class="form__reg" action="">

    <div class="row">
      <div class="col">
        <h5>Nombre</h5>
        <input type="text" class="form-control" placeholder="Nombre">
        <br>
        <h5>Correo Electronico</h5>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="@hotmail.com">
        <br>
        <h5>Telefono</h5>
        <input type="text" class="form-control" placeholder="Telefono">
        <br>
        <h5>Numero de Cuenta</h5>
        <input type="text" class="form-control" placeholder="Numero de Cuenta">
        <br>
        <h5>Numero de Tarjeta</h5>
        <input type="text" class="form-control" placeholder="Numero de Tarjeta">
        <br>
        <input class="btn btn-outline-info" type="submit" value="REGISTRAR">&nbsp;&nbsp;
        <input class="btn btn-outline-danger" type="reset" value="LIMPIAR">
      </div>
  </form>
</div>


@endsection