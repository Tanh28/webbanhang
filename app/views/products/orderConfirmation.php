<?php include 'app/views/shares/header.php'; ?>
<link rel="stylesheet" href="/webbanhang/public/css/style.css">

<div class="order-confirmation">
    <div class="container">
        <div class="confirmation-card">
            <div class="confirmation-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
            </div>
            <h1>Đặt hàng thành công!</h1>
            <p class="confirmation-message">
                Cảm ơn bạn đã đặt hàng. Đơn hàng của bạn đã được xác nhận và đang được xử lý.
            </p>
            <p class="confirmation-details">
                Mã đơn hàng: <strong>#<?php echo uniqid(); ?></strong>
            </p>
            <p class="confirmation-details">
                Chúng tôi sẽ gửi email xác nhận đơn hàng đến địa chỉ email của bạn trong giây lát.
            </p>
            
            <div class="confirmation-actions">
                <a href="/webbanhang/Product" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                    Về trang chủ
                </a>
                <a href="/webbanhang/Product/list" class="btn btn-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="9" cy="21" r="1"></circle>
                        <circle cx="20" cy="21" r="1"></circle>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                    </svg>
                    Tiếp tục mua sắm
                </a>
            </div>
            
            <div class="confirmation-help">
                <p>Bạn cần hỗ trợ? <a href="/webbanhang/contact">Liên hệ chúng tôi</a></p>
            </div>
        </div>
    </div>
</div>

<style>
.order-confirmation {
    padding: 4rem 0;
    min-height: 70vh;
    display: flex;
    align-items: center;
}

.confirmation-card {
    background: var(--bg-darker);
    border-radius: 12px;
    padding: 3rem;
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    animation: fadeIn 0.6s ease-out;
}

.confirmation-icon {
    width: 100px;
    height: 100px;
    margin: 0 auto 2rem;
    background: rgba(46, 213, 115, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.confirmation-icon svg {
    color: #2ed573;
    width: 50%;
    height: 50%;
}

.confirmation-card h1 {
    color: var(--main-color);
    margin-bottom: 1.5rem;
    font-size: 2.2rem;
}

.confirmation-message {
    color: var(--text-light);
    font-size: 1.1rem;
    line-height: 1.6;
    margin-bottom: 2rem;
}

.confirmation-details {
    color: var(--text-muted);
    margin: 0.5rem 0;
    font-size: 1rem;
}

.confirmation-actions {
    display: flex;
    gap: 1rem;
    justify-content: center;
    margin: 2.5rem 0;
    flex-wrap: wrap;
}

.confirmation-actions .btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.8rem 1.5rem;
    font-size: 1rem;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.confirmation-actions .btn svg {
    width: 18px;
    height: 18px;
}

.confirmation-help {
    margin-top: 2rem;
    padding-top: 1.5rem;
    border-top: 1px solid var(--border-color);
}

.confirmation-help a {
    color: var(--main-color);
    text-decoration: none;
    font-weight: 500;
    transition: color 0.2s;
}

.confirmation-help a:hover {
    color: var(--main-color-hover);
    text-decoration: underline;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive */
@media (max-width: 768px) {
    .confirmation-card {
        padding: 2rem 1.5rem;
    }
    
    .confirmation-actions {
        flex-direction: column;
        gap: 0.75rem;
    }
    
    .confirmation-actions .btn {
        width: 100%;
        justify-content: center;
    }
}
</style>

<?php include 'app/views/shares/footer.php'; ?>