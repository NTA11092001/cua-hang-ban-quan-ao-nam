<?php
$sql_sp = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' AND tinhtrang='1' ORDER BY id_sanpham DESC";
$query_sp = mysqli_query($mysqli, $sql_sp);
$sql_danhmuc="SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
$query_danhmuc=mysqli_query($mysqli,$sql_danhmuc);
$row_danhmuc=mysqli_fetch_array($query_danhmuc);
?>
<div class="container-fluid style">
    <a href=""><h1><?php echo $row_danhmuc['tendanhmuc'] ?></h1></a>
    <div class="container">
        <div class="row clearfix d-flex">
            <?php
            while($row_sp=mysqli_fetch_array($query_sp)){
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