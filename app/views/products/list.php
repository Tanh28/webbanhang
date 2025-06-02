<?php include 'app/views/shares/header.php'; ?>
<link rel="stylesheet" href="/webbanhang/public/css/style.css">

<div class="products">
    <div class="container">
        <h3>Danh sách sản phẩm</h3>
        <div class="form-actions" style="margin-bottom: 20px;">
            <a href="/webbanhang/Product/add" class="btn">+ Thêm sản phẩm mới</a>
        </div>

        <div class="product-grid">
            <?php foreach ($products as $index => $product): ?>
                <div class="product-card" style="animation-delay: <?= 0.2 + $index * 0.1 ?>s;">
                    <a href="/webbanhang/Product/show/<?php echo $product->id; ?>">
                        <h4><?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?></h4>
                    </a>

                    <?php if ($product->image): ?>
                        <img src="/webbanhang/<?php echo $product->image; ?>" alt="Ảnh sản phẩm">
                    <?php endif; ?>

                    <p><strong>Mô tả:</strong> <?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></p>
                    <p><strong>Giá:</strong> <?php echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?> VND</p>
                    <p><strong>Danh mục:</strong> <?php echo htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8'); ?></p>

                    <div class="form-actions" style="margin-top: 10px;">
                        <a href="/webbanhang/Product/edit/<?php echo $product->id; ?>" class="btn">Sửa</a>
                        <a href="/webbanhang/Product/delete/<?php echo $product->id; ?>" class="btn" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">Xóa</a>
                        <a href="/webbanhang/Product/addToCart/<?php echo $product->id; ?>" class="btn">Thêm vào giỏ hàng</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include 'app/views/shares/footer.php'; ?>
