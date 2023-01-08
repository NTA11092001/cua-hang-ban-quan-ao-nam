<?php
include("../../config/config.php");
    $tensanpham=$_POST['tensanpham'];
    $masp=$_POST['masp'];
    $giathuong=$_POST['giathuong'];
    $giakm=$_POST['giakm'];
    $soluong=$_POST['soluong'];
    //hình ảnh
    $hinhanh=$_FILES['hinhanh']['name'];  
    $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
    $hinhanh=time().'_'.$hinhanh;
    //
    $chitietsp=$_POST['chitietsp'];
    $tinhtrang=$_POST['tinhtrang'];
    $danhmuc=$_POST['danhmuc'];
    $id=$_GET['idsanpham'];

    if(isset($_POST['themsanpham'])){
        $sql_them="INSERT INTO tbl_sanpham(tensanpham,masp,giathuong,giakm,soluong,hinhanh,chitietsanpham,id_danhmuc,tinhtrang) 
        VALUES ('".$tensanpham."','".$masp."','".$giathuong."','".$giakm."','".$soluong."','".$hinhanh."','".$chitietsp."','".$danhmuc."','".$tinhtrang."')";
        mysqli_query($mysqli,$sql_them);
        move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh);
        header('Location:../../index.php?action=quanlysp&query=them'); 
    //sua
    }
    elseif(isset($_POST['suasanpham'])){
        //sua
        if($hinhanh!=''){
            $sql_sua="UPDATE tbl_sanpham SET tensanpham='".$tensanpham."',masp='".$masp."',giathuong='".$giathuong."',giakm='".$giakm."',soluong='".$soluong."',hinhanh='".$hinhanh."',chitietsanpham='".$chitietsp."',id_danhmuc='".$danhmuc."',tinhtrang='".$tinhtrang."' WHERE id_sanpham='".$id."'";
            move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh);
            //xoa hinh anh cu
            $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$id' LIMIT 1";
            $query = mysqli_query($mysqli,$sql);
            while($row = mysqli_fetch_array($query)){
                unlink('upload/'.$row['hinhanh']);
            }
        }else{
            $sql_sua="UPDATE tbl_sanpham SET tensanpham='".$tensanpham."',masp='".$masp."',giathuong='".$giathuong."',giakm='".$giakm."',soluong='".$soluong."',chitietsanpham='".$chitietsp."',id_danhmuc='".$danhmuc."',tinhtrang='".$tinhtrang."' WHERE id_sanpham='".$id."'";
        }
        mysqli_query($mysqli,$sql_sua);
        header('Location:../../index.php?action=quanlysp&query=them');
    }
    //xoa
    else{
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$id' LIMIT 1";
        $query = mysqli_query($mysqli,$sql);
        while($row = mysqli_fetch_array($query)){
            unlink('upload/'.$row['hinhanh']);
        }
        $sql_xoa="DELETE FROM tbl_sanpham WHERE id_sanpham='".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('Location:../../index.php?action=quanlysp&query=them');
    }
?>