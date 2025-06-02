<?php include 'app/views/shares/header.php'; ?>
<link rel="stylesheet" href="/webbanhang/public/css/style.css">

<div class="form-container">
    <div class="form-wrapper">
        <h2 class="form-title">Thêm sản phẩm mới</h2>
        
        <?php if (!empty($errors)): ?>
            <div class="alert alert-error">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="POST" action="/webbanhang/Product/save" enctype="multipart/form-data" class="product-form" onsubmit="return validateForm();">
            <div class="form-group">
                <label for="name">Tên sản phẩm:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="description">Mô tả:</label>
                <textarea id="description" name="description" class="form-control" rows="4" required></textarea>
            </div>
            
            <div class="form-group">
                <label for="price">Giá (VND):</label>
                <input type="number" id="price" name="price" class="form-control" step="1000" min="0" required>
            </div>
            
            <div class="form-group">
                <label for="category_id">Danh mục:</label>
                <select id="category_id" name="category_id" class="form-control" required>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?php echo $category->id; ?>">
                            <?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="form-group">
                <label for="image">Hình ảnh:</label>
                <input type="file" id="image" name="image" class="form-control" accept="image/*">
                <small class="form-text">Định dạng: JPG, PNG, GIF. Kích thước tối đa: 5MB</small>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
                <a href="/webbanhang/Product/list" class="btn btn-secondary">Quay lại</a>
            </div>
        </form>
    </div>
</div>

<?php include 'app/views/shares/footer.php'; ?>