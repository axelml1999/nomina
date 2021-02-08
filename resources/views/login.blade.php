@extends('layout.mainlog')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card-group">
        <div class="card p-4">
          <div class="card-body">
            <h1>Ingresar</h1>
            <p class="text-muted">Iniciar sesión en su cuenta</p>
            <div class="input-group mb-3">
              <div class="input-group-prepend"><span class="input-group-text">
                  <svg class="c-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                  </svg></span></div>
              <input class="form-control" type="text" placeholder="Nombre de usuario">
            </div>
            <div class="input-group mb-4">
              <div class="input-group-prepend"><span class="input-group-text">
                  <svg class="c-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                  </svg></span></div>
              <input class="form-control" type="password" placeholder="Contraseña">
            </div>
            <div class="row">
              <div class="col-6">
                <a href="index" class="btn btn-primary px-4" type="button"> Ingresar </a>
              </div>
            </div>
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