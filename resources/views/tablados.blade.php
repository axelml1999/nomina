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
   <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID empleado</th>
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
        <td>{{$empleado->id}}</td>
        <td>{{$empleado->nombre}}</td>
        <td>{{$empleado->apellido_paterno}}</td>
        <td>{{$empleado->apellido_materno}}</td>
        <td>{{$empleado->curp}}</td>
        <td>{{$empleado->direccion}}</td>
        <td>{{$empleado->salario}}</td>
        <td>{{$empleado->turno_id}}</td>
        <td>{{$empleado->cargo_id}}</td>
        <td>{{$empleado->departamento_id}}</td>
        <td>{{$empleado->sexo_id}}</td>
        <td>{{$empleado->fecha_nacimiento}}</td>
        <form method="POST" action="{{ url('/tablados/'.$empleado->id) }}">
          @csrf
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <td><button type="submit" onclick="return confirm ('¿Eliminar?')" class="btn btn-danger">Eliminar</button></td>
        </form>
        <td>
          <a href="{{ url('tablados/'.$empleado->id.'/edit') }}">
            <button type="button" class="btn btn-success">Editar</button>
          </a>
        </td>
          
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>



@endsection