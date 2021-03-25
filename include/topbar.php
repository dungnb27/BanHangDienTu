<?php
    if(isset($_GET['dangxuat'])){
		$id = $_GET['dangxuat'];
		if($id == 1){
			unset($_SESSION['dangnhap_home']);  
		}	
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
                                        <li><a href="checkout.html">Đơn hàng</a></li>
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
                <form action="#" class="hm-searchbox">
                    <select class="nice-select select-search-category">
                        <option value="0">All</option>

                    </select>
                    <input type="text" placeholder="Enter your search key ...">
                    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                </form>
                <!-- Header Middle Searchbox Area End Here -->
                <!-- Begin Header Middle Right Area -->
                <div class="header-middle-right">
                    <ul class="hm-menu">
                        <!-- Begin Header Middle Wishlist Area -->
                        <li class="hm-wishlist">
                            <a href="wishlist.html">
                                <span class="cart-item-count wishlist-item-count">0</span>
                                <i class="fa fa-heart-o"></i>
                            </a>
                        </li>
                        <!-- Header Middle Wishlist Area End Here -->
                        <!-- Begin Header Mini Cart Area -->
                        <li class="hm-minicart">
                            <div class="hm-minicart-trigger">
                                <span class="item-icon"></span>
                                <span class="item-text">£80.00
                                    <span class="cart-item-count">2</span>
                                </span>
                            </div>
                            <span></span>
                            <div class="minicart">
                                <ul class="minicart-product-list">
                                    <li>
                                        <a href="single-product.html" class="minicart-product-image">
                                            <img src="images/product/small-size/5.jpg" alt="cart products">
                                        </a>
                                        <div class="minicart-product-details">
                                            <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                            <span>£40 x 1</span>
                                        </div>
                                        <button class="close" title="Remove">
                                            <i class="fa fa-close"></i>
                                        </button>
                                    </li>
                                    <li>
                                        <a href="single-product.html" class="minicart-product-image">
                                            <img src="images/product/small-size/6.jpg" alt="cart products">
                                        </a>
                                        <div class="minicart-product-details">
                                            <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                            <span>£40 x 1</span>
                                        </div>
                                        <button class="close" title="Remove">
                                            <i class="fa fa-close"></i>
                                        </button>
                                    </li>
                                </ul>
                                <p class="minicart-total">SUBTOTAL: <span>£80.00</span></p>
                                <div class="minicart-button">
                                    <a href="shopping-cart.html" class="li-button li-button-fullwidth li-button-dark">
                                        <span>View Full Cart</span>
                                    </a>
                                    <a href="checkout.html" class="li-button li-button-fullwidth">
                                        <span>Checkout</span>
                                    </a>
                                </div>
                            </div>
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