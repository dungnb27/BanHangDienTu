<?php
    if(isset($_POST['themgiohang'])){
        $tensanpham = $_POST['tensanpham'];
        $sanpham_id = $_POST['sanpham_id'];
        $gia = $_POST['giasanpham'];
        $hinhanh = $_POST['hinhanh'];
        $soluong = $_POST['soluong'];
        
        $sql_select_giohang = mysqli_query($con,"SELECT * FROM tbl_giohang WHERE sanpham_id='$sanpham_id'");
        $count = mysqli_num_rows($sql_select_giohang);
        if($count > 0){
            $row_sanpham = mysqli_fetch_array($sql_select_giohang);
            $soluong = $row_sanpham['soluong'] + 1;
            $sql_giohang = "UPDATE tbl_giohang SET soluong='$soluong' WHERE sanpham_id='$sanpham_id'";
        }else{
            $soluong = $soluong;
            $sql_giohang = "INSERT INTO tbl_giohang(tensanpham,sanpham_id,giasanpham,hinhanh,soluong) values ('$tensanpham','$sanpham_id','$gia','$hinhanh','$soluong')"; 
        }
        $insert_row = mysqli_query($con,$sql_giohang);
        if($insert_row == 0){
            header('Location:index.php?quanly=chitietsp&id='.$sanpham_id);
        }
    }elseif(isset($_POST['capnhatsoluong'])){
        for($i=0; $i<count($_POST['product_id']);$i++){
            $sanpham_id=$_POST['product_id'][$i];
            $soluong = $_POST['soluong'][$i];
            if($soluong <= 0){
                $sql_delete = mysqli_query($con,"DELETE FROM tbl_giohang WHERE sanpham_id = '$sanpham_id'");
            }else{
                $sql_update = mysqli_query($con,"UPDATE tbl_giohang SET soluong='$soluong' WHERE sanpham_id = '$sanpham_id'");
            }
        }
    }elseif(isset($_GET['xoa'])){
        $id = $_GET['xoa'];
        $sql_delete = mysqli_query($con,"DELETE FROM tbl_giohang WHERE giohang_id = '$id'");
	}elseif(isset($_GET['dangxuat'])){
		$id = $_GET['dangxuat'];
		if($id == 1){
			unset($_SESSION['dangnhap_home']);
		}	
	}elseif(isset($_POST['thanhtoan'])){
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$note = $_POST['note'];
		$giaohang = $_POST['giaohang'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);

		$sql_khachhang=mysqli_query($con,"INSERT INTO tbl_khachhang
			(name, phone, address, note, giaohang, email, password) VALUES 
			('$name','$phone','$address','$note','$giaohang','$email','$password')");
		if($sql_khachhang){
			$sql_select_khachhang = mysqli_query($con,"SELECT * FROM tbl_khachhang ORDER BY khachhang_id DESC LIMIT 1");
			$mahang = rand(0,9999);
			$row_khachhang = mysqli_fetch_array($sql_select_khachhang);
			$khachhang_id = $row_khachhang['khachhang_id'];
			$_SESSION['dangnhap_home'] = $row_khachhang['name'];
			$_SESSION['khachhang_id'] = $khachhang_id;
			for($i=0; $i<count($_POST['thanhtoan_product_id']);$i++){
				$sanpham_id=$_POST['thanhtoan_product_id'][$i];
				$soluong = $_POST['thanhtoan_soluong'][$i];
				$sql_donhang = mysqli_query($con,"INSERT INTO tbl_donhang(sanpham_id, khachhang_id, soluong, mahang) VALUES ('$sanpham_id','$khachhang_id','$soluong','$mahang')");
				$sql_giaodich = mysqli_query($con,"INSERT INTO tbl_giaodich(sanpham_id, soluong, magiaodich, khachhang_id) VALUES ('$sanpham_id','$soluong','$mahang','$khachhang_id')");
				$sql_delete_thanhtoan = mysqli_query($con,"DELETE FROM tbl_giohang WHERE sanpham_id = '$sanpham_id'");
			}		
		}
		echo '<script>alert("Đặt hàng thành công")</script>';
        echo "<script>location.href = 'index.php?quanly=giohang';</script>";	
	}elseif(isset($_POST['thanhtoandangnhap'])){
		$khachhang_id = $_SESSION['khachhang_id'];
		$mahang = rand(0,9999);
		for($i=0; $i<count($_POST['thanhtoan_product_id']);$i++){
			$sanpham_id=$_POST['thanhtoan_product_id'][$i];
			$soluong = $_POST['thanhtoan_soluong'][$i];
			$sql_donhang = mysqli_query($con,"INSERT INTO tbl_donhang(sanpham_id, khachhang_id, soluong, mahang) VALUES ('$sanpham_id','$khachhang_id','$soluong','$mahang')");
			$sql_giaodich = mysqli_query($con,"INSERT INTO tbl_giaodich(sanpham_id, soluong, magiaodich, khachhang_id) VALUES ('$sanpham_id','$soluong','$mahang','$khachhang_id')");
			$sql_delete_thanhtoan = mysqli_query($con,"DELETE FROM tbl_giohang WHERE sanpham_id = '$sanpham_id'");
		}
	}elseif(isset($_POST['thanhtoannganluong'])){
		echo "<script>location.href = 'include/index_thanhtoan.php';</script>";
	}
?>
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
	<div class="container">
		<div class="breadcrumb-content">
			<ul>
				<li><a href="index.php">Trang chủ</a></li>
				<li class="active">Giỏ hàng</li>
			</ul>
		</div>
	</div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!--Shopping Cart Area Strat-->
<div class="Shopping-cart-area pt-60 pb-60">
	<?php
		$sql_lay_giohang = mysqli_query($con,"SELECT * FROM tbl_giohang ORDER BY giohang_id DESC");
	?>
				
	<div class="container">
		<div class="row">
			<div class="col-12">
				<form action="" method="POST">
					<div class="table-content table-responsive">
						
							<table class="table">
								<thead>
									<tr>
										<th class="li-product-remove">Xoá sản phẩm</th>
										<th class="li-product-thumbnail">Hình ảnh</th>
										<th class="cart-product-name">Sản phẩm</th>
										<th class="li-product-price">Giá</th>
										<th class="li-product-quantity">Số lượng</th>
										<th class="li-product-subtotal">Tổng tiền</th>
									</tr>
								</thead>
								<tbody>
									<?php
										
										$total = 0;
										while($row_fetch_giohang = mysqli_fetch_array($sql_lay_giohang)){
											$subtotal = $row_fetch_giohang['soluong'] * $row_fetch_giohang['giasanpham']; 
											$total += $subtotal;
											
									?>
									<tr>
										<td class="li-product-remove"><a href="?quanly=giohang&xoa=<?php echo $row_fetch_giohang['giohang_id']?>"><i class="fa fa-times"></i></a></td>
										<td class="li-product-thumbnail">
											<a href="#">
												<img src="uploads/<?php echo $row_fetch_giohang['hinhanh'] ?>" style="width: 50%;" alt="Li's Product Image">
											</a>
										</td>
										<td class="li-product-name"><a href="#"><?php echo $row_fetch_giohang['tensanpham'] ?></a></td>
										<td class="li-product-price"><span class="amount"><?php echo number_format($row_fetch_giohang['giasanpham']).' VNĐ' ?></span></td>
										<td class="quantity">
											<label>Số lượng</label>
											<div class="">
												<input class="" name="soluong[]" type="number" min='0' value="<?php echo $row_fetch_giohang['soluong'] ?>">
												<input type="hidden" name="product_id[]" value="<?php echo $row_fetch_giohang['sanpham_id'] ?>">
												
											</div>
										</td>
										<td class="product-subtotal"><span class="amount"><?php echo number_format($subtotal).' VNĐ' ?></span></td>
									</tr>
									
									<?php
										}
									?>
								</tbody>
							</table>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="coupon-all">
								
								<div class="coupon2">
									<input  name="capnhatsoluong" value="Cập nhật giỏ hàng" type="submit" style="background: #fed700; color: black;" class="btn btn-primary">
									
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5 ml-auto">
							<div class="cart-page-total">
								<h2>Tổng tiền</h2>
								<ul>
									<li>Tổng tiền <span><?php echo number_format($total).' VNĐ' ?></span></li>
								</ul>
								<?php
									$sql_giohang_select = mysqli_query($con,"SELECT * FROM tbl_giohang");
									$count_giohang_select = mysqli_num_rows($sql_giohang_select);
									if(isset($_SESSION['dangnhap_home']) && $count_giohang_select > 0){
										while($row_1 = mysqli_fetch_array($sql_giohang_select)){
								?>	
									<input type="hidden" name="thanhtoan_soluong[]" value="<?php echo $row_1['soluong'] ?>">
                                    <input type="hidden" name="thanhtoan_product_id[]" value="<?php echo $row_1['sanpham_id'] ?>">
								<?php
									}
								?>
									<br><input type="submit" style="background: #fed700;color: black;" class="btn btn-primary" value="Thanh toán" name="thanhtoandangnhap">
									<br><br><input type="submit" style="background: #fed700;color: black;" class="btn btn-primary" value="Thanh toán ngân lượng" name="thanhtoannganluong">	
								<?php
									}
								?>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--Shopping Cart Area End-->
<!-- checkout page -->
<div class="privacy py-sm-5 py-4">
	<div class="container py-xl-4 py-lg-2">
		<?php
			if(!isset($_SESSION['dangnhap_home'])){
		?>
		<div class="checkout-left">
			<div class="address_form_agile mt-sm-5 mt-4">
				<h4 class="mb-sm-4 mb-3">Thêm địa chỉ giao hàng</h4>
				<form action="" method="post" class="creditly-card-form agileinfo_form">
					<div class="creditly-wrapper wthree, w3_agileits_wrapper">
						<div class="information-wrapper">
							<div class="first-row">
								<div class="controls form-group">
									<input class="billing-address-name form-control" type="text" name="name"
										placeholder="Họ và tên" required="">
								</div>
								<div class="w3_agileits_card_number_grids">
									<div class="w3_agileits_card_number_grid_left form-group">
										<div class="controls">
											<input type="text" class="form-control" placeholder="Số điện thoại"
												name="phone" required="">
										</div>
									</div>
									<div class="w3_agileits_card_number_grid_right form-group">
										<div class="controls">
											<input type="text" class="form-control" placeholder="Địa chỉ" name="address"
												required="">
										</div>
									</div>
								</div>
								<div class="controls form-group">
									<input type="text" class="form-control" placeholder="Email" name="email"
										required="">
								</div>
								<div class="controls form-group">
									<input type="text" class="form-control" placeholder="Password" name="password"
										required="">
								</div>
								<div class="controls form-group">
									<textarea style="resize: none;" class="form-control" placeholder="Ghi chú"
										name="note" required=""></textarea>
								</div>
								<div class="controls form-group">
									<select class="option-w3ls" name="giaohang">
										<option>Chọn hình thức thanh toán</option>
										<option value="1">Chuyển khoản qua ATM</option>
										<option value="0">Thanh toán khi nhận hàng</option>
									</select>
								</div>
							</div>
							<?php
									$sql_lay_giohang = mysqli_query($con,"SELECT * FROM tbl_giohang ORDER BY giohang_id DESC"); 
									while($row_thanhtoan = mysqli_fetch_array($sql_lay_giohang)){
										
								?>
							<input type="hidden" name="thanhtoan_soluong[]"
								value="<?php echo $row_thanhtoan['soluong'] ?>">
							<input type="hidden" name="thanhtoan_product_id[]"
								value="<?php echo $row_thanhtoan['sanpham_id'] ?>">
							<?php
									}
								?>
							<input type="submit" name="thanhtoan" class="btn-thanhtoan" value="Thanh toán"
								style="width: 20%" />
						</div>
					</div>
				</form>

			</div>
		</div>
		<?php
				}
			?>
	</div>
</div>
<!-- //checkout page -->