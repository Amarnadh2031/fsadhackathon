<?php
$host = "localhost";
$port = "5432";
$dbname = "tournament_db";
$user = "postgres";    // default PostgreSQL user
$password = "Brrk@1970";        // your PostgreSQL password

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
echo "Connected successfully";
?>