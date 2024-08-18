<?php 
	include 'php/header.php';
?>

<div class="container acercade" >
<div class="seccionImagenContenido azul">
	Los Autos 🔥
</div>

<div class="seccionImagenContenido rojo">
	Apasionados Por
</div>


</div>
	

<main class="mainW">

	
	<!-- - - - - - - - - - - - - - Top Panel - - - - - - - - - - - - - - - - -->	




	

		<!-- - - - - - - - - - - end Slider - - - - - - - - - - - - - -->
		
		<!-- - - - - - - - - - - Search Panel - - - - - - - - - - - - - -->





		<!-- - - - - - - - - - end Search Panel - - - - - - - - - - - - -->
		
	</div><!--/ .top-panel-->
	
	<!-- - - - - - - - - - - - - end Top Panel - - - - - - - - - - - - - - - -->	
	
	<main class="main">

		
		<!-- - - - - - - - - - - - - - - Container - - - - - - - - - - - - - - - - -->	

		<section class="container sbr clearfix">
				<h3 class="widget-title">RECIENTES 🔥 Automobiles</h3>
				<hr>
				<section id="change-items" class="item-grid">
			<!-- - - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->		

			<section id="content" class="centrar two-thirds column">


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


	
<div class="card contenidos-3">

<div id="tarjetaInformacion " class="card-details">
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


<a href="all-listings.php">
<button class="learn-more">

  <span class="circle" aria-hidden="true">
  <span class="icon arrow"></span>
  </span>
  <span class="button-text">Ver todos</span>
</button>
  </a>
				
					
				</section><!--/ .item-grid-->
				
			</section><!--/ #content-->

			<!-- - - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - - -->	

	<!-- - - - - - - - - - - - - - - Sidebar - - - - - - - - - - - - - - - - -->	

			<aside id="sidebar" class="one-third column">
				
				<div class="widget-container widget_loan_calculator">
					
				
				
		</main>
				

			</aside><!--/ #sidebar-->

			<!-- - - - - - - - - - - - - end Sidebar - - - - - - - - - - - - - - - - -->

		</section><!--/.container -->

		<!-- - - - - - - - - - - - - end Container - - - - - - - - - - - - - - - - -->			
		
	</main><!--/ .main-->

	
<?php 
	include 'php/footer.php';
?>