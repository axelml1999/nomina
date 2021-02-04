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
  <li><a href="/pago">Registro</a></li>
  <br>
  <li><a href="/tabla"> &nbsp;&nbsp;&nbsp;        Tabla</a></li>
</ul>
</div>

<div class="container">
  <h2>Empleados</h2>          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Numero de Cuentra</th>
        <th>Numero de Tarjeta</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Yosua&nbsp;Sanchez&nbsp; Cruz</td>
        <td>a3518110461@alumno.uttehuacan.edu.mx</td>
        <td>2381112233</td>
        <td>123456789123456789</td>
        <td>987654321987654321</td>
      </tr>
    </tbody>
  </table>
</div>


<button type="button" class="btn btn-dark">Eliminar</button>

</body>
</html>



@endsection