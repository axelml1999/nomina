<header>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</header>


<style>
.container1{
    background-color: #2bf8ff;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}


</style>

@extends('layout.main')

@section('content')
<body>
<div class="container1">
<h1>Modulo de Pago</h1>
<ul class="nav nav-pills">
  <li class="active"><a href="#"></a></li>
  <li><a href="/pago">Registro</a></li>
  <li><a href="/tabla">  &nbsp;&nbsp;&nbsp;     Tabla</a></li>
</ul>
</div>
	<div class="container">
		<div class="form__top">
			<h2>Formulario <span>Registro</span></h2>
		</div>		
		  <form class="form__reg" action="">
 
        <div class="row">
         <div class="col">
         <h5>Nombre</h5>
           <input type="text" class="form-control" placeholder="Nombre">
          <br>
          <h5>Correo Electronico</h5>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="@hotmail.com">
          <br>
          <h5>Telefono</h5>
          <input type="text"  class="form-control"  placeholder="Telefono">
          <br>
          <h5>Numero de Cuenta</h5>
          <input type="text"  class="form-control"  placeholder="Numero de Cuenta">
          <br>
          <h5>Numero de Tarjeta</h5>
          <input type="text"   class="form-control"  placeholder="Numero de Tarjeta">
          <br>
       <input class="btn btn-outline-info" type="submit" value="REGISTRAR">&nbsp;&nbsp;
            	<input class="btn btn-outline-danger" type="reset" value="LIMPIAR">
        </div>         
		</form>
	</div>
	
</body>




@endsection