<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<?php
include "../../connet.php";
session_start();
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $sql = "SELECT * FROM nguoidung
    WHERE userName =  '$user' ";
    $result = mysqli_query($conn, $sql);

    $hoTen = '';
    $sdt = '';
    $email = '';
    $diachi = '';
    while ($row = mysqli_fetch_array($result)) {
        $hoTen = $row['hoTen'];
        $sdt = $row['soDienThoai'];
        $email = $row['email'];
        $diachi = $row['diaChi'];
    }
} else {
    header("Location:../login/login.php");
}

?>
<div class="account-container">
    <div class="action-card1">
        <h1>Your Apple Account</h1>
        <div class="account-info">
            <div>
                <div>
                    <img src="../../../ảnh_sản_phẩm/ảnh/dongho.png" class="avatar">
                </div>

                <div class="profile-picture">
                    <p><?php echo $user; ?></p>
                </div>
            </div>
            <div class="info-details">
                <p><i class="fa-solid fa-user">&nbsp;&nbsp;&nbsp;&nbsp;</i><strong>Name:</strong> <?php echo $hoTen; ?></p>
                <p><i class="fa-solid fa-phone">&nbsp;&nbsp;&nbsp;&nbsp;</i><strong>Phone number:</strong> <?php echo $sdt; ?> </p>
                <p><i class="fa-solid fa-envelope">&nbsp;&nbsp;&nbsp;&nbsp;</i><strong>Email:</strong> <?php echo $email; ?> </p>
                <p><i class="fa-solid fa-location-dot">&nbsp;&nbsp;&nbsp;&nbsp;</i><strong>Address:</strong> <?php echo $diachi; ?></p>
            </div>
        </div>
    </div>
    <div class="account-actions">
        <div class="action-card">
            <i class='bx bxs-map'></i>
            Extra Address
        </div>
        <div class="action-card">
            <i class='bx bx-cart-alt'></i>
            Purchased History
        </div>
        <div class="action-card">
            <i class='bx bxs-virus-block'></i>
            Alter Password & Security
        </div>
    </div>
    <div class="submit">
        <a href="../../index.php"><i class='bx bx-home-alt-2'></i></a>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</html>