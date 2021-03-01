@extends('layout.mainEdit')

@section('content')
<div class="container">
  <div class="container1">
    <h1>Editar Cargo</h1>
  </div>
  <div class="form__top pt-4">
    <h2>Cargo</h2>
  </div>
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
        <input class="btn btn-primary right action_submit" type="submit" value="EDITAR">&nbsp;&nbsp;
        <input class="btn btn-outline-danger" type="reset" value="LIMPIAR">
      </div>
  </form>
</div>
<br><br><br>
@endsection