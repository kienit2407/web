<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="muahang.css">
    <title>Đơn Hàng</title>
</head>

<body>
    <video autoplay loop muted>
        <source src="../khachhang/video/sex gầy.mp4" type="video/mp4">
    </video>
    <?php

    // Kiểm tra thử đăng nhập chưa ả
    // if (!isset($_SESSION['user'])) {
    //     header('Location:http://localhost/wedbanhang/giaodien/khachhang/login/login.php');
    // }

    // Lấy ra giá tiền niêm yết cảu id sản phẩm
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
    $id_sanPham = $_GET['id_sanPham'];
    $sql = "SELECT* FROM sanpham WHERE id = '$id_sanPham'";
    $kq = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($kq);

    $giaSanPham = $row['giaSanPham']; // Đã có giá sản phẩm
    $phienBan = $_GET['phienban'];
    $mau = $_GET['mau'];
    $soluong = $_GET['soluong'];

    if ($_GET['phienban'] == "256GB") {
        $giaSanPham += 1000000;
    } else if ($_GET['phienban'] == "512GB") {
        $giaSanPham += 2000000;
    } else if ($_GET['phienban'] == "1TB") {
        $giaSanPham += 3000000;
    }
    ?>
    <?php
    if (isset($_GET['giaodich'])) {
        include 'thanhcong.php';
    } else if (isset($_GET['dislay'])) {
        include 'thanhtoan.php';
    } else {
        include 'muahang_phu.php';
    }
    ?>
</body>

</html>