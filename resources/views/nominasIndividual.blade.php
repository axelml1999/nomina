@extends('layout.main')

@section('content')
<div class="container">
  <div class="container1">
    <h1>Reporte Nómina Individual</h1>
  </div>


  <form action="{{route('nominaIndividual')}}" method="POST" class="form__reg">
    @csrf
    <div class="row pt-4">
      <div class="col-6">
        <h4>Empleado</h4>
        <select name="empleado_id" class="form-control">
          @foreach ($empleado as $emp)
          <option value="{{ $emp['id'] }}">{{ $emp['nombre'] }} {{$emp['apellido_paterno']}} {{$emp['apellido_materno']}}</option>
          @endforeach
        </select>
        <br>
        <h4>Semana</h4>
        <select name="nominagen_id" class="form-control">
          @foreach ($nom_gen as $nom)
          <option value="{{ $nom['id'] }}">{{ $nom['semana'] }} ({{$nom['fecha_inicio']}} - {{$nom['fecha_fin']}})</option>
          @endforeach
        </select>
        <br>
        <h4>Extras</h4>
        <select name="extra_id" class="form-control">
          @foreach ($extra as $ext)
          <option value="{{ $ext['id'] }}">{{ $ext['descripcion_extra'] }} ($ {{$ext['valor']}})</option>
          @endforeach
        </select>
        <br>
        <h4>Descuentos</h4>
        <select name="descuento_id" class="form-control">
          @foreach ($descuento as $desc)
          <option value="{{ $desc['id'] }}">{{ $desc['descripcion'] }} ($ {{$desc['valor']}})</option>
          @endforeach
        </select>
        <br>
      </div>
    </div>
    <div class="col-12">
      @foreach ($errors->all() as $message)
      @if ($errors->any())
      <p class="alert alert-danger">
        {{$message}}
      </p>
      @endif
      @endforeach
    </div>
    <div class="pb-4">
      <br>
      <button class="btn btn-primary mb-1" type="button" data-toggle="modal" data-target="#primaryModal">Registrar</button>
      <input class="btn btn-outline-danger" type="reset" value="Limpiar">
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

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
      -->
  @endsection