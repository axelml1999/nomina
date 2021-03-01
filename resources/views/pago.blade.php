@extends('layout.main')
@section('content')
<div class="container">
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
  <form class="form__reg" action="/pago" method="POST">
@csrf
    <div class="row">
      @foreach($errors->all() as $message)
      @if($errors->any())
      <div class="alert alert-danger">
          <li>{{$message}}</li>
          </div>
      @endif
      @endforeach
      <div class="col">
        <h5>Nombre</h5>
        <input type="text" class="form-control" placeholder="Nombre" name="nombre_empleado" autocomplete="off" required>
        <br>
        <h5>Correo Electronico</h5>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="@hotmail.com" name="correo" required="email" autocomplete="off">
        <br>
        <h5>Telefono</h5>
        <input type="text" class="form-control" placeholder="Telefono" name="telefono" maxlength="10" autocomplete="off" required>
        <br>
        <h5>Numero de Cuenta</h5>
        <input type="text" class="form-control" placeholder="Numero de Cuenta" name="num_cuenta" maxlength="20" autocomplete="off" required>
        <br>
        <h5>Numero de Tarjeta</h5>
        <input type="text" class="form-control" placeholder="Numero de Tarjeta" name="num_tarjeta" maxlength="16" autocomplete="off" required>
        <br>
        <input class="btn btn-outline-info" type="submit" value="REGISTRAR">&nbsp;&nbsp;
        <input class="btn btn-outline-danger" type="reset" value="LIMPIAR">
      </div>
  </form>
</div>


@endsection