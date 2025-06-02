<?php include 'app/views/shares/header.php'; ?>
<h1>Sửa danh mục</h1>

<?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<form method="POST" action="/project1/Category/update" onsubmit="return validateForm();">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($category->id, ENT_QUOTES, 'UTF-8'); ?>">

    <div class="form-group">
        <label for="name">Tên danh mục:</label>
        <input
            type="text"
            id="name"
            name="name"
            class="form-control"
            required
            value="<?php
                echo isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8') : htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8');
            ?>"
        >
    </div>

    <div class="form-group">
        <label for="description">Mô tả:</label>
        <textarea
            id="description"
            name="description"
            class="form-control"
            required
        ><?php
            echo isset($_POST['description']) ? htmlspecialchars($_POST['description'], ENT_QUOTES, 'UTF-8') : htmlspecialchars($category->description, ENT_QUOTES, 'UTF-8');
        ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
</form>

<a href="/project1/Category/list" class="btn btn-secondary mt-2">Quay lại danh sách danh mục</a>

<script>
function validateForm() {
    const name = document.getElementById('name').value.trim();
    const description = document.getElementById('description').value.trim();

    if (name === '') {
        alert('Tên danh mục không được để trống');
        return false;
    }
    if (description === '') {
        alert('Mô tả danh mục không được để trống');
        return false;
    }
    return true;
}
</script>

<?php include 'app/views/shares/footer.php'; ?>
