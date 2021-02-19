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
        <input class="btn btn-primary right action_submit" type="submit" value="REGISTRAR">&nbsp;&nbsp;
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
        <th>Id</th>
        <th>Cargo</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($cargos as $cargo)
      <tr>
        <td>{{$cargo->id}}</td>
        <td>{{$cargo->nombre_cargo}}</td>
        <td><a href="/editCargo/{{$cargo->id}}"><button type="button" class="btn btn-dark">Editar</button></a>
          <button type="button" class="btn btn-danger">Eliminar</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection