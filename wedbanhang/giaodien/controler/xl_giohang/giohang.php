<?php
session_start();
// Kết nối với cơ sở dữ liệu
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
//Kiểm tra thử người này có giỏ hàng hay chưa
$user = $_SESSION['user'];
$sql = "SELECT * FROM giohang WHERE userName = '$user'";

$kq = mysqli_query($conn, $sql);

if (mysqli_num_rows($kq) > 0) { // Người dùng có rồi thì thêm id sản phẩm vào giỏ hàng
    // Bước 1 Cần lấy id giỏ hàng
    $row = mysqli_fetch_array($kq);
    $id_gioHang = $row['id_gioHang'];
    // Bước 2 Thêm id sản phẩm vào id giỏ hàng đó

    $id_sanPham = $_GET['id_sanPham']; // Lấy ra id sản phẩm

    $sql2 = "INSERT INTO sanphamtronggiohang(id_gioHang,id_sanPham)
    VALUES ('$id_gioHang','$id_sanPham')";
    mysqli_query($conn, $sql2); //Đã thêm sản phẩm vào giỏ hàng
} else { // Nười dùng chưa có giỏ hàng thì tạo giỏ hàng
    $sql1 = "INSERT INTO giohang(userName)
VALUES ('$user')";
    mysqli_query($conn, $sql1); // Đã có giỏ hàng cho người mới rồi
    $sql = "SELECT * FROM giohang WHERE userName = '$user'"; // Lấy ra id giỏ hàng từ người dung đó
    $row = mysqli_fetch_array($kq);
    $id_gioHang = $row['id_gioHang'];
    // Bước 2 Thêm id sản phẩm vào id giỏ hàng đó

    $id_sanPham = $_GET['id_sanPham']; // Lấy ra id sản phẩm

    $sql2 = "INSERT INTO sanphamtronggiohang(id_gioHang,id_sanPham)
    VALUES ('$id_gioHang','$id_sanPham')";
    mysqli_query($conn, $sql2); //Đã thêm sản phẩm vào giỏ hàng

    $trivot = $_GET['trivot'];
}
?>
<a href="<?php ?>"></a>