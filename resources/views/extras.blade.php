@extends('layout.main')

@section('content')
    <div class="container">
        <div class="">
            <div class="container1">
                <h1>Modulo Extras</h1>
            </div>
            <div class="">
                <div class="form__top pt-4">
                    <h2>Extras</h2>
                </div>
                <form class="form__reg" action="{{ route('extras') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Ingresar Extras" name="extras">
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
                            <th>Valor Aproximado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($extras as $extra)
                            <tr>
                                <td>{{ $extra->id }}</td>
                                <td>{{ $extra->descripcion_extra }}</td>
                                <td><a href="/editExtras/{{ $extra->id }}"><button type="button"
                                            class="btn btn-dark">Editar</button></a></td>
                                <form method="POST" action="{{ url('/extras/' . $extra->id) }}">
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
