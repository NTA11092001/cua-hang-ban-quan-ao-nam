<?php
if (isset($_POST['doimatkhau'])) {
	$taikhoan = $_POST['email'];
	$matkhau_cu = md5($_POST['password_cu']);
	$matkhau_moi = md5($_POST['password_moi']);
	$sql = "SELECT * FROM tbl_dangky WHERE email='" . $taikhoan . "' AND matkhau='" . $matkhau_cu . "' LIMIT 1 ";
	$row = mysqli_query($mysqli,$sql);
	$count = mysqli_num_rows($row);
	if ($count > 0) {
		$sql_update = mysqli_query($mysqli,"UPDATE tbl_dangky SET matkhau = '" . $matkhau_moi . "'");
        echo '<h6 style="text-align:center;color:red"><i class="fas fa-check-circle"></i>Mật khẩu đã được thay đổi.</h6>';
	} else {
        echo '<h6 style="text-align:center;color:red"><i class="far fa-times-circle"></i>Email hoặc Mật khẩu cũ không đúng, vui lòng nhập lại.</h6>';
	}
}
?>
<section class="vh-80 bg-image" style="background-color: #E4E9F7;">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
          <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                  <div class="card-body p-5">
                    <h2 class="text-uppercase text-center mb-5">Đổi Mật Khẩu Khách Hàng</h2>
      
                    <form action='' autocomplete="off" method="POST">
      
                      <div class="form-outline mb-4">
                        <input type="text" name="email" id="form3Example1cg" class="form-control form-control-lg" placeholder="Email" />
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="password" name="password_cu" id="form3Example3cg" class="form-control form-control-lg" placeholder="Mật Khẩu Cũ" />
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="password" name="password_moi" id="form3Example4cg" class="form-control form-control-lg" placeholder="Mật Khẩu Mới" />
                      </div>
      
                      <div class="d-flex justify-content-center">
                        <button type="submit" name="doimatkhau" class="btn btn-dark btn-lg btn-block">Đổi Mật Khẩu</button>
                      </div>
      
                    </form>
      
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>