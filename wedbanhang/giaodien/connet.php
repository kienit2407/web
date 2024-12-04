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
