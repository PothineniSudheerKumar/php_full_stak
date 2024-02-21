<?php
$dsn = "mysql:host=localhost;dbname=test_db";
$user = "username";
$password = "password";
try {
    $conn = new PDO($dsn, $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users (name, email) VALUES ('Nick Cain', 'nick@exampleurl.com')";
    $conn->exec($sql);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>