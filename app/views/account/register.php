<?php include 'app/views/shares/header.php'; ?>
<link rel="stylesheet" href="/webbanhang/public/css/style.css">

<div class="form-container">
    <div class="form-card">
        <h2>Đăng ký tài khoản</h2>

        <?php if (isset($errors)): ?>
            <ul class="form-errors">
                <?php foreach ($errors as $err): ?>
                    <li><?php echo $err; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <form action="/webbanhang/account/save" method="post">
            <div class="form-group-row">
                <div class="form-group">
                    <label for="username">Tên đăng nhập</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="fullname">Họ tên</label>
                    <input type="text" id="fullname" name="fullname" required>
                    
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirmpassword">Xác nhận mật khẩu</label>
                    <input type="password" id="confirmpassword" name="confirmpassword" required>
                </div>
            </div>

            <!-- <div class="form-group-row">
                
            </div> -->

            <div class="form-actions">
                <button type="submit" class="btn">Đăng ký</button>
            </div>
        </form>
    </div>
</div>

<?php include 'app/views/shares/footer.php'; ?>
