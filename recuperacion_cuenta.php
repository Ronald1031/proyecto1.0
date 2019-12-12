<?php
include "operacion.php";
	$correo=$_POST['email'];

		$bd= new BaseDatos();
		  $bd->setCorreo($correo);
			$bd->conectar();
		  $bd->recuperar();




?>
