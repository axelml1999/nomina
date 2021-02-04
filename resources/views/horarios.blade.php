<header>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</header>


<style>
.container1{
    background-color: #969e05;
  color: white;
  padding: 30px;
  font-size: 30px;
  border: none;
  
}


</style>

@extends('layout.main')

@section('content')

<body>
<div class="container1">
<h1>Modulo de ingeso para Nuevos horarios</h1>
</div>
	<div class="container">
		<div class="form__top">
			<h2>Hora de entrada</h2>
		</div>		
		  <form class="form__reg" action="">
 
        <div class="row">
         <div class="col">
           <input type="text" class="form-control" placeholder="Ingresar Hora">
          <br>
        <div class="row">
         <div class="col">
         <h2>Hora de salida</h2>
           <input type="text" class="form-control" placeholder="Ingresar Hora">
          <br>
          <h2>Turno</h2>
          <input type="text" class="form-control" placeholder="Ingresar Turno">  <br>      
       <input class="btn btn-outline-info" type="submit" value="REGISTRAR">&nbsp;&nbsp;
            	<input class="btn btn-outline-danger" type="reset" value="LIMPIAR">
        </div>         
		</form>
	</div>
    <br><br><br>

    <div class="container">
  <h2></h2>          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Hora de entrada</th>
        <th>Hora de salida</th>
        <th>Turno</th>
      </tr>
    </thead>
    <tbody>

        <td>8:00 am</td>
        <td>2:00 pm</td>

        <td>Matutino</td>
    </tbody>
  </table>
</div>


<button type="button" class="btn btn-danger">Eliminar</button>

</body>

@endsection