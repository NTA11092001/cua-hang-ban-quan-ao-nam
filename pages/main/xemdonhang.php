<?php
$code = $_GET['code'];
$sql_lietke_donhang = "SELECT * FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham = tbl_sanpham.id_sanpham AND tbl_cart_details.code_cart='" . $code . "' ORDER BY tbl_cart_details.id_cart_details DESC";
$query_lietke_donhang = mysqli_query($mysqli, $sql_lietke_donhang);
?>
<p style="text-align: center;font-weight: bold;font-size: 30px;margin-top: 30px;">Chi tiết đơn hàng</p>
<table style="width: 100%;" class="table table-bordered">
	<thead class="table-dark text-white">
		<tr>
			<th>STT</th>
			<th>Mã đơn hàng</th>
			<th>Tên sản phẩm</th>
			<th>Hình ảnh</th>
			<th>Mã sản phẩm</th>
			<th>Số lượng</th>
			<th>Đơn giá</th>
			<th>Thành tiền</th>
		</tr>
	</thead>
	<?php
	$i = 0;
	$tongtien = 0;
	while ($row = mysqli_fetch_array($query_lietke_donhang)) {
		$i++;
		$thanhtien = $row['giakm'] * $row['soluongmua'];
		$tongtien += $thanhtien;
	?>
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $row['code_cart'] ?></td>
			<td><?php echo $row['tensanpham'] ?></td>
			<td><img src="admin/modules/quanlysanpham/upload/<?php echo $row['hinhanh'] ?>" class="img-responsive" style="width:150px"></td>
			<td><?php echo $row['masp'] ?></td>
			<td><?php echo $row['soluongmua'] ?></td>
			<td><?php echo $row['giakm']. 'đ' ?></td>
			<td><?php echo $thanhtien. 'đ' ?></td>
		</tr>
	<?php
	}
	?>
	<tr>
		<td colspan="8">
			<p style="text-align:center">Tổng tiền: <?php echo $tongtien.' đ' ?></p>
		</td>
	</tr>
	<tr>
		<td colspan="8">
			<div class="row">
				<a class="text-decoration-none" href="index.php?quanly=lichsudathang"><button class="btn btn-outline-dark">Quay lại</button></a>
			</div>
		</td>
	</tr>

</table>
<div style="clear: both;"></div>