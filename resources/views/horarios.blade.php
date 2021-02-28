@extends('layout.main')
@section('content')
  <div class="container">
    <div class="container1">
      <h1>Modulo de ingeso para Nuevos horarios</h1>
    </div>
    <div class="form__top pt-4">
      <h2>Hora de entrada</h2>
    </div>
    <form class="form__reg" action="{{route('horarios')}}" method="POST">
      @csrf
        @if($errors->isEmpty())

    @else
    <div class="alert alert-danger">
      @foreach($errors -> all() as $messages)
      <li>{{$messages}}</li>
      @endforeach
    </div>
    @endif

      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Ingresar Hora" name="entrada">
          <br>
          <div class="row">
            <div class="col">
              <h2>Hora de salida</h2>
              <input type="text" class="form-control" placeholder="Ingresar Hora" name="salida">
              <br>
              <h2>Turno</h2>
              <input type="text" class="form-control" placeholder="Ingresar Turno" name="turno"> <br>
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
          <th>Hora de entrada</th>
          <th>Hora de salida</th>
          <th>Turno</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody>
      
      @foreach ($target as $targets)
      <tr>  
        <td>{{$targets->entrada}}</td>
        <td>{{$targets->salida}}</td>
        <td>{{$targets->turno}}</td>

        <td><a href="/editHorarios/{{ $targets->id }}"><button type="button"
                                            class="btn btn-dark">Editar</button></a></td>
        <form method="POST" action="{{ url('/horarios/' . $targets->id) }}">
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
  </div>


  
@endsection