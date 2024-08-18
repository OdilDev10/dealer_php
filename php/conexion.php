<?php 
	$conex = mysqli_connect("db5010476263.hosting-data.io:3306","dbu2558230","Paraionos10.","dbs8873213");
	ini_set('mysql.connect_timeout', 300);
	ini_set('default_socket_timeout', 300);

	if (!$conex) {
		die("Conexion fallida");
	}

	
 ?>