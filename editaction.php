<?php
require_once 'config.php';

try {
    global $pdo;
    
    $stmt = $pdo->prepare("UPDATE register SET 
        crew = ?, 
        l_nickname = ?, 
        l_email = ?, 
        l_phone = ?, 
        l_cid = ?, 
        p2 = ?, 
        p3 = ?, 
        p4 = ?, 
        payment = ? 
        WHERE id = ?");

    $stmt->execute([
        $_POST['crew'],
        $_POST['l_nickname'],
        $_POST['l_email'],
        $_POST['l_phone'],
        $_POST['l_cid'],
        $_POST['p2'],
        $_POST['p3'],
        $_POST['p4'],
        $_POST['payment'],
        $_POST['id']
    ]);

    echo "<script>alert('Data was Updated!!')</script>";
    echo "<script>location.href='cpanel.php'</script>";
} catch(PDOException $e) {
    echo "<script>alert('Data was not Updated!!')</script>";
    echo "<script>location.href='cpanel.php'</script>";
}
?>
<?php
require_once 'config.php';

try {
    global $pdo;
    
    $stmt = $pdo->prepare("UPDATE register SET 
        crew = ?, 
        l_nickname = ?, 
        l_email = ?, 
        l_phone = ?, 
        l_cid = ?, 
        p2 = ?, 
        p3 = ?, 
        p4 = ?, 
        payment = ? 
        WHERE id = ?");

    $stmt->execute([
        $_POST['crew'],
        $_POST['l_nickname'],
        $_POST['l_email'],
        $_POST['l_phone'],
        $_POST['l_cid'],
        $_POST['p2'],
        $_POST['p3'],
        $_POST['p4'],
        $_POST['payment'],
        $_POST['id']
    ]);

    echo "<script>alert('Data was Updated!!')</script>";
    echo "<script>location.href='cpanel.php'</script>";
} catch(PDOException $e) {
    echo "<script>alert('Data was not Updated!!')</script>";
    echo "<script>location.href='cpanel.php'</script>";
}
?>