<?php
    session_start();
    include("admin/config/config.php");
    if(isset($_POST['dangky'])){
        $tenKH=$_POST['hovaten'];
        $email=$_POST['email'];
        $sdt=$_POST['sdt'];
        $diachi=$_POST['diachi'];
        $matkhau=md5($_POST['matkhau']);
        $sql_dangky="INSERT INTO tbl_dangky(tenKH,email,diachi,matkhau,sdt) VALUES('".$tenKH."','".$email."','".$diachi."','".$matkhau."','".$sdt."')";
        $query_dangky=mysqli_query($mysqli,$sql_dangky);
        if($sql_dangky){
            echo '<h4 style="text-align:center">Bạn Đã Đăng Ký Thành Công</h4>';
            $_SESSION['dangky']=$tenKH;
            $_SESSION['id_khachhang']=mysqli_insert_id($mysqli);
            header('Location:index.php?quanly=giohang');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <title>Web thời trang</title>
</head>
<body>
 <section class="vh-100 bg-image">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
          <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                  <div class="card-body p-5">
                    <h2 class="text-uppercase text-center mb-5">ĐĂNG KÝ KHÁCH HÀNG</h2>
      
                    <form action="" method="POST">
      
                      <div class="form-outline mb-4">
                        <input type="text" name="hovaten" id="form3Example1cg" class="form-control form-control-lg" placeholder="Họ và tên" />
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="text" name="email" id="form3Example3cg" class="form-control form-control-lg" placeholder="Email" />
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="text" name="sdt" id="form3Example4cg" class="form-control form-control-lg" placeholder="Số điện thoại" />
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="text" name="diachi" id="form3Example4cdg" class="form-control form-control-lg" placeholder="Địa chỉ" />
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="password" name="matkhau" id="form3Example4cdg" class="form-control form-control-lg" placeholder="Mật khẩu" />
                      </div>
      
                      <div class="d-flex justify-content-center">
                        <button class="btn btn-dark btn-lg btn-block" type="submit" name="dangky">Đăng Ký</button>
                      </div>
      
                      <p class="text-center text-muted mt-5 mb-0">Bạn đã có tài khoản ? <a href="user.php" class="fw-bold text-body"><u>Đăng Nhập</u></a></p>
      
                    </form>
                    <div class="container text-center justify-content-center" style="margin-top: 20px;">
                      <a href="index.php"><button type="button" class="btn btn-outline-dark">Đi Đến Trang Chủ <i class="fas fa-chevron-circle-right"></i></button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
