<?php
    $sql_category = mysqli_query($con,'SELECT * FROM tbl_category ORDER BY category_id DESC');
    $sql_danhmuctin = mysqli_query($con,"SELECT * FROM tbl_danhmuc_tin ORDER BY danhmuctin_id DESC")
?>

<div class="footer">
<!-- Begin Footer Static Top Area -->
<div class="footer-static-top">
    <div class="container">
        <!-- Begin Footer Shipping Area -->
        <div class="footer-shipping pt-60 pb-55 pb-xs-25">
            <div class="row">
                <!-- Begin Li's Shipping Inner Box Area -->
                <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                    <div class="li-shipping-inner-box">
                        <div class="shipping-icon">
                            <img src="images/shipping-icon/1.png" alt="Shipping Icon">
                        </div>
                        <div class="shipping-text">
                            <h2>Miễn phí vận chuyển</h2>
                            <p>Miễn phí đổi trả, kiểm tra khi nhận hàng</p>
                        </div>
                    </div>
                </div>
                <!-- Li's Shipping Inner Box Area End Here -->
                <!-- Begin Li's Shipping Inner Box Area -->
                <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                    <div class="li-shipping-inner-box">
                        <div class="shipping-icon">
                            <img src="images/shipping-icon/2.png" alt="Shipping Icon">
                        </div>
                        <div class="shipping-text">
                            <h2>Thanh toán an toàn</h2>
                            <p>Thanh toán bằng những hình thức thanh toán tốt nhất hiện nay.</p>
                        </div>
                    </div>
                </div>
                <!-- Li's Shipping Inner Box Area End Here -->
                <!-- Begin Li's Shipping Inner Box Area -->
                <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                    <div class="li-shipping-inner-box">
                        <div class="shipping-icon">
                            <img src="images/shipping-icon/3.png" alt="Shipping Icon">
                        </div>
                        <div class="shipping-text">
                            <h2>Mua sắm an toàn</h2>
                            <p>Bạn sẽ được đảm bảo từ khi chọn mua cho tới lúc nhận hàng</p>
                        </div>
                    </div>
                </div>
                <!-- Li's Shipping Inner Box Area End Here -->
                <!-- Begin Li's Shipping Inner Box Area -->
                <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                    <div class="li-shipping-inner-box">
                        <div class="shipping-icon">
                            <img src="images/shipping-icon/4.png" alt="Shipping Icon">
                        </div>
                        <div class="shipping-text">
                            <h2>Hỗ trợ 24/7</h2>
                            <p>Liên hệ với chúng tôi bất cứ khi nào bạn cần</p>
                        </div>
                    </div>
                </div>
                <!-- Li's Shipping Inner Box Area End Here -->
            </div>
        </div>
        <!-- Footer Shipping Area End Here -->
    </div>
</div>
<!-- Footer Static Top Area End Here -->
<!-- Begin Footer Static Middle Area -->
<div class="footer-static-middle">
    <div class="container">
        <div class="footer-logo-wrap pt-50 pb-35">
            <div class="row">
                <!-- Begin Footer Logo Area -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-logo">
                        <img src="images/menu/logo/1.jpg" alt="Footer Logo">
                        <!-- <p class="info">
                            We are a team of designers and developers that create high quality HTML Template & Woocommerce, Shopify Theme.
                        </p> -->
                    </div>
                    <ul class="des">
                        <li>
                            <br><span>Địa chỉ: </span>
                            Hồ Chí Minh
                        </li>
                        <li>
                            <span>Điên thoại: </span>
                            <a href="#">0949418766</a>
                        </li>
                        <li>
                            <span>Email: </span>
                            <a href="mailto:dungnb27@gmail.com">dungnb27@gmail.com</a>
                        </li>
                    </ul>
                </div>
                <!-- Footer Logo Area End Here -->
                <!-- Begin Footer Block Area -->
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-block">
                        <h3 class="footer-block-title">Sản phẩm</h3>
                        <ul>
                            <?php
                                while($row_category = mysqli_fetch_array($sql_category)){
                            ?>
                            <li><a href="?quanly=danhmuc&id=<?php echo $row_category['category_id'] ?>"><?php echo $row_category['category_name'] ?></a></li>
                            <?php
                                }
                            ?>
                        </ul>
                    </div>
                </div>
                <!-- Footer Block Area End Here -->
                <!-- Begin Footer Block Area -->
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-block">
                        <h3 class="footer-block-title">Tin tức</h3>
                        <ul>
                            <?php
                                while($row_danhmuctin = mysqli_fetch_array($sql_danhmuctin)){
                            ?>
                                <li><a href="?quanly=tintuc&id_tin=<?php echo $row_danhmuctin['danhmuctin_id'] ?>"><?php echo $row_danhmuctin['tendanhmuc'] ?></a></li>
                            <?php
                                }
                            ?>
                        </ul>
                    </div>
                </div>
                <!-- Footer Block Area End Here -->
                <!-- Begin Footer Block Area -->
                <div class="col-lg-4">
                    <div class="footer-block">
                        <h3 class="footer-block-title">Theo dõi chúng tôi</h3>
                        <ul class="social-link">
                            <li class="twitter">
                                <a href="https://twitter.com/" data-toggle="tooltip" target="_blank" title="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="rss">
                                <a href="https://rss.com/" data-toggle="tooltip" target="_blank" title="RSS">
                                    <i class="fa fa-rss"></i>
                                </a>
                            </li>
                            <li class="google-plus">
                                <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google Plus">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li class="facebook">
                                <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank" title="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="youtube">
                                <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank" title="Youtube">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                            <li class="instagram">
                                <a href="https://www.instagram.com/" data-toggle="tooltip" target="_blank" title="Instagram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
                <!-- Footer Block Area End Here -->
            </div>
        </div>
    </div>
</div>
<!-- Footer Static Middle Area End Here -->

