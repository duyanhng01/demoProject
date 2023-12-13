<?php
session_start();
include('db_config.php');
include('functions.php');

// Xử lý đăng ký
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kiểm tra xem tên đăng nhập đã tồn tại chưa
    $checkUser = "SELECT * FROM users WHERE user_name='$username'";
    $result = $conn->query($checkUser);

    if ($result->num_rows > 0) {
        echo "Username already exists. Please choose a different one.";
    } else {
        // Đăng ký người dùng mới
        if (registerUser($username, $password)) {
            echo "Registration successful. You can now <a href='index.php'>login</a>.";
        } else {
            echo "Registration failed. Please try again.";
        }
    }
}
?>
