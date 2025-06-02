<?php include 'app/views/shares/header.php'; ?>
<link rel="stylesheet" href="/webbanhang/public/css/style.css">

<div class="product-detail-container">
    <div class="container">
        <?php if ($product): ?>
            <div class="product-detail">
                <div class="product-gallery">
                    <?php if ($product->image): ?>
                        <img src="/webbanhang/<?php echo htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>" 
                             alt="<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>" 
                             class="product-image">
                    <?php else: ?>
                        <div class="no-image">
                            <span>Không có hình ảnh</span>
                        </div>
                    <?php endif; ?>
                </div>
                
                <div class="product-info">
                    <h1 class="product-title">
                        <?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>
                    </h1>
                    
                    <div class="product-price">
                        <?php echo number_format($product->price, 0, ',', '.'); ?> VND
                    </div>
                    
                    <div class="product-category">
                        <span class="label">Danh mục:</span>
                        <span class="value">
                            <?php echo !empty($product->category_name) 
                                ? htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8') 
                                : 'Chưa có danh mục'; ?>
                        </span>
                    </div>
                    
                    <div class="product-description">
                        <h3>Mô tả sản phẩm</h3>
                        <p><?php echo nl2br(htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8')); ?></p>
                    </div>
                    
                    <div class="product-actions">
                        <a href="/webbanhang/Product/addToCart/<?php echo $product->id; ?>" 
                           class="btn btn-primary">
                            🛒 Thêm vào giỏ hàng
                        </a>
                        <a href="/webbanhang/Product/list" class="btn btn-secondary">
                            ← Quay lại danh sách
                        </a>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="alert-error">
                <p>Không tìm thấy sản phẩm!</p>
                <a href="/webbanhang/Product/list" class="btn btn-secondary">Quay lại danh sách</a>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php include 'app/views/shares/footer.php'; ?>