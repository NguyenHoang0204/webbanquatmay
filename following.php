<?php
include 'db.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="product">';
        echo '<img src="products/fan1.jpg' . $row['image'] . '"alt="' . $row['name'] . '">';
        echo '<h3>' . $row['name'] . '</h3>';
        echo '<p>Giá: ' . number_format($row['price'], 0, ',', '.') . ' VNĐ</p>';
        echo '<button onclick="addToCart(\'' . $row['name'] . '\')">Thêm vào Giỏ</button>';
        echo '</div>';
    }
} else {
    echo '<p>Không có sản phẩm nào.</p>';
}

$conn->close();
?>