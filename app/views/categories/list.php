<?php include 'app/views/shares/header.php'; ?>
<h1>Danh sách danh mục</h1>
<a href="/project1/Category/add" class="btn btn-success mb-2">Thêm Danh mục mới</a>
<ul class="list-group">
    <?php foreach ($categories as $category): ?>
        <li class="list-group-item">
            <h2>
                <a href="/project1/Category/show/<?php echo $category->id; ?>">
                    <?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>
                </a>
            </h2>
            <p><?php echo htmlspecialchars($category->description, ENT_QUOTES, 'UTF-8'); ?></p>
            <a href="/project1/Category/edit/<?php echo $category->id; ?>" class="btn btn-warning">Sửa</a>
            <a href="/project1/Category/delete/<?php echo $category->id; ?>" class="btn btn-danger"
               onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?');">Xóa</a>
        </li>
    <?php endforeach; ?>
</ul>
<?php include 'app/views/shares/footer.php'; ?>
