@extends('layout.main')

@section('content')
  <div class="container">
    <div class="container1">
          <h1>Reporte Nómina Individual</h1>
    </div>


    <form action="{{route('nominaIndividual')}}" method="POST" class="form__reg">
        @csrf
        <div class="row">
          <div class="col-6">
            <h4>Empleado</h4>
            <input type="text" class="form-control" placeholder="Empleado" name="empleado">
            <br>
            <h4>Nomina General</h4>
            <input type="text" class="form-control" placeholder="Nomina General" name="nominagen">
            <br>
            <h4>Total Nomina</h4>
            <input type="text" class="form-control" placeholder="Total Nomina" name="total_nom">
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
        <div>
          <br>
          <button type="submit" class="btn btn-primary right action_submit">Registrar</button>
          <input class="btn btn-outline-danger" type="reset" value="LIMPIAR">
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
