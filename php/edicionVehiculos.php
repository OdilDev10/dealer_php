<?php 
include 'panelHeader.php';
include 'conexion.php';


	if (isset($_POST['Editar'])) {
		$id = $_POST['id'];
				$marca = $_POST['marca'];
				$modelo = $_POST['modelo'];
				$precio = $_POST['precio'];
				$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
				$year = $_POST['year'];
				$chasis = $_POST['chasis'];
				$carroseria = $_POST['carroseria'];
				$propietario = $_POST['propietario'];
				$color = $_POST['color'];
				$vendido = $_POST['vendido'];
				$estado = $_POST['estado'];
				$placa = $_POST['placa'];
				$costo = $_POST['costo'];

				$imagen2 = addslashes(file_get_contents($_FILES['imagen2']['tmp_name']));
				$imagen3 = addslashes(file_get_contents($_FILES['imagen3']['tmp_name']));
				$imagen4 = addslashes(file_get_contents($_FILES['imagen4']['tmp_name']));
				$imagen5 = addslashes(file_get_contents($_FILES['imagen5']['tmp_name']));



		$consultaArticulos = "UPDATE vehiculos SET marca='$marca',modelo='$modelo',precio='$precio',imagen='$imagen',year='$year',chasis='$chasis',carroseria='$carroseria',propietario='$propietario',color='$color',vendido='$vendido',estado='$estado',placa='$placa',costo='$costo',imagen2='$imagen2',imagen3='$imagen3',imagen4='$imagen4',imagen5='$imagen5' WHERE id = $id";
		$resultadoArticulos = mysqli_query($conex, $consultaArticulos);

		if ($resultadoArticulos) {
			header('Location: editarVehiculos.php');
		}

	}

$registro = $_GET['registro'];


		$consultaArticulos = "SELECT * FROM vehiculos WHERE id = $registro";
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
				$imagen2 = $row['imagen2'];




?>

<style type="text/css">

	label, p{
		background: #D52A2A;
		color: #fff;
		font-weight: bold;
		text-align: center;
		border-radius: 2px;
		margin: 3px;
	}
	p{
		width: 300px;
		background: #2AD5C0;
		color: #000;
	}
</style>

 <main>

 	<h1>Edicion Vehiculo</h1>

 	<section>
 		<form action="edicionVehiculos.php" method="POST" enctype="multipart/form-data">
 			<label>ID</label>
 			
 			<input type="number" value="<?php echo $id; ?>" name="id" >
 			<p>Identificador unico</p>
 			

 			<label>MARCA</label>
 			
 			<input type="text" value="<?php echo $marca; ?>" name="marca" required>
 			<p>Nombre marca</p>
 			
 			<label>MODELO</label>
 			
 			<input type="text" value="<?php echo $modelo; ?>" name="modelo" required>
 			<p>Modelo de marca</p>
 			
 			<label>PRECIO</label>
 			
 			<input type="number" value="<?php echo $precio; ?>" name="precio" max="30000000" required>
 			<p>(En numeros)</p>
 			
 			<label>IMAGEN</label>
 			
			<input type="file" name="imagen" accept="image/*">

 			<p>(Link de imagen en internet)</p>
 			
 			<label>AÑO</label>
 			
 			<input type="number" value="<?php echo $year; ?>" name="year" min="1990" max="2023" required>
 			<p>Año del vehiculo</p>
 			
 			<label>CHASIS</label>
 			
 			<input type="text" value="<?php echo $chasis; ?>" name="chasis" min="17" required>
 			<p>Chasis</p>
 			
 			<label>CARROSERIA</label>
 			
 			<input type="text" value="<?php echo $carroseria; ?>" name="carroseria" min="3" required>
 			<p>Tipo de carroseria</p>
 			
 			<label>PROPIETARIO</label>
 			
 			<input type="number" value="<?php echo $propietario; ?>" name="propietario" required>
 			<p>(IMPORTANTE: ID DEl Cliente o 1)</p>
 			
 			<label>COLOR</label>
 			
 			<input type="text" value="<?php echo $color; ?>" name="color" required>
 			<p>nombre de color</p>
 			
 			<label>VENDIDO</label>
 			
 			<select name="vendido" value="<?php echo $vendido; ?>"required>
 				<option value="si">SI</option>
 				<option value="no">NO</option>

 			</select>
 			<p>(SI o NO)</p>
 			
 			<label>ESTADO</label>
 			
 			<select name="estado" value="<?php echo $estado; ?>" required>
 				<option value="nuevo">Nuevo</option>
 				<option value="usado">Usado</option>

 			</select>
 			
 			<p>(Nuevo o Usado)</p>

 			<label>PLACA</label>
 			
 			<input type="text" value="<?php echo $placa; ?>" name="placa" min="6" required>
 			<p>numero placa</p>
 			
 			<label>COSTO DEALER</label>
 			
 			<input type="number" value="<?php echo $costo; ?>" max="30000000" name="costo" required>
 			<p>Cuanto le costo al dealer</p>
 			

 			<label>IMAGEN 2</label>
 			
			<input type="file" name="imagen2" accept="image/*" required>
 			
 			<p>opcional</p>
 			
 			<label>IMAGEN 3</label>
 			
			<input type="file" name="imagen3" accept="image/*" required>
 			
 			<p>opcional</p>
 			
 			<label>IMAGEN 4</label>
 			
			<input type="file" name="imagen4" accept="image/*" required>
 			
 			<p>opcional</p>
 			
 			<label>IMAGEN 5</label>
 			
			<input type="file" name="imagen5" accept="image/*" required>
 			
 			<p>opcional</p>
 			
<h3>DATOS</h3>

<a href="edicionVehiculos.php?id=<?php echo $id; ?>">
<input type="submit" name="Editar" placeholder="Editar">
</a>

<h3>COMO LLENAR</h3>

 		</form>
 	</section>
 </main>


<?php 
	

}
}

?>


