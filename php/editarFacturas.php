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
			header('Location: editarFacturas.php?pagina=1');
		}
		if ($_GET['pagina']>$paginas || $_GET['pagina']<=0) {
			header('Location: editarFacturas.php?pagina=1');
			
		}



 ?>


<main class="container">
	<h1 class="tituloPanel">Bienvenido</h1>
	
	<h2 class="tituloCenter">panel de control Eloisa srl - EDITAR Facturas</h2>
	<p class="tituloCenter">Este es el listado de todos las facturas</p>


	<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item <?php echo $_GET['pagina']<=1 ? 'disabled' : '' ?>">

    	<a class="page-link" href="editarFacturas.php?pagina=<?php echo $_GET['pagina']-1; ?>">Previous</a></li>


    <?php  for ($i = 0; $i < $paginas ; $i++) { ?>

    <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>">
    	<a class="page-link" href="editarFacturas.php?pagina=<?php echo $i+1; ?>">
    		<?php echo $i+1; ?>
    			
    	</a>
    </li>

    <?php  }//for ?>

    <li class="page-item <?php echo $_GET['pagina']>=$paginas ? 'disabled' : '' ?>">
    	<a class="page-link" href="editarFacturas.php?pagina=<?php echo $_GET['pagina']+1; ?>">Next</a></li>
  </ul>
</nav>


 <main>

 	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#ID Factura</th>
      <th scope="col">ID Cliente</th>
      <th scope="col">ID Vehiculo</th>
      <th scope="col">Pago</th>
      <th scope="col">Metodo de Pago</th>
      <th scope="col">Cantidad Total de pago</th>

    </tr>
  </thead>
  <tbody>

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

						while ($row3 = $resultado3->fetch_array()) {
						$nombrecliente = $row3['nombre'];
						$apellidocliente = $row3['apellido'];

?>


    <tr>
      <th scope="row"><?php echo $id; ?></th>

      <td><?php echo $cliente; ?></td>
      <td><?php echo $vehiculo; ?></td>
      <td><?php echo $pago; ?></td>
      <td><?php echo $metodopago; ?></td>
      <td><?php echo $cantidadpago; ?></td>
      <td>
      	<a href="edicion.php?registro=<?php echo $id; ?>"><button type="button" class="btn btn-warning">Editar</button></a>
      	<a class="eliminar" href="eliminar.php?registro=<?php echo $id; ?>"><button type="button" class="btn btn-danger">Eliminar</button></a>
      </td>
      <script type="text/javascript">
    	
    	const eliminar = document.querySelectorAll('a.eliminar');

    	eliminar.addEventListener("click",function(e) {
    	const respuesta = confirm("Estas seguro?"); 
			if(respuesta == true){
				alert("eliminando");
						
			}else{
				e.preventDefault() 
				alert("cancelando");

			}	

    	})
      
		
      </script>

    </tr>
    <tr>


<?php 
	}

}
}
?>



  </tbody>
</table>

 </main>