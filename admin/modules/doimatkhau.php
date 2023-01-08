<?php
if (isset($_POST['doimatkhau'])) {
	$taikhoan = $_POST['username'];
	$matkhau_cu = md5($_POST['password_cu']);
	$matkhau_moi = md5($_POST['password_moi']);
	$sql = "SELECT * FROM tbl_admin WHERE tentk='" . $taikhoan . "'AND mk='" . $matkhau_cu . "' LIMIT 1 ";
	$row = mysqli_query($mysqli,$sql);
	$count = mysqli_num_rows($row);
	if ($count > 0) {
		$sql_update = mysqli_query($mysqli,"UPDATE tbl_admin SET mk = '" . $matkhau_moi . "'");
        echo '<h6 style="text-align:center;color:red"><i class="fas fa-check-circle"></i>Mật khẩu đã được thay đổi.</h6>';
	} else {
        echo '<h6 style="text-align:center;color:red"><i class="far fa-times-circle"></i>Email hoặc Mật khẩu cũ không đúng, vui lòng nhập lại.</h6>';
	}
}
?>
<div class="container-fuild body">
<form action="" autocomplete="off" class="box" method="POST">
    <h1>Đổi mật khẩu Trang Quản Trị</h1>
    <input type="text" name="username" placeholder="Tên đăng nhập">
    <input type="password" name="password_cu" placeholder="Mật khẩu cũ">
    <input type="password" name="password_moi" placeholder="Mật khẩu mới">
    <input type="submit" name="doimatkhau" value="Đổi mật khẩu">
</form>
</div>