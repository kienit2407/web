<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Register</title>
</head>

<body>
    <video class="video-background" autoplay loop muted playsinline>
        <source src="../video/sex gầy.mp4" type="video/mp4">
    </video>
    <div class="wrapper">
        <form action="coder_register.php" method="post" class="form-login"><!-- Bắt đầu đăng kí thông tin-->
            <h1 class="form-heading">Create Account</h1>
            <h1 class="form-headingc">Create Account to accsess all our</h1>
            <div class="form-group">
                <i class="fa-solid fa-signature"></i>
                <input type="text" class="form-input" placeholder="fullname" name="name" id="">
            </div>
            <div class="form-group">
                <i class="fa-regular fa-envelope"></i>
                <input type="text" class="form-input" placeholder="email" name="email" id="">
            </div>
            <div class="form-group">
                <i class="fa-solid fa-house"></i>
                <input type="text" class="form-input" placeholder="address" name="address" id="">
            </div>
            <div class="form-group">
                <i class="fa-solid fa-phone"></i>
                <input type="text" class="form-input" placeholder="phonenumber" name="phone" id="">
            </div>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" class="form-input" placeholder="username" name="user" id="">
            </div>
            <div class="form-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" class="form-input" placeholder="password" name="pass" id="">
            </div>
            <div class="form-group">
                <i class="fa-solid fa-bookmark"></i>
                <input type="password" class="form-input" placeholder="re-password" name="re-pass" id="">
            </div>
            <div style="color: red;"><?php if (!isset($_GET["loi"])) {
                                            echo "";
                                        } else {
                                            echo $_GET["loi"];
                                        } ?></div><!-- Thẻ báo lỗi-->
            <div class="submit">
                <input type="submit" name="dangky" value="Register" class="form-submit">
            </div>
            <ul class="form-dk">
                <li><a href="login.php">Back</a></li>
            </ul>
        </form><!-- Kết thúc đăng kí thông tin-->
    </div>



</body>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</html>