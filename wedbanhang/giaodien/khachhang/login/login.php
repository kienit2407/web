<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Login</title>
</head>

<body>
    <video class="video-background" autoplay loop muted playsinline>
        <source src="../video/sex gầy.mp4" type="video/mp4">
    </video>
    <div class="wrapper">
        <form action="coder_login.php" method="post" class="form-login">
            <h1 class="form-headinga">Login in to easily buy more ! </h1>
            <h1 class="form-heading">LOGIN</h1>
            <div class="form-headingb">
                <i class="fa-brands fa-apple"></i>
            </div>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" class="form-input" placeholder="username" name="user" id="">
            </div>
            <div class="form-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" class="form-input" placeholder="password" name="pass" id="">
            </div>
            <div style="color: red;"><?php if (!isset($_GET["loi"])) {
                                            echo "";
                                        } else {
                                            echo $_GET["loi"];
                                        }  ?></div>
            <div>
                <ul class="form-qmk">
                    <li><a href="#">Forgot password?</a></li>
                </ul>
            </div>
            <div>
                <ul class="form-dk">
                    <li><a href="register.php">Resgister</a></li>
                </ul>
            </div>
            <div class="submit">
                <input type="submit" name="dangnhap" value="Login" class="form-submit">
            </div>
            <div class="form-check">
                <input type="radio" name="" id="" value="Save me">
                <label for="paymentCash">Save me</label>
            </div>
        </form>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</html>