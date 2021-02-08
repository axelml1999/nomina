@extends('layout.main')

@section('content')
<div class="container">
  <div class="container1">
    <h1>Modulo de Empleados</h1>
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="/empleados">Registro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/tablados">Empleados</a>
      </li>
    </ul>
  </div>
  <div class="form__top pt-4">
    <h2>Ingresar Datos</h2>
  </div>
  <form class="form__reg" action="">

    <div class="row">
      <div class="col">
        <h4>Nombre(s)</h4>
        <input type="text" class="form-control" placeholder="Nombre(s)">
        <br>
        <h4>Apellido paterno</h4>
        <input type="text" class="form-control" placeholder="Apellido Paterno">
        <br>
        <h4>Apellido Marterno</h4>
        <input type="text" class="form-control" placeholder="Apellido Marterno">
        <br>
        <h4>Fecha de Nacimiento</h4>
        <input type="text" class="form-control" placeholder="Fecha de nacimiento">
        <br>
        <h4>Sexo</h4>
        <div class="form-group col-md-4">
          <select id="inputState" class="form-control">
            <option selected>Sexo...</option>
            <option value="1">Hombre</option>
            <option value="2">Mujer</option>
          </select>
        </div>
        <br>
        <h4>CURP</h4>
        <input type="text" class="form-control" placeholder="curp">
        <br>
        <h4>Horario</h4>
        <input type="text" class="form-control" placeholder="Horario">
        <br>

        <div class="row">
          <div class="col pb-5">


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
    <form class="form__reg" action="">

      <div class="row">
        <div class="col">

          <h4>Puesto</h4>
          <input type="text" class="form-control" placeholder="Puesto">
          <br>
          <h4>Departamento</h4>
          <input type="text" class="form-control" placeholder="Departamento">
          <br>
          <h4>Fecha de Ingreso</h4>
          <input type="text" class="form-control" placeholder="">
          <br>
          <h4>Salario</h4>
          <input type="text" class="form-control" placeholder="">
          <br>
          <h4>NSS</h4>
          <input type="text" class="form-control" placeholder="Numero de Seguro Social">
          <br>
          <h4>RFC</h4>
          <input type="text" class="form-control" placeholder="Registro Federal de Contribuyentes">
          <br>
          <div class="row">
            <div class="col">
    </form>
  </div>
</div>
</div>


@endsection