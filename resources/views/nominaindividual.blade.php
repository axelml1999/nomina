@extends('layout.main')

@section('content')
  <div class="container">
    <div class="container1">
          <h1>Reporte Nómina Individual</h1>
    </div>


      <form class="form-inline pt-4">

    <div class="form-group d-flex">

      <input type="number" class="form-control" placeholder="Ingrese número de empleado" type="search" name="Search">
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
        <th></th>
        <th>Empleado</th>
        <th>Nomina General</th>
        <th>Total Nomina</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($individual as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->empleado}}</td>
        <td>{{$item->nominagen}}</td>
        <td>{{$item->total_nom}}</td>
        <form method="POST" action="{{ url('/nominaIndividual/' . $item->id) }}">
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


  <a type="submit" class="btn btn-primary" href="individual">GENERAR +</a>
  </div>

@endsection
