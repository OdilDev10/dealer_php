<?php 

include 'conexion.php';
session_start();
error_reporting(0);

if (isset($_SESSION['usuario'])) {
	header("Location: panel.php");
}



	if (isset($_POST['Enviar'])) {


		$email = $_POST['email'];
		$password = $_POST['password'];

		$consulta = "SELECT * FROM usuarios WHERE email='$email' and password='$password'";
		$resultado = mysqli_query($conex, $consulta);

		if ($resultado->num_rows > 0) {

			$row = mysqli_fetch_assoc($resultado);
			if ($resultado) {
				echo '<script>alert("Listo")</script>';
				$_SESSION['usuario'] = $row['usuario'];
				header("Location: panel.php");

			}	
		}else{
				header("Location: ../login.php");
				echo '<script>alert("La clave o correo son incorrectos")</script>';


			
	}
		}

?>