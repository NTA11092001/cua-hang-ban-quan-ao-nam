<?php
$id_khachhang=$_SESSION['id_khachhang'];
$sql_lietke_donhang = "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky AND tbl_cart.id_khachhang='$id_khachhang' ORDER BY tbl_cart.id_cart DESC";
$query_lietke_donhang = mysqli_query($mysqli, $sql_lietke_donhang);
?>
<?php
if(isset($_SESSION['dangky'])){
$tenkh=$_SESSION['dangky'];
?>
<p style="text-align: center;font-weight: bold;font-size: 30px;margin-top: 30px;">Lịch sử đặt hàng của: <span style="color:red"><?php echo $tenkh; ?></span></p>
<?php
}
?>
<table style="width: 100%;" class="table table-bordered">
	<thead class="table text-white" style="background-color: black;">
		<tr>
			<th>STT</th>
			<th>Mã đơn hàng</th>
			<th>Tình trạng</th>
			<th>Ngày đặt hàng</th>
            <th>Phương thức thanh toán</th>
			<th>Quản lý</th>
		</tr>
	</thead>
	<?php
	$i = 0;
	while ($row = mysqli_fetch_array($query_lietke_donhang)) {
		$i++;
	?>
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $row['code_cart'] ?></td>
			<td>
				<?php
				if ($row['cart_status'] == 1) {
					echo 'Đang xử lý';
				} else {
					echo  'Đã xử lý';
				}
				?>
			</td>
			<td><?php echo $row['cart_date'] ?></td>
			<?php
			if($row['cart_payment']=='tien mat'){
			?>
            <td>Thanh toán khi nhận hàng</td>
			<?php
			}elseif($row['cart_payment']=='chuyen khoan'){
			?>
			<td>Chuyển khoản ngân hàng</td>
			<?php
			}
			?>
			<td>
				<a href="index.php?quanly=xemdonhang&code=<?php echo $row['code_cart'] ?>">Xem đơn hàng</a>
			</td>
		</tr>
	<?php
	}
	?>

</table>