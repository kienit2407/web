<div class="order-summary-container">
    <!-- Bản tóm tắt -->
    <div class="order-summary">
        <h3>Bản tóm tắt</h3>
        <div class="summary-item">
            <span>Số lượng sản phẩm</span>
            <span><?php echo $soluong; ?></span>
        </div>
        <div class="summary-item">
            <span>Phiên bản</span>
            <span><?php echo $phienBan; ?></span>
        </div>
        <div class="summary-item">
            <span>Màu sắc</span>
            <span><?php echo $mau; ?></span>
        </div>
        <div class="summary-item">
            <span>Tổng giá trước thuế</span>
            <span><?php echo number_format($giaSanPham, 0, "", "."); ?> VNĐ</span>
        </div>
        <div class="summary-item">
            <span>Thuế GTGT</span>
            <span>1.700.000 VNĐ</span>
        </div>
        <div class="summary-item savings">
            <span>Tổng số tiền tiết kiệm</span>
            <span>---</span>
        </div>
    </div>

    <!-- Tổng cộng -->
    <div class="total-price">
        <h2>Tổng cộng</h2>
        <div class="total-amount"><?php echo number_format(($giaSanPham * $soluong) + 1700000, 0, "", "."); ?> đồng</div>
        <p>Mẫu bao gồm thuế GTGT</p>
    </div>

    <!-- Bắt đầu lấy url hiện tại -->
    <?php
    // Lấy giao thức (http hoặc https)
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
    // Lấy tên miền
    $host = $_SERVER['HTTP_HOST'];

    // Lấy đường dẫn
    $path = $_SERVER['REQUEST_URI'];

    // Ghép lại URL đầy đủ
    $currentUrl = $protocol . "://" . $host . $path;
    ?>
    <!-- Kết thúc lấy url hiện tại -->
    <!-- Nút thanh toán -->
    <a href="<?php echo  $currentUrl . "&dislay=thanhtoan"; ?>"><button class="checkout-button">Thanh Toán</button></a>


    <!-- Lợi ích kèm theo -->
    <div class="benefits">
        <div class="benefit-item">
            <img src="../../ảnh_sản_phẩm/icon/1.svg" alt="Cam kết giá">
            <span>Cam kết giá</span>
        </div>
        <div class="benefit-item">
            <img src="../../ảnh_sản_phẩm/icon/2.webp" alt="Giao hàng miễn phí">
            <span>Giao hàng miễn phí toàn quốc</span>
        </div>
        <div class="benefit-item">
            <img src="../../ảnh_sản_phẩm/icon/3.png" alt="Trả góp">
            <span>Gói trả góp 0%</span>
        </div>
        <div class="benefit-item">
            <img src="../../ảnh_sản_phẩm/icon/4.webp" alt="Đổi trả">
            <span>Đổi sản phẩm theo quy định trong vòng 14 ngày</span>
        </div>
    </div>
</div>