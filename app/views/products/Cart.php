<?php include 'app/views/shares/header.php'; ?>
<link rel="stylesheet" href="/webbanhang/public/css/style.css">

<div class="cart-container">
    <div class="container">
        <h1 class="cart-title">🛒 Giỏ hàng của bạn</h1>
        
        <?php if (!empty($cart)): ?>
            <div class="cart-items">
                <?php 
                $total = 0;
                foreach ($cart as $id => $item): 
                    $itemTotal = $item['price'] * $item['quantity'];
                    $total += $itemTotal;
                ?>
                    <div class="cart-item">
                        <div class="cart-item-image">
                            <?php if ($item['image']): ?>
                                <img src="/webbanhang/<?php echo htmlspecialchars($item['image'], ENT_QUOTES, 'UTF-8'); ?>" 
                                     alt="<?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?>">
                            <?php else: ?>
                                <div class="no-image">Không có ảnh</div>
                            <?php endif; ?>
                        </div>
                        
                        <div class="cart-item-details">
                            <h3 class="item-name">
                                <?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?>
                            </h3>
                            <p class="item-price">
                                <?php echo number_format($item['price'], 0, ',', '.') . ' ₫'; ?>
                            </p>
                            
                            <div class="item-quantity">
                                <form method="POST" action="/webbanhang/Cart/update/<?php echo $id; ?>" class="quantity-form">
                                    <button type="button" class="quantity-btn minus" onclick="updateQuantity(this, -1)">-</button>
                                    <input type="number" name="quantity" value="<?php echo $item['quantity']; ?>" min="1" 
                                           class="quantity-input" onchange="this.form.submit()">
                                    <button type="button" class="quantity-btn plus" onclick="updateQuantity(this, 1)">+</button>
                                </form>
                            </div>
                            
                            <p class="item-total">
                                Thành tiền: <span><?php echo number_format($itemTotal, 0, ',', '.'); ?> ₫</span>
                            </p>
                        </div>
                        
                        <div class="cart-item-actions">
                            <a href="/webbanhang/Cart/remove/<?php echo $id; ?>" class="remove-item" 
                               onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng?')">
                                ✕
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <div class="cart-summary">
                <div class="summary-row">
                    <span>Tạm tính:</span>
                    <span><?php echo number_format($total, 0, ',', '.'); ?> ₫</span>
                </div>
                <div class="summary-row total">
                    <span>Tổng cộng:</span>
                    <span class="total-amount"><?php echo number_format($total, 0, ',', '.'); ?> ₫</span>
                </div>
                <div class="cart-actions">
                    <a href="/webbanhang/Product" class="btn btn-secondary">
                        ← Tiếp tục mua sắm
                    </a>
                    <a href="/webbanhang/Product/checkout" class="btn btn-primary">
                        Thanh toán →
                    </a>
                </div>
            </div>
        <?php else: ?>
            <div class="empty-cart">
                <div class="empty-cart-icon">🛒</div>
                <h2>Giỏ hàng của bạn đang trống</h2>
                <p>Hãy khám phá các sản phẩm và thêm vào giỏ hàng nhé!</p>
                <a href="/webbanhang/Product" class="btn btn-primary">
                    Mua sắm ngay
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>

<script>
function updateQuantity(button, change) {
    const input = button.parentElement.querySelector('.quantity-input');
    let newValue = parseInt(input.value) + change;
    
    if (newValue < 1) newValue = 1;
    
    input.value = newValue;
    input.form.submit();
}

// Animation khi load trang
document.addEventListener('DOMContentLoaded', function() {
    const items = document.querySelectorAll('.cart-item');
    items.forEach((item, index) => {
        item.style.animation = `slideUp 0.5s ease-out ${index * 0.1}s forwards`;
        item.style.opacity = '0';
    });
});
</script>

<?php include 'app/views/shares/footer.php'; ?>