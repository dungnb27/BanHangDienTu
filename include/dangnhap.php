
<?php
    //session_destroy();
    //unset('dangnhap');
    if(isset($_POST['dangnhap_home'])){
        $taikhoan = $_POST['email_login'];
        $matkhau = md5($_POST['password_login']);
        if($taikhoan=='' || $matkhau==''){
            echo '<script>alert("Làm ơn không để trống")</script>'; 
        }else{
            $sql_select_admin = mysqli_query($con,"SELECT * FROM tbl_khachhang WHERE email='$taikhoan' AND password='$matkhau' LIMIT 1 ");
            $count = mysqli_num_rows($sql_select_admin);
            $row_dangnhap = mysqli_fetch_array($sql_select_admin);
            if($count > 0){
                $_SESSION['dangnhap_home'] = $row_dangnhap['name'];
				$_SESSION['khachhang_id'] = $row_dangnhap['khachhang_id'];
				$_SESSION['khachhang_name'] = $row_dangnhap['name'];
                //header('Location: /index.php?quanly=giohang');
                // echo '<script>alert("Đăng nhập thành công")</script>';
            }else{
                echo '<script>alert("Tài khoản hoặc mật khẩu sai")</script>';
            }
        }
	}elseif(isset($_POST['dangky'])){
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$note = $_POST['note'];
		$giaohang = $_POST['giaohang'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);

		$sql_khachhang = mysqli_query($con,"INSERT INTO tbl_khachhang
			(name, phone, address, note, giaohang, email, password) VALUES 
			('$name','$phone','$address','$note','$giaohang','$email','$password')");
		$sql_select_khachhang = mysqli_query($con,"SELECT * FROM tbl_khachhang ORDER BY khachhang_id DESC LIMIT 1");
		$row_khachhang = mysqli_fetch_array($sql_select_khachhang);
		$_SESSION['dangnhap_home'] = $name;
		$_SESSION['khachhang_id'] = $row_khachhang['khachhang_id'];
		$_SESSION['khachhang_name'] = $row_khachhang['name'];
		header('Location: index.php?quanly=giohang');
	}
	if(isset($_POST['giohang'])){
		header('Location: index.php?quanly=giohang');
	}
?>

<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li class="active">Tài khoản</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Login Content Area -->
<div class="page-section mb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                <!-- Login Form s-->
                <form action="" method="post">
                    <div class="login-form">
                        <h4 class="login-title">Đăng nhập</h4>
                        <div class="row">
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Email</label>
                                    <input class="mb-0" type="email" name="email_login" placeholder="Địa chỉ Email">
                                </div>
                                <div class="col-12 mb-20">
                                    <label>Mật khẩu</label>
                                    <input class="mb-0" type="password" name="password_login" placeholder="Mật khẩu">
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" name="dangnhap_home" value="Đăng nhập"></input>
                                </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                <form action="#" method="post">
                    <div class="login-form">
                        <h4 class="login-title">Đăng ký</h4>
                        <div class="row">
                            
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Họ tên</label>
                                    <input class="mb-0" type="text" placeholder="" name="name" required>
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label>Email</label>
                                    <input class="mb-0" type="email" placeholder="" name="email" required>
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Số điện thoại</label>
                                    <input class="mb-0" type="number" placeholder="" name="phone" required>
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Địa chỉ</label>
                                    <input class="mb-0" type="text" placeholder="" name="address" required>
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Password</label>
                                    <input class="mb-0" type="password" placeholder="" name="password" required>
                                    <input class="mb-0" type="hidden" placeholder="" name="giaohang" value="0">
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Ghi chú</label>
                                    <textarea class="mb-0" type="text" placeholder="" name="note" ></textarea>
                                </div>
                                <div class="col-12">
                                    <input class="register-button mt-0" type="submit" name="dangky" value="Đăng ký"></input>
                                </div>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>