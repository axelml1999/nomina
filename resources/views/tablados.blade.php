@extends('layout.main')
@section('content')
<div class="container">
  <div class="container1">
    <h1>Modulo de Empleados</h1>
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


  <div style="overflow-x:auto">
    <table id="empleados" class="table table-bordered" style="width:100%">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Apellido paterno</th>
          <th>Apellido materno</th>
          <th>Curp</th>
          <th>Direccion</th>
          <th>Salario</th>
          <th>Turno</th>
          <th>Cargo</th>
          <th>Departamento</th>
          <th>Sexo</th>
          <th>Fecha de nacimiento</th>
          <th>Eliminar</th>
          <th>Editar</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($empleados as $empleado)
        <tr>
          <td>{{$empleado->nombre}}</td>
          <td>{{$empleado->apellido_paterno}}</td>
          <td>{{$empleado->apellido_materno}}</td>
          <td>{{$empleado->curp}}</td>
          <td>{{$empleado->direccion}}</td>
          <td>{{$empleado->salario}}</td>
          <td>{{$empleado->turnos->nombre_turno}}</td>
          <td>{{$empleado->cargos->nombre_cargo}}</td>
          <td>{{$empleado->departamentos->nombre_dep}}</td>
          <td>{{$empleado->sexos->tipo_sexo}}</td>
          <td>{{$empleado->fecha_nacimiento}}</td>
          <td><button class="btn btn-danger mb-1" type="button" data-toggle="modal" data-target="#dangerModal">Eliminar</button></td>
          <td>
            <a href="{{ url('tablados/'.$empleado->id) }}">
              <button type="button" class="btn btn-success">Editar</button>
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="modal fade" id="dangerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-danger" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Eliminar</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <p>¿Estas seguro que deseas eliminar el registro?</p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
            <form method="POST" action="{{ url('/tablados/'.$empleado->id) }}">
              @csrf
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
          </div>
        </div>
        <!-- /.modal-content-->
      </div>
      <!-- /.modal-dialog-->
    </div>
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-success" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Editar registro</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
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
          </div>
        </div>
        <!-- /.modal-content-->
      </div>
      <!-- /.modal-dialog-->
    </div>
  </div>
</div>
@endsection