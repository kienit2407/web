<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="../css/header/cuahang.css">
    <link rel="stylesheet" href="../css/header/timkiem.css">
    <link rel="stylesheet" href="../css/header/giohang.css">

    <link rel="stylesheet" href="../css/style_thehemoi.css">
    <link rel="stylesheet" href="../css/style_thongbao.css">
    <link rel="stylesheet" href="../css/style_dexuat.css">
    <link rel="stylesheet" href="../css/style_phukien.css">
    <link rel="stylesheet" href="../css/tien_ich.css">
    <link rel="stylesheet" href="../css/style_loa.css">
    <link rel="stylesheet" href="../css/style_footer.css">
    <link rel="stylesheet" href="../css/mua/mua.css">
    <link rel="stylesheet" href="chitietsanpham/dienthoai/dienthoai.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php include 'header/header.php'; ?>
    <?php
    if (isset($_GET['dislay']) && isset($_GET['danhMuc'])) {
        if ($_GET['danhMuc'] == 6) {
            include "chitietsanpham/dienthoai/dienthoai.php";
        } else if ($_GET['danhMuc'] == 11) {
            include "chitietsanpham/dongho/dongho.php";
        } else if ($_GET['danhMuc'] == 7) {
            include "chitietsanpham/ipad/ipad.php";
        } else if ($_GET['danhMuc'] == 8) {
            include "chitietsanpham/phukien/phukien.php";
        } else if ($_GET['danhMuc'] == 9) {
            include "chitietsanpham/phukien/phukien.php";
        } else if ($_GET['danhMuc'] == 10) {
            include "chitietsanpham/laptop/laptop.php";
        }
    } else {
        include 'center/thongbao.php';
        include 'center/dexuat.php';
        include 'center/thehemoi.php';
        include 'center/tienich.php';
        include 'center/phukien.php';
        include 'center/loa_amthanh.php';
        include 'footer/footer.php';
    }
    ?>

    <script src="../js/thehemoi/thehemoi.js"></script>
    <script src="../js/phukien/phukien.js"></script>
    <script src="../js/loa/loa.js"></script>
    <script src="../js/chitietsanpham.js"></script>
    <script src="../js/chinhmauchu/nhan_dien_mau_anh.js"></script>
</body>

</html>