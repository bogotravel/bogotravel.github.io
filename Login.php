
<?php
session_start();

include_once('Connection.php');

if (isset($_SESSION['logged'])) {

header('Location:iniciocategorias.html');

} else{

if (isset($_POST['usuario'], $_POST['contraseña'])) {
		$username = $_POST['usuario'];
		$password = $_POST['contraseña'];
		if (empty($username) or empty($password)) {
			$error ='All fields are required.';
		} else {
			$query = $pdo-> prepare("SELECT * FROM usuario WHERE Usuario = ? AND Contraseña = ?");
			
			$query -> bindValue(1,$username);
			$query -> bindValue(2,$password);

			$query -> execute();

			$num = $query -> rowCount();
	
			if ($num == 1) {
				//good		
				$_SESSION['logged'] = true;
				$_SESSION['username'] = $username;
				header('Location:login.php');
				exit();
			}
			 else { ?>				
				<script type="text/javascript">
					alert("Nombre o usuario incorrectos.");
				</script>
				
		<?php	}
		}
	} 		?>
	
<?php include_once('iniciosesion.html');}  ?>