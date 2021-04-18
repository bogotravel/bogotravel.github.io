<?php 
	try {
	$pdo = new PDO ('mysql:host=localhost; dbname=bogotravel; charset=UTF8', 'root', '');
	//echo ('good.');
	} catch (PDOException $e) {
	exit('Database error.');
	}
 ?>
