<?php
$servername = "localhost";
$username = "root"; // Mặc định là root
$password = ""; // Mặc định là trống
$dbname = "shop";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>