<?php 
include 'panelHeader.php';

		include 'conexion.php';
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
			header('Location: carros.php?pagina=1');
		}
		if ($_GET['pagina']>$paginas || $_GET['pagina']<=0) {
			header('Location: carros.php?pagina=1');
			
		}



 ?>

<main class="container">
	<h1 class="tituloPanel">Bienvenido</h1>

	
	<h2 class="tituloCenter">Panel de control Eloisa SRL - Carros</h2>
	<p class="tituloCenter">Este es el listado de todos los carros</p>

	<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item <?php echo $_GET['pagina']<=1 ? 'disabled' : '' ?>">

    	<a class="page-link" href="carros.php?pagina=<?php echo $_GET['pagina']-1; ?>">Previous</a></li>


    <?php  for ($i = 0; $i < $paginas ; $i++) { ?>

    <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>">
    	<a class="page-link" href="carros.php?pagina=<?php echo $i+1; ?>">
    		<?php echo $i+1; ?>
    			
    	</a>
    </li>

    <?php  }//for ?>

    <li class="page-item <?php echo $_GET['pagina']>=$paginas ? 'disabled' : '' ?>">
    	<a class="page-link" href="carros.php?pagina=<?php echo $_GET['pagina']+1; ?>">Next</a></li>
  </ul>
</nav>


<section class="contnedorFiltros">


<?php  

		$iniciar = ($_GET['pagina']-1)*$articulo_x_pagina;
		$finalizar = $iniciar . $articulo_x_pagina;


		$consultaArticulos = "SELECT * FROM vehiculos LIMIT $iniciar, $finalizar";
		$resultadoArticulos = mysqli_query($conex, $consultaArticulos);


		if ($resultadoArticulos) {
			while ($row = $resultadoArticulos->fetch_assoc()) {
			
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
				$costo = $row['costo'];
				$cuandoIngreso = $row['cuandoIngreso'];
				$imagen2 = $row['imagen2'];



				if ($vendido == "No" || $vendido == "NO" || $vendido == "nO" || $vendido == "no") {

				 
?>

	<!-- <h2>Fila <?php //echo $i; ?></h2> -->

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

				}//if no esta vendido
				else{

				?>

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

		<a class="card-button" href="todaInfoCarro.php?id=<?php echo $id; ?>">
			Detalles
		</a>

</div>

	</div>	



				<?php
				
				

				}//else no esta vendido
			}			
		}
	
?>


</section>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>