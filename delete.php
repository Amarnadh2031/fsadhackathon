<?php
require_once 'config.php';

try {
    global $pdo;
    
    $stmt = $pdo->prepare("DELETE FROM register WHERE id = ?");
    $stmt->execute([$_GET['id']]);

    echo "<script>alert('Data was Deleted!!')</script>";
    echo "<script>location.href='cpanel.php'</script>";
} catch(PDOException $e) {
    echo "<script>alert('Data was not Deleted!!')</script>";
    echo "<script>location.href='cpanel.php'</script>";
}
?>
<mcfile name="delete.php" path="c:\Users\rksth\OneDrive\Desktop\FSAD\tournamenthub-master\delete.php"></mcfile>