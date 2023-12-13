<?php
// Đăng ký người dùng mới
function registerUser($username, $password) {
    global $conn;

    // Mã hóa mật khẩu
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Thực hiện truy vấn đăng ký
    $sql = "INSERT INTO users (user_name, password) VALUES ('$username', '$hashedPassword')";
    $result = $conn->query($sql);

    return $result;
}

// Kiểm tra thông tin đăng nhập
function loginUser($username, $password) {
    global $conn;   

    // Lấy thông tin người dùng từ database
    $sql = "SELECT * FROM users WHERE user_name='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            return true; // Đăng nhập thành công
        }
    }

    return false; // Đăng nhập không thành công
}

// Đăng xuất người dùng
function logoutUser() {
    session_destroy();
}
?>
