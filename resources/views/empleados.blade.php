<header>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</header>


<style>
.container1{
    background-color: #ff2b2b;
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
<h1>Modulo de Empleados</h1>
<ul class="nav nav-pills">
  <li class="active"><a href="#"></a></li>
  <li><a href="/empleados">Registro</a></li>
  <br>
  <li><a href="/tablados"> &nbsp;&nbsp;&nbsp;Tabla</a></li>
</ul>
</div>
	<div class="">
		<div class="form__top">
			<h2>Ingresar Datos</h2>
		</div>		
		  <form class="form__reg" action="">
 
        <div class="row">
         <div class="col">
         <h4>Nombre(s)</h4>
           <input type="text" class="form-control" placeholder="Nombre(s)">
          <br>
         <h4>Apellido paterno</h4>
           <input type="text" class="form-control" placeholder="Apellido Paterno">
          <br>
         <h4>Apellido Marterno</h4>
           <input type="text" class="form-control" placeholder="Apellido Marterno">
          <br>
         <h4>Fecha de Nacimiento</h4>
           <input type="text" class="form-control" placeholder="Fecha de nacimiento">
          <br>
         <h4>Sexo</h4>
         <div class="form-group col-md-4">
      <select id="inputState" class="form-control">
        <option selected>Sexo...</option>
        <option value="1">Hombre</option>
        <option value="2">Mujer</option>
      </select>
    </div>
    <br>
         <h4>CURP</h4>
           <input type="text" class="form-control" placeholder="curp">
          <br>
        <h4>Horario</h4>
            <input type="text" class="form-control" placeholder="Horario">
        <br>

        <div class="row">
         <div class="col">


          <br>
     
       <input class="btn btn-outline-info" type="submit" value="REGISTRAR">&nbsp;&nbsp;
            	<input class="btn btn-outline-danger" type="reset" value="LIMPIAR">
                <button type="button" class="btn btn-danger">Eliminar</button>
        </div>         
		</form>
	</div>
    </div>

    <br><br><br>

<div class="col-6">
    <div class="container">
  <h2></h2>          
  <form class="form__reg" action="">
 
 <div class="row">
  <div class="col">
 
  <h4>Puesto</h4>
    <input type="text" class="form-control" placeholder="Puesto">
   <br>
  <h4>Departamento</h4>
    <input type="text" class="form-control" placeholder="Departamento">
   <br>
  <h4>Fecha de Ingreso</h4>
    <input type="text" class="form-control" placeholder="">
   <br>
  <h4>Salario</h4>
    <input type="text" class="form-control" placeholder="">
   <br>
  <h4>NSS</h4>
    <input type="text" class="form-control" placeholder="Numero de Seguro Social">
   <br>
  <h4>RFC</h4>
    <input type="text" class="form-control" placeholder="Registro Federal de Contribuyentes">
   <br>
 <div class="row">
  <div class="col">


       
 </form>
</div>



</div>
</div>
</body>

@endsection