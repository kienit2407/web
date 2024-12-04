<div class="header">
    <div><i class='bx bxl-apple'></i></div>
    <div class="cua-hang">
        <a href="index.php">Cửa Hàng</a>
        <div class="container-wrapper">
            <div class="container-cua-hang">
                <div class="column">
                    <h3>Mua Hàng</h3>
                    <a href="#">Mua Sản Phẩm Mới Nhất</a>
                    <a href="#">Mac</a>
                    <a href="#">iPad</a>
                    <a href="#">iPhone</a>
                    <a href="#">Apple Watch</a>
                    <a href="#">Phụ Kiện</a>
                </div>
                <div class="column">
                    <h3>Liên Kết Nhanh</h3>
                    <a href="#">Tình Trạng Đơn Hàng</a>
                    <a href="#">Apple Trade In</a>
                    <a href="#">Tài Chính</a>
                </div>
                <div class="column">
                    <h3>Mua Tại Cửa Hàng Đặc Biệt</h3>
                    <a href="#">Giáo Dục</a>
                    <a href="#">Doanh Nghiệp</a>
                </div>
            </div>
        </div>
    </div>
    <div>Mac</div>
    <div>iPad</div>
    <div>iPhone</div>
    <div>Watch</div>
    <div>AirPods</div>
    <div>TV & Nhà</div>
    <div>Giải Trí</div>
    <div>Phụ Kiện</div>
    <div>Hỗ trợ</div>
    <div class="tim-kiem">
        <i class='bx bx-search' style="color: rgb(106,106,107);"></i>
        <div class="search-container">
            <input type="text" class="search-bar" placeholder="Tìm kiếm trên apple.com">
            <div class="quick-links">
                <p>Liên Kết Nhanh</p>
                <a href="#">Quà Tặng Ngày Lễ</a>
                <a href="#">Phụ Kiện</a>
                <a href="#">AirPods</a>
                <a href="#">AirTag</a>
                <a href="#">Apple Trade In</a>
            </div>
        </div>
    </div>
    <div class="gio-hang">
        <i class='bx bx-shopping-bag' style="color: rgb(106,106,107);"></i>
        <div class="container-gio-hang">
            <h1>Túi của bạn trống.</h1>
            <a href="khachhang/login/<?php if (isset($_SESSION['user'])) {
                                            echo "coder_logout";
                                        } else {
                                            echo "login";
                                        } ?>.php" class="login-link"><?php if (isset($_SESSION['user'])) {
                                                                            echo "Đăng xuất";
                                                                        } else {
                                                                            echo "Đăng nhập";
                                                                        } ?></a> để xem bạn có sản phẩm nào đã lưu không
            <div class="profile-section">
                <h3>Hồ Sơ Của Tôi</h3>
                <ul>
                    <li><i class='bx bx-archive'></i><a href="#">Đơn hàng</a></li>
                    <li><i class='bx bx-bookmark-plus'></i><a href="http://localhost/wedbanhang/giaodien/khachhang/index2/cart.php">Mục Đã Lưu</a></li>
                    <li><i class='bx bxl-kubernetes'></i><a href="khachhang/index2/profile.php">Tài Khoản</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>