<h1>Đây là trang coder</h1>
<?php
include "../../connet.php";
$user = $_POST["user"];
$email = $_POST["email"];
$matKhau = $_POST["pass"];
$hoTen = $_POST["name"];
$diaChi = $_POST["address"];
$soDienThoai = $_POST["phone"];

$sql = "INSERT INTO taikhoan (userName, email, matKhau, hoTen, diaChi, soDienThoai)
VALUES ('$user', '$email', '$matKhau', '$hoTen','$diaChi','$soDienThoai');";

if (mysqli_query($conn, $sql)) {
    header("Location:complete.php");
} else {
    header("Location:register.php?loi=Đăng kí thất bại !");
}
?>