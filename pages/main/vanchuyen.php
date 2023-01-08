<div class="d-flex justify-content-center" style="margin-left: 30%;">
<div class="container">
  <!-- Responsive Arrow Progress Bar -->
  <div class="arrow-steps clearfix">
    <div class="step done"> <span> <a href="index.php?quanly=giohang" >Giỏ hàng</a></span> </div>
    <div class="step current"> <span><a href="index.php?quanly=vanchuyen" >Thông tin giao hàng</a></span> </div>
    <div class="step"> <span><a href="index.php?quanly=thongtinthanhtoan" >Thanh toán</a><span> </div>
  </div>
  <!-- end Responsive Arrow Progress Bar -->
</div>
</div>
<?php
if(isset($_POST['themvanchuyen'])){
    $ten=$_POST['ten'];
    $sdt=$_POST['sdt'];
    $diachi=$_POST['diachi'];
    $ghichu=$_POST['ghichu'];
    $id_dangky=$_SESSION['id_khachhang'];
    $sql_them_vanchuyen=mysqli_query($mysqli,"INSERT INTO tbl_vanchuyen(ten,sdt,diachi,ghichu,id_dangky) VALUES('$ten','$sdt','$diachi','$ghichu','$id_dangky')");
    if($sql_them_vanchuyen){
        echo'<script>alert("Thêm địa chỉ giao hàng thành công")</script>';
    }
}elseif(isset($_POST['suavanchuyen'])){
    $ten=$_POST['ten'];
    $sdt=$_POST['sdt'];
    $diachi=$_POST['diachi'];
    $ghichu=$_POST['ghichu'];
    $id_dangky=$_SESSION['id_khachhang'];
    $sql_sua_vanchuyen=mysqli_query($mysqli,"UPDATE tbl_vanchuyen SET ten='$ten',sdt='$sdt',diachi='$diachi',ghichu='$ghichu' WHERE id_dangky='$id_dangky'");
    if($sql_sua_vanchuyen){
        echo'<script>alert("Cập nhật địa chỉ giao hàng thành công")</script>';
    }
}
?>
<!-- Giỏ hàng -->
<div class="row" style="margin-top: 50px;">
<?php
$id_dangky=$_SESSION['id_khachhang'];
$sql_get_vanchuyen=mysqli_query($mysqli,"SELECT * FROM tbl_vanchuyen WHERE id_dangky='$id_dangky' LIMIT 1");
if(mysqli_num_rows($sql_get_vanchuyen)>0){
    $row_get_vanchuyen=mysqli_fetch_array($sql_get_vanchuyen);
    $ten=$row_get_vanchuyen['ten'];
    $sdt=$row_get_vanchuyen['sdt'];
    $diachi=$row_get_vanchuyen['diachi'];
    $ghichu=$row_get_vanchuyen['ghichu'];
}else{
    $ten='';
    $sdt='';
    $diachi='';
    $ghichu='';
}
?>
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6" style="width:80%">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-4">
                            <h3 class="text-uppercase text-center mb-5">Thông tin giao hàng</h3>
      
                            <form action='' autocomplete="off" method="POST">
      
                            <div class="form-outline mb-4">
                                <label for="ten">Họ và tên</label>
                                <input type="text" name="ten" id="form3Example1cg" class="form-control form-control-lg" placeholder="Họ và tên" value="<?php echo $ten; ?>"/>
                            </div>
      
                            <div class="form-outline mb-4">
                                <label for="sdt">Số điện thoại</label>
                                <input type="text" name="sdt" id="form3Example3cg" class="form-control form-control-lg" placeholder="Số điện thoại" value="<?php echo $sdt; ?>"/>
                            </div>
      
                            <div class="form-outline mb-4">
                                <label for="diachi">Địa chỉ giao hàng</label>
                                <input type="text" name="diachi" id="form3Example4cg" class="form-control form-control-lg" placeholder="Địa chỉ giao hàng" value="<?php echo $diachi; ?>"/>
                            </div>

                            <div class="form-outline mb-4">
                                <label for="ghichu">Ghi chú</label>
                                <input type="text" name="ghichu" id="form3Example4cg" class="form-control form-control-lg" placeholder="Ghi chú" value="<?php echo $ghichu; ?>"/>
                            </div>
                            <?php
                            if($ten=='' && $sdt==''){
                            ?>
                            <div class="d-flex justify-content-center">
                                <button type="submit" name="themvanchuyen" class="btn btn-outline-dark btn-lg btn-block">Thêm thông tin giao hàng</button>
                            </div>
                            <?php
                            }elseif($ten!='' && $sdt!=''){
                            ?>
                            <div class="d-flex justify-content-center">
                                <button type="submit" name="suavanchuyen" class="btn btn-outline-dark btn-lg btn-block">Cập nhật thông tin giao hàng</button>
                            </div>
                            <?php
                            }
                            ?>
                            </form>
      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Giỏ hàng -->
<div class="row" style="margin-top:20px">
    <div class="col-md-12">
        <table id="cart" class="table table-hover table-condensed">
        <thead>
            <tr>
                <th style="width: 12%">Sản phẩm</th>
                <th style="width: 20%">Thông tin</th>
                <th style="width: 15%">Giá bán</th>
                <th style="width: 10%">Số lượng</th>
                <th style="width: 10%">Thành tiền</th>
            </tr>
        </thead>
        <?php
            if(isset($_SESSION['cart'])){
                $tongtien=0;
                foreach($_SESSION['cart'] as $cart_item){ 
                    $thanhtien = $cart_item['soluong'] * $cart_item['giakm'];
                    $tongtien += $thanhtien;           
        ?>
        <tbody>

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
            </tr>
            <?php
            }
            ?>
            <tr>
                <td colspan="5">
                    <div class="container" style="text-align: center;">
                        <h5>Tổng tiền: <strong style="color:red;"><?php echo $tongtien ?> đ<strong><h5>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <div class="d-flex justify-content-center">
                        <?php
                            if(isset($_SESSION['dangky'])){
                        ?>
                        <a class="text-decoration-none" href="index.php?quanly=thongtinthanhtoan"><button class="btn btn-outline-dark">Phương thức thanh toán</button></a>
                        <?php
                            }else{
                        ?>
                        <a class="text-decoration-none" href="dangky.php"><button class="btn btn-outline-dark">Đăng ký đặt hàng</button></a>
                        <?php
                            }
                        ?>
                    </div>
                </td>
            </tr>
    <?php
    }else{
            $tongtien= 0;
    ?>  
            <tr>
                <td colspan="5"><p style="text-align:center">Hiện tại giỏ hàng trống</p></td>
            </tr>
    <?php
        }
    ?>              
        </tbody>
        
        </table>
    </div>
</div>