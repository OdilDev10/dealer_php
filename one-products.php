<?php 
include 'php/header.php';

		if (!$_GET) {
			header('Location: all-listings.php?pagina=1');
		}

 ?>
	
	<!-- - - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - - -->	
	
	
	<div class="main">

		<!-- - - - - - - - - - - - - - - Container - - - - - - - - - - - - - - - - -->	
<?php 
		include 'php/conexion.php';


		$id = $_GET['id'];
		$consulta = "SELECT * FROM vehiculos WHERE id = $id";
		$resultado = mysqli_query($conex, $consulta);

		if ($resultado) {
			while ($row = $resultado->fetch_array()) {

				$id = $row['id'];
				$marca = $row['marca'];
				$modelo = $row['modelo'];
				$precio = $row['precio'];
				$imagen = $row['imagen'];
				$imagen2 = $row['imagen2'];
				$imagen3 = $row['imagen3'];
				$imagen4 = $row['imagen4'];
				$imagen5 = $row['imagen5'];


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


	<section class="contenedorMain">	
<div class="contenedorAside">

		<section id="contenedorProducto" class="clearfix">
<aside id="redesProducto">
	<div>
		<h3>Contactanos</h3>
		<a href="https://www.instagram.com/el_oisa8144/">Instragram</a>
		<a href="https://web.facebook.com/people/Eloisa-AUTO-import/100063567721587/?_rdc=1&_rdr">Facebook</a>
		<a href="https://api.whatsapp.com/send?phone=8096715201&text=Hola, Nececito mas informacion!">Whatsapp</a>
		<h2>Galeria</h2>
		<div>
		<!-- Imagen 2		 -->
		<?php 
		if ($imagen2 == null) {
				
		?>
			<img src="images/fondo.jpg">

		<?php
		}//if
		else{
		?>
			<img src="data:image/*;base64,<?php echo base64_encode($imagen2); ?>">

		<?php
		}//else
			 ?>

		<!-- Imagen 3		 -->
		<?php 
		if ($imagen3 == null) {
				
		?>
			<img src="images/fondo.jpg">

		<?php
		}//if
		else{
		?>
		<img src="data:image/*;base64,<?php echo base64_encode($imagen3); ?>">

		<?php
		}//else
			 ?>

		<!-- Imagen 4		 -->
		<?php 
		if ($imagen4 == null) {
				
		?>
			<img src="images/fondo.jpg">

		<?php
		}//if
		else{
		?>
		<img src="data:image/*;base64,<?php echo base64_encode($imagen4); ?>">

		<?php
		}//else
			 ?>

		<!-- Imagen 5		 -->
		<?php 
		if ($imagen5 == null) {
				
		?>
			<img src="images/fondo.jpg">

		<?php
		}//if
		else{
		?>
		<img src="data:image/*;base64,<?php echo base64_encode($imagen5); ?>">

		<?php
		}//else
			 ?>


		</div>
	</div>
</aside>


</div>

			<!-- - - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->		
<div class="contenedorDeCarros">

			<section class="two-thirds column">


	<h2 class="widget-title">Vehiculo Seleccionado</h2>
<div class=" card contenidos-3">

<div id="tarjetaInformacion" class="card-details">
	<div class="img-contenido">
						<img src="data:image/jpg;base64,<?php echo base64_encode($imagen); ?>">

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
		<b>Cuando Ingreso: <i><?php echo $cuandoIngreso; ?></i></b><br>

		</div>


</div>

	</div>	




<?php 

	}//while
}//if

 ?>	
				
		</section><!--/.container -->
</div>

		<!-- - - - - - - - - - - - - end Container - - - - - - - - - - - - - - - - -->			
		
	</div><!--/ .main-->

	
	<!-- - - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->	
	
<?php include 'php/footer.php'; ?>