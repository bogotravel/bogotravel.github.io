<?php

class Site
{
	
		public function fetch_by_category($category)
		{
		global $pdo;

		$query = $pdo -> prepare("SELECT * FROM sitio WHERE Categoria = ?");
	    $query -> bindValue(1, $category);
	    $query -> execute();

	    return $query -> fetchAll();
		}
	
}  ?>