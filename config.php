<?php
$host = "database-1.caubbk7qzzzx.us-east-1.rds.amazonaws.com"; // or your DB host
$dbname = "userdb";
$username = "admin"; // your DB username
$password = "admin1234"; // your DB password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
