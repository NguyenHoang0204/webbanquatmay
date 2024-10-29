<?php
   session_start();
   if(!isset($_SESSION['mySession'])){
    header('location:login.php');
   }
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cửa Hàng Quạt Máy</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Cửa Hàng Quạt Máy</h1>
        <nav>
            <ul>
                <li><a href="#home">Trang Chủ</a></li>
                <li><a href="#products">Sản Phẩm</a></li>
                <li><a href="#contact">Liên Hệ</a></li>
            </ul>
        </nav>
    </header>

    <section id="home">
        <h2>Chào Mừng Đến Với Cửa Hàng Chúng Tôi</h2>
        <p>Khám phá bộ sưu tập quạt máy chất lượng cao của chúng tôi.</p>
    </section>

    <section id="products">
        <h2>Sản Phẩm</h2>
        <?php
           include "following.php";
        ?>
    </section>

    <section id="contact">
        <h2>Liên Hệ</h2>
        <p>Email: lienhe@quathang.com</p>
        <p>Điện thoại: 0123 456 789</p>
    </section>

    <footer>
        <p>&copy; 2024 Cửa Hàng Quạt Máy. Tất cả quyền được bảo lưu.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>

<a href="logout.php">
  <button type="submit" name="dang xuat"> Đăng xuất </button>
</a>