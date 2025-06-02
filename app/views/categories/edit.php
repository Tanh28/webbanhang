<?php include 'app/views/shares/header.php'; ?>
<link rel="stylesheet" href="/webbanhang/public/css/style.css">

<div class="form-container">
    <div class="form-wrapper">
        <h2 class="form-title">Chỉnh sửa danh mục</h2>
        
        <?php if (!empty($errors)): ?>
            <div class="alert alert-error">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="POST" action="/webbanhang/Category/update" class="category-form" onsubmit="return validateForm();">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($category->id, ENT_QUOTES, 'UTF-8'); ?>">
            
            <div class="form-group">
                <label for="name">Tên danh mục:</label>
                <input type="text" 
                       id="name" 
                       name="name" 
                       class="form-control" 
                       required
                       value="<?php
                           echo isset($_POST['name']) 
                               ? htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8') 
                               : htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8');
                       ?>"
                       placeholder="Nhập tên danh mục">
            </div>
            
            <div class="form-group">
                <label for="description">Mô tả:</label>
                <textarea id="description" 
                          name="description" 
                          class="form-control" 
                          rows="4" 
                          required
                          placeholder="Nhập mô tả chi tiết về danh mục"><?php
                    echo isset($_POST['description']) 
                        ? htmlspecialchars($_POST['description'], ENT_QUOTES, 'UTF-8') 
                        : htmlspecialchars($category->description, ENT_QUOTES, 'UTF-8');
                ?></textarea>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">
                    💾 Lưu thay đổi
                </button>
                <a href="/webbanhang/Category/list" class="btn btn-secondary">
                    ← Quay lại
                </a>
            </div>
        </form>
    </div>
</div>

<script>
function validateForm() {
    const name = document.getElementById('name').value.trim();
    const description = document.getElementById('description').value.trim();
    
    if (name === '') {
        alert('Vui lòng nhập tên danh mục');
        return false;
    }
    
    if (description === '') {
        alert('Vui lòng nhập mô tả danh mục');
        return false;
    }
    
    return true;
}
</script>

<?php include 'app/views/shares/footer.php'; ?>
