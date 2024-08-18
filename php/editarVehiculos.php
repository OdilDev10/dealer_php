<?php 
include 'panelHeader.php';
include 'conexion.php';

	
		$consulta = "SELECT * FROM vehiculos";
		$resultado = mysqli_query($conex, $consulta);

		//esto es para paginacion
		$articulo_x_pagina = 50;
		$total_articulos_db = count($resultado->fetch_all());

		// echo $total_articulos_db . "<br>total";
		$paginas = $total_articulos_db/50;
		$paginas = ceil($paginas);

		// echo $paginas . "<br>paginas";

		//paginacion termina
		if (!$_GET) {
			header('Location: editarVehiculos.php?pagina=1');
		}
		if ($_GET['pagina']>$paginas || $_GET['pagina']<=0) {
			header('Location: editarVehiculos.php?pagina=1');
			
		}



 ?>


<style type="text/css">
	main{
		width: 100%;
		padding: 10px;
	}
</style>

<main >
	<h1 class="tituloPanel">Bienvenido</h1>
	
	<h2 class="tituloCenter">panel de control Eloisa srl - EDITAR Vehiculos</h2>
	<p class="tituloCenter">Este es el listado de todos las vehiculos</p>


	<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item <?php echo $_GET['pagina']<=1 ? 'disabled' : '' ?>">

    	<a class="page-link" href="editarVehiculos.php?pagina=<?php echo $_GET['pagina']-1; ?>">Previous</a></li>


    <?php  for ($i = 0; $i < $paginas ; $i++) { ?>

    <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>">
    	<a class="page-link" href="editarVehiculos.php?pagina=<?php echo $i+1; ?>">
    		<?php echo $i+1; ?>
    			
    	</a>
    </li>

    <?php  }//for ?>

    <li class="page-item <?php echo $_GET['pagina']>=$paginas ? 'disabled' : '' ?>">
    	<a class="page-link" href="editarVehiculos.php?pagina=<?php echo $_GET['pagina']+1; ?>">Next</a></li>
  </ul>
</nav>


 <main>

 	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#ID Vehiculo</th>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Precio</th>

      <th scope="col">Año</th>
      <th scope="col">Chasis</th>
      <th scope="col">Carroseria</th>
      <th scope="col">Propietario</th>
      <th scope="col">Color</th>
      <th scope="col">Vendido</th>
      <th scope="col">Estado</th>
      <th scope="col">Placa</th>
      <th scope="col">Costo</th>
      <th scope="col">Fecha de Ingreso</th>
      <th scope="col">Acciones</th>






    </tr>
  </thead>
  <tbody>

<?php 



		$iniciar = ($_GET['pagina']-1)*$articulo_x_pagina;
		$finalizar = $iniciar . $articulo_x_pagina;
	
		$consultaArticulos = "SELECT * FROM vehiculos LIMIT $iniciar, $finalizar";
		$resultadoArticulos = mysqli_query($conex, $consultaArticulos);


		if ($resultadoArticulos) {
			while ($row = $resultadoArticulos->fetch_array()) {
			
				$id = $row['id'];
				$marca = $row['marca'];
				$modelo = $row['modelo'];
				$precio = $row['precio'];
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





?>


    <tr>
      <th scope="row"><?php echo $id; ?></th>

      <td><?php echo $marca; ?></td>
      <td><?php echo $modelo; ?></td>
      <td><?php echo $precio; ?></td>

      <td><?php echo $year; ?></td>
      <td><?php echo $chasis; ?></td>
      <td><?php echo $carroseria; ?></td>
      <td><?php echo $propietario; ?></td>
      <td><?php echo $color; ?></td>
      <td><?php echo $vendido; ?></td>
      <td><?php echo $estado; ?></td>
      <td><?php echo $placa; ?></td>
      <td><?php echo $costo; ?></td>
      <td><?php echo $cuandoIngreso; ?></td>

      
      <td>
      	<div>
      	<a href="edicionVehiculos.php?registro=<?php echo $id; ?>"><button type="button" class="btn btn-warning">Editar</button></a>
      	<a class="eliminar" href="eliminar.php?vehiculo=<?php echo $id; ?>"><button type="button" class="btn btn-danger">Eliminar</button></a>
      	</div>
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
?>



  </tbody>
</table>


 </main>