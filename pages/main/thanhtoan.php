<?php
session_start();
include('../../admin/config/config.php');
require('../../carbon/autoload.php');
use Carbon\Carbon;

$now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
$id_khachhang = $_SESSION['id_khachhang'];
$code_order = rand(0, 9999);
$cart_payment=$_POST['payment'];

$id_dangky=$_SESSION['id_khachhang'];
$sql_get_vanchuyen=mysqli_query($mysqli,"SELECT * FROM tbl_vanchuyen WHERE id_dangky='$id_dangky' LIMIT 1");
$row_vanchuyen=mysqli_fetch_array($sql_get_vanchuyen);
$id_vanchuyen=$row_vanchuyen['id_vanchuyen'];

$insert_cart = "INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status,cart_date,cart_payment,cart_vanchuyen) VALUE ('" . $id_khachhang . "','" . $code_order . "',1,'". $now ."','".$cart_payment."','".$id_vanchuyen."')";
$cart_query = mysqli_query($mysqli, $insert_cart);
if ($cart_query) {
    //them gio hang chi tiet
    foreach ($_SESSION['cart'] as $key => $value) {
        $id_sanpham = $value['id'];
        $soluong = $value['soluong'];
        $insert_order_details = "INSERT INTO tbl_cart_details(code_cart,id_sanpham,soluongmua) VALUE('" . $code_order . "','" . $id_sanpham . "','" . $soluong . "')";
        mysqli_query($mysqli, $insert_order_details);
    }
}
unset($_SESSION['cart']);
header('Location:../../index.php?quanly=donhangdadat');
?>