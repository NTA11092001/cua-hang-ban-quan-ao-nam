<?php
$sql_lietke_donhang = "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky ORDER BY tbl_cart.id_cart DESC";
$query_lietke_donhang = mysqli_query($mysqli, $sql_lietke_donhang);
?>
<p style="text-align: center;font-weight: bold;font-size: 30px;margin-top: 30px;">Danh sách đơn hàng</p>
<table style="width: 100%;" class="table table-bordered">
	<thead class="table text-white" style="background-color: black;">
		<tr>
			<th>STT</th>
			<th>Mã đơn hàng</th>
			<th>Tên khách hàng</th>
			<th>Địa chỉ</th>
			<th>Email</th>
			<th>Số điện thoại</th>
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
			<td><?php echo $row['tenKH'] ?></td>
			<td><?php echo $row['diachi'] ?></td>
			<td><?php echo $row['email'] ?></td>
			<td><?php echo $row['sdt'] ?></td>
			<td>
				<?php
				if ($row['cart_status'] == 1) {
					echo '<a href="modules/quanlydonhang/xuly.php?code=' . $row['code_cart'] . '">Đơn hàng mới</a>';
				} else {
					echo  'Đã xem';
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
				<a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>">Xem đơn hàng</a>
			</td>
		</tr>
	<?php
	}
	?>

</table>