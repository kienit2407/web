<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên kết thành công</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .modal {
            background-color: #ffffff;
            width: 400px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            position: relative;
        }

        .modal .icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 70px;
            height: 70px;
            background-color: #e6f9ea;
            border-radius: 50%;
            margin: 0 auto;
        }

        .modal .icon svg {
            width: 40px;
            height: 40px;
            fill: #4CAF50;
        }

        .modal h2 {
            font-size: 24px;
            color: #333333;
            margin: 20px 0 10px;
        }

        .modal p {
            font-size: 16px;
            color: #666666;
            margin-bottom: 30px;
        }

        .modal a {
            display: inline-block;
            background-color: #4CAF50;
            color: #ffffff;
            text-decoration: none;
            border-radius: 6px;
            padding: 12px 25px;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .modal a:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <div class="modal">
        <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M12 0C5.372 0 0 5.372 0 12s5.372 12 12 12 12-5.372 12-12S18.628 0 12 0zm-1.2 17.7L5.3 12l1.4-1.4 4.1 4.1 6.6-6.6 1.4 1.4-8 8z" />
            </svg>
        </div>
        <h2>Giao dịch thành công!</h2>
        <p>Đơn hàng sẽ được giao đến tay bạn trong thời gian sớm nhât!</p>
        <a href="http://localhost/wedbanhang/giaodien/">OK</a>
    </div>

</body>

</html>