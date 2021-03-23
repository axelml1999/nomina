@extends('layout.mainlog')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group">
                <div class="card p-4">
                    <div class="card-body">
                        <h1>Ingresar</h1>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"><span class="input-group-text">
                                        <svg class="c-icon">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-closed"></use>
                                        </svg></span></div>
                                <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="email" type="email" placeholder="Email" autofocus>
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend"><span class="input-group-text">
                                        <svg class="c-icon">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                                        </svg></span></div>
                                <input class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="password" type="password" placeholder="Contraseña">
                            </div>
                            @error('email')
                            <br>
                            <div class="alert alert-danger" role="alert">{{ $message }}</div>
                            @enderror
                            @error('password')
                            <br>
                            <div class="alert alert-danger" role="alert">{{ $message }}</div>
                            @enderror
                            <div class="form-check checkbox">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">{{ __('Recuerdame') }}</label>
                            </div>
                            <div class="row">
                                <div class="col-12 pt-2">
                                    <button class="btn btn-block btn-primary" type="submit">{{ __('Iniciar Sesion') }}</button>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <p class="pt-2 text-center">¿No tienes cuenta?</p>
                                    @if (Route::has('register'))
                                    <a class="btn btn-block btn-danger" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                                    @endif
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
                <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                    <div class="card-body text-center">
                        <div>
                            <h2>Nomina InTech</h2>
                            <p>El mejor control de nomina del continente</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection