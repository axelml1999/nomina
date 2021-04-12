@extends('layout.main')

@section('content')
<div class="container">
  <div class="container1">
    <h1>Modulo Cargo</h1>
  </div>
  <div class="form__top pt-4">
    <h2>Cargo</h2>
  </div>
  <form class="form__reg" action="/cargo" method="POST">
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
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Ingresar Cargo" id="usr" name="nombre_cargo">
        <br>
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
  <table id="cargos" class="table table-bordered" style="width:100%">
    <thead>
      <tr>
        <th>Id</th>
        <th>Cargo</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($cargos as $cargo)
      <tr>
        <td>{{$cargo->id}}</td>
        <td>{{$cargo->nombre_cargo}}</td>
        <td>
          <a href="{{ url('editCargo/'.$cargo->id) }}">
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
          <form method="POST" action="{{ url('/cargo/'.$cargo->id) }}">
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
          <form class="form__reg" action="/editCargo/{{$cargo->id}}" method="POST">
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
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Ingresar Cargo" id="usr" name="nombre_cargo" value="{{$cargo->nombre_cargo}}">
                <br>
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