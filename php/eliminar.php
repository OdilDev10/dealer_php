<?php 
include 'panelHeader.php';
include 'conexion.php';

if (isset($_GET['registro'])) {
$id = $_GET['registro'];
		

		$consultaArticulos = "DELETE FROM facturas WHERE id = $id";
		$resultadoArticulos = mysqli_query($conex, $consultaArticulos);

		echo 'Se elimino el registro de facturas con ID:' . $id;
			header('Location: editarFacturas.php');

	
}else if(isset($_GET['vehiculo'])){
$id = $_GET['vehiculo'];

		$consultaArticulos = "DELETE FROM vehiculos WHERE id = $id";
		$resultadoArticulos = mysqli_query($conex, $consultaArticulos);

		echo 'Se elimino el registro de vehiculos con ID:' . $id;
			header('Location: editarVehiculos.php');


}else if(isset($_GET['cliente'])){
$id = $_GET['cliente'];

		$consultaArticulos = "DELETE FROM clientes WHERE id = $id";
		$resultadoArticulos = mysqli_query($conex, $consultaArticulos);

		echo 'Se elimino el registro de clientes con ID:' . $id;
			header('Location: editarClientes.php');

}

	

?>