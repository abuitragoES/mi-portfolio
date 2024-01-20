<?php
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];
	$to = "abuitrago@educa.madrid.org";

	//Estoy recibiendo el formulario, compongo el cuerpo
	$cuerpo = "<h1>Mensaje recibido desde www.antoniobuitrago.es</h1>";
	$cuerpo .= "<p><strong>Nombre:</strong> " . $nombre . "</p>";
	$cuerpo .= "<p><strong>Email:</strong> " . $email . "</p>";
	$cuerpo .= "<p><strong>Mensaje:</strong> " . $mensaje . "</p>";


	mail($to,$asunto,$cuerpo,"MIME-Version: 1.0\nContent-type: text/html; charset=UTF-8");
	
	echo "success";
?>