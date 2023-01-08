<?php 
    $spl_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu ASC";
    $query_lietke_danhmucsp = mysqli_query($mysqli,$spl_lietke_danhmucsp);
?>
<h1 style="text-align:center">Danh Sách Danh Mục Sản Phẩm</h1>
<table class="table table-bordered" style="margin-left:14%;width:75%">
<thead class="table text-white" style="background-color: black;">
    <tr>
        <th>STT</th>
        <th>Tên Danh Mục</th>
        <th>Quản Lý</th>
    </tr>
</thead>
<tbody>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
            $i++;
    ?>
    <tr>
        <td scope="row"><?php echo $i?></td>
        <td><?php echo $row['tendanhmuc'] ?></td>
        <td>
            <a style="color: black" href="modules/quanlydanhmucsanpham/xuly.php?iddanhmuc=<?php echo  $row['id_danhmuc'] ?>"><i class="fas fa-trash-alt"></i></a> | <a style="color: black" href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo  $row['id_danhmuc'] ?>"><i class="fas fa-edit"></i></a>
        </td>
    </tr>
<?php
    }
?>
</tbody>
</table>
