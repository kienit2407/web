<?php
// Kết nối cơ sở dữ liệu
$sever = "localhost";
$user = "root";
$pass = "";
$database = "wedcuatoi";
$conn = new mysqLi($sever, $user, $pass, $database);
if ($conn != null) {
    mysqLi_query($conn, "SET NAMES'utf8'");
} else {
    echo "Kết nối không thành công";
}
// Bắt đầu xử lí 
if (isset($_GET['id_sanPham'])) {
    $id_sanPham = $_GET['id_sanPham'];
    // Lấy ra tên thông tin sản phẩm
    $sql = "SELECT * FROM sanpham WHERE id =  $id_sanPham";
    $result = mysqli_query($conn, $sql);
    // Lấy ra chi tiết sản phẩm từ cái id sản phẩm
    $sql_1 = "SELECT * FROM chitietsanpham WHERE id_sanPham =  $id_sanPham";
    $result_1 = mysqli_query($conn, $sql_1);

    //Các biến thông số sản phẩm
    $chip = '';
    $cpu = '';
    $gpu = '';
    $manhinh = '';
    $sk = '';
    $hdh = '';
    // Biến sản phẩm
    $tensp = '';
    $giatien = 0;
    $giagop = 0;
}
?>
<form action="http://localhost/wedbanhang/giaodien/muahang/muahang.php" method="get" id="myform">
    <input type="hidden" name="phienban" id="phienban">
    <input type="hidden" name="mau" id="mau">
    <input type="hidden" name="id_sanPham" value="<?php echo $id_sanPham; ?>">
    <input type="hidden" name="soluong" id="soluong">
</form>
<div class="container"><!--Bắt đầu sự lựa chọn-->
    <div class="container-1">
        <div>
            <?php while ($row = mysqli_fetch_array($result)) {
            ?>
                <p>
                    Mua <?php echo $row['tenSanPham'];
                        $tensp = $row['tenSanPham']; ?>
                </p>
                <p><?php echo $row['moTa']; ?> </p>
                <p>Từ <?php echo number_format($row['giaSanPham'], 0, "", ".");
                        $giatien = $row['giaSanPham']; ?>đ hoặc <?php echo number_format($row['traGop'], 0, "", ".");
                                                                $giagop = $row['traGop']; ?>đ/1 tháng trong 24 tháng</p>
            <?php } ?>
        </div>
        <div>
            <?php while ($row = mysqli_fetch_array($result_1)) {
                $chip = $row['boXuLi'];
                $cpu = $row['cpu'];
                $gpu = $row['gpu'];
                $manhinh = $row['manHinh'];
                $sk = $row['sucKhoeTheChat'];
                $hdh = $row['heDieuHanh'];
            ?>
                <img src="../ảnh_sản_phẩm/ctsp/dongho/<?php echo $row['img_chiTiet']; ?>">
            <?php } ?>
        </div>
    </div>
    <div class="container-2">
        <div>
            <div class="info-box-container">
                <div class="info-box">
                    Nhận 1.100.000đ–22.600.000đ khi đổi.
                    <span class="icon">+</span>
                </div>
                <div class="info-box">
                    Có tài trợ
                    <span class="icon">+</span>
                </div>
            </div>
        </div>
        <h1 style="font-size: 24px; font-weight: bold; margin-bottom: 8px;">Dây đeo.</h1>
        <p style="font-size: 16px;color: #555;margin-bottom: 20px;">Khám phá kiểu khác nhau và chọn kiểu bạn thích</p>
        <div>
            <div class="checkbox-container">
                <div class="checkbox-card" onclick="selectCard(this)">
                    <div id="value-phienban">Cao Su</div>
                    <div>Từ <?php echo number_format($giatien, 0, "", "."); ?>đ hoặc <?php echo number_format($giagop, 0, "", "."); ?>đ/1 tháng trong 24 tháng</div>
                </div>

                <div class="checkbox-card" onclick="selectCard(this)">
                    <div id="value-phienban">Vải</div>
                    <div>Từ <?php echo number_format($giatien + 1000000, 0, "", "."); ?>đ hoặc <?php echo number_format($giagop + 100000, 0, "", "."); ?>đ/1 tháng trong 24 tháng</div>
                </div>
                <div class="checkbox-card" onclick="selectCard(this)">
                    <div id="value-phienban">Thép</div>
                    <div>Từ <?php echo number_format($giagop + 2000000, 0, "", "."); ?>đ hoặc <?php echo number_format($giagop + 200000, 0, "", "."); ?>đ/1 tháng trong 24 tháng</div>
                </div>
            </div>
        </div>
        <div>
            <div class="color-selection-container">
                <p>Chọn màu bạn yêu thích.</p>
                <h2>Màu.</h2>

                <div class="color-options">
                    <div class="color-option color1" onclick="selectColor(this)">
                        <div class="xoa">Vàng</div>
                    </div>
                    <div class="color-option color2" onclick="selectColor(this)">
                        <div class="xoa">Bạc</div>
                    </div>
                    <div class="color-option color3" onclick="selectColor(this)">
                        <div class="xoa">Trắng</div>
                    </div>
                    <div class="color-option color4" onclick="selectColor(this)">
                        <div class="xoa">Đen</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="order-summary-container"> <!--Phần nhập số lương sản phẩm -->
            <div class="promotion-code">
                <input class="soluong" name="soluong" type="text" placeholder="Nhập số lượng sản phẩm">
            </div>
        </div>
    </div>
</div><!-- Kết thúc sự lựa chọn-->
<div class="spec-container"><!--Bắt đầu thông tin chi tiết sản phẩm sản phẩm-->
    <!-- Processor Section -->
    <div class="spec-section">
        <div class="spec-title">Bộ xử lý</div>
        <div class="spec-details">
            <h3><?php echo $chip; ?></h3><!--Chỗ này ghi thông tin chip-->

            <p class="sub-heading">CPU:</p>
            <p><?php echo $cpu; ?></p><!--Chỗ này ghi thông tin cpu-->

            <p class="sub-heading">GPU:</p><!--Chỗ này ghi thông tin gpu-->
            <p><?php echo $gpu; ?></p>
        </div>
    </div>
    <!-- Thông số màn hình -->
    <div class="spec-section">
        <div class="spec-title">Màn Hình</div>
        <div class="spec-details">
            <p><?php echo $manhinh; ?> </p>
        </div>
    </div>
    <!-- Thông số face ID -->
    <div class="spec-section">
        <div class="spec-title">Sức Khỏe Thể Chất</div>
        <div class="spec-details">
            <p><?php echo $sk; ?></p><!--Chỗ này ghi thông tin Face IDS-->
        </div>
    </div>
    <!-- Thông số face ID -->
    <div class="spec-section">
        <div class="spec-title">Hệ Điều Hành</div>
        <div class="spec-details">
            <p><?php echo $hdh; ?></p><!--Chỗ này ghi thông tin hệ điều hành-->
        </div>
    </div>
</div><!--Kết thúc thông tin chi tiết sản phẩm-->

<div class="product-container"><!--Bắt đầu mục mua sản phẩm-->
    <div>
        <p class="product-status">Sản phẩm mới</p>
        <h1 class="product-title"><?php echo $tensp; ?></h1>
    </div>
    <div>
        <div class="price-info">
            Từ <span>1.957.500 ₫</span>/tháng với lãi suất 0% hoặc <span>23.490.000 ₫</span> khi thu cũ đổi mới
        </div>
        <div class="additional-info">
            <span class="free-shipping"><i class='bx bx-package'></i> Giao hàng miễn phí</span>
            <span class="store-pickup"><i class='bx bxs-store'></i><a href="http://localhost/wedbanhang/giaodien/controler/xl_giohang/giohang.php?id_sanPham=<?php echo $id_sanPham; ?>">Thêm vào giỏ hàng</a></span>
        </div>
    </div>

    <div>
        <button class="buy-button" onclick="abc()">Mua ngay</button>
    </div>

</div><!--Kết thúc mục mua sản phẩm-->