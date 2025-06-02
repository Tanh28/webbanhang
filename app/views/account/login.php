<?php include 'app/views/shares/header.php'; ?> 
<link rel="stylesheet" href="/webbanhang/public/css/style.css">

<div class="form-container">
    <div class="form-card">
        <h2>Đăng nhập</h2>
        <p>Vui lòng nhập tên đăng nhập và mật khẩu</p>
        <form action="/webbanhang/account/checklogin" method="post">
            <div class="form-group">
                <label for="username">Tên đăng nhập</label>
                <input type="text" name="username" id="username" required>
            </div>

            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn">Đăng nhập</button>
                <a href="/webbanhang/account/register" class="btn">Đăng ký</a>
            </div>

            <!-- <p style="margin-top: 1rem; text-align: center;">
                <a href="#">Quên mật khẩu?</a>
            </p> -->
        </form>
    </div>
</div>

<?php include 'app/views/shares/footer.php'; ?>
