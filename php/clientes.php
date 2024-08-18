<?php 
include 'panelHeader.php';


		include 'conexion.php';
		$consulta = "SELECT * FROM clientes";
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
			header('Location: clientes.php?pagina=1');
		}
		if ($_GET['pagina']>$paginas || $_GET['pagina']<=0) {
			header('Location: clientes.php?pagina=1');
			
		}


 ?>



<main class="container">
	<h1 class="tituloPanel">Bienvenido</h1>
	
	<h2 class="tituloCenter">panel de control Eloisa srl - Clientes</h2>
	<p class="tituloCenter">Este es el listado de todos los clientes</p>



	<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item <?php echo $_GET['pagina']<=1 ? 'disabled' : '' ?>">

    	<a class="page-link" href="clientes.php?pagina=<?php echo $_GET['pagina']-1; ?>">Previous</a></li>


    <?php  for ($i = 0; $i < $paginas ; $i++) { ?>

    <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>">
    	<a class="page-link" href="clientes.php?pagina=<?php echo $i+1; ?>">
    		<?php echo $i+1; ?>
    			
    	</a>
    </li>

    <?php  }//for ?>

    <li class="page-item <?php echo $_GET['pagina']>=$paginas ? 'disabled' : '' ?>">
    	<a class="page-link" href="clientes.php?pagina=<?php echo $_GET['pagina']+1; ?>">Next</a></li>
  </ul>
</nav>



<section class="contnedorFiltros">

<?php 


		$iniciar = ($_GET['pagina']-1)*$articulo_x_pagina;
		$finalizar = $iniciar . $articulo_x_pagina;


		$consultaArticulos = "SELECT * FROM clientes LIMIT $iniciar, $finalizar";
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
				$fecha = $row['fecha'];


				$i++;
				?>

	<!-- <h2>Fila <?php //echo $i; ?></h2> -->

<div class="contenidos card contenidos-2">

<div id="tarjetaInformacion" class="card-details">
	<div class="img-contenido">
			<p>Imagen Opcional</p>
		</div>
		
		<b class="text-title">ID: <?php echo $id; ?> <?php echo $nombre . " " . $apellido;?></b>
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

		<a class="card-button" href="todaInfoCliente.php?id=<?php echo $id; ?>">
			Detalles
		</a>
</div>

	</div>	



				<?php 

			
			}			
		}
	
?>
</section>

</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>