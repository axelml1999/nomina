@extends('layout.main')

@section('content')
<div class="container">

  <div class="container1">
    <h1>Modulo Departamento</h1>
  </div>
  <div class="form__top pt-4">
    <h2>Area Laboral</h2>
  </div>
  <form class="form__reg" action="/departamento" method="POST">
    @if($errors->isEmpty())

    @else
    <div class="alert alert-danger">
      @foreach($errors -> all() as $messages)
      <li>{{$messages}}</li>
      @endforeach
    </div>
    @endif
    @csrf
    <div class="row">
      <div class="col">
        <input type="text" class="form-control" placeholder="Departamento" name="nombre_dep">
        <br>
        <h2>Numero de trabajadores</h2>
        <input type="number" class="form-control" placeholder="Cantidad de trabajadores" name="num_trab"> <br>
        <button class="btn btn-primary mb-1" type="button" data-toggle="modal" data-target="#primaryModal">Registrar</button>
        <input class="btn btn-danger mb-1" type="reset" value="Limpiar">
      </div>
      <div class="modal fade" id="primaryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-primary" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Insertar</h4>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <p>¿Estas seguro que deseas insertar estos datos?</p>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
              <button class="btn btn-primary right action_submit" type="submit" value="Registrar">Registrar</button>
            </div>
          </div>
          <!-- /.modal-content-->
        </div>
        <!-- /.modal-dialog-->
      </div>
  </form>
</div>
<br><br><br>

<div class="container">
  <h2></h2>
  <table id="departamentos" class="table table-bordered" style="width:100%">
    <thead>
      <tr>
        <th>Departamento</th>
        <th>Numero de empleados</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      @foreach($departamentos as $dep)
      <tr>
        <td>{{$dep->nombre_dep}}</td>
        <td>{{$dep->num_trab}}</td>
        <td>
          <a href="{{ url('editDepartamento/'.$dep->id) }}">
            <button type="button" class="btn btn-success">Editar</button>
          </a>
        </td>
        <td><button class="btn btn-danger mb-1" type="button" data-toggle="modal" data-target="#dangerModal">Eliminar</button></td>
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
          <form method="POST" action="{{ url('/departamento/'.$dep->id) }}">
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
          <form class="form__reg" action="/editDepartamento/{{$dep->id}}" method="POST">
            @if($errors->isEmpty())

            @else
            <div class="alert alert-danger">
              @foreach($errors -> all() as $messages)
              <li>{{$messages}}</li>
              @endforeach
            </div>
            @endif
            @csrf
            {{method_field('PUT')}}
            <div class="row">
              <div class="col">
                <h2>Area Laboral</h2>
                <input type="text" class="form-control" placeholder="Departamento" name="nombre_dep" value="{{$dep->nombre_dep}}">
                <br>
                <h2>Numero de trabajadores</h2>
                <input type="number" class="form-control" placeholder="Cantidad de trabajadores" name="num_trab" value="{{$dep->num_trab}}"> <br>
                <input class="btn btn-primary right action_submit" type="submit" value="Editar">&nbsp;&nbsp;
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
              </div>
          </form>
        </div>
      </div>
      <!-- /.modal-content-->
    </div>
    <!-- /.modal-dialog-->
  </div>
</div>


@endsection