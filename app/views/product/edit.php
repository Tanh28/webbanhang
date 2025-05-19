<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sửa sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="mb-4">Sửa sản phẩm</h1>

    <form method="POST" action="/project1/Product/edit/<?php echo $product->getID(); ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Tên sản phẩm:</label>
            <input type="text" id="name" name="name" class="form-control"
                   value="<?php echo htmlspecialchars($product->getName(), ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Mô tả:</label>
            <textarea id="description" name="description" class="form-control" required><?php echo
                htmlspecialchars($product->getDescription(), ENT_QUOTES, 'UTF-8'); ?></textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Giá:</label>
            <input type="number" id="price" name="price" step="0.01" min="0.01" class="form-control"
                   value="<?php echo htmlspecialchars($product->getPrice(), ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
        <a href="/project1/Product/list" class="btn btn-secondary ms-2">Quay lại</a>
    </form>
</body>
</html>
