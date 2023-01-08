<?php
    $sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
    $query_chitiet = mysqli_query($mysqli,$sql_chitiet);
    while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<div class="container" id="product-section">
<h1>Chi Tiết Sản Phẩm</h1>
<form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
    <div class="row">
        <div class="col-md-6">
            <img src="admin/modules/quanlysanpham/upload/<?php echo $row_chitiet['hinhanh'] ?>" width=65%>
        </div>
        <div class="col-md-6">

            <div class="row">
                <div class="col-md-12">
                    <h3 style="text-align: center"><?php echo $row_chitiet['tensanpham']; echo" "; echo $row_chitiet['masp'] ?></h3>
                </div>
            </div>

        <div class="row">
            <div class="col-md-6">
                    <h6 class="product-price">Đánh giá  </h6>
                </div>
            <div class="col-md-6">    
             <div class="rate">
                <input type="radio" id="star5" name="rate" value="5" />
                <label for="star5" title="text">5 stars</label>
                <input type="radio" id="star4" name="rate" value="4" />
                <label for="star4" title="text">4 stars</label>
                <input type="radio" id="star3" name="rate" value="3" />
                <label for="star3" title="text">3 stars</label>
                <input type="radio" id="star2" name="rate" value="2" />
                <label for="star2" title="text">2 stars</label>
                <input type="radio" id="star1" name="rate" value="1" />
                <label for="star1" title="text">1 star</label>
             </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                    <h6 class="product-price">Size   </h6>
                </div>
        <div class="col-md-6">    
            <ul id="UL_1">
	<li id="LI_2">
		<div id="DIV_3">
			 
			<label id="LABEL_4">
				 <span id="SPAN_5"> <span id="SPAN_6"> <span id="SPAN_7">S</span></span></span>
			</label>
		</div>
	</li>
	<li id="LI_8">
		<div id="DIV_9">
			 
			<label id="LABEL_10">
				<input type="radio" name="SizeID" value="33181" id="INPUT_11" /> <span id="SPAN_12"> <span id="SPAN_13"> <span id="SPAN_14">M</span></span></span>
			</label>
		</div>
	</li>
	<li id="LI_15">
		<div id="DIV_16">
			 
			<label id="LABEL_17">
				<input type="radio" name="SizeID" value="33182" id="INPUT_18" /> <span id="SPAN_19"> <span id="SPAN_20"> <span id="SPAN_21">L</span></span></span>
			</label>
		</div>
	</li>
	<li id="LI_22">
		<div id="DIV_23">
			 
			<label id="LABEL_24">
				<input type="radio" name="SizeID" value="33183" id="INPUT_25" /> <span id="SPAN_26"> <span id="SPAN_27"> <span id="SPAN_28">XL</span></span></span>
			</label>
		</div>
	</li>
	<li id="LI_29">
		<div id="DIV_30">
			 
			<label id="LABEL_31">
				 <span id="SPAN_32"> <span id="SPAN_33"> <span id="SPAN_34">XXL</span></span></span>
			</label>
		</div>
	</li>
</ul>
        </div>
    </div>

            <div class="row">
            
                <div class="col-md-6">
                    <h6 class="product-price">Giá Thường</h6>
                </div>
                <div class="col-md-6">
                    <h6 class="product-price-1" style="text-decoration: line-through"><?php echo $row_chitiet['giathuong'] ?>đ</h6>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h6 class="product-price">Giá Khuyến Mãi</h6>
                </div>
                <div class="col-md-6">
                    <h6 class="product-price-1" style="color:red"><?php echo $row_chitiet['giakm'] ?>đ</h6>
                </div>
            </div>
            <div class="wrapper1">
		
	<div class="tab-wrapper">
		<ul class="tabs">
				<li class="tab-link active" data-tab="1"> Chi tiết sản phẩm</li>
				<li class="tab-link" data-tab="2"> Giao trả hàng</li>
				<li class="tab-link" data-tab="3"> Hình ảnh </li>
		</ul>
	</div>

	<div class="content-wrapper">

		<div id="tab-1" class="tab-content active" style="text-align:justify"> 
        <?php echo $row_chitiet['chitietsanpham'] ?>
        </div>

		<div id="tab-2" class="tab-content " style="text-align:justify">
        🛒 Đơn hàng có hóa đơn thanh toán nguyên giá từ 500k hoặc đơn hàng đã thanh toán bằng hình thức chuyển khoản, qua ví điện tử online: áp dụng freeship (phí ship 0 đồng)<br>

        🛒 Đơn hàng có hóa đơn thanh toán từ 500k trở lên và có chứa sản phẩm giảm giá: áp dụng phí ship 20.000đ<br>

        🛒 Đơn hàng có hóa đơn thanh toán dưới 500k: Áp dụng thu phí ship 30.000đ<br>

        🛒 Đơn hàng nội thành Hà Nội cần ship nhanh trong 6h: áp dụng thu phí ship 40.000đ<br>

        🛒 Toàn bộ đơn hàng online đều không áp dụng đồng kiểm (xem hàng trước khi nhận)<br>

        🛒 Khách hàng thanh toán, nhận hàng đều được áp dụng chính sách đổi trả theo quy định đổi trả của công ty.<br>
        </div>

		<div id="tab-3"class="tab-content ">
        <img src="admin/modules/quanlysanpham/upload/<?php echo $row_chitiet['hinhanh'] ?>" width=70%>
        </div>

	</div>
	
</div>

            <div class="row">
                <button class="btn btn-outline-dark" id="themgiohang" type="submit" name="themgiohang">Thêm Vào Giỏ Hàng</button>
            </div>
        </div>
    </div>
</form>
</div>
<?php
    }
?>
<!-- Sản phẩm tương tự -->
<?php
$sql_sptt = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_danhmuc='$_GET[iddm]'";
$query_sptt = mysqli_query($mysqli,$sql_sptt);
?>
<div class="container-fluid style">
            <h2 style="text-align: center;">SẢN PHẨM TƯƠNG TỰ</h2>
            <div class="container">
                <div class="row clearfix slider">
                    <?php
                        while($row_sptt = mysqli_fetch_array($query_sptt)){
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="card product_item">
                            <div class="body">
                            <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_sptt['id_sanpham'] ?>">
                                <div class="cp_img">
                                    <a href="index.php?quanly=sanpham&id=<?php echo $row_sptt['id_sanpham'] ?>&iddm=<?php echo $row_sptt['id_danhmuc']?>"><img src="admin/modules/quanlysanpham/upload/<?php echo $row_sptt['hinhanh'] ?>" alt="Product" class="img-fluid"></a>
                                    <div class="hover">
                                        <a href="index.php?quanly=sanpham&id=<?php echo $row_sptt['id_sanpham'] ?>&iddm=<?php echo $row_sptt['id_danhmuc']?>" class="btn btn-outline-dark btn-sm waves-effect"><i class="fas fa-search-plus"></i></a>
                                        <button class="btn" type="submit" name="themgiohang"><a class="btn btn-outline-dark btn-sm waves-effect"><i class="fas fa-shopping-cart"></i></a></button>
                                    </div>
                                </div>
                                <div class="product_details">
                                    <h5><a href="index.php?quanly=sanpham&id=<?php echo $row_sptt['id_sanpham'] ?>&iddm=<?php echo $row_sptt['id_danhmuc']?>"><?php echo $row_sptt['tensanpham']; echo" "; echo $row_sptt['masp'] ?></a></h5>
                                    <ul class="product_price list-unstyled">
                                        <li class="old_price" style="text-decoration: line-through"><?php echo $row_sptt['giathuong'] ?>đ</li>
                                        <li class="new_price"><?php echo $row_sptt['giakm'] ?>đ</li>
                                    </ul>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
</div>