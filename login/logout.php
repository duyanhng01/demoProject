<?php
session_start();
include('functions.php');

// Đăng xuất người dùng
logoutUser();

// Chuyển hướng về trang chủ
header("Location: index.php");
?>
