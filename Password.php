<?php

include_once('Connection.php');
include_once('Contrasena.html');

	if (isset($_POST['contraseña1'], $_POST['contraseña2'], $_POST['usuario'])) {
		$c1 = $_POST['contraseña1'];

		$usuario = $_POST['usuario'];	

		$query = $pdo -> prepare('UPDATE usuario SET Contraseña = ? WHERE Usuario = ?');
				
		$query -> bindValue(1,$c1);
		$query -> bindValue(2,$usuario);

		$query -> execute();

		header('Location:Login.php');
							
	}	
?>
