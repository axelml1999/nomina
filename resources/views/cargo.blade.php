@extends('layout.main')

@section('content')
<<<<<<< HEAD
    <div class="container">
      <div class="container1">
        <h1>Modulo Cargo</h1>
      </div>
      <div class="form__top pt-4">
        <h2>Cargo</h2>
      </div>		
        <form class="form__reg" action="">
  
          <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="Ingresar Cargo">
            <br>
            <h2>Empleado</h2>
            <input type="text" class="form-control" placeholder="Ingresar Empleado"><br>
        <input class="btn btn-outline-info" type="submit" value="REGISTRAR">&nbsp;&nbsp;
                <input class="btn btn-outline-danger" type="reset" value="LIMPIAR">
          </div>         
      </form>
    </div>
      <br><br><br>

    <div class="container">
    <h2></h2>          
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Cargo</th>
          <th>Empleado</th>
        </tr>
      </thead>
      <tbody>

          <td>Gerente</td>

          <td>Yosua&nbsp;Sanchez&nbsp; Cruz</td>
      </tbody>
    </table>
    <button type="button" class="btn btn-dark">Eliminar</button>
=======
<div class="container">
  <div class="container1">
    <h1>Modulo Cargo</h1>
  </div>
  <div class="form__top pt-4">
    <h2>Cargo</h2>
>>>>>>> 73b8da77334d3006f770ed3435ebfe064247c2d2
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
        <input class="btn btn-primary right action_submit" type="submit" value="REGISTRAR">&nbsp;&nbsp;
        <input class="btn btn-outline-danger" type="reset" value="LIMPIAR">
      </div>
  </form>
</div>
<br><br><br>

<<<<<<< HEAD
=======
<div class="container">
  <h2></h2>
  <table class="table table-bordered">
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
        <td><a href="/editCargo/{{$cargo->id}}"><button type="button" class="btn btn-dark">Editar</button></a></td>
        <form method="POST" action="{{ url('/cargo/'.$cargo->id) }}">
          @csrf
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <td><button type="submit" onclick="return confirm ('¿Eliminar?')" class="btn btn-danger">Eliminar</button></td>
        </form>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
>>>>>>> 73b8da77334d3006f770ed3435ebfe064247c2d2
@endsection