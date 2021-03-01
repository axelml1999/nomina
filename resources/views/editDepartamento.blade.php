@extends('layout.mainEdit')

@section('content')
<div class="container">

    <div class="container1">
        <h1>Editar Departamento</h1>
    </div>
    <div class="form__top pt-4">
        <h2>Area Laboral</h2>
    </div>
    <form class="form__reg" action="/editDepartamento/{{$departamento->id}}" method="POST">
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
            <div class="col">
                <input type="text" class="form-control" placeholder="Departamento" name="nombre_dep" value="{{$departamento->nombre_dep}}">
                <br>
                <h2>Numero de trabajadores</h2>
                <input type="number" class="form-control" placeholder="Cantidad de trabajadores" name="num_trab" value="{{$departamento->num_trab}}"> <br>
                <input class="btn btn-outline-info action_submit" type="submit" value="EDITAR">&nbsp;&nbsp;
                <input class="btn btn-outline-danger" type="reset" value="LIMPIAR">
            </div>
    </form>
</div>
@endsection