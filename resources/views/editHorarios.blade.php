@extends('layout.mainEdit')
@section('content')
  <div class="container">
    <div class="container1">
      <h1>Modulo de ingeso para Nuevos horarios</h1>
    </div>
    <div class="form__top pt-4">
      <h2>Hora de entrada</h2>
    </div>
    <form class="form__reg" action="/editHorarios/{{$id->id}}" method="POST">
      @csrf
        @if($errors->isEmpty())

    @else
    <div class="alert alert-danger">
      @foreach($errors -> all() as $messages)
      <li>{{$messages}}</li>
      @endforeach
    </div>
    @endif

    {{method_field('PUT')}}
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Ingresar Hora" name="entrada" value="{{$id->entrada}}">
          <br>
          <div class="row">
            <div class="col">
              <h2>Hora de salida</h2>
              <input type="text" class="form-control" placeholder="Ingresar Hora" name="salida" value="{{$id->salida}}">
              <br>
              <h2>Turno</h2>
              <input type="text" class="form-control" placeholder="Ingresar Turno" name="turno" value="{{$id->turno}}"> <br>
              <input class="btn btn-outline-info" type="submit" value="GUARDAR">&nbsp;&nbsp;
              
            </div>
    </form>
  </div>

 


  
@endsection