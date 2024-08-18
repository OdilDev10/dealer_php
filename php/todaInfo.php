









		
<?php include 'panelHeader.php'; ?>
	<h1 class="tituloPanel">Todos los detalles</h1>


<?php 

	$_GET['cliente'];

	$idCliente = $_GET['cliente'];
	
		include 'conexion.php';
		$consulta = "SELECT * FROM clientes WHERE id = $idCliente";
		$resultado = mysqli_query($conex, $consulta);

		$resultado = mysqli_query($conex, $consulta);

		if ($resultado) {
			while ($row = $resultado->fetch_array()) {
//traer cliente
					$idCliente = $row['id'];

					$nombre = $row['nombre'];
					$apellido = $row['apellido'];
					$email = $row['email'];
					$direccion = $row['direccion'];
					$vehiculo = $row['vehiculo'];
					$apodo = $row['apodo'];
					$trabajo = $row['trabajo'];
					$cedula = $row['cedula'];
					$fecha = $row['fecha'];
	?>


<h2 class="tituloPanel">Cliente y Factura</h2>

<div class="contenidos card contenidos-2">

<div id="tarjetaInformacion" class="card-details">
	<div class="img-contenido">
			<p>Imagen Opcional</p>
		</div>
		
		<b class="text-title">ID: <?php echo $idCliente; ?> <?php echo $nombre . " " . $apellido;?></b>
		<br>
		<div class="text-body">
		<b>email: <i><?php echo $email; ?></i></b><br>
		<b>direccion: <i><?php echo $direccion; ?></i></b><br>
		<b>vehiculo: <i><?php echo $vehiculo; ?></i></b><br>
		<b>apodo: <i><?php echo $apodo; ?></i></b><br>
		<b>trabajo: <i><?php echo $trabajo; ?></i></b><br>
		<b>cedula: <i><?php echo $cedula; ?></i></b><br>
		<b>fecha: <i><?php echo $fecha; ?></i></b><br>

		</div>


</div>

	</div>	

<?php 
	
	}//Cliente

//traer factura
				$consulta5 = "SELECT * FROM facturas WHERE cliente = $idCliente";
				$resultado5 = mysqli_query($conex, $consulta5);				

				while ($row5 = $resultado5->fetch_array()) {
				$id = $row5['id'];
				$cliente = $row5['cliente'];
				$vehiculo = $row5['vehiculo'];
				$metodopago = $row5['metodopago'];
				$cantidadpago = $row5['cantidadpago'];
				$fecha_creacion = $row5['fecha_creacion'];
				$pago = $row5['pago'];

//traer el precio del carro
					$consulta3 = "SELECT precio FROM vehiculos WHERE propietario = $cliente";
	 				$resultado3 = mysqli_query($conex, $consulta3);		

	 				 	while ($row3 = $resultado3->fetch_array()) {

						$preciovehiculo = $row3['precio'];


 ?>

<div class="contenidos card contenidos-2">

<div id="tarjetaInformacion" class="card-details">
	<div class="img-contenido">
			<p>Imagen Opcional</p>
		</div>
		
		<b class="text-title">ID factura: <?php echo $id; ?><br> <?php echo $nombre . " " . $apellido;?></b>
		<br>
		<div class="text-body">
		<b>vehiculo: <i><?php echo $vehiculo; ?></i></b><br>
		<b>Precio vehiculo: <i><?php echo $preciovehiculo; ?></i></b><br>

		<b>Metodo de Pago: <i><?php echo $metodopago; ?></i></b><br>
		<b>pago: <i><?php echo $pago; ?></i></b><br>
		<b>Cantidad de Pago: <i><?php echo $cantidadpago; ?></i></b><br>
		<b>fecha_creacion: <i><?php echo $fecha_creacion; ?></i></b><br>
		
		</div>


</div>

	</div>	

<?php 
	}//precio
}//Factura



//traer vehiculo

				$consulta2 = "SELECT * FROM vehiculos WHERE propietario = $idCliente";
 				$resultado2 = mysqli_query($conex, $consulta2);		
 				 	while ($row2 = $resultado2->fetch_array()) {
					$id = $row2['id'];
					
					$marca = $row2['marca'];
					$modelo = $row2['modelo'];
					$precio = $row2['precio'];
					$imagen = $row2['imagen'];
					$year = $row2['year'];
					$chasis = $row2['chasis'];
					$carroseria = $row2['carroseria'];
					$propietario = $row2['propietario'];
					$color = $row2['color'];
					$vendido = $row2['vendido'];
					$estado = $row2['estado'];
					$placa = $row2['placa'];
					$placa = $row2['placa'];
					$costo = $row2['costo'];
					$cuandoIngreso = $row2['cuandoIngreso'];


 ?>

<h2 class="tituloPanel">Vehiculos</h2> 

<div class="contenidos card contenidos-2">

<div id="tarjetaInformacion" class="card-details">
	<div class="img-contenido">
								<img src="data:image/*;base64,<?php echo base64_encode($imagen); ?>">

		</div>
		
	
		<b class="text-title">ID: <?php echo $id ." ". $marca; ?> <?php echo $modelo; ?></b>
		<br>
		<div class="text-body">
		<b>Estado: <i><?php echo $estado; ?></i></b><br>
		<b>Precio: <i><?php echo $precio; ?></i></b><br>
		<b>Año: <i><?php echo $year; ?></i></b><br>
		<b>chasis: <i><?php echo $chasis; ?></i></b><br>
		<b>Carroseria: <i><?php echo $carroseria; ?></i></b><br>
		<b>Propietario: <i><?php echo $propietario; ?></i></b><br>
		<b>Color: <i><?php echo $color; ?></i></b><br>
		<b>vendido: <i><?php echo $vendido; ?></i></b><br>
		<b>Placa: <i><?php echo $placa; ?></i></b><br>
		<b>Costo: <i><?php echo $costo; ?></i></b><br>
		<b>Cuando Ingreso: <i><?php echo $cuandoIngreso; ?></i></b><br>

		</div>



</div>

	</div>	
				<?php 

			}//vehiculo
					
		}//if

		else {
			echo 'No hay resultados';
		}
	
?>

</body>
</html>




