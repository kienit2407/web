<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Cổng Thanh Toán MoMo</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 900px;
            width: 100%;
        }

        .payment-section {
            padding: 30px;
            border-right: 1px solid #e0e0e0;
            flex: 1;
        }

        .header {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
        }

        .header img {
            width: 50px;
            margin-right: 15px;
        }

        .header p {
            font-weight: 500;
            color: #333;
        }

        .qr-section {
            text-align: center;
        }

        .qr-section h2 {
            font-weight: 700;
            color: #333;
        }

        .qr-section p {
            color: #666;
            margin-bottom: 20px;
        }

        .qr-section img {
            width: 220px;
            height: 220px;
            margin-top: 10px;
            border: 5px solid #f1f1f1;
            border-radius: 15px;
        }

        .order-info-section {
            padding: 30px;
            background-color: #fafafa;
            flex: 0.8;
        }

        .order-info-section h3 {
            margin-bottom: 25px;
            color: #333;
            font-weight: 700;
        }

        .supplier {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .supplier img {
            width: 50px;
            height: 50px;
            margin-right: 15px;
        }

        .supplier p {
            font-weight: 500;
            color: #444;
        }

        .order-details p {
            margin: 8px 0;
            color: #555;
            font-weight: 400;
        }

        .order-details strong {
            font-weight: 500;
        }

        .timer {
            margin-top: 25px;
            color: #e67e22;
            font-weight: 500;
        }

        .help-link,
        .back-link {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #3498db;
            font-weight: 500;
        }

        .help-link:hover,
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="payment-section">
            <div class="header">
                <img src="../../ảnh_sản_phẩm/momo.jpg" alt="MoMo Logo">
                <p>Bạn đang sử dụng giải pháp thanh toán được xây dựng và cung cấp bởi MoMo</p>
            </div>
            <div class="qr-section">
                <h2>Quét mã QR để thanh toán</h2>
                <p>Sử dụng App MoMo hoặc ứng dụng camera hỗ trợ QR code để quét mã</p>
                <img src="../../ảnh_sản_phẩm/thanhtoan.jpg" alt="QR Code">
            </div>
        </div>
        <div class="order-info-section">
            <h3>Thông tin đơn hàng</h3>
            <div class="supplier">
                <p>CÔNG TY TNHH VÀ TẬP ĐOÀN CHÉM GIÓ XUYÊN QUỐC GIA</p>
            </div>
            <div class="order-details">
                <p><strong>Mã đơn hàng:</strong> <?php echo $id_sanPham; ?></p>
                <p><strong>Mô tả:</strong> Thanh toán đơn hàng</p>
                <p><strong>Số tiền:</strong> <?php echo number_format(($giaSanPham * $soluong) + 1700000, 0, "", "."); ?>đ</p>
            </div>
            <div class="timer">
                <p>Đơn hàng sẽ được giao sau : <span>3 ngày</span></p>
            </div>
            <a href="#" class="help-link">Vui lòng ấn xác nhận khi đã thanh toán? Xem Hướng dẫn</a>
            <a href="#" class="back-link">Quay về</a>
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
            <form action="../controler/xl_muahang/muahang.php" method="get">
                <input type="hidden" value="<?php echo  $id_sanPham; ?>" name="id_sanPham">
                <input type="hidden" value="<?php echo  $phienBan; ?>" name="phienBan">
                <input type="hidden" value="<?php echo  $mau; ?>" name="mau">
                <input type="hidden" value="<?php echo  $soluong; ?>" name="soLuong">
                <input type="hidden" value="<?php echo ($giaSanPham * $soluong) + 1700000; ?>" name="tongGiaTri">
                <input type="hidden" value="<?php echo  $currentUrl; ?>" name="trivot">
                <button type="submit" class="checkout-button" style="margin-top: 30px;">Xác Nhận</button>
            </form>
        </div>
    </div>
</body>

</html>