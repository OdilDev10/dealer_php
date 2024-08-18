<?php 
	include 'php/header.php';


		include 'php/conexion.php';
		$consulta = "SELECT * FROM vehiculos";
		$resultado = mysqli_query($conex, $consulta);


		//esto es para paginacion
		$articulo_x_pagina = 10;
		$total_articulos_db = count($resultado->fetch_all());

		// echo $total_articulos_db . "<br>total";
		$paginas = $total_articulos_db/10;
		$paginas = ceil($paginas);

		// echo $paginas . "<br>paginas";

		//paginacion termina
		if (!$_GET) {
			header('Location: all-listings.php?pagina=1');
		}
		if ($_GET['pagina']>$paginas || $_GET['pagina']<=0) {
			header('Location: all-listings.php?pagina=1');
			
		}


?>
	
	<!-- - - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - - -->	
	
	
	<div class="main">

		<!-- - - - - - - - - - - - - - - Container - - - - - - - - - - - - - - - - -->	

		<section class="clearfix">
	<section class="contenedorMain">	
<div class="contenedorAside">
	
	<?php 

	include 'php/aside.php'
	 ?>
</div>




			<!-- - - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->		
<div class="contenedorDeCarros">
	
	<section id="content" class="two-thirds column">
				
				<div class="page-header clearfix">

					<h3 class="section-title" id="list-item-1">Automobiles</h3>


				</div><!--/ .page-header-->

	<section class="contnedorFiltros">

<?php 

		$iniciar = ($_GET['pagina']-1)*$articulo_x_pagina;
		$finalizar = $iniciar . $articulo_x_pagina;


		$consultaArticulos = "SELECT * FROM vehiculos LIMIT '$iniciar', '$finalizar'";
		$resultadoArticulos = mysqli_query($conex, $consultaArticulos);

		if ($resultadoArticulos) {
			while ($row = $resultadoArticulos->fetch_array()) {
			
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

<div class="tarjetaCarros card">
	<div class="imgTarjeta">
	<img src="data:image/*;base64,<?php echo base64_encode($imagen); ?>">
	</div>

	<section>
	<div>
		<b class="text-title"><?php echo $marca; ?> <?php echo $modelo; ?></b>
	</div>
	<div>
		<ul>
			<li><b>Estado: </b><i><?php echo $estado; ?></i></li>
			<li><b>Precio: </b><i><?php echo $precio; ?></i></li>
			<li><b>Año:</b> <i><?php echo $year; ?></i></li>
			<li><b>chasis: </b><i><?php echo $chasis; ?></i></li>
			<li><b>Carroser</b>ia: <i><?php echo $carroseria; ?></li>
			<li><b>Color: </b><i><?php echo $color; ?></i></li>
			<li><b>vendido:</b> <i><?php echo $vendido; ?></i></li>
			<a class="card-button" href="one-products.php?id=<?php echo $id; ?>">
			Detalles
		</a>
		</ul>
	</div>

	</section>
</div>





				<?php 

			
			}			
		}
	
?>





				</section><!--/ #change-items-->	

				<div class="wp-pagenavi clearfix">


					<nav aria-label="Page navigation example">
  <ul class="pagination" id="list-item-2">
    <li class="page-item <?php echo $_GET['pagina']<=1 ? 'disabled' : '' ?>">

    	<a class="page-link" href="all-listings.php?pagina=<?php echo $_GET['pagina']-1; ?>">Previous</a></li>


    <?php  for ($i = 0; $i < $paginas ; $i++) { ?>

    <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>">
    	<a class="page-link" href="all-listings.php?pagina=<?php echo $i+1; ?>">
    		<?php echo $i+1; ?>
    			
    	</a>
    </li>

    <?php  }//for ?>

    <li class="page-item <?php echo $_GET['pagina']>=$paginas ? 'disabled' : '' ?>">
    	<a class="page-link" href="all-listings.php?pagina=<?php echo $_GET['pagina']+1; ?>">Next</a></li>
  </ul>
</nav>




					<span class="pages">Autos Eloisa SRL</span>

					
				</div><!--/ .wp-pagenavi-->




			</section><!--/ #content-->

</div>




</section>	


		

			<!-- - - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - - -->	

			<!-- - - - - - - - - - - - - - - Sidebar - - - - - - - - - - - - - - - - -->	



			<!-- - - - - - - - - - - - - end Sidebar - - - - - - - - - - - - - - - - -->

		</section><!--/.container -->


		<!-- - - - - - - - - - - - - end Container - - - - - - - - - - - - - - - - -->			
		
	</div><!--/ .main-->

	
	<!-- - - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->	
<?php 
	include 'php/footer.php';
?>