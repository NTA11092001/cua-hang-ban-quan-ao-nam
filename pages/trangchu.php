<div class="container-fluid" style="margin-bottom:10px">
  <div class="row">
    <div class="col-md-6">
      <img src="img/sidebanner1.png" class="img-fluid js-sidebanner1" style="cursor: pointer;float:right">
    </div>
    <div class="col-md-6">
      <img src="img/sidebanner2.png" class="img-fluid js-sidebanner2" style="cursor: pointer;">
    </div>
  </div>
</div>

<div class="sidebanner js-showbanner1">
  <div class="container-sidebanner">
    <i class="far fa-window-close container-sidebanner-close js-close-sidebanner1"></i>
    <img src="img/ADV-2.png" class="container-sidebanner1-img">
    </div>
  </div>
</div>

<div class="sidebanner js-showbanner2">
  <div class="container-sidebanner">
    <i class="far fa-window-close container-sidebanner-close js-close-sidebanner2"></i>
    <img src="img/ADV-2.png" class="container-sidebanner1-img">
    </div>
  </div>
</div>

<?php
$sql_danhmuc1 = "SELECT tendanhmuc FROM tbl_danhmuc WHERE id_danhmuc=8";
$query_danhmuc1 = mysqli_query($mysqli,$sql_danhmuc1);
$row_danhmuc1 = mysqli_fetch_array($query_danhmuc1);
$sql_sp1 = "SELECT * FROM tbl_sanpham WHERE id_danhmuc=8";
$query_sp1 = mysqli_query($mysqli,$sql_sp1);
?>
<div class="container-fluid style">
            <a href="index.php?quanly=danhmucsanpham&id=8"><h1><?php echo $row_danhmuc1['tendanhmuc'] ?></h1></a>
            <div class="container">
                <div class="row clearfix slider">
                    <?php
                        while($row_sp = mysqli_fetch_array($query_sp1)){
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="card product_item">
                            <div class="body">
                            <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_sp['id_sanpham'] ?>">
                                <div class="cp_img">
                                    <a href="index.php?quanly=sanpham&id=<?php echo $row_sp['id_sanpham'] ?>&iddm=<?php echo $row_sp['id_danhmuc']?>"><img src="admin/modules/quanlysanpham/upload/<?php echo $row_sp['hinhanh'] ?>" alt="Product" class="img-fluid"></a>
                                    <div class="hover">
                                        <a href="index.php?quanly=sanpham&id=<?php echo $row_sp['id_sanpham'] ?>&iddm=<?php echo $row_sp['id_danhmuc']?>" class="btn btn-outline-dark btn-sm waves-effect"><i class="fas fa-search-plus"></i></a>
                                        <button class="btn" type="submit" name="themgiohang"><a class="btn btn-outline-dark btn-sm waves-effect"><i class="fas fa-shopping-cart"></i></a></button>
                                    </div>
                                </div>
                                <div class="product_details">
                                    <h5><a href="index.php?quanly=sanpham&id=<?php echo $row_sp['id_sanpham'] ?>&iddm=<?php echo $row_sp['id_danhmuc']?>"><?php echo $row_sp['tensanpham']; echo" "; echo $row_sp['masp'] ?></a></h5>
                                    <ul class="product_price list-unstyled">
                                        <li class="old_price" style="text-decoration: line-through"><?php echo $row_sp['giathuong'] ?>đ</li>
                                        <li class="new_price"><?php echo $row_sp['giakm'] ?>đ</li>
                                    </ul>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
</div>

<?php
$sql_danhmuc2 = "SELECT tendanhmuc FROM tbl_danhmuc WHERE id_danhmuc=3";
$query_danhmuc2 = mysqli_query($mysqli,$sql_danhmuc2);
$row_danhmuc2 = mysqli_fetch_array($query_danhmuc2);
$sql_sp2 = "SELECT * FROM tbl_sanpham WHERE id_danhmuc=3";
$query_sp2 = mysqli_query($mysqli,$sql_sp2);
?>
<div class="container-fluid style">
            <a href="index.php?quanly=danhmucsanpham&id=3"><h1><?php echo $row_danhmuc2['tendanhmuc'] ?></h1></a>
            <div class="container">
                <div class="row clearfix slider">
                    <?php
                        while($row_sp = mysqli_fetch_array($query_sp2)){
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="card product_item">
                            <div class="body">
                            <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_sp['id_sanpham'] ?>">
                                <div class="cp_img">
                                    <a href="index.php?quanly=sanpham&id=<?php echo $row_sp['id_sanpham'] ?>&iddm=<?php echo $row_sp['id_danhmuc']?>"><img src="admin/modules/quanlysanpham/upload/<?php echo $row_sp['hinhanh'] ?>" alt="Product" class="img-fluid"></a>
                                    <div class="hover">
                                        <a href="index.php?quanly=sanpham&id=<?php echo $row_sp['id_sanpham'] ?>&iddm=<?php echo $row_sp['id_danhmuc']?>" class="btn btn-outline-dark btn-sm waves-effect"><i class="fas fa-search-plus"></i></a>
                                        <button class="btn" type="submit" name="themgiohang"><a class="btn btn-outline-dark btn-sm waves-effect"><i class="fas fa-shopping-cart"></i></a></button>
                                    </div>
                                </div>
                                <div class="product_details">
                                    <h5><a href="index.php?quanly=sanpham&id=<?php echo $row_sp['id_sanpham'] ?>&iddm=<?php echo $row_sp['id_danhmuc']?>"><?php echo $row_sp['tensanpham']; echo" "; echo $row_sp['masp'] ?></a></h5>
                                    <ul class="product_price list-unstyled">
                                        <li class="old_price" style="text-decoration: line-through"><?php echo $row_sp['giathuong'] ?>đ</li>
                                        <li class="new_price"><?php echo $row_sp['giakm'] ?>đ</li>
                                    </ul>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
</div>

<?php
$sql_danhmuc3 = "SELECT tendanhmuc FROM tbl_danhmuc WHERE id_danhmuc=4";
$query_danhmuc3 = mysqli_query($mysqli,$sql_danhmuc3);
$row_danhmuc3 = mysqli_fetch_array($query_danhmuc3);
$sql_sp3 = "SELECT * FROM tbl_sanpham WHERE id_danhmuc=4";
$query_sp3 = mysqli_query($mysqli,$sql_sp3);
?>
<div class="container-fluid style">
            <a href="index.php?quanly=danhmucsanpham&id=4"><h1><?php echo $row_danhmuc3['tendanhmuc'] ?></h1></a>
            <div class="container">
                <div class="row clearfix slider">
                    <?php
                        while($row_sp = mysqli_fetch_array($query_sp3)){
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="card product_item">
                            <div class="body">
                            <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_sp['id_sanpham'] ?>">
                                <div class="cp_img">
                                    <a href="index.php?quanly=sanpham&id=<?php echo $row_sp['id_sanpham'] ?>&iddm=<?php echo $row_sp['id_danhmuc']?>"><img src="admin/modules/quanlysanpham/upload/<?php echo $row_sp['hinhanh'] ?>" alt="Product" class="img-fluid"></a>
                                    <div class="hover">
                                        <a href="index.php?quanly=sanpham&id=<?php echo $row_sp['id_sanpham'] ?>&iddm=<?php echo $row_sp['id_danhmuc']?>" class="btn btn-outline-dark btn-sm waves-effect"><i class="fas fa-search-plus"></i></a>
                                        <button class="btn" type="submit" name="themgiohang"><a class="btn btn-outline-dark btn-sm waves-effect"><i class="fas fa-shopping-cart"></i></a></button>
                                    </div>
                                </div>
                                <div class="product_details">
                                    <h5><a href="index.php?quanly=sanpham&id=<?php echo $row_sp['id_sanpham'] ?>&iddm=<?php echo $row_sp['id_danhmuc']?>"><?php echo $row_sp['tensanpham']; echo" "; echo $row_sp['masp'] ?></a></h5>
                                    <ul class="product_price list-unstyled">
                                        <li class="old_price" style="text-decoration: line-through"><?php echo $row_sp['giathuong'] ?>đ</li>
                                        <li class="new_price"><?php echo $row_sp['giakm'] ?>đ</li>
                                    </ul>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
</div>

<?php
$sql_danhmuc4 = "SELECT tendanhmuc FROM tbl_danhmuc WHERE id_danhmuc=5";
$query_danhmuc4 = mysqli_query($mysqli,$sql_danhmuc4);
$row_danhmuc4 = mysqli_fetch_array($query_danhmuc4);
$sql_sp4 = "SELECT * FROM tbl_sanpham WHERE id_danhmuc=5";
$query_sp4 = mysqli_query($mysqli,$sql_sp4);
?>
<div class="container-fluid style">
            <a href="index.php?quanly=danhmucsanpham&id=5"><h1><?php echo $row_danhmuc4['tendanhmuc'] ?></h1></a>
            <div class="container">
                <div class="row clearfix slider">
                    <?php
                        while($row_sp = mysqli_fetch_array($query_sp4)){
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="card product_item">
                            <div class="body">
                            <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_sp['id_sanpham'] ?>">
                                <div class="cp_img">
                                    <a href="index.php?quanly=sanpham&id=<?php echo $row_sp['id_sanpham'] ?>&iddm=<?php echo $row_sp['id_danhmuc']?>"><img src="admin/modules/quanlysanpham/upload/<?php echo $row_sp['hinhanh'] ?>" alt="Product" class="img-fluid"></a>
                                    <div class="hover">
                                        <a href="index.php?quanly=sanpham&id=<?php echo $row_sp['id_sanpham'] ?>&iddm=<?php echo $row_sp['id_danhmuc']?>" class="btn btn-outline-dark btn-sm waves-effect"><i class="fas fa-search-plus"></i></a>
                                        <button class="btn" type="submit" name="themgiohang"><a class="btn btn-outline-dark btn-sm waves-effect"><i class="fas fa-shopping-cart"></i></a></button>
                                    </div>
                                </div>
                                <div class="product_details">
                                    <h5><a href="index.php?quanly=sanpham&id=<?php echo $row_sp['id_sanpham'] ?>&iddm=<?php echo $row_sp['id_danhmuc']?>"><?php echo $row_sp['tensanpham']; echo" "; echo $row_sp['masp'] ?></a></h5>
                                    <ul class="product_price list-unstyled">
                                        <li class="old_price" style="text-decoration: line-through"><?php echo $row_sp['giathuong'] ?>đ</li>
                                        <li class="new_price"><?php echo $row_sp['giakm'] ?>đ</li>
                                    </ul>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
</div>

<?php
$sql_danhmuc5 = "SELECT tendanhmuc FROM tbl_danhmuc WHERE id_danhmuc=6";
$query_danhmuc5 = mysqli_query($mysqli,$sql_danhmuc5);
$row_danhmuc5 = mysqli_fetch_array($query_danhmuc5);
$sql_sp5 = "SELECT * FROM tbl_sanpham WHERE id_danhmuc=6";
$query_sp5 = mysqli_query($mysqli,$sql_sp5);
?>
<div class="container-fluid style">
            <a href="index.php?quanly=danhmucsanpham&id=5"><h1><?php echo $row_danhmuc5['tendanhmuc'] ?></h1></a>
            <div class="container">
                <div class="row clearfix slider">
                    <?php
                        while($row_sp = mysqli_fetch_array($query_sp5)){
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="card product_item">
                            <div class="body">
                            <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_sp['id_sanpham'] ?>">
                                <div class="cp_img">
                                    <a href="index.php?quanly=sanpham&id=<?php echo $row_sp['id_sanpham'] ?>&iddm=<?php echo $row_sp['id_danhmuc']?>"><img src="admin/modules/quanlysanpham/upload/<?php echo $row_sp['hinhanh'] ?>" alt="Product" class="img-fluid"></a>
                                    <div class="hover">
                                        <a href="index.php?quanly=sanpham&id=<?php echo $row_sp['id_sanpham'] ?>&iddm=<?php echo $row_sp['id_danhmuc']?>" class="btn btn-outline-dark btn-sm waves-effect"><i class="fas fa-search-plus"></i></a>
                                        <button class="btn" type="submit" name="themgiohang"><a class="btn btn-outline-dark btn-sm waves-effect"><i class="fas fa-shopping-cart"></i></a></button>
                                    </div>
                                </div>
                                <div class="product_details">
                                    <h5><a href="index.php?quanly=sanpham&id=<?php echo $row_sp['id_sanpham'] ?>&iddm=<?php echo $row_sp['id_danhmuc']?>"><?php echo $row_sp['tensanpham']; echo" "; echo $row_sp['masp'] ?></a></h5>
                                    <ul class="product_price list-unstyled">
                                        <li class="old_price" style="text-decoration: line-through"><?php echo $row_sp['giathuong'] ?>đ</li>
                                        <li class="new_price"><?php echo $row_sp['giakm'] ?>đ</li>
                                    </ul>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
</div>

<?php
$sql_danhmuc6 = "SELECT tendanhmuc FROM tbl_danhmuc WHERE id_danhmuc=7";
$query_danhmuc6 = mysqli_query($mysqli,$sql_danhmuc6);
$row_danhmuc6 = mysqli_fetch_array($query_danhmuc6);
$sql_sp6 = "SELECT * FROM tbl_sanpham WHERE id_danhmuc=7";
$query_sp6 = mysqli_query($mysqli,$sql_sp6);
?>
<div class="container-fluid style">
            <a href="index.php?quanly=danhmucsanpham&id=7"><h1><?php echo $row_danhmuc6['tendanhmuc'] ?></h1></a>
            <div class="container">
                <div class="row clearfix slider">
                    <?php
                        while($row_sp = mysqli_fetch_array($query_sp6)){
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="card product_item">
                            <div class="body">
                            <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_sp['id_sanpham'] ?>">
                                <div class="cp_img">
                                    <a href="index.php?quanly=sanpham&id=<?php echo $row_sp['id_sanpham'] ?>&iddm=<?php echo $row_sp['id_danhmuc']?>"><img src="admin/modules/quanlysanpham/upload/<?php echo $row_sp['hinhanh'] ?>" alt="Product" class="img-fluid"></a>
                                    <div class="hover">
                                        <a href="index.php?quanly=sanpham&id=<?php echo $row_sp['id_sanpham'] ?>&iddm=<?php echo $row_sp['id_danhmuc']?>" class="btn btn-outline-dark btn-sm waves-effect"><i class="fas fa-search-plus"></i></a>
                                        <button class="btn" type="submit" name="themgiohang"><a class="btn btn-outline-dark btn-sm waves-effect"><i class="fas fa-shopping-cart"></i></a></button>
                                    </div>
                                </div>
                                <div class="product_details">
                                    <h5><a href="index.php?quanly=sanpham&id=<?php echo $row_sp['id_sanpham'] ?>&iddm=<?php echo $row_sp['id_danhmuc']?>"><?php echo $row_sp['tensanpham']; echo" "; echo $row_sp['masp'] ?></a></h5>
                                    <ul class="product_price list-unstyled">
                                        <li class="old_price" style="text-decoration: line-through"><?php echo $row_sp['giathuong'] ?>đ</li>
                                        <li class="new_price"><?php echo $row_sp['giakm'] ?>đ</li>
                                    </ul>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
</div>

<?php
$sql_danhmuc7 = "SELECT tendanhmuc FROM tbl_danhmuc WHERE id_danhmuc=9";
$query_danhmuc7 = mysqli_query($mysqli,$sql_danhmuc7);
$row_danhmuc7 = mysqli_fetch_array($query_danhmuc7);
$sql_sp7 = "SELECT * FROM tbl_sanpham WHERE id_danhmuc=9";
$query_sp7 = mysqli_query($mysqli,$sql_sp7);
?>
<div class="container-fluid style">
            <a href="index.php?quanly=danhmucsanpham&id=9"><h1><?php echo $row_danhmuc7['tendanhmuc'] ?></h1></a>
            <div class="container">
                <div class="row clearfix slider">
                    <?php
                        while($row_sp = mysqli_fetch_array($query_sp7)){
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="card product_item">
                            <div class="body">
                            <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_sp['id_sanpham'] ?>">
                                <div class="cp_img">
                                    <a href="index.php?quanly=sanpham&id=<?php echo $row_sp['id_sanpham'] ?>&iddm=<?php echo $row_sp['id_danhmuc']?>"><img src="admin/modules/quanlysanpham/upload/<?php echo $row_sp['hinhanh'] ?>" alt="Product" class="img-fluid"></a>
                                    <div class="hover">
                                        <a href="index.php?quanly=sanpham&id=<?php echo $row_sp['id_sanpham'] ?>&iddm=<?php echo $row_sp['id_danhmuc']?>" class="btn btn-outline-dark btn-sm waves-effect"><i class="fas fa-search-plus"></i></a>
                                        <button class="btn" type="submit" name="themgiohang"><a class="btn btn-outline-dark btn-sm waves-effect"><i class="fas fa-shopping-cart"></i></a></button>
                                    </div>
                                </div>
                                <div class="product_details">
                                    <h5><a href="index.php?quanly=sanpham&id=<?php echo $row_sp['id_sanpham'] ?>&iddm=<?php echo $row_sp['id_danhmuc']?>"><?php echo $row_sp['tensanpham']; echo" "; echo $row_sp['masp'] ?></a></h5>
                                    <ul class="product_price list-unstyled">
                                        <li class="old_price" style="text-decoration: line-through"><?php echo $row_sp['giathuong'] ?>đ</li>
                                        <li class="new_price"><?php echo $row_sp['giakm'] ?>đ</li>
                                    </ul>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
</div>