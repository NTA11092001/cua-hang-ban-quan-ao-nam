<?php
$sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
$query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>
<h1 style="text-align:center">Danh Sách Sản Phẩm</h1>
<table class="table table-bordered" width=100%>
	<thead class="table text-white" style="background-color: black;">
		<tr>
            <th>STT</th>
            <th>Tên Sản Phẩm</th>
            <th>Mã Sản Phẩm</th>
            <th>Hình Ảnh</th>
            <th>Giá Thường</th>
            <th>Giá Khuyến Mãi</th>
            <th>Danh Mục</th>
            <th>Trạng Thái</th>
            <th>Quản Lý</th>
		</tr>
	</thead>
<?php
$i = 0;
while ($row = mysqli_fetch_array($query_lietke_sp)) {
$i++;
?>
		<tr>
            <td scope="row"><?php echo $i?></td>
            <td><?php echo $row['tensanpham'] ?></td>
            <td><?php echo $row['masp'] ?></td>
            <td><img src="modules/quanlysanpham/upload/<?php echo $row['hinhanh'] ?>" width=150px></td>
            <td><?php echo $row['giathuong'] ?></td>
            <td><?php echo $row['giakm'] ?></td>
            <td><?php echo $row['tendanhmuc'] ?></td>
			<td><?php if ($row['tinhtrang'] == 1) {
					echo 'Kích Hoạt';
				} else {
					echo 'Ẩn';
				} ?>
			</td>
			<td>
				<a style="color: black" href="modules/quanlysanpham/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>"><i class="fas fa-trash-alt"></i></a> | <a style="color: black" href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>"><i class="fas fa-edit"></i></a>
			</td>
		</tr>
<?php
}
?>
</table>