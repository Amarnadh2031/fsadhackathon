<?php
require_once 'config.php';

if(empty($_POST['name']) ||
   empty($_POST['email']) ||
   empty($_POST['subject']) ||
   empty($_POST['message'])) {
    die("No arguments Provided!");
}

try {
    global $pdo;
    
    $stmt = $pdo->prepare("INSERT INTO contact (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->execute([
        $_POST['name'],
        $_POST['email'],
        $_POST['subject'],
        $_POST['message']
    ]);

    header('Location:contact_success.html');
} catch(PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>
<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$conn = new mysqli('localhost','root','','tounament');
	//$conn = new mysqli('sql208.epizy.com','epiz_25953094','XzJnAQoLpM','epiz_25953094_tournament');
	if($conn->connect_error)
	{
		die('Connection Failed : '.$conn->connect_error);
	}
	else
	{
		$stmt = $conn->prepare("insert into contact(name, email, subject, message) values(?,?,?,?)");
		$stmt->bind_param("ssss",$name, $email, $subject, $message);
		$stmt->execute();
		$stmt->close();
		$conn->close();
		header('Location:contact_success.html');
	}
?>