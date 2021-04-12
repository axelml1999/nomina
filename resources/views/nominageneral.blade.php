@extends('layout.main')

@section('content')
<div class="container">
  <div class="container1">
    <h1>Reporte de fechas</h1>
  </div>
</div>

<br>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
      -->

<div class="container">
  <table id="nomina-general" class="table table-bordered" style="width:100%">
    <thead>
      <tr>
        <th>Semana</th>
        <th>Fecha inicio</th>
        <th>Fecha fin</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($general as $item)
      <tr>
        <td>{{$item->semana}}</td>
        <td>{{$item->fecha_inicio}}</td>
        <td>{{$item->fecha_fin}}</td>
        <td><button class="btn btn-danger mb-1" type="button" data-toggle="modal" data-target="#dangerModal">Eliminar</button></td>
      </tr>
      @endforeach

    </tbody>
  </table>
  <a type="submit" class="btn btn-primary" href="general">GENERAR +</a>
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
          <form method="POST" action="{{ url('/nominageneral/' . $item->id) }}">
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
</div>
@endsection