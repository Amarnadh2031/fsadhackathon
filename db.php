<?php
require_once 'config.php';
global $pdo;

if(!$pdo) {
    die("ERROR: Could not connect to the database.");
}
?>
	$host = "localhost";
	$user = "postgres";
	$pass = "Brrk@1970";
	$dbname = "tounament_db";
	// $host = "sql208.epizy.com";
	// $user = "epiz_25953094";
	// $pass = "XzJnAQoLpM";
	// $dbname = "epiz_25953094_tournament";

	$conn = mysqli_connect($host, $user, $pass, $dbname);

	if($conn === false)
	{
   		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>