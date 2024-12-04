 <?php
    include "connet.php";
    $sql_1 = "SELECT * FROM sanpham
    WHERE phanLoai = 1 ";

    $result_1 = mysqli_query($conn, $sql_1);
    $temp = 1;
    ?>

 <div class=" the-he">
     <div class="the-he-1">
         Thế hệ mới nhất. <span style="color: rgb(110, 110, 115);">Xem ngay có gì mới.</span>
     </div>
     <div class="container-the-he">
         <img class="prev" src="../ảnh_sản_phẩm/prev.png">
         <img class="next" src="../ảnh_sản_phẩm/next.png">
         <div class="image-container-the-he-moi" id="carousel">
             <?php
                while ($row = mysqli_fetch_array($result_1)) {
                ?>
                 <a href="index.php?dislay=chitietsanpham&danhMuc=<?php echo $row['id_danhMuc']; ?>&id_sanPham=<?php echo $row['id']; ?>">
                     <div class="san-pham-the-he-moi">
                         <img src="../ảnh_sản_phẩm/sanphammoi/<?php echo $row['img']; ?>" id="anh<?php echo $temp; ?>">
                         <div class="thong-tin" id="text<?php echo $temp;
                                                        $temp += 1; ?>">
                             <p><?php echo $row['tenSanPham']; ?></p>
                             <p><?php echo $row['moTa']; ?></p>
                             <p>Chỉ từ <?php echo number_format($row['giaSanPham'], 0, "", "."); ?> đ hoặc <?php echo  number_format($row['traGop'], 0, "", "."); ?> đ / 24 tháng</p>
                         </div>
                     </div>
                 </a>
             <?php } ?>
         </div>
     </div>
 </div><!-- Kết thúc danh sách sách phẩm thế hệ mới-->