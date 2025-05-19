<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mb-0">Danh sách sản phẩm</h1>
        <a href="/project1/Product/add" class="btn btn-success">+ Thêm sản phẩm</a>
    </div>

    <?php if (!empty($products)): ?>
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Giá (VNĐ)</th>
                    <th scope="col" style="width: 160px;">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($product->getName(), ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?php echo htmlspecialchars($product->getDescription(), ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?php echo number_format($product->getPrice(), 0, ',', '.'); ?> ₫</td>
                        <td>
                            <a href="/project1/Product/edit/<?php echo $product->getID(); ?>" class="btn btn-sm btn-primary">Sửa</a>
                            <a href="/project1/Product/delete/<?php echo $product->getID(); ?>"
                               onclick="return confirm('Bạn có chắc chắn muốn xoá sản phẩm này?');"
                               class="btn btn-sm btn-danger ms-2">Xoá</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-info">Chưa có sản phẩm nào.</div>
    <?php endif; ?>
</body>
</html>
