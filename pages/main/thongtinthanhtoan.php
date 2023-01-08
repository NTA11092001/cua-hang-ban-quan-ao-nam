<div class="d-flex justify-content-center" style="margin-left: 30%;">
<div class="container">
  <!-- Responsive Arrow Progress Bar -->
  <div class="arrow-steps clearfix">
    <div class="step done"> <span> <a href="index.php?quanly=giohang" >Giỏ hàng</a></span> </div>
    <div class="step done"> <span><a href="index.php?quanly=vanchuyen" >Thông tin giao hàng</a></span> </div>
    <div class="step current"> <span><a href="index.php?quanly=thongtinthanhtoan" >Thanh toán</a><span> </div>
  </div>
  <!-- end Responsive Arrow Progress Bar -->
</div>
</div>
<!-- Thông tin giao hàng và giỏ hàng -->
<form action="pages/main/thanhtoan.php" method="post">
<div class="row" style="margin-top:20px">
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
  <div class="col-md-8">
    <h4 style="text-align: center;">Thông tin giao hàng và giỏ hàng</h4>
    <ul style="margin-left:30%;text-align:justify;">
      <li>Họ và tên người nhận: <b><?php echo $ten; ?></b></li>
      <li>Số điện thoại người nhận: <b><?php echo $sdt; ?></b></li>
      <li>Địa chỉ người nhận: <b><?php echo $diachi; ?></b></li>
      <li>Ghi chú: <b><?php echo $ghichu; ?></b></li>
    </ul>
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
                </tr>
        <?php
            }}else{
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
  </div>
  <style type="text/css">
    /* phương thức thanh toán */
    .col-md-4.phuongthuctt .form-check{
      margin: 10px auto;
    }
  </style>
  <div class="col-md-4 phuongthuctt">
    <h4>Phương thức thanh toán</h4>
    <div class="row">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="payment" id="flexRadioDefault1" value="tien mat">
        <label class="form-check-label" for="flexRadioDefault1">
          Thanh toán khi nhận hàng
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="payment" id="flexRadioDefault2" value="chuyen khoan">
        <label class="form-check-label" for="flexRadioDefault2">
          Chuyển khoản ngân hàng
        </label>
      </div>
    </div>
    <div class="row" style="margin-top: 20px;">
        <p>Tổng tiền cần thanh toán: <strong style="color:red;"><?php echo $tongtien ?> đ<strong><p>
    </div>
    <div class="row">
      <a href="" class="text-decoration-none"><button type="submit" name="thanhtoan" class="btn btn-outline-dark">Thanh toán</button></a>
    </div>
  </div>
</div>
</form>