		
<aside id="sidebar"  class="one-third column">
				
				<div id="spyscroll" class="widget-container widget_custom_search">
					
					<div class="search-heading">
							
						<h3 class="widget-title">Buscador</h3>
						
					</div><!--/ .search-heading-->
					
					<div class="search-entry clearfix">

						<form action="/" class="form-panel">

<?php 
	

 ?>
<div  id="list-example" class="list-group">
  <a class="list-group-item list-group-item-action" href="#list-item-1">Arriba</a>
  <a class="list-group-item list-group-item-action" href="#list-item-2">Abajo</a>

</div>
				

				<div class="widget-container widget_latest">
					
					<h3 class="widget-title">Ultimos Carros</h3>
					
<?php 
		include 'php/conexion.php';

		$consulta = "SELECT * FROM vehiculos WHERE id=(SELECT max(id) FROM vehiculos)";
		$resultado = mysqli_query($conex, $consulta);

		if ($resultado) {
			while ($row = $resultado->fetch_array()) {
				$id = $row['id'];
				$marca = $row['marca'];
				$modelo = $row['modelo'];
				$precio = $row['precio'];
				$imagen = $row['imagen'];

				$year = $row['year'];
				$chasis = $row['chasis'];
				$carroseria = $row['carroseria'];
				$propietario = $row['propietario'];
				$color = $row['color'];
				$vendido = $row['vendido'];
				$estado = $row['estado'];
				$placa = $row['placa'];
				$placa = $row['placa'];
				$costo = $row['costo'];
				$cuandoIngreso = $row['cuandoIngreso'];


?>



	
<div class=" card contenidos-3">

<div id="tarjetaInformacion" class="card-details">
	<div class="img-contenido">
		<img src="data:image/*;base64,<?php echo base64_encode($imagen); ?>">

		</div>
		
	
		<b class="text-title"><?php echo $marca; ?> <?php echo $modelo; ?></b>

		<br>
		<div class="text-body">
		<b>Estado: <i><?php echo $estado; ?></i></b><br>
		<b>Precio: <i><?php echo $precio; ?></i></b><br>
		<b>Año: <i><?php echo $year; ?></i></b><br>
		<b>chasis: <i><?php echo $chasis; ?></i></b><br>
		<b>Carroseria: <i><?php echo $carroseria; ?></i></b><br>
		<b>Color: <i><?php echo $color; ?></i></b><br>
		<b>vendido: <i><?php echo $vendido; ?></i></b><br>

		</div>

				<a class="card-button" href="one-products.php?id=<?php echo $id; ?>">Detalles</a>

</div>

	</div>	

<?php 

	}//while
}//if

 ?>	

					
				</div><!--/ .widget-container-->

			</aside><!--/ #sidebar-->