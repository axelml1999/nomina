@extends('layout.mainEdit')

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
            <form class="form__reg" action="/editExtras/{{ $extra->id }}" method="POST">
                @csrf
                {{ method_field('PUT') }}
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Ingresar Extras" name="extras" value="{{ $extra->descripcion_extra }}">
                        <br>
                        <input type="text" class="form-control" placeholder="Ingresar Valor" name="valor" value="{{ $extra->valor }}">
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
</div>
@endsection