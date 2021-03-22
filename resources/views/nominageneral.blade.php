@extends('layout.main')

@section('content')
  <div class="container">
    <div class="container1">
          <h1>Reporte Nómina General</h1> 
    </div>
      
      
      <form action="" class="form-inline pt-4">

    <div class="form-group d-flex">
    
      <input type="number" class="form-control" placeholder="Ingrese número de empleado" >
      <button type="submit" class="btn btn-dark ml-auto">Buscar</button>
      </div>
    
    </div>
    
    </form>
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
      <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>Semana</th>
        <th>Fecha inicio</th>
        <th>Fecha fin</th>
        <th>Total descuentos</th>
        <th>Total extras</th>
        <th>Total nomina</th>
      </tr>
    </thead>
    <tbody>
    
    @foreach ($general as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->semana}}</td>
        <td>{{$item->fecha_inicio}}</td>
        <td>{{$item->fecha_fin}}</td>
        <td>{{$item->total_descuentos}}</td>
        <td>{{$item->total_extras}}</td>
        <td>{{$item->total_nomina}}</td>

        <form method="POST" action="{{ url('/nominageneral/' . $item->id) }}">
                                    @csrf
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <td><button type="submit" onclick="return confirm ('¿Eliminar?')"
                                            class="btn btn-danger">Eliminar</button></td>
                                </form>

      </tr>
      @endforeach
    
    </tbody>
  </table>
  <a type="submit" class="btn btn-primary" href="general">GENERAR +</a>
  </div>
@endsection
  