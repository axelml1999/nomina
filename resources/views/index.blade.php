@extends('layout.main')
@section('content')
<div class="container">
  <h1>Bienvenido {{ Auth::user()->name }}</h1>
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
      <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="2000">
        <img src="https://www.factupronto.com/factura_electronica/img/Blog/nomina/Nomina.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="https://i2.wp.com/accounter.co/cdn/2020/08/facturacion-electronica.jpg?fit=768%2C432&ssl=1" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="https://www.muypymes.com/wp-content/uploads/2019/03/facturaelectronica-ganamas.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
</div>
@endsection