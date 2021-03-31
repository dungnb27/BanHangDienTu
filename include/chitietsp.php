<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }else{
        $id='';
    }
    $sql_chitiet = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE sanpham_id='$id'");
    while($row_chitiet = mysqli_fetch_array($sql_chitiet)){
?>
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li class="active"><?php echo $row_chitiet['sanpham_name']?></li>
            </ul>
        </div>
    </div>
</div>
    <!-- Li's Breadcrumb Area End Here -->
    <!-- content-wraper start -->
    <div class="content-wraper">
        <div class="container">
            <div class="row single-product-area">
                <div class="col-lg-5 col-md-6">
                    <!-- Product Details Left -->
                    <div class="product-details-left">
                        <div class="product-details-images slider-navigation-1">
                            <div class="lg-image">
                                <a class="popup-img venobox vbox-item" href="uploads/<?php echo $row_chitiet['sanpham_image']?>" data-gall="myGallery">
                                    <img src="uploads/<?php echo $row_chitiet['sanpham_image']?>" alt="product image">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--// Product Details Left -->
                </div>

                <div class="col-lg-7 col-md-6">
                    <div class="product-details-view-content pt-60">
                        <div class="product-info">
                            <h2><?php echo $row_chitiet['sanpham_name']?></h2>
                            
                            <div class="price-box pt-20">
                                <span class="new-price new-price-2"><?php echo number_format($row_chitiet['sanpham_gia']).' VNĐ' ?></span>
                            </div>
                            <div class="product-desc">
                                <p>
                                    <span><?php echo $row_chitiet['sanpham_mota']?></span>
                                </p>
                            </div>
                            
                            <div class="single-add-to-cart">
                                <form action="?quanly=giohang" method="post" class="cart-quantity">
                                    <fieldset>
                                        <input type="hidden" name="tensanpham" value="<?php echo $row_chitiet['sanpham_name'] ?>" />
                                        <input type="hidden" name="sanpham_id" value="<?php echo $row_chitiet['sanpham_id'] ?>" />
                                        <input type="hidden" name="giasanpham" value="<?php echo $row_chitiet['sanpham_giakhuyenmai']?>" />
                                        <input type="hidden" name="hinhanh" value="<?php echo $row_chitiet['sanpham_image']?>" />
                                        <input type="hidden" name="soluong" value="1" />
                                        <input class="add-to-cart" name="themgiohang" type="submit" value="Thêm giỏ hàng"></input>
                                    </fieldset>
                                </form>
                            </div>
                            <div class="product-additional-info pt-25">
                                
                                <div class="product-social-sharing pt-25">
                                    <ul>
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                                        <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="block-reassurance">
                                <!-- <ul>
                                    <li>
                                        <div class="reassurance-item">
                                            <div class="reassurance-icon">
                                                <i class="fa fa-check-square-o"></i>
                                            </div>
                                            <p>Security policy (edit with Customer reassurance module)</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="reassurance-item">
                                            <div class="reassurance-icon">
                                                <i class="fa fa-truck"></i>
                                            </div>
                                            <p>Delivery policy (edit with Customer reassurance module)</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="reassurance-item">
                                            <div class="reassurance-icon">
                                                <i class="fa fa-exchange"></i>
                                            </div>
                                            <p> Return policy (edit with Customer reassurance module)</p>
                                        </div>
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <!-- content-wraper end -->
    <!-- Begin Product Area -->
    <div class="product-area pt-35">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="li-product-tab">
                        <ul class="nav li-product-menu">
                            <li><a class="active" data-toggle="tab" href="#description"><span>Chi tiết</span></a></li>
                            <!-- <li><a data-toggle="tab" href="#product-details"><span>Chi tiết</span></a></li> -->
                        </ul>               
                    </div>
                    <!-- Begin Li's Tab Menu Content Area -->
                </div>
            </div>
            <div class="tab-content">
                <div id="description" class="tab-pane active show" role="tabpanel">
                    <div class="product-description">
                        <span><?php echo $row_chitiet['sanpham_chitiet']?></span>
                    </div>
                </div>
                <!-- <div id="product-details" class="tab-pane" role="tabpanel">
                    <div class="product-details-manufacturer">
                        
                        <p><?php echo $row_chitiet['sanpham_chitiet']?></p>
                    </div>
                </div> -->
                
            </div>
        </div>
    </div>
    <!-- Product Area End Here -->
    <?php
        }
    ?>
    <!-- Begin Li's Laptop Product Area -->
    <section class="product-area li-laptop-product pt-30 pb-50">
        <div class="container">
            <div class="row">
                <!-- Begin Li's Section Area -->
                <div class="col-lg-12">
                    <div class="li-section-title">
                        <h2>
                            <span>Sản phẩm tương tự</span>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="product-active owl-carousel">
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img src="images/product/large-size/1.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">Mới</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="product-details.html">Graphic Corner</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                            <div class="price-box">
                                                <span class="new-price">$46.80</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- Li's Section Area End Here -->
            </div>
        </div>
    </section>
    <!-- Li's Laptop Product Area End Here -->