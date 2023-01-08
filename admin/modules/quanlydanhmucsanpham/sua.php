<?php 
    $spl_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
    $query_sua_danhmucsp = mysqli_query($mysqli,$spl_sua_danhmucsp);
?>
<h1 style="text-align:center">Sửa Danh Mục Sản Phẩm</h1>
<table class="table table-bordered" style="margin-left:14%;width:75%">
<?php
    while($row = mysqli_fetch_array($query_sua_danhmucsp)){
?>
<form method="POST" action="modules/quanlydanhmucsanpham/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
    <tr>
        <td scope="row">Tên Danh Mục</td>
        <td><input type="text" value="<?php echo  $row['tendanhmuc'] ?>" name="tendanhmuc" ></td>
    </tr>
    <tr>
        <td scope="row">Thứ Tự</td>
        <td><input type="text" value="<?php echo  $row['thutu'] ?>" name="thutu" ></td>
    </tr>
    <tr>
        <td scope="row" colspan="2"><input type="submit" name="suadanhmuc" value="Sửa Danh Mục Sản Phẩm"></td>
    </tr>
</form>
<?php
    }
?>
</table>