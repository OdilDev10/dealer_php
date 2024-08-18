<?php 
	session_start();

	if (!isset($_SESSION['usuario'])) {
		// echo '<script>alert("No inicio sesion")</script>';
		header("Location: ../index.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name='dealer' content='AUTO dealer autoimport donde conseguiras el carro que deseas.'>
  <link rel='canonical' href='https://AUTOdealer.com/' />
  <meta name="author" content="Odil Martinez"/>
  <meta name="copyright" content="Odil Martinez"/>
  <meta name="generator" content="HTML, CSS, JavaScript, PHP, Mysql"/>
  <meta name="language" content="es"/>
  <meta name="language" content="en"/>
  <meta name="revisit-after" content="1 month"/>
  <meta name="robots" content="index, follow"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
  <meta property='og:type' content='website' />
  <meta property='og:title' content='AUTO Dealer' />
  <meta property='og:description' content='Este es el sitio de oficial de AUTO autoimport' />
  <meta property='og:image' content="">
  <meta property='og:url' content='AUTOdealer.com' />

  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link rel="apple-touch-icon" href="../images/rueda.png"> 
  <link rel="apple-touch-startup-image" href="../images/rueda.png">
  
	<title>Panel AUTO SRL</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<link rel="stylesheet" type="text/css" href="../css/panel.css">

</head>
<body>

<style type="text/css">
    body{
    background: #B3C1BF;
  }
</style>

<nav class="navigator">
  <div class="contenedorNav">
    <div class="container-logo">
      <h2><a href="panel.php"><span>Panel AUTO</span></a></h2>
    </div>
    <ul id="enlaces" >
      <a href="facturas.php"><li>Ver Facturas</li></a>

      <a href="insertarFacturas.php"><li>Insertar Facturas</li></a>
      <a href="editarFacturas.php"><li>Editar Facturas</li></a>
      <a href="clientes.php"><li><li>Ver Clientes</li></a>
      <a href="insertarClientes.php"><li>Insertar Clientes</li></a>
      <a href="editarClientes.php"><li>Editar Clientes</li></a>
      <a href="carros.php"><li><li>Ver Vehiculos</li></a>
      <a href="insertarVehiculo.php"><li>Insertar Vehiculos</li></a>
      <a href="editarVehiculos.php"><li>Editar Vehiculos</li></a>
      <a href="logout.php"><li>Cerrar Sesion</li></a>
    </ul>

 <!--       <img src="images/carreras.png"> -->
    <div class="toggle show">
      <button id="botonNav" >
        <span>
        |||
        </span>
      </button>
    </div>
  </div>
</nav>


<script type="text/javascript">
  const botonNav = document.getElementById('botonNav');

  botonNav.addEventListener("click",function(argument) {
      document.getElementById('enlaces').classList.toggle('active');

  })

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js" integrity="sha512-5BqtYqlWfJemW5+v+TZUs22uigI8tXeVah5S/1Z6qBLVO7gakAOtkOzUtgq6dsIo5c0NJdmGPs0H9I+2OHUHVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>