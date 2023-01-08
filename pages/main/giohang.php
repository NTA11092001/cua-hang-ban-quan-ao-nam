<div class="d-flex justify-content-center" style="margin-left: 30%;">
<!-- thanh quá trình thanh toán -->
<div class="container">
  <!-- Responsive Arrow Progress Bar -->
  <div class="arrow-steps clearfix">
    <div class="step current"> <span> <a href="index.php?quanly=giohang" >Giỏ hàng</a></span> </div>
    <?php
        if(isset($_SESSION['dangky'])){
    ?>
        <div class="step"> <span><a href="index.php?quanly=vanchuyen" >Thông tin giao hàng</a></span> </div>
        <div class="step"> <span><a href="index.php?quanly=thongtinthanhtoan" >Thanh toán</a><span> </div>
    <?php
        }else{
    ?>
        <div class="step"> <span><a href="dangky.php" >Thông tin giao hàng</a></span> </div>
        <div class="step"> <span><a href="dangky.php" >Thanh toán</a><span> </div>
    <?php
        }
    ?>
  </div>
  <!-- end Responsive Arrow Progress Bar -->
</div>
</div>

<!-- giỏ hàng -->
<div class="row" style="margin-top:20px">
<h4 style="text-align: center;"><i class="fas fa-shopping-cart"></i> Giỏ hàng</h4>
    <div class="col-md-9">
        <table id="cart" class="table table-hover table-condensed">
        <thead>
            <tr>
                <th style="width: 12%">Sản phẩm</th>
                <th style="width: 20%">Thông tin</th>
                <th style="width: 15%">Giá bán</th>
                <th style="width: 10%">Số lượng</th>
                <th style="width: 10%">Thành tiền</th>
                <th style="width: 8%">Quản Lý</th>
            </tr>
        </thead>
        <tbody>
    <?php
        if(isset($_SESSION['cart'])){
            $tongtien=0;
            foreach($_SESSION['cart'] as $cart_item){ 
                $thanhtien = $cart_item['soluong'] * $cart_item['giakm'];
                $tongtien += $thanhtien;           
    ?>
            <tr>
            <td>
                <div class="img">
                    <img src="admin/modules/quanlysanpham/upload/<?php echo $cart_item['hinhanh'] ?>" class="img-responsive" style="width:100%">
                </div>
            </td>
            <td>
                <div class="info">
                    <h5 class="nomargin"><?php echo $cart_item['tensanpham'] ?></h5>
                    <p>
                    <label>Mã SP</label>: <span><?php echo $cart_item['masp'] ?></span>
                    </p> 
                </div>
            </td>
            <td>
                <div class="price">
    
                    <span style="color:red"><?php echo $cart_item['giakm'] ?> đ</span>
    
                </div>
    
            </td>
            <td>
                <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id']?>"><i style="color:black;" class="fas fa-plus-circle"></i></a>
                <?php echo $cart_item['soluong'] ?>
                <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id']?>"><i style="color:black;" class="fas fa-minus-circle"></i></a>
            </td>
            <td>
                <span><?php echo $thanhtien ?> đ</span>
            </td>
            <td>
                <a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>"><button class="btn btn-outline-danger"><i class="fa fa-trash-alt"></i></button></a>
            </td>
            </tr>
    <?php
        }}else{
            $tongtien= 0;
    ?>  
            <tr>
                <td colspan="6"><p style="text-align:center">Hiện tại giỏ hàng trống</p></td>
            </tr>
    <?php
        }
    ?>              
        </tbody>
        
        </table>
    </div>
    <div class="col-md-3">
        <div class="row d-flex">
            <div class="col-md-5">
                <h5>Tổng Tiền:</h5>
            </div>
            <div class="col-md-4">
                <h5 style="color:red"><?php echo $tongtien ?> đ</h5>
            </div>
        </div>
        <div class="row" style="margin-top:20px">
            <a class="text-decoration-none" href="pages/main/themgiohang.php?xoatatca=1"><button style="width:260px" class="btn btn-outline-danger">Xoá tất cả giỏ hàng</button></a>
        </div>
        <div class="row" style="margin-top:20px">
            <a class="text-decoration-none" href="index.php"><button style="width:260px" class="btn btn-outline-dark">Quay trở lại trang chủ</button></a>
        </div>
        <div class="row" style="margin-top:20px">
            <?php
                if(isset($_SESSION['dangky'])){
            ?>
            <a class="text-decoration-none" href="index.php?quanly=vanchuyen"><button style="width:260px" class="btn btn-outline-dark">Thông tin giao hàng</button></a>
            <?php
                }else{
            ?>
            <a class="text-decoration-none" href="dangky.php"><button style="width:260px" class="btn btn-outline-dark">Đăng ký đặt hàng</button></a>
            <?php
                }
            ?>
        </div>
    </div>
</div>

<?php
$sql_sp = "SELECT * FROM tbl_sanpham WHERE giakm<500000 ORDER BY id_sanpham DESC";
$query_sp = mysqli_query($mysqli, $sql_sp);
?>
<div class="container-fluid style">
    <h1 style="margin-top:50px">GỢI Ý SẢN PHẨM KHUYẾN MÃI</h1>
    <div class="container">
        <div class="row clearfix d-flex slider">
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