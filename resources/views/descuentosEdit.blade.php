@extends('layout.mainEdit')

@section('content')
    <div class="container">
        <div class="">
            <div class="container1">
                <h1>Modulo Descuentos</h1>
            </div>
            <div class="">
                <div class="form__top pt-4">
                    <h2>Descuento</h2>
                </div>
                <form class="form__reg" action="/editDescuentos/{{ $descuentos->id }}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Ingresar Descuento" name="descuento"
                                value="{{ $descuentos->descripcion }}">
                            <br>
                            @if ($errors->isEmpty())
                            @else
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $messages)
                                        <li>{{ $messages }}</li>
                                    @endforeach
                                </div>
                            @endif
                            <div class="row">
                                <div class="col"><br>
                                    <input class="btn btn-outline-info" type="submit" value="REGISTRAR">&nbsp;&nbsp;
                                    <input class="btn btn-outline-danger" type="reset" value="LIMPIAR">
                                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
