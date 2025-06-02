<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <link rel="stylesheet" href="/webbanhang/public/css/style.css">
</head>

<body>
    <header>
        <div class="container">
            <h1>🛒 Quản lý sản phẩm</h1>
            <nav>
                <ul>
                    <li><a href="/webbanhang/Product/">Trang chủ</a></li>
                    <li><a href="/webbanhang/Product/add">Thêm sản phẩm</a></li>
                    <li><a href="/webbanhang/Category/list">Danh mục</a></li>
                    <li>
                        <?php
                        if (SessionHelper::isLoggedIn()) {
                            echo "<a class='nav-link'>".$_SESSION['username']."</a>";
                        } else {
                            echo "<a class='nav-link' href='/webbanhang/account/login'>Đăng nhập</a>";
                        }
                        ?>
                    </li>
                    <?php
                    if (SessionHelper::isLoggedIn()) {
                        echo "<li><a class='nav-link' href='/webbanhang/account/logout'>Đăng xuất</a></li>";
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container mt-4">
