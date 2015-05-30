<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Distribuidora de Occidente</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/misestilos.css">
    <script src="js/jquery.js"></script>
</head>
<body>


 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Distribuidora de Occidente</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="productos.html">Productos</a></li>  
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categorias<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="productos.html#logod">Refrigeracion</a></li>
            <li><a href="#">Limpieza</a></li>
            <li><a href="#">Computo</a></li>
            <li class="divider"></li>
            <li><a href="#">Ferretero</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Editar<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="registro.php">Registro de Productos</a></li>
            <li><a href="#">Mostrar Productos</a></li>
            <li><a href="#">Editar Productos</a></li>
            <li class="divider"></li>
            <li><a href="#">Eliminar Productos</a></li>
            <li class="divider"></li>
            <li><a href="#">Salir</a></li>
          </ul>
        </li>
        <li><a href="contacto.html">Contacto</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Iniciar Sesión</a></li>
      </ul>
    </div>
  </div>
</nav>

<hr><hr>

<div class="container">
  <div class="row">
    <div class="col-xs-0 col-lg-2"></div>
    <div class="col-xs-12 col-lg-8">
      <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Registro de Productos</h3>
  </div>
  <div class="panel-body">
    <form class="form-horizontal" name="formRegistro" method="POST" action="guarda.php">
  <fieldset>
    
    <div class="form-group">
      <label for="inputCodigo" class="col-lg-2 control-label">Codigo:</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputCodigo" placeholder="Codigo" type="text" name="codigo">
      </div>
    </div>
    <div class="form-group">
      <label for="inputNombre" class="col-lg-2 control-label">Nombre:</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputNombre" placeholder="Nombre" type="text" name="nombre">
      </div>
    </div>
    <div class="form-group">
      <label for="inputCantidad" class="col-lg-2 control-label">Cantidad:</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputCantidad" placeholder="Cantidad" type="text" name="cantidad">
      </div>
    </div>
    <div class="form-group">
      <label for="inputImagen" class="col-lg-2 control-label">Imagen:</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputImagen" placeholder="Imagen" type="text" name="imagen">
      </div>
    </div>

    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>

  </fieldset>
</form>

<!--empieza php-->
  
  <?php 
     
     //conexion a la base de datos
  $con=new mysqli('localhost','jrvp', 'jrvp', 'escuela');
  //verificar la conexion
  if($con->connect_error){
    die("Conexion fallida". $con->connect_error);
  }

  $codigo=$_POST["codigo"];
  $nombre=$_POST["nombre"];
  $cantidad=$_POST["cantidad"];
  $imagen=$_POST["imagen"];

  $sql="INSERT INTO productos (codigo, nombre, cantidad, imagen) VALUES ('$codigo',$nombre, 'cantidad', '$imagen')";

  //pregunta: si la en la conexion se hizo la consulta correcta
  if($con->query($sql)===TRUE){

    ?>  
    <!--esto lo saque del tema de bootswatch que elegi en indicador de alerta-->
    <div class="alert alert-dismissible alert-success">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <strong>El alumno se registro con exito!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
    </div>
    <?php
  }

  else {
    ?>
    <div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Error de registro!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
</div>
    <?php
  }



  ?>

  </div>
</div>
    </div>
    <div class="col-xs-0 col-lg-2"></div>
  </div>
</div>
	<script src="js/bootstrap.js"></script>
</body>
</html>

