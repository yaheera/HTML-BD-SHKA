<?php
$host = 'local';
$db = 'students';
$user = 'root';
$password = '';

$conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $password);

$stmt = $conn->query("SELECT * FROM students_info");
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
