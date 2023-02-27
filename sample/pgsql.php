<?php
$dsn = 'pgsql:host=localhost;dbname=ngo_mis';
$user = 'richard';
$password = 'rich@123';
try {
    $pdo = new PDO($dsn, $user, $password);
    echo "Database Connected";
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
 ?>



