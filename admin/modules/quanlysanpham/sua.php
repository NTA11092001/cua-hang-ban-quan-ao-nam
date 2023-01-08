<?php 
    $spl_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
    $query_sua_sp = mysqli_query($mysqli,$spl_sua_sp);
?>
<h1 style="text-align:center">Sửa Sản Phẩm</h1>
<table class="table table-bordered" style="margin-left:14%;width:75%">
<?php
    while($row = mysqli_fetch_array($query_sua_sp)){
?>
    <form method="POST" action="modules/quanlysanpham/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" enctype="multipart/form-data">
        <tr>
            <td scope="row">Tên Sản Phẩm</td>
            <td><input type="text" value="<?php echo $row['tensanpham'] ?>" name="tensanpham" ></td>
        </tr>
        <tr>
            <td scope="row">Mã SP</td>
            <td><input type="text" value="<?php echo $row['masp'] ?>" name="masp" ></td>
        </tr>
        <tr>
            <td scope="row">Giá Thường</td>
            <td><input type="text" value="<?php echo $row['giathuong'] ?>" name="giathuong" ></td>
        </tr>
        <tr>
            <td scope="row">Giá KHuyến Mãi</td>
            <td><input type="text" value="<?php echo $row['giakm'] ?>" name="giakm" ></td>
        </tr>
        <tr>
            <td scope="row">Số Lượng</td>
            <td>
                <input type="text" value="<?php echo $row['soluong'] ?>" name="soluong" >
            </td>
        </tr>
        <tr>
            <td scope="row">Chi Tiết Sản Phẩm</td>
            <td><textarea name="chitietsp" id="" cols="65" rows="10"><?php echo $row['chitietsanpham'] ?></textarea></td>
        </tr>
        <tr>
            <td scope="row">Hình Ảnh</td>
            <td>
                <input type="file" name="hinhanh" >
                <img src="modules/quanlysanpham/upload/<?php echo $row['hinhanh'] ?>" width=150px>
            </td>
        </tr>
        <tr>
            <td scope="row">Danh Mục Sản Phẩm</td>
            <td>
                <select name="danhmuc">
                <?php
                    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                    while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
                        if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){
                ?>
                    <option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>">
                        <?php echo $row_danhmuc['tendanhmuc'] ?>
                    </option>
                    <?php
                        }else{
                    ?>
                    <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>">
                        <?php echo $row_danhmuc['tendanhmuc'] ?>
                    </option>
                <?php   
                        }
                    }
                ?>
                </select>
            </td>
        </tr>
        <tr>
            <td scope="row">Tình Trạng</td>
            <td>
                <select name="tinhtrang" id="">
                    <?php
                    if($row['tinhtrang']==1){
                    ?>
                        <option value="1" selected>Kích Hoạt</option>
                        <option value="0">Ẩn</option>
                    <?php
                    }else{
                    ?>
                        <option value="1">Kích Hoạt</option>
                        <option value="0" selected>Ẩn</option>
                    <?php
                    }
                    ?>
            </select></td>
        </tr>
        <tr>
            <td scope="row" colspan="2"><input type="submit" name="suasanpham" value="Sửa Sản Phẩm"></td>
        </tr>
    </form>
<?php
    }
?>
</table>