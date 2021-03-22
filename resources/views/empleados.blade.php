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
  <div>
    <h2>Ingresar Datos</h2>
  </div>
  <form action="/empleados" method="POST" class="form__reg">
    @csrf
    <div class="row">
      <div class="col-6">
        <h4>Nombre(s)</h4>
        <input type="text" class="form-control" placeholder="Nombre(s)" name="nombre">
        <br>
        <h4>Apellido paterno</h4>
        <input type="text" class="form-control" placeholder="Apellido Paterno" name="apellido_paterno">
        <br>
        <h4>Apellido Marterno</h4>
        <input type="text" class="form-control" placeholder="Apellido Marterno" name="apellido_materno">
        <br>
        <h4>CURP</h4>
        <input type="text" class="form-control" placeholder="curp" name="curp">
        <br>
        <h4>Dirección</h4>
        <input type="text" class="form-control" placeholder="Dirección" name="direccion">
        <br>
        <h4>Salario</h4>
        <input type="text" class="form-control" placeholder="Salario" name="salario">
        <br>
      </div>
      <div class="col-6">
        <h4>turno</h4>
        <select name="turno_id" class="form-control">
          @foreach ($turnos as $turno)
              <option value="{{ $turno['id'] }}">{{ $turno['nombre_turno'] }}</option>
          @endforeach
        </select>
        <br> 
        <h4>Fecha de nacimiento</h4>
        <input type="text" class="form-control" placeholder="fecha_nacimiento" name="fecha_nacimiento">
        <br>
        <h4>Cargo</h4>
        <select name="cargo_id" class="form-control"  >
          @foreach ($cargos as $cargo)
              <option value="{{ $cargo['id'] }}">{{ $cargo['nombre_cargo'] }}</option>
          @endforeach
        </select>
        <br>
        <h4>Departamento</h4>
        <select name="departamento_id" class="form-control"  >
          @foreach ($departamentos as $departamento)
              <option value="{{ $departamento['id'] }}">{{ $departamento['nombre_dep'] }}</option>
          @endforeach
        </select>
        {{-- <input type="text" class="form-control" placeholder="departamento_id" name="departamento_id"> --}}
        <br>
        <h4>Sexo</h4>
        <select name="sexo_id" class="form-control"  >
          @foreach ($sexos as $sexo)
              <option value="{{ $sexo['id'] }}">{{ $sexo['tipo_sexo'] }}</option>
          @endforeach
        </select>
        <br>
        <h4>Pago</h4>
        <select name="pago_id" class="form-control"  >
          @foreach ($pagos as $pago)
              <option value="{{ $pago['id'] }}">{{ $pago['num_tarjeta'] }}</option>
          @endforeach
        </select>
        {{-- <input type="text" class="form-control" placeholder="pago_id" name="pago_id"> --}}
        <br>
        
      </div>
      <br> 
    </div>
    <div class="col-12">
      @foreach ($errors->all() as $message)
        @if ($errors->any())
          <div class="alert alert-danger">
          {{$message}}
          </div>
        @endif
      @endforeach
    </div>
    <div>
      <br>
      <button type="submit" class="btn btn-primary right action_submit">Crear empleado</button>
      <input class="btn btn-outline-danger" type="reset" value="LIMPIAR"> 
    </div>
  </form>
  <br><br><br>
</div>
@endsection