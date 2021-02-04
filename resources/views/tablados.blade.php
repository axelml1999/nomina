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

.ul{
    
}

}
</style>

@extends('layout.main')

@section('content')
<body>
<div class="container1">
<h1>Modulo de Pago</h1>
<ul class="nav nav-pills">
  <li class="active"><a href="#"></a></li>
  <li><a href="/empleados">Registro</a></li>
  <br>
  <li><a href="/tablados"> &nbsp;&nbsp;&nbsp;Tabla</a></li>
</ul>
</div>

<div class="container">
  <h2>Empleados</h2>          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Correo Electronico</th>
        <th>Fecha de Nacimiento</th>
        <th>Sexo</th>
        <th>CURP</th>
        <th>Horario</th>
        <th>Puesto</th>
        <th>Departamento</th>
        <th>Fecha de Ingreso</th>
        <th>Salario</th>
        <th>NSS</th>
        <th>RFC</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>


<button type="button" class="btn btn-dark">Eliminar</button>

</body>
</html>



@endsection