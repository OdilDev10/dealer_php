<?php 
include 'panelHeader.php';
include 'conexion.php';


	if (isset($_POST['Editar'])) {
		$id = $_POST['id'];
		$cliente = $_POST['cliente'];
		$vehiculo = $_POST['vehiculo'];
		$pago = $_POST['pago'];
		$metodopago = $_POST['metodopago'];
		$cantidadpago = $_POST['cantidadpago'];

		$consultaArticulos = "UPDATE facturas SET cliente='$cliente',vehiculo='$vehiculo',pago='$pago',metodopago='$metodopago',cantidadpago='$cantidadpago' WHERE id = $id";
		$resultadoArticulos = mysqli_query($conex, $consultaArticulos);

		if ($resultadoArticulos) {
			header('Location: editarFacturas.php');

		}

	}

$registro = $_GET['registro'];


		$consultaArticulos = "SELECT * FROM facturas WHERE id = $registro";
		$resultadoArticulos = mysqli_query($conex, $consultaArticulos);


if ($resultadoArticulos) {
			while ($row = $resultadoArticulos->fetch_array()) {
				$id = $row['id'];
				$cliente = $row['cliente'];
				$vehiculo = $row['vehiculo'];
				$fecha_creacion = $row['fecha_creacion'];
				$pago = $row['pago'];
				$metodopago = $row['metodopago'];
				$cantidadpago = $row['cantidadpago'];



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
 	<h1>Edicion Factura</h1>


 	<section>
 		<form action="edicion.php" method="POST" enctype="multipart/form-data">


 			<label>ID</label>
 			
 			<input type="number" value="<?php echo $id; ?>" name="id">
 			<p>Identificador unico</p>
 			

 			<label>CLIENTE</label>
 			
 			<input type="number" value="<?php echo $cliente; ?>" name="cliente" >
 			<p>ID del cliente</p>
 			
 			<label>VEHICULO</label>
 			
 			<input type="number" value="<?php echo $vehiculo; ?>" name="vehiculo" >
 			<p>ID del veiculo</p>
 			
 			<label>PAGO</label>
 			
 			<input type="number" value="<?php echo $pago; ?>" name="pago" max="30000000" >
 			<p>Ultimo pago del cliente</p>
 			
 			<label>METODO DE PAGO</label>
 			
			<select name="metodopago">
				<option value="efectivo">Efectivo</option>
				<option value="tarjeta">Tarjeta</option>

			</select>

 			<p>(Efectivo o Tarjeta)</p>
 			
 		
 			<label>Cantidad Pagada</label>
 			
 			<input type="number" value="<?php echo $cantidadpago; ?>" name="cantidadpago" min="6" >
 			<p>Total de todo lo que lleva pagado pago</p>
 			

 			
<h3>DATOS</h3>

<a href="edicion.php?id=<?php echo $id; ?>">
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


