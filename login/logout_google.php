<?php
session_start();

// Hủy phiên đăng nhập
unset($_SESSION['access_token']);

// Chuyển hướng về trang chủ
header("Location: index.php");
?>
