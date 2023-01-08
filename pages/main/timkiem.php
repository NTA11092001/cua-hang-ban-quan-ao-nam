<?php
    if(isset($_POST['timkiem'])){
        $tukhoa = $_POST['tukhoa'];
    }else{
        $tukhoa = '';
    }
    $sql_sp = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
    $query_sp = mysqli_query($mysqli,$sql_sp);
?>
<div class="container" id="product-section">
<h1>Bạn đang tìm kiếm theo từ khóa : <?php echo "$_POST[tukhoa]" ?></h1>
<div class="container-fluid style">
            <div class="container">
                <div class="row clearfix">
                    <?php
                    while($row_sp=mysqli_fetch_array($query_sp)){
                    ?> 
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="card product_item">
                            <div class="body">
                                <div class="cp_img">
                                    <a href="index.php?quanly=sanpham&id=<?php echo $row_sp['id_sanpham'] ?>"><img src="admin/modules/quanlysanpham/upload/<?php echo $row_sp['hinhanh'] ?>" alt="Product" class="img-fluid"></a>
                                    <div class="hover">
                                        <a href="index.php?quanly=sanpham&id=<?php echo $row_sp['id_sanpham'] ?>" class="btn btn-primary btn-sm waves-effect"><i class="fas fa-search-plus"></i></a>
                                        <a href="index.php?quanly=giohang" class="btn btn-primary btn-sm waves-effect"><i class="fas fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product_details">
                                    <h5><a href="index.php?quanly=sanpham&id=<?php echo $row_sp['id_sanpham'] ?>"><?php echo $row_sp['tensanpham']; echo" "; echo $row_sp['masp'] ?></a></h5>
                                    <ul class="product_price list-unstyled">
                                        <li class="old_price"><?php echo $row_sp['giathuong'] ?>đ</li>
                                        <li class="new_price"><?php echo $row_sp['giakm'] ?>đ</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
</div>
</div>