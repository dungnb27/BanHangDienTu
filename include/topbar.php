<?php
    if(isset($_GET['dangxuat'])){
		$id = $_GET['dangxuat'];
		if($id == 1){
			unset($_SESSION['dangnhap_home']);  
		}	
	}

    if(isset($_POST['giohang'])){
		header('Location: index.php?quanly=giohang');
        echo'giohang';
	}
?>
<!-- Begin Header Top Area -->
<div class="header-top">
    <div class="container">
        <div class="row">
            <!-- Begin Header Top Left Area -->
            <div class="col-lg-3 col-md-4">
                <div class="header-top-left">
                    <ul class="phone-wrap">
                        <!-- <li><span></span><a href="#">0949418766</a></li> -->
                        <li><span></span><a href="#">dungnb27@gmail.com</a></li>
                    </ul>
                </div>
            </div>
            <!-- Header Top Left Area End Here -->
            <!-- Begin Header Top Right Area -->
            <div class="col-lg-9 col-md-8">
                <div class="header-top-right">
                    <ul class="ht-menu">
                        <!-- Begin Setting Area -->
                        <li>
                            <!-- <div class="ht-setting-trigger"><span>Tài khoản</span></div> -->
                            <div class="setting ht-setting">
                                    <?php
                                        if(isset($_SESSION['dangnhap_home'])){
                                    ?>
                                        <li><a href="#"><?php echo $_SESSION['dangnhap_home'] ?></a></li>
                                        <li><a href="index.php?quanly=xemdonhang&khachhang=<?php echo $_SESSION['khachhang_id'] ?>">Đơn hàng</a></li>
                                        <li><a href="index.php?dangxuat=1">Đăng xuất</a></li>    
                                    <?php
                                        }else{
                                    ?>
                                        <li><a href="?quanly=dangnhap">Đăng nhập</a></li>
                                    
                                    <?php
                                        }
                                    ?>
                            </div>
                        </li>
                        <!-- Setting Area End Here -->

                    </ul>
                </div>
            </div>
            <!-- Header Top Right Area End Here -->
        </div>
    </div>
</div>
<!-- Header Top Area End Here -->
<!-- Begin Header Middle Area -->
<div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
    <div class="container">
        <div class="row">
            <!-- Begin Header Logo Area -->
            <div class="col-lg-3">
                <div class="logo pb-sm-30 pb-xs-30">
                    <a href="index.php">
                        <img src="images/menu/logo/1.jpg" alt="">
                    </a>
                </div>
            </div>
            <!-- Header Logo Area End Here -->
            <!-- Begin Header Middle Right Area -->
            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                <!-- Begin Header Middle Searchbox Area -->
                <form action="index.php?quanly=timkiem" method="post" class="hm-searchbox">
                    <input type="search" name="search_product" placeholder="Tìm kiếm sản phẩm">
                    <button class="li-btn" name="search_button" type="submit"><i class="fa fa-search"></i></button>
                </form>
                <!-- Header Middle Searchbox Area End Here -->
                <!-- Begin Header Middle Right Area -->
                <div class="header-middle-right">
                    <ul class="hm-menu">
                        <!-- Begin Header Middle Wishlist Area -->
                        
                        <!-- Header Middle Wishlist Area End Here -->
                        <!-- Begin Header Mini Cart Area -->
                        <li class="hm-minicart">
                            
                                <form action="" method="post">
                                        
                                        <input type="submit" value="Giỏ hàng" name="giohang"  class="btn btn-primary" style="background: #fed700;border-color: #fed700;color: black">
                                    
                                </form>
                        

                            
                            
                        </li>
                        <!-- Header Mini Cart Area End Here -->
                    </ul>
                </div>
                <!-- Header Middle Right Area End Here -->
            </div>
            <!-- Header Middle Right Area End Here -->
        </div>
    </div>
</div>
<!-- Header Middle Area End Here -->