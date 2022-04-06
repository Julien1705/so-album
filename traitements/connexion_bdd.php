<?php
try {
	$dbh = new PDO('mysql:host=localhost;dbname=so_album; charset=utf8', 'root', '');

	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
} catch (PDOException $e) {
	print "Erreur !: " . $e->getMessage() . "<br/>";
	die();
}
?>