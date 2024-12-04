<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Basket</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <button>&larr; Back</button>
            <h2>Basket</h2>
        </div>
        <div class="menu">
            <h2>Product</h2>
            <h2>Price</h2>
            <h2>Amount</h2>
            <h2>Total</h2>
            <h2>Action</h2>
        </div>
        <div class="product">
            <input type="checkbox">
            <img src="https://via.placeholder.com/80" alt="iPhone 16 Pro Max">
            <div class="product-details">
                <h3>iPhone 16 Pro Max</h3>
                <div class="product-options">
                    <select>
                        <option>White</option>
                        <option>Black</option>
                    </select>
                    <select>
                        <option>256GB</option>
                        <option>512GB</option>
                    </select>
                </div>
            </div>
            <div class="price">15.000.000₫</div>
            <div class="quantity">
                <button>-</button>
                <input type="text" value="1">
                <button>+</button>
            </div>
            <div class="allprice">15.000.000₫</div>
            <ul  class="delete">
                <li><a href="#">&#128465;</a></li>
            </ul>
        </div>

        <div class="product">
            <input type="checkbox">
            <img src="https://via.placeholder.com/80" alt="iPhone 16 Pro Max">
            <div class="product-details">
                <h3>iPhone 16 Pro Max</h3>
                <div class="product-options">
                    <select>
                        <option>White</option>
                        <option>Black</option>
                    </select>
                    <select>
                        <option>256GB</option>
                        <option>512GB</option>
                    </select>
                </div>
            </div>
            <div class="price">15.000.000₫</div>
            <div class="quantity">
                <button>-</button>
                <input type="text" value="2">
                <button>+</button>
            </div>
            <div class="allprice">30.000.000₫</div>
            <ul  class="delete">
                <li><a href="#">&#128465;</a></li>
            </ul>
        </div>
        </div>
        

        <div class="footer">
            <label>
                <input type="checkbox">
                Select All(10)
            </label>
            <div class="coupon">
                <button>Enter Coupon</button>
            </div>
            <span>Total Payment: <span class="total-price">45.000.000₫</span></span>
            <button>Buy (2)</button>
        </div>
    </div>
</body>
</html>
