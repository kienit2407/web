<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <!-- <div class="admin">AMIN</div> -->
    <div class="container">
    <!-- menu -->
    <div class="sidebar"> 
        <nav>
            <ul>
                <!-- Dash board -->
            <li class="menu-item has-submenu">
                    <span>Dash Board</span>
                    <ul class="submenu">
                        <li>Analyst</li>
                        <li>Feedback</li>
                        <li>Order List</li>
                    </ul>
                </li>
                <!-- Iventory -->
                <li class="menu-item has-submenu">
                    <span>Inventory</span>
                    <ul class="submenu">
                        <li>Products</li>
                        <li>Categories</li>
                    </ul>
                </li>
                <!-- Setting -->
                <li class="menu-item has-submenu">
                    <span>Setting</span>
                    <ul class="submenu">
                        <li>1</li>
                        <li>2</li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- nut dang xuat -->
        <button class="logout">Log out</button>
    </div>
    <!-- main -->
    <div class="main-content">
        <header>
        <div class="logo"> Name Store</div>
        <!-- tim kiem -->
            <input type="text" placeholder="Searching Orders by Code" class="search-bar">
            <!-- thong tin admin -->
            <div class="profile">
                <span>Hello, Admin</span>
                <img src="https://via.placeholder.com/40" alt="Admin">
            </div>
        </header>
        <!-- thong tin mua hang -->
        <section class="dashboard">
            <div class="cards1">
                <div class="card">
                    <p>5</p>
                    <span>Products</span>
                </div>
                <div class="card">
                    <p>1200k</p>
                    <span>Earns</span>
                </div>
                <div class="card">
                    <p>5</p>
                    <span>Orders</span>
                </div>
                <div class="card">
                    <p>100</p>
                    <span>Customers</span>
                </div>
            </div>
            <!-- mua hang va huy hang -->
            <div class="order-management">
                <div class="summary">
                    <div class="card1">
                        <div class="sumary-order">
                            <div class="mini-card">25</div>
                            <div style ="color:gray">New Order Place</div>
                            <div style ="color:#21c365">
                                <ul >
                                    <li><a href="#" style ="color:#21c365">Order Management</a></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="cards2">
                        <div class="card">
                            <div class="mini-card1">6</div>
                            <span>Orders Delivered Successfully</span>
                        </div>
                        <div class="card">
                            <div class="mini-card1">2</div>
                            <span>Orders Cancelled</span>
                        </div>
                    </div>
                </div>
                <!-- vi ca nhan -->
                <div class="wallet">
                    <div class="my-wallet">
                        <h3>Wallet</h3>
                        <p>Remaining Money: 200,000,000 VND</p>
                    </div>
                    <ul class="transaction-list">
                        <li><span>16/11/2024</span> Hoàng Quân <span> 100 </span> <span>+20,000,000 VND</span></li>
                        <li><span>15/11/2024</span> Lợi Phúc   <span> 101 </span> <span>+20,000,000 VND</span></li>
                        <li><span>14/11/2024</span> Đức Sẽ Gãy <span> 102 </span> <span>+20,000,000 VND</span></li>
                        <!-- cac giao dich an  -->
                        <li class="more-items" style="display: none;"><span>13/11/2024</span> Trần Anh <span> 103 </span> <span>+10,000,000 VND</span></li>
                        <li class="more-items" style="display: none;"><span>12/11/2024</span> Nguyễn Bình <span> 104 </span> <span>+5,000,000 VND</span></li>
                        <li class="more-items" style="display: none;"><span>11/11/2024</span> Phạm Sơn <span> 105 </span> <span>+15,000,000 VND</span></li>
                    </ul>
                    <li class="see-more">See More</li>
                </div>
            </div>
        </section>
    </div>
    </div>
</body>
<script src="menu.js"></script>
</html>
