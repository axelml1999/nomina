<header>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</header>


<style>
.container1{
    background-color: #ffae2b;
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
<h1>Modulo Departamento</h1>
</div>
	<div class="container">
		<div class="form__top">
			<h2>Area Laboral</h2>
		</div>		
		  <form class="form__reg" action="">
 
        <div class="row">
         <div class="col">
           <input type="text" class="form-control" placeholder="Departamento">
          <br>
          <h2>Numero de trabajadores</h2>
          <input type="number" class="form-control" placeholder="Cantidad de trabajadores"> <br>       
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
        <th>Departamento</th>
        <th>Numero de empleados</th>
      </tr>
    </thead>
    <tbody>

        <td>Cocina</td>

        <td>4</td>
    </tbody>
  </table>
</div>


<button type="button" class="btn btn-dark">Eliminar</button>

	
</body>


@endsection