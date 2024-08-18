<?php 
include 'panelHeader.php';
include 'conexion.php';

	if (isset($_POST['Enviar'])) {
				$id = $_POST['id'];
				$cliente = $_POST['cliente'];
				$vehiculo = $_POST['vehiculo'];

				$pago = $_POST['pago'];
				$metodopago = $_POST['metodopago'];
				$cantidadpago = $_POST['cantidadpago'];

		$consulta = "INSERT INTO facturas(cliente,vehiculo,pago,metodopago,cantidadpago) VALUES ('$cliente','$vehiculo','$pago','$metodopago','$cantidadpago')";
		
		$resultadoArticulos = mysqli_query($conex, $consulta);

		if ($resultadoArticulos === true) {
			echo '<script>alert("Datos Ingresados Correctamente")</script>';

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
 	<h1>Insertar Facturas</h1>

 	<section>
 		<form action="insertarFacturas.php" method="POST" enctype="multipart/form-data">
 			<label>ID</label>
 			
 			<input type="number" name="id">
 			<p>Identificador unico</p>
 			

 			<label>CLIENTE</label>
 			
 			<input type="number" name="cliente" required>
 			<p>ID del cliente</p>
 			
 			<label>VEHICULO</label>
 			
 			<input type="number" name="vehiculo" required>
 			<p>ID del veiculo</p>
 			
 			<label>PAGO</label>
 			
 			<input type="number" step="0.01" name="pago" max="30000000" required>
 			<p>Ultimo pago del cliente</p>
 			
 			<label>METODO DE PAGO</label>
 			
			<select name="metodopago">
				<option value="efectivo">Efectivo</option>
				<option value="tarjeta">Tarjeta</option>

			</select>

 			<p>(Efectivo o Tarjeta)</p>
 			
 		
 			<label>Cantidad Pagada</label>
 			
 			<input type="number" name="cantidadpago" min="6" required>
 			<p>Total de todo lo que lleva pagado pago</p>
 			

 			
<h3>DATOS</h3>


<input type="submit" name="Enviar">

<h3>COMO LLENAR</h3>

 		</form>
 	</section>
 </main>