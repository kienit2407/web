<?php
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
$id_canXoa = $_GET['id_canXoa'];

$sql = "DELETE FROM sanphamtronggiohang WHERE id_sanPham = $id_canXoa";

if (mysqli_query($conn, $sql)) {
    echo "tc";
} else {
    echo "tb";
}
header("Location:../../khachhang/index2/cart.php");
