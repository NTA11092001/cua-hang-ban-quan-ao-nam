<?php
	session_start();
	include('../../admin/config/config.php');
	// them so luong
	if(isset($_GET['cong'])){
		$id = $_GET['cong'];
		foreach($_SESSION['cart'] as $cart_item){
			if($cart_item['id'] != $id){
				$product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giakm'=>$cart_item['giakm'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
				$_SESSION['cart'] = $product;
			}else{
				$tangsoluong = $cart_item['soluong'] + 1;
				if($cart_item['soluong']<=9){
					$product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$tangsoluong,'giakm'=>$cart_item['giakm'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
				}else{
					$product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giakm'=>$cart_item['giakm'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
				}
				$_SESSION['cart'] = $product;
			}
		}
		header('Location:../../index.php?quanly=giohang');	
	}
	//tru so luong
	if(isset($_GET['tru'])){
		$id = $_GET['tru'];
		foreach($_SESSION['cart'] as $cart_item){
			if($cart_item['id'] != $id){
				$product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giakm'=>$cart_item['giakm'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
				$_SESSION['cart'] = $product;
			}else{
				$tangsoluong = $cart_item['soluong'] - 1;
				if($cart_item['soluong']>1){
					$product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$tangsoluong,'giakm'=>$cart_item['giakm'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
				}else{
					$product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giakm'=>$cart_item['giakm'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
				}
				$_SESSION['cart'] = $product;
			}
		}
		header('Location:../../index.php?quanly=giohang');	
	}
	//xoa sam pham
	if(isset($_SESSION['cart'])&&isset($_GET['xoa'])){
		$id=$_GET['xoa'];
		foreach($_SESSION['cart'] as $cart_item){
			//khi cart_item['id'] != id th?? s??? ch???y l???i h???t b??? l???i c??i(=id) 
			if($cart_item['id'] != $id){
				$product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giakm'=>$cart_item['giakm'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);

			}
		// t???o session m???i l??u l???i nh???ng c??i != id
		$_SESSION['cart'] = $product;
		header('Location:../../index.php?quanly=giohang');
		}
	}
	//xoa tat ca
	if(isset($_GET['xoatatca'])&&$_GET['xoatatca']==1){
		unset($_SESSION['cart']);
		header('Location:../../index.php?quanly=giohang');
	}
	//them san pham vao gio hang
	if(isset($_POST['themgiohang'])){
		//session_destroy();
		$id = $_GET['idsanpham'];
		$soluong=1;
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham ='".$id."' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		$row = mysqli_fetch_array($query);
		if($row){
			$new_product=array(array('tensanpham'=>$row['tensanpham'],'id'=>$id,'soluong'=>$soluong,'giakm'=>$row['giakm'],'hinhanh'=>$row['hinhanh'],'masp'=>$row['masp']));
			//kiem tra session gio hang ton tai
			if(isset($_SESSION['cart'])){	
				$found = false;
				foreach ($_SESSION['cart'] as $cart_item) {
					//neu du lieu trung
					if($cart_item['id'] == $id){
						$product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$soluong+1,'giakm'=>$cart_item['giakm'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
						$found = true;
					}else{
						//neu du lieu khong trung
						$product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giakm'=>$cart_item['giakm'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
					}
				}
				if($found == false){
					//lien ket du lieu new_product vs product
					$_SESSION['cart']=array_merge($product,$new_product);
				}else{
					$_SESSION['cart']=$product;
				}
			}else{
				$_SESSION['cart'] = $new_product;
			}

		}
		header('Location:../../index.php?quanly=giohang');
	}
?>