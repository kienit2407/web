<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <button>← Back</button>
            <h1>Payment</h1>
        </div>

        <!-- Table -->
        <table class="table">
            <tr>
                <th>Product</th>
                <th>Prices</th>
                <th>Amount</th>
                <th>Total</th>
            </tr>
            <tr>
                <td class="product-details">
                    <img src="https://via.placeholder.com/80" alt="Product">
                    <p>iPhone 16 Pro Max</p>
                </td>
                <td>
                    <span style="text-decoration: line-through; color: #999;">20.000.000đ</span>
                    <br>
                    <span class="price">15.000.000đ</span>
                </td>
                <td>2</td>
                <td class="price">30.000.000đ</td>
            </tr>
        </table>

        <!-- Message -->
        <div class="message">
            <label for="message">Message:</label>
            <input type="text" id="message" placeholder="Notice for shop...">
        </div>

        <!-- Payment Info -->
        <div class="payment-summary">
            <div class="payment-method">
                <span class="price">Payment Method:</span> Payment by credit card <a href="#">Change</a>
            </div>
            <div class="address">
                <span class="price">Address to pick up delivery:</span>
                <p>Hoàng Quân, 0971161803, Số 6, Đường Hồ học làm, Japan <a href="#">Change</a></p>
            </div>
            <div class="coupon">
                <span>Coupon:</span>
                <input type="text" placeholder="Enter your coupon code">
            </div>
            <div class="summary-detail">
                <p>Total cost orders: <span class="price">90.000.000đ</span></p>
                <p>Total delivery: <span class="price">60.000đ</span></p>
                <p>Discount: <span class="price">-25.000đ</span></p>
            </div>
            <div class="total">
                Total: <span class="price">90.035.000đ</span>
            </div>
            <button class="btn-payment">Payment</button>
        </div>
</body>
</html>
