<!DOCTYPE html>
<html>
<head>
    <title>Trang Web Tết 2025 </title>
    <style>
        body {
            background-color: #FFD700; /* Màu vàng */
            color: #FF0000; /* Màu đỏ */
            font-family: Arial, sans-serif;
        }
        .banner {
            text-align: center;
            padding: 20px;
            background-color: #FF0000;
            color: #FFFFFF;
        }
        .content {
            text-align: center;
            margin-top: 50px;
        }
        .fireworks {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 9999;
        }
    </style>
</head>
<body>
    <div class="banner">
        <h1>Chúc Mừng Năm Mới</h1>
        <p>An Khang Thịnh Vượng - Vạn Sự Như Ý</p>
    </div>
    <div class="content">
        <h2>Chào mừng đến với trang web của tôi!</h2>
        <p>Đây là một trang web cơ bản được trang trí cho dịp Tết.</p>
        <?php
            echo "<p>Hôm nay là: " . date("Y/m/d") . "</p>";
        ?>
    </div>
    <div class="fireworks">
        <!-- Thêm hiệu ứng pháo hoa ở đây -->
    </div>
</body>
</html>
