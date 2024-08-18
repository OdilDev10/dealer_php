<?php 
include 'panelHeader.php';
include 'conexion.php';


	if (isset($_POST['Editar'])) {
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$email = $_POST['email'];
		$direccion = $_POST['direccion'];
		$vehiculo = $_POST['vehiculo'];
		$apodo = $_POST['apodo'];
		$trabajo = $_POST['trabajo'];
		$cedula = $_POST['cedula'];


		$consultaArticulos = "UPDATE clientes SET nombre='$nombre',apellido='$apellido',email='$email',direccion='$direccion',vehiculo='$vehiculo',apodo='$apodo',trabajo='$trabajo',cedula='$cedula' WHERE id = $id";
		$resultadoArticulos = mysqli_query($conex, $consultaArticulos);

		if ($resultadoArticulos) {
			header('Location: editarClientes.php');

		}

	}

$registro = $_GET['registro'];
	echo $registro;

		$consultaArticulos = "SELECT * FROM clientes WHERE id = $registro";
		$resultadoArticulos = mysqli_query($conex, $consultaArticulos);


if ($resultadoArticulos) {
			while ($row = $resultadoArticulos->fetch_array()) {
				$id = $row['id'];
				$nombre = $row['nombre'];
				$apellido = $row['apellido'];
				$email = $row['email'];
				$direccion = $row['direccion'];
				$vehiculo = $row['vehiculo'];
				$apodo = $row['apodo'];
				$trabajo = $row['trabajo'];
				$cedula = $row['cedula'];



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
 	<h1>Edicion Cliente</h1>

 	<section>
 		<form action="edicionClientes.php" method="POST" enctype="multipart/form-data">
 			<label>ID</label>
 			
 			<input type="number" value="<?php echo $id; ?>" name="id">
 			<p>Identificador unico</p>
 			

 			<label>NOMBRE</label>
 			
 			<input type="text" value="<?php echo $nombre; ?>" name="nombre" >
 			<p>Nombre del cliente</p>
 			
 			<label>APELLIDO</label>
 			
 			<input type="text" value="<?php echo $apellido; ?>" name="apellido" >
 			<p>Apellido de cliente</p>
 			
 			<label>EMAIL</label>
 			
 			<input type="email" value="<?php echo $email; ?>" name="email" >
 			<p>Correo</p>
 			
 			<label>DIRECCION</label>
 			
			<textarea name="direccion"><?php echo $direccion; ?></textarea>

 			<p>direccion</p>
 			
 		
 			<label>VEHICULO</label>
 			
 			<input type="number" value="<?php echo $vehiculo; ?>" name="vehiculo" >
 			<p>ID del vehiculo</p>
 			
 			<label>APODO</label>
 			
 			<input type="text" value="<?php echo $apodo; ?>" name="apodo" >
 			<p>Apodo del cliente</p>
 			
 			<label>TRABAJO</label>
 			
 			<input type="text" value="<?php echo $trabajo; ?>" name="trabajo" >
 			<p>Nombre trabajo</p>

 			<label>CEDULA</label>
 			
 			<input type="text" value="<?php echo $cedula; ?>" name="cedula" min="11" max="11" >
 			<p>Cedula o Pasaporte</p>


<h3>DATOS</h3>


<a href="edicionClientes.php?id=<?php echo $id; ?>">
<input type="submit" name="Editar" placeholder="Editar">
</a>

<h3>COMO LLENAR</h3>

 		</form>
 	</section>
 </main>


<?php 
	

}
}

?>


