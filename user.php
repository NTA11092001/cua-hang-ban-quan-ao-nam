<?php
	session_start();
    include("admin/config/config.php");
	if(isset($_POST['dangnhap'])){
	$email = $_POST['email'];
	$matkhau = md5($_POST['matkhau']);
	$sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1 ";
	$row = mysqli_query($mysqli,$sql);
	$count = mysqli_num_rows($row);
	if($count>0){
		$row_data = mysqli_fetch_array($row);
		$_SESSION['dangky'] = $row_data['tenKH'];
		$_SESSION['id_khachhang'] = $row_data['id_dangky'];
		header('Location:index.php?quanly=giohang');
	} else {
echo '<h3 style="text-align:center;color:red"><i class="far fa-times-circle"></i>Email hoặc Mật Khẩu bị sai, Vui lòng nhập lại</h3>';
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
<section class="vh-90">
        <div class="container py-6 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-11">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img
                      src="img/login-admin.png"
                      alt="login form"
                      class="img-fluid" style="border-radius: 1rem 0 0 1rem;border: 2px solid #000;height: 100%;"
                    />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                        <div class="d-flex justify-content-center mb-3 pb-1">
                          <img src="img/BAL-logo.png" style="width:40%">
                        </div>
      
                        <h4 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;text-align:center">ĐĂNG NHẬP KHÁCH HÀNG</h4>
					<form action="" method="POST">
                        <div class="form-outline mb-4 justify-content-center">
                            <label class="form-label" for="form2Example17">Email</label>
                            <input type="email" name="email" id="form2Example17" class="form-control form-control-lg" />
                        </div>
      
                        <div class="form-outline mb-4 justify-content-center">
                            <label class="form-label" for="form2Example27">Mật Khẩu</label>
                            <input type="password" name="matkhau" id="form2Example27" class="form-control form-control-lg" />
                        </div>
      
                        <div class="pt-1 mb-4">
                          <button class="btn btn-dark btn-lg btn-block" type="submit" name="dangnhap">Đăng Nhập</button>
                        </div>
					</form>
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Chưa có tài khoản? <a href="dangky.php" style="color: #393f81;">Đăng Ký</a>
                        <div class="container text-center justify-content-center">
                          <a href="index.php"><button type="button" class="btn btn-outline-dark">Đi Đến Trang Chủ <i class="fas fa-chevron-circle-right"></i></button></a>
                        </div>
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