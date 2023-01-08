<?php
    $sql = "SELECT * FROM tbl_dangky ORDER BY id_dangky ASC";
    $query = mysqli_query($mysqli,$sql); 
?>
<h1 style="text-align:center">Danh Sách Khách Hàng</h1>
<table class="table table-bordered" width=100%>
	<thead class="table text-white" style="background-color: black;">
		<tr>
            <th>STT</th>
            <th>Tên Khách Hàng</th>
            <th>Email</th>
            <th>Địa Chỉ</th>
            <th>Số Điện Thoại</th>
		</tr>
	</thead>
<?php
$i = 0;
while ($row = mysqli_fetch_array($query)) {
$i++;
?>
		<tr>
            <td scope="row"><?php echo $i?></td>
            <td><?php echo $row['tenKH'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['diachi'] ?></td>
            <td><?php echo $row['sdt'] ?></td>
		</tr>
<?php
}
?>
</table>