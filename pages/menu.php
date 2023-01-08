<?php
    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc ASC";
    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);                
?>
<?php
    if(isset($_GET['dangxuat']) && $_GET['dangxuat']==1){
        unset($_SESSION['dangky']);
    }
?>
<header>
<nav class="navmenu js-navmenu">
    <a href="index.php"><img src="./img/BAl-logo.png" alt="" class="navmenu-logo"></a>
    <div class="navmenu-list">
        <div class="navmenu-items">
            <a href="index.php" class="navmenu-items-link">Trang chủ</a>
        </div>
        <div class="navmenu-items-dad">
            <a class="navmenu-items-link">
                Danh Mục
                <i class="fa fa-angle-down"></i>
            </a>
            <ul class="navmenu-items-chill">
            <?php
                while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
            ?>
                <li class="navmenu-item">
                    <a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>" class="navmenu-item-link">
                        <?php echo $row_danhmuc['tendanhmuc'] ?> 
                    </a>
                </li>
            <?php
                }
            ?>
            </ul>
        </div>
        <div class="navmenu-items">
            <a href="index.php?quanly=lienhe" class="navmenu-items-link">Liên Hệ</a>
        </div>
    </div>
    <button class="navmenu-icon-search js-button-search">
        <i class="fas fa-search"></i>
    </button>
    <form action="index.php?quanly=timkiem" method="POST">
    <div class="navmenu-search js-search">
        <input type="text" name="tukhoa" placeholder="Tìm kiếm">
        <button class="navmenu-search-icon" name="timkiem" type="submit">
            <i class="fas fa-search"></i>
        </button>
    </div>
    </form>
    <div class="navmenu-icon">
        <ul class="navmenu-icon-list">
            <?php
                if(isset($_SESSION['dangky'])){
            ?>
                <li class="navmenu-icon-item">
                    <a href="index.php?dangxuat=1" class="navmenu-icon-link">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </li>
                <li class="navmenu-icon-item">
                    <a href="index.php?quanly=doimatkhau" class="navmenu-icon-link">
                        <i class="fas fa-exchange-alt"></i>
                    </a>
                </li>
                <li class="navmenu-icon-item">
                    <a href="index.php?quanly=lichsudathang" class="navmenu-icon-link">
                        <i class="fas fa-shopping-bag"></i>
                    </a>
                </li>
            <?php
                }else{
            ?>
                <li class="navmenu-icon-item">
                    <a href="user.php" class="navmenu-icon-link">
                        <i class="fas fa-sign-in-alt"></i>
                    </a>
                </li>
                <li class="navmenu-icon-item">
                    <a href="dangky.php" class="navmenu-icon-link">
                        <i class="fas fa-user-plus"></i>
                    </a>
                </li>
            <?php
                }
            ?>
            <li class="navmenu-icon-item">
                <a href="index.php?quanly=giohang" class="navmenu-icon-link">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
</header>