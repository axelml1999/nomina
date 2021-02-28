@extends('layout.main')

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
                <form class="form__reg" action="{{ route('descuentos') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Ingresar Descuento" name="descuento">
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
                                <div class="col">
                                    <br>
                                    <input class="btn btn-outline-info" type="submit" value="REGISTRAR">&nbsp;&nbsp;
                                    <input class="btn btn-outline-danger" type="reset" value="LIMPIAR">
                                </div>
                </form>
            </div>
        </div>

        <br><br><br>

        <div class="col-6">
            <div class="container">
                <h2></h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Descripcion</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($descuentos as $descuento)
                            <tr>
                                <td>{{ $descuento->id }}</td>
                                <td>{{ $descuento->descripcion }}</td>
                                <td><a href="/editDescuentos/{{ $descuento->id }}"><button type="button"
                                            class="btn btn-dark">Editar</button></a></td>
                                <form method="POST" action="{{ url('/descuentos/' . $descuento->id) }}">
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

        </div>
    </div>
@endsection
