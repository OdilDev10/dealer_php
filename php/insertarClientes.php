<?php 
include 'panelHeader.php';
include 'conexion.php';

	if (isset($_POST['Enviar'])) {
				$id = $_POST['id'];
				$nombre = $_POST['nombre'];
				$apellido = $_POST['apellido'];
				$email = $_POST['email'];
				$direccion = $_POST['direccion'];
				$vehiculo = $_POST['vehiculo'];
				$apodo = $_POST['apodo'];
				$trabajo = $_POST['trabajo'];
				$cedula = $_POST['cedula'];
				

		$consulta = "INSERT INTO clientes(nombre,apellido,email,direccion,vehiculo,apodo,trabajo,cedula) VALUES ('$nombre','$apellido','$email','$direccion','$vehiculo','$apodo','$trabajo','$cedula')";

		$resultadoArticulos = mysqli_query($conex, $consulta);

		if ($resultadoArticulos === true) {
			echo '<script>alert("Datos Ingresados Correctamente")</script>';

		}else{
			echo '<script>alert("Error al insertar los datos")</script>';
			    trigger_error("No se puede dividir por cero", E_USER_ERROR);
		}


		
	}


 ?>
<style type="text/css">

	label, p{
		background: #D52A2A;
		color: #fff;
		font-weight: bold;
		text-align: center;
		border-radius: 2px;
		margin: 3px;
	}
	p{
		width: 300px;
		background: #2AD5C0;
		color: #000;
	}
</style>

 <main>
 	<h1>Insertar Cliente</h1>

 	<section>
 		<form action="insertarClientes.php" method="POST" enctype="multipart/form-data">
 			<label>ID</label>
 			
 			<input type="number" name="id">
 			<p>Identificador unico</p>
 			

 			<label>NOMBRE</label>
 			
 			<input type="text" name="nombre" required>
 			<p>Nombre del cliente</p>
 			
 			<label>APELLIDO</label>
 			
 			<input type="text" name="apellido" required>
 			<p>Apellido de cliente</p>
 			
 			<label>EMAIL</label>
 			
 			<input type="email" name="email" required>
 			<p>Correo</p>
 			
 			<label>DIRECCION</label>
 			
			<textarea name="direccion"></textarea>

 			<p>direccion</p>
 			
 		
 			<label>VEHICULO</label>
 			
 			<input type="number" name="vehiculo" required>
 			<p>ID del vehiculo</p>
 			
 			<label>APODO</label>
 			
 			<input type="text" name="apodo" required>
 			<p>Apodo del cliente</p>
 			
 			<label>TRABAJO</label>
 			
 			<input type="text" name="trabajo" required>
 			<p>Nombre trabajo</p>

 			<label>CEDULA</label>
 			
 			<input type="text" name="cedula" min="11" max="11" required>
 			<p>Cedula o Pasaporte</p>

<h3>DATOS</h3>

<input type="submit" name="Enviar">

<h3>COMO LLENAR</h3>

 		</form>
 	</section>
 </main>