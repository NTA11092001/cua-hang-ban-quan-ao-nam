<?php
    if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
        unset($_SESSION['dangnhap']);
        header('Location:login.php');
    }
?>

<div class="sidebar">
<div class="logo-details">
    <i class='bx bxl-microsoft'></i>
    <div class="logo_name">BAL Shop</div>
    <i class='bx bx-menu' id="btn" ></i>
</div>
<ul class="nav-list">

    <li>
    <a href="index.php">
        <i class="fas fa-chart-bar"></i>
        <span class="links_name">Thống kê</span>
    </a>
        <span class="tooltip">Thống kê</span>
    </li>
    <li>
    <a href="index.php?action=quanlydanhmucsanpham&query=them">
    <i class='fas fa-list' ></i>
        <span class="links_name">Danh mục sản phẩm</span>
    </a>
    <span class="tooltip">Danh mục sản phẩm</span>
    </li>
    <li>
    <a href="index.php?action=quanlysp&query=them">
    <i class='fas fa-tshirt'></i>
        <span class="links_name">Sản phẩm</span>
    </a>
    <span class="tooltip">Sản phẩm</span>
    </li>
    <li>
    <a href="index.php?action=quanlydonhang&query=lietke">
        <i class='fas fa-table' ></i>
        <span class="links_name">Đơn hàng</span>
    </a>
    <span class="tooltip">Đơn hàng</span>
    </li>
    <li>
    <a href="index.php?action=quanlytkKH&query=lietke">
        <i class='fas fa-user-friends' ></i>
        <span class="links_name">Tài khoản khách hàng</span>
    </a>
    <span class="tooltip">Tài khoản khách hàng</span>
    </li>
    <li>
    <a href="">
        <i class='fas fa-user' ></i>
        <span class="links_name">TK: <?php if (isset($_SESSION['dangnhap'])) {echo $_SESSION['dangnhap'];} ?></span>
    </a>
    <span class="tooltip">TK: <?php if (isset($_SESSION['dangnhap'])) {echo $_SESSION['dangnhap'];} ?></span>
    </li>
    <li>
    <a href="index.php?action=doimatkhau&query=1">
    <i class='fas fa-exchange-alt'></i>
        <span class="links_name">Đổi mật khẩu</span>
    </a>
    <span class="tooltip">Đổi mật khẩu</span>
    </li>
    <li>
    <a href="index.php?dangxuat=1">
    <i class='bx bxs-right-arrow-square'></i>
        <span class="links_name">Đăng xuất</span>
    </a>
    <span class="tooltip">Đăng xuất</span>
    </li>
    
    
    
</ul>
</div>
<section class="home-section">
    <h1 style="text-align:center">Trang Quản Trị BAL SHOP</h1>
    <?php
        include("main.php");
    ?>
</section>
