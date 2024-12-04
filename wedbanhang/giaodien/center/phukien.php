<?php
$sql_2 = "SELECT * FROM sanpham
    WHERE phanLoai = 2 ";

$result_2 = mysqli_query($conn, $sql_2);
?>
<div class="phu-kien"><!-- Danh sách phụ kiện-->
    <div class="phu-kien-1">
        Phụ kiện. <span style="color: rgb(110, 110, 115);">Những phụ kiện hoàng hảo kết hợp với thiết bị yêu thích của bạn.</span>
    </div>
    <div class="container-phu-kien">
        <img id="trai" src="../ảnh_sản_phẩm/prev.png">
        <img id="phai" src="../ảnh_sản_phẩm/next.png">
        <div class="image-container-phu-kien" id="carousel-1">
            <?php
            while ($row = mysqli_fetch_array($result_2)) {
            ?>
                <div>
                    <a href="index.php?dislay=chitietsanpham&danhMuc=<?php echo $row['id_danhMuc']; ?>&id_sanPham=<?php echo $row['id']; ?>">
                        <div class="card">
                            <div class="badge">Mới</div>
                            <img src="../ảnh_sản_phẩm/phukien/<?php echo $row['img'] ?>" class="product-image">
                            <div class="product-title-phu-kien"><?php echo $row['tenSanPham']; ?></div>
                            <div class="price"><?php echo number_format($row['giaSanPham'], 0, "", "."); ?>₫</div>
                        </div>
                    </a>
                </div>
            <?php
            } ?>
        </div>
    </div>
</div><!-- Kết thúc danh sách phụ kiện danh sách phụ kiện-->