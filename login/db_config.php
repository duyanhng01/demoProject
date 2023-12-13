<?php
// Thông tin kết nối database
$hostname = "localhost";
$username = "root";
$password = "";
$database = "demo";

// Kết nối đến MySQLi
$conn = new mysqli($hostname, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
