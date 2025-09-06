<?php
$host = "localhost"; // Adjust if the database host is different (e.g., for cloud DB)
$dbname = "dbeyz9ck9ngahk";
$username = "uxhc7qjwxxfub";
$password = "g4t0vezqttq6";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
