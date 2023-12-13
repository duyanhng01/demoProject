<?php
session_start();
include('db_config.php');
include('functions.php');

// Xử lý đăng nhập
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (loginUser($username, $password)) {
        $_SESSION['user_name'] = $username;
        header("Location: index.php");
    } else {
        echo "Login failed. Please check your username and password.";
    }

}
?>
