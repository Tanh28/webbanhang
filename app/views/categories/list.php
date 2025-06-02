<?php include 'app/views/shares/header.php'; ?>
<link rel="stylesheet" href="/webbanhang/public/css/style.css">

<div class="categories">
    <div class="container">
        <div class="categories-header">
            <h2>Danh sách danh mục</h2>
            <a href="/webbanhang/Category/add" class="btn btn-primary">
                + Thêm danh mục mới
            </a>
        </div>

        <?php if (!empty($categories)): ?>
            <div class="category-grid">
                <?php foreach ($categories as $index => $category): ?>
                    <div class="category-card" style="animation-delay: <?= $index * 0.1 ?>s">
                        <div class="category-content">
                            <h3 class="category-title">
                                <?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>
                            </h3>
                            <p class="category-description">
                                <?php echo htmlspecialchars($category->description, ENT_QUOTES, 'UTF-8'); ?>
                            </p>
                        </div>
                        <div class="category-actions">
                            <a href="/webbanhang/Category/edit/<?php echo $category->id; ?>" 
                               class="btn btn-edit">
                                Sửa
                            </a>
                            <a href="/webbanhang/Category/delete/<?php echo $category->id; ?>" 
                               class="btn btn-delete"
                               onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này? Tất cả sản phẩm trong danh mục sẽ bị ảnh hưởng.');">
                                Xóa
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="no-categories">
                <p>Chưa có danh mục nào. Hãy thêm danh mục mới để bắt đầu!</p>
                <a href="/webbanhang/Category/add" class="btn btn-primary">Thêm danh mục đầu tiên</a>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php include 'app/views/shares/footer.php'; ?>
