<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }else{
        $id='';
    }
    $sql_chitiet = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE sanpham_id='$id'");
    $row_chitiet = mysqli_fetch_array($sql_chitiet);
    $cate_id = $row_chitiet['category_id'];
?>
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li class="active">
                    <?php echo $row_chitiet['sanpham_name']?>
                </li>
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
                            <a class="popup-img venobox vbox-item"
                                href="uploads/<?php echo $row_chitiet['sanpham_image']?>" data-gall="myGallery">
                                <img src="uploads/<?php echo $row_chitiet['sanpham_image']?>" alt="product image"
                                    style="padding-top: 61px;">
                            </a>
                        </div>
                    </div>
                </div>
                <!--// Product Details Left -->
            </div>

            <div class="col-lg-7 col-md-6">
                <div class="product-details-view-content pt-60">
                    <div class="product-info">
                        <h2>
                            <?php echo $row_chitiet['sanpham_name']?>
                        </h2>

                        <div class="price-box pt-20">
                            <span class="new-price new-price-2">
                                <?php echo number_format($row_chitiet['sanpham_gia']).' VNĐ' ?>
                            </span>
                        </div>
                        <div class="product-desc">
                            <p>
                                <span>
                                    <?php echo $row_chitiet['sanpham_mota']?>
                                </span>
                            </p>
                        </div>

                        <div class="single-add-to-cart">
                            <form action="?quanly=giohang" method="post" class="cart-quantity">
                                <fieldset>
                                    <input type="hidden" name="tensanpham"
                                        value="<?php echo $row_chitiet['sanpham_name'] ?>" />
                                    <input type="hidden" name="sanpham_id"
                                        value="<?php echo $row_chitiet['sanpham_id'] ?>" />
                                    <input type="hidden" name="giasanpham"
                                        value="<?php echo $row_chitiet['sanpham_giakhuyenmai']?>" />
                                    <input type="hidden" name="hinhanh"
                                        value="<?php echo $row_chitiet['sanpham_image']?>" />
                                    <input type="hidden" name="soluong" value="1" />
                                    <input class="add-to-cart" name="themgiohang" type="submit"
                                        value="Thêm giỏ hàng"></input>
                                </fieldset>
                            </form>
                        </div>
                        <div class="product-additional-info pt-25">

                            <div class="product-social-sharing pt-25">
                                <ul>
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a>
                                    </li>
                                    <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                </ul>
                            </div>
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
                    <span>
                        <?php echo $row_chitiet['sanpham_chitiet']?>
                    </span>
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
<div class="fb-comments" data-href="http://localhost/BanHangDienTu/?quanly=chitietsp&id=<?php echo $row_chitiet['sanpham_id']?>" data-width="" data-numposts="5" style="padding-left: 180px;"></div>
<?php
    $sql_cate = mysqli_query($con,"SELECT * FROM tbl_category,tbl_sanpham WHERE tbl_category.category_id = tbl_sanpham.category_id AND tbl_sanpham.category_id='$cate_id' AND tbl_sanpham.sanpham_active='0' LIMIT 4 ");
?>

<!-- Begin Li's Content Wraper Area -->
<div class="content-wraper pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- shop-top-bar start -->
                <div class="shop-top-bar mt-30">
                    <div class="shop-bar-inner">
                        <div class="product-view-mode">
                            <!-- shop-item-filter-list start -->
                            <ul class="nav shop-item-filter-list" role="tablist">
                                <li class="active" role="presentation"><a aria-selected="true" class="active show"
                                        data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i
                                            class="fa fa-th"></i></a></li>
                            </ul>
                            <!-- shop-item-filter-list end -->
                        </div>
                        <div class="toolbar-amount">
                            <span>Sản phẩm liên quan</span>
                        </div>
                    </div>
                </div>
                <!-- shop-top-bar end -->
                <!-- shop-products-wrapper start -->
                <div class="shop-products-wrapper">
                    <div class="tab-content">
                        <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                            <div class="product-area shop-product-area">
                                <div class="row">
                                <?php 
                                    while($row_sanpham = mysqli_fetch_array($sql_cate)){
                                ?>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mt-40">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="?quanly=chitietsp&id=<?php echo $row_sanpham['sanpham_id'] ?>">
                                                    <img src="uploads/<?php echo $row_sanpham['sanpham_image']?>" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">Mới</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="?quanly=danhmuc&id=<?php echo $row_sanpham['category_id'] ?>"><?php echo $row_sanpham['category_name'] ?></a>
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
                                                    <h4><a class="product_name" href="?quanly=chitietsp&id=<?php echo $row_sanpham['sanpham_id'] ?>"><?php echo $row_sanpham['sanpham_name'] ?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price"><?php echo number_format($row_sanpham['sanpham_gia']).' VNĐ' ?></span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <form action="?quanly=giohang" method="post" class="cart-quantity">
                                                        <fieldset>
                                                            <input type="hidden" name="tensanpham" value="<?php echo $row_sanpham['sanpham_name'] ?>" />
                                                            <input type="hidden" name="sanpham_id" value="<?php echo $row_sanpham['sanpham_id'] ?>" />
                                                            <input type="hidden" name="giasanpham" value="<?php echo $row_sanpham['sanpham_giakhuyenmai']?>" />
                                                            <input type="hidden" name="hinhanh" value="<?php echo $row_sanpham['sanpham_image']?>" />
                                                            <input type="hidden" name="soluong" value="1" />
                                                            <input class="add-to-cart" type="submit" name="themgiohang" value="Thêm giỏ hàng"></input>
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                <?php
                                    }
                                ?>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- shop-products-wrapper end -->
            </div>
        </div>
    </div>
</div>
<!-- Content Wraper Area End Here -->