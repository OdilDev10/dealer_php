<?php 
include 'panelHeader.php';

			include 'conexion.php';
		$consulta = "SELECT * FROM facturas";
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
			header('Location: facturas.php?pagina=1');
		}
		if ($_GET['pagina']>$paginas || $_GET['pagina']<=0) {
			header('Location: facturas.php?pagina=1');
			
		}



 ?>

<main class="container">
	<h1 class="tituloPanel">Bienvenido</h1>
	
	<h2 class="tituloCenter">panel de control Eloisa srl - Facturas</h2>
	<p class="tituloCenter">Este es el listado de todos las facturas</p>


	<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item <?php echo $_GET['pagina']<=1 ? 'disabled' : '' ?>">

    	<a class="page-link" href="facturas.php?pagina=<?php echo $_GET['pagina']-1; ?>">Previous</a></li>


    <?php  for ($i = 0; $i < $paginas ; $i++) { ?>

    <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>">
    	<a class="page-link" href="facturas.php?pagina=<?php echo $i+1; ?>">
    		<?php echo $i+1; ?>
    			
    	</a>
    </li>

    <?php  }//for ?>

    <li class="page-item <?php echo $_GET['pagina']>=$paginas ? 'disabled' : '' ?>">
    	<a class="page-link" href="facturas.php?pagina=<?php echo $_GET['pagina']+1; ?>">Next</a></li>
  </ul>
</nav>


<section class="contnedorFiltros">

<?php 


		$iniciar = ($_GET['pagina']-1)*$articulo_x_pagina;
		$finalizar = $iniciar . $articulo_x_pagina;


		$consultaArticulos = "SELECT * FROM facturas LIMIT $iniciar, $finalizar";
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


					$consulta3 = "SELECT * FROM clientes WHERE id = $cliente";
					$resultado3 = mysqli_query($conex, $consulta3);				
//traer el nombre del cliente
						while ($row3 = $resultado3->fetch_array()) {
						$nombrecliente = $row3['nombre'];
						$apellidocliente = $row3['apellido'];


				?>

	<!-- <h2>Fila <?php //echo $i; ?></h2> -->

<div class="contenidos card contenidos-2">

<div id="tarjetaInformacion" class="card-details">
	<div class="img-contenido">
			<p>Imagen Opcional</p>
		</div>
		
		<b class="text-title">ID: <?php echo $id; ?> <?php echo $nombrecliente . " " . $apellidocliente;?></b>
		<br>
		<div class="text-body">
		<b>cliente: <i><?php echo $cliente; ?></i></b><br>
		<b>vehiculo: <i><?php echo $vehiculo; ?></i></b><br>
		<b>fecha_creacion: <i><?php echo $fecha_creacion; ?></i></b><br>
		<b>ultimo pago: <i><?php echo $pago; ?></i></b><br>

		<b>metodopago: <i><?php echo $metodopago; ?></i></b><br>
		<b>cantidadpago: <i><?php echo $cantidadpago; ?></i></b><br>

		</div>

		<!-- <a class="card-button" href="todaInfo.php?id=<?php echo $cliente; ?>">
			Detalles
		</a> -->
</div>

	</div>	



				<?php 
				}		
			}			
		}
	
?>
</section>

</main>


</body>
</html>