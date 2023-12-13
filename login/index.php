<?php
session_start();
include('db_config.php');
include('functions.php');

// Kiểm tra nếu người dùng đã đăng nhập
if(isset($_SESSION['user_name'])) {
    echo "Hello, " . $_SESSION['user_name'] . "!<br>";
    echo "<a href='logout.php'>Logout</a>";
	
} else {
    // Hiển thị form đăng nhập nếu chưa đăng nhập
    echo "<h2>Login</h2>";
    echo "<form action='login.php' method='post'>";
    echo "Username: <input type='text' name='username' required><br>";
    echo "Password: <input type='password' name='password' required><br>";
    echo "<input type='submit' value='Login'>";
	echo "<a href='login_google.php'>Đăng nhập bằng Google</a>";
    echo "</form><br>";

    // Hiển thị form đăng ký
    echo "<h2>Register</h2>";
    echo "<form action='register.php' method='post'>";
    echo "Username: <input type='text' name='username' required><br>";
    echo "Password: <input type='password' name='password' required><br>";
    echo "<input type='submit' value='Register'>";
    echo "</form>";
}
?>
