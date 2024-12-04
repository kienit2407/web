<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Basket</title>
</head>

<body>
    <?php
    session_start();
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

    if (!isset($_SESSION['user'])) {
        header('Location:http://localhost/wedbanhang/giaodien/khachhang/login/login.php');
    }

    $user = $_SESSION['user'];
    $sql = "SELECT * FROM giohang WHERE userName = '$user'";
    $kq = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($kq);
    $id_gioHang = $row['id_gioHang']; // Đã có id giỏ hàng

    //Lấy ra tất cả đơn hàng trong giỏ hàng
    $sql1 = "SELECT * FROM sanphamtronggiohang WHERE id_gioHang = '$id_gioHang'";
    $kq1 = mysqli_query($conn, $sql1);

    ?>
    <div class="container">
        <div class="header">
            <button>&larr; <a href="http://localhost/wedbanhang/giaodien/">Back</a></button>
            <h2>Giỏ Hàng</h2>
        </div>
        <div class="menu">
            <h2>Sản Phẩm</h2>
            <h2>Giá</h2>
            <h2>Trả Góp</h2>
            <h2>Action</h2>
        </div>
        <?php while ($row = mysqli_fetch_array($kq1)) {
            $id_temp =  $row['id_sanPham'];
            $sql2 = "SELECT * FROM sanpham WHERE id = '$id_temp'";
            $kq2 = mysqli_query($conn, $sql2);

            $row_tem = mysqli_fetch_array($kq2);
        ?>
            <div class="product">
                <div><img src="../../../ảnh_sản_phẩm/<?php if ($row_tem['phanLoai'] == 1) {
                                                            echo 'sanphammoi';
                                                        } else if ($row_tem['phanLoai'] == 2) {
                                                            echo 'phukien';
                                                        } else {
                                                            echo 'âm thanh';
                                                        } ?>/<?php echo $row_tem['img']; ?>"></div>
                <div class="product-details">
                    <h2><a href="http://localhost/wedbanhang/giaodien/index.php?dislay=chitietsanpham&danhMuc=<?php echo $row_tem['id_danhMuc']; ?>&id_sanPham=<?php echo $row_tem['id']; ?>"><?php echo $row_tem['tenSanPham']; ?></a></h2>
                    <div class="product-options">
                    </div>
                </div>
                <div class="price"><?php echo number_format($row_tem['giaSanPham'], 0, "", "."); ?>₫</div>
                <div class="allprice"><?php echo number_format($row_tem['traGop'], 0, "", "."); ?>₫</div>
                <div>
                    <ul class="delete">
                        <li><a href="../../controler/xl_giohang/xoasanpham.php?id_canXoa=<?php echo $row['id_sanPham']; ?>">Xóa</a></li>
                    </ul>
                </div>
            </div>

        <?php } ?>

    </div>
</body>

</html>