<?php
include "../../connet.php";
session_start();
if (isset($_POST["dangnhap"])) {
    $user = $_POST["user"];
    $pass = $_POST["pass"];

    $sql = "SELECT * FROM nguoidung";

    $chess = true;

    $result =  mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        if ($row[0] == $user && $row[2] == $pass) {
            $chess = false;
            $_SESSION["user"] = $row[0];
            header("Location:../../index.php");
        }
    }
    if ($chess) {
        header("Location:login.php?loi=Đăng nhập không thành công !");
    }
}
