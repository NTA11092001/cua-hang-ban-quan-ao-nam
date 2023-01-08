<h1 style="text-align:center">Thêm Sản Phẩm</h1>
<table class="table table-bordered" style="margin-left:14%;width:75%">
<form method="POST" action="modules/quanlysanpham/xuly.php" enctype="multipart/form-data">
    <tr>
        <td scope="row">Tên Sản Phẩm</td>
        <td><input type="text" name="tensanpham" ></td>
    </tr>
    <tr>
        <td scope="row">Mã SP</td>
        <td><input type="text" name="masp" ></td>
    </tr>
    <tr>
        <td scope="row">Giá Thường</td>
        <td><input type="text" name="giathuong" ></td>
    </tr>
    <tr>
        <td scope="row">Giá Khuyến Mãi</td>
        <td><input type="text" name="giakm" ></td>
    </tr>
    <tr>
        <td scope="row">Số Lượng</td>
        <td><input type="text" name="soluong" ></td>
    </tr>
    <tr>
        <td scope="row">Chi Tiết Sản Phẩm</td>
        <td><textarea name="chitietsp" cols="65" rows="10"></textarea></td>
    </tr>
    <tr>
        <td scope="row">Hình Ảnh</td>
        <td>
            <input type="file" name="hinhanh" >
        </td>
    </tr>
    <tr>
        <td scope="row">Danh Mục Sản Phẩm</td>
        <td>
            <select name="danhmuc">
            <?php
                $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc ASC";
                $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){                
            ?>
                <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>">
                    <?php echo $row_danhmuc['tendanhmuc'] ?>
                </option>
            <?php   
                }
            ?>
            </select>
        </td>
    </tr>
    <tr>
        <td scope="row">Tình Trạng</td>
        <td>
        <select name="tinhtrang">
            <option value="1">Kích Hoạt</option>
            <option value="0">Ẩn</option>
        </select>
        </td>
    </tr>
    <tr>
        <td scope="row" colspan="2"><button class="btn btn-outline-dark" type="submit" name="themsanpham">Thêm Sản Phẩm</button></td>
    </tr>
</form>
</table>