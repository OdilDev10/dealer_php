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
			header('Location: editarClientes.php?pagina=1');
		}
		if ($_GET['pagina']>$paginas || $_GET['pagina']<=0) {
			header('Location: editarClientes.php?pagina=1');
			
		}



 ?>


<main class="container">
	<h1 class="tituloPanel">Bienvenido</h1>
	
	<h2 class="tituloCenter">panel de control Eloisa srl - EDITAR Clientes</h2>
	<p class="tituloCenter">Este es el listado de todos las facturas</p>


	<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item <?php echo $_GET['pagina']<=1 ? 'disabled' : '' ?>">

    	<a class="page-link" href="editarClientes.php?pagina=<?php echo $_GET['pagina']-1; ?>">Previous</a></li>


    <?php  for ($i = 0; $i < $paginas ; $i++) { ?>

    <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>">
    	<a class="page-link" href="editarClientes.php?pagina=<?php echo $i+1; ?>">
    		<?php echo $i+1; ?>
    			
    	</a>
    </li>

    <?php  }//for ?>

    <li class="page-item <?php echo $_GET['pagina']>=$paginas ? 'disabled' : '' ?>">
    	<a class="page-link" href="editarClientes.php?pagina=<?php echo $_GET['pagina']+1; ?>">Next</a></li>
  </ul>
</nav>


 <main>

 	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#ID Cliente</th>
      <th scope="col">Nombe</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
      <th scope="col">Direccion</th>
      <th scope="col">Vehiculo</th>
      <th scope="col">Apodo</th>
      <th scope="col">Trabajo</th>
      <th scope="col">Cedula</th>



    </tr>
  </thead>
  <tbody>

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
				$cedula = $row['cedula'];?>


    <tr>
      <th scope="row"><?php echo $id; ?></th>

      <td><?php echo $nombre; ?></td>
      <td><?php echo $apellido; ?></td>

      <td><?php echo $email; ?></td>
      <td><?php echo $direccion; ?></td>
      <td><?php echo $vehiculo; ?></td>
      <td><?php echo $apodo; ?></td>
      <td><?php echo $trabajo; ?></td>
      <td><?php echo $cedula; ?></td>

      <td>
      	<a href="edicionClientes.php?registro=<?php echo $id; ?>"><button type="button" class="btn btn-warning">Editar</button></a>
      	<a id="eliminar" href="eliminar.php?cliente=<?php echo $id; ?>"><button type="button" class="btn btn-danger">Eliminar</button></a>
      </td>
      <script type="text/javascript">
    	
    	const eliminar = document.getElementById('eliminar');

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
?>



  </tbody>
</table>

 </main>