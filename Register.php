<?php

include_once('Connection.php');
include_once('Users.php');
include_once('registro.html');

$user = new user;
$users = $user -> fetch_all();

if (isset($_POST['usuario'], $_POST['contraseña'], $_POST['correo'])) {
		$usuario = $_POST['usuario'];
		$contraseña = $_POST['contraseña'];
		$correo = $_POST['correo'];

		
		foreach ($users as $user) { 
		if($user['Usuario'] == $usuario) {	?> 

				<script type="text/javascript">
					alert("El nombre de usuario ya existe. Por favor elija otro.");
				</script>

		<?php  	
			exit();	
			} 
		}

		$query = $pdo -> prepare('INSERT INTO usuario (Usuario, Contraseña, Correo) VALUES (?, ?, ?)');
				
		$query -> bindValue(1,$usuario);
		$query -> bindValue(2,$contraseña);
		$query -> bindValue(3,$correo);


			
		$query -> execute();
		
		?>
		<script type="text/javascript">
			alert("El usuario se registro exitosamente.");
		</script>
		
<?php	}		
	else{

	echo "algo salió mal.";
	}	
  ?>

  