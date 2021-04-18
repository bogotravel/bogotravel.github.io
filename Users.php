<?php

class User {

	public function fetch_all() {
		global $pdo;

		$query = $pdo -> prepare('SELECT * FROM usuario');
		$query -> execute();

		return $query -> fetchAll();
	}

		public function fetch_data($username) {
		global $pdo;

		$query = $pdo -> prepare("SELECT * FROM usuario WHERE Usuario = ?");
	    $query -> bindValue(1, $username);
	    $query -> execute();

	    return $query -> fetch();
	}
	
}
  ?>