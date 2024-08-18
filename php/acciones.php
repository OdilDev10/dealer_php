<?php 
include 'panelHeader.php';
include 'conexion.php';

	if (isset($_POST['Enviar'])) {
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
		//cuando ingreso es timestamp
		$imagen2 = addslashes(file_get_contents($_FILES['imagen2']['tmp_name']));
		$imagen3 = addslashes(file_get_contents($_FILES['imagen3']['tmp_name']));
		$imagen4 = addslashes(file_get_contents($_FILES['imagen3']['tmp_name']));
		$imagen5 = addslashes(file_get_contents($_FILES['imagen3']['tmp_name']));



		//por defecto
		$consulta = "INSERT INTO vehiculos(marca,modelo,precio,imagen,year,chasis,carroseria,propietario,color,vendido,estado,placa,costo,imagen2,imagen3,imagen4,imagen5) VALUES ('$marca','$modelo','$precio','$imagen','$year','$chasis','$carroseria','$propietario','$color','$vendido','$estado','$placa','$costo','imagen2','imagen3','imagen4','imagen5')";
// 
		if ($conex->query($consulta) === true) {
			echo 'salio bien';
		}


		
	}


 ?>


 <main>
 	<section>
 		<form action="acciones.php" method="POST" enctype="multipart/form-data">
 			<label>ID</label>
 			
 			<input type="number" name="id" >
 			<p>Identificador unico</p>
 			

 			<label>MARCA</label>
 			
 			<input type="text" name="marca" required>
 			<p>Nombre marca</p>
 			
 			<label>MODELO</label>
 			
 			<input type="text" name="modelo" required>
 			<p>Modelo de marca</p>
 			
 			<label>PRECIO</label>
 			
 			<input type="number" name="precio" max="30000000" required>
 			<p>(En numeros)</p>
 			
 			<label>IMAGEN</label>
 			
			<input type="file" name="imagen" accept="image/*">

 			<p>(Link de imagen en internet)</p>
 			
 			<label>AÑO</label>
 			
 			<input type="number" name="year" min="1990" max="2023" required>
 			<p>Año del vehiculo</p>
 			
 			<label>CHASIS</label>
 			
 			<input type="text" name="chasis" min="17" required>
 			<p>Chasis</p>
 			
 			<label>CARROSERIA</label>
 			
 			<input type="text" name="carroseria" min="3" required>
 			<p>Tipo de carroseria</p>
 			
 			<label>PROPIETARIO</label>
 			
 			<input type="number" name="propietario" required>
 			<p>(IMPORTANTE: ID DEl Cliente o 1)</p>
 			
 			<label>COLOR</label>
 			
 			<input type="text" name="color" required>
 			<p>nombre de color</p>
 			
 			<label>VENDIDO</label>
 			
 			<select name="vendido" required>
 				<option value="si">SI</option>
 				<option value="no">NO</option>

 			</select>
 			<p>(SI o NO)</p>
 			
 			<label>ESTADO</label>
 			
 			<select name="estado" required>
 				<option value="nuevo">Nuevo</option>
 				<option value="usado">Usado</option>

 			</select>
 			
 			<p>(Nuevo o Usado)</p>

 			<label>PLACA</label>
 			
 			<input type="text" name="placa" min="6" required>
 			<p>numero placa</p>
 			
 			<label>COSTO DEALER</label>
 			
 			<input type="number" max="30000000" name="costo" required>
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
 			


<input type="submit" name="Enviar">
 		</form>
 	</section>
 </main>