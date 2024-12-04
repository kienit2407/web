<?php
include "connet.php";
$sql_3 = "SELECT * FROM sanpham
    WHERE phanLoai = 3 ";

$result_3 = mysqli_query($conn, $sql_3);
?>
<div class="am-thanh"><!-- Danh sách loa và âm thanh-->
    <div class="am-thanh-1">
        To rỏ, trong trẻo. <span style="color: rgb(110, 110, 115);">Lựa chọn hoàng hảo cho âm thanh tròn đầy, chất lượng cao.</span>
    </div>
    <div class="container-3">
        <img id="trai-1" src="../ảnh_sản_phẩm/prev.png">
        <img id="phai-1" src="../ảnh_sản_phẩm/next.png">
        <div class="image-container-am-thanh" id="carousel-2">
            <?php while ($row = mysqli_fetch_array($result_3)) { ?>
                <div>
                    <a href="index.php?dislay=chitietsanpham&danhMuc=<?php echo $row['id_danhMuc']; ?>&id_sanPham=<?php echo $row['id']; ?>">
                        <div class="card">
                            <div class="badge">Mới</div>
                            <img src="../ảnh_sản_phẩm/âm thanh/<?php echo $row['img']; ?>" class="product-image">
                            <div class="product-title-am-thanh"><?php echo $row['tenSanPham']; ?></div>
                            <div class="price"><?php echo number_format($row['giaSanPham'], 0, "", "."); ?>đ</div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div><!-- Kết thúc danh sách loa và âm thanh-->