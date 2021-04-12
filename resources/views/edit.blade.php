@extends('layout.mainEdit')
@section('content')

<div class="container">
  <div class="container1">
    <h1>Modificar el usuario</h1>
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
  {{-- <form action="{{ url('/tablados/'.$empleado->id) }}" method="POST" class="form__reg" enctype="multipart/form-data"> --}}
  <form action="/tablados/{{ $empleado->id }}" method="POST" class="form__reg" enctype="multipart/form-data">
    @csrf
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    {{-- {{ method_field('PATCH') }} --}}
    <div class="row">
      <div class="col-6">
        <h4>Nombre(s)</h4>
        <input type="text" class="form-control" value="{{ $empleado->nombre }}" name="nombre">
        <br>
        <h4>Apellido paterno</h4>
        <input type="text" class="form-control" value="{{ $empleado->apellido_paterno }}" name="apellido_paterno">
        <br>
        <h4>Apellido Marterno</h4>
        <input type="text" class="form-control" value="{{ $empleado->apellido_materno }}" name="apellido_materno">
        <br>
        <h4>CURP</h4>
        <input type="text" class="form-control" value="{{ $empleado->curp }}" name="curp">
        <br>
        <h4>Dirección</h4>
        <input type="text" class="form-control" value="{{ $empleado->direccion }}" name="direccion">
        <br>
        <h4>Salario</h4>
        <input type="text" class="form-control" value="{{ $empleado->salario }}" name="salario">
        <br>
      </div>
      <div class="col-6">
        <h4>turno</h4>
        <select name="turno_id" class="form-control">
          @foreach ($turnos as $turno)
          <option value="{{ $turno->id }}" @if( $empleado->turno_id === $turno->id )
            selected
            @endif >
            {{ $turno['nombre_turno'] }}
          </option>
          @endforeach
        </select>

        <br>
        <h4>Fecha de nacimiento</h4>
        <input type="text" class="form-control" value="{{ $empleado->fecha_nacimiento }}" name="fecha_nacimiento">
        <br>

        <h4>Cargo</h4>
        <select name="cargo_id" class="form-control">
          @foreach ($cargos as $cargo)
          <option value="{{ $cargo->id }}" @if( $empleado->cargo_id === $cargo->id ) selected @endif >
            {{ $cargo['nombre_cargo'] }}
          </option>
          @endforeach
        </select>

        <br>
        <h4>Departamento</h4>
        <select name="departamento_id" class="form-control">
          @foreach ($departamentos as $departamento)
          <option @if( $empleado->departamento_id === $departamento->id ) selected @endif value="{{ $departamento->id }}" >
            {{ $departamento['nombre_dep'] }}
          </option>
          @endforeach
        </select>

        <br>
        <h4>Sexo</h4>
        <select name="sexo_id" class="form-control">
          @foreach ($sexos as $sexo)
          <option @if( $empleado->sexo_id === $sexo->id ) selected @endif value="{{ $sexo['id'] }}">
            {{ $sexo['tipo_sexo'] }}
          </option>
          @endforeach
        </select>
        <br>

        <h4>Pago</h4>
        <select name="pago_id" class="form-control">
          @foreach ($pagos as $pago)
          <option value="{{ $pago->id }}" @if( $empleado->pago_id === $pago->id ) selected @endif >
            {{ $pago['descripcion_pago'] }}
          </option>
          @endforeach
        </select>
        <br>

      </div>
      <br>
    </div>
    <div>
      <br>
      <button type="submit" value="editar" class="btn btn-primary right action_submit">Modificar empleado</button>
    </div>
  </form>

  @endsection