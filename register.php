<?php
require_once 'config.php';

if(empty($_POST['l_nickname']) ||
   empty($_POST['l_email']) ||
   empty($_POST['l_cid']) ||
   empty($_POST['l_phone']) ||
   empty($_POST['crew']) ||
   empty($_POST['p2']) ||
   empty($_POST['p3']) ||
   empty($_POST['p4']) ||
   !filter_var($_POST['l_email'],FILTER_VALIDATE_EMAIL))
{
   echo "No arguments Provided!";
   exit;
}

try {
    global $pdo;
    
    // Check if user already exists
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM register WHERE l_cid = ?");
    $stmt->execute([$_POST['l_cid']]);
    $count = $stmt->fetchColumn();

    if($count > 0) {
        header("Location:fail.html");
        exit;
    }

    // Insert new registration
    $stmt = $pdo->prepare("INSERT INTO register (crew, l_nickname, l_email, l_phone, l_cid, p2, p3, p4, payment) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([
        $_POST['crew'],
        $_POST['l_nickname'],
        $_POST['l_email'],
        $_POST['l_phone'],
        $_POST['l_cid'],
        $_POST['p2'],
        $_POST['p3'],
        $_POST['p4'],
        'Not Paid'
    ]);

    header("Location:success.html");
} catch(PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>