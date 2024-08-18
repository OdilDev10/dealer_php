<?php 

	if (isset($_POST['Enviar'])) {
		if ($_POST['nombre'] != "" && $_POST['correo'] != "" && $_POST['asunto'] != "" && $_POST['mensaje'] != "") {

			$nombre = $_POST['nombre'];
			$correo = $_POST['correo'];
			$asunto = $_POST['asunto'];
			$mensaje = $_POST['mensaje'];

			$header = "From: noreply@example.com" . "\r\n";
			$header.= "Reply-To: noreply@example.com" . "\r\n";
			$header.= "X-Mailer: PHP/". phpversion();

			$mail = @mail($correo, $asunto, $mensaje, $header);

			if ($mail) {
				echo '<h4>Enviado</h4>';
			}




		}else{
			echo `<script>alert("Hay campos vacios, Por favor rellenelos")
				window.location.href = "contact.php";
			</script>`;
		}
	}

 ?>