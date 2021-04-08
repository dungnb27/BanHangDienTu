<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}else{
		$id='';
	}
	$sql_cate = mysqli_query($con,"SELECT * FROM tbl_category,tbl_sanpham WHERE tbl_category.category_id = tbl_sanpham.category_id AND tbl_sanpham.category_id ='$id'AND tbl_sanpham.sanpham_active='0' ORDER BY tbl_sanpham.sanpham_id DESC");	
	$sql_category = mysqli_query($con,"SELECT * FROM tbl_category,tbl_sanpham WHERE tbl_category.category_id = tbl_sanpham.category_id AND tbl_sanpham.category_id ='$id' ORDER BY tbl_sanpham.sanpham_id DESC");	
	$row_title = mysqli_fetch_array($sql_category);

?>

<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.php">Trang chủ</a></li>
                            <li class="active"><?php echo $row_title['category_name'] ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Li's Content Wraper Area -->
            <div class="content-wraper pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Begin Li's Banner Area -->
                            <div class="single-banner shop-page-banner">
                                <a href="#">
                                    <img src="images/bg-banner/2.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                            <!-- Li's Banner Area End Here -->
                            <!-- shop-top-bar start -->
                            <div class="shop-top-bar mt-30">
                                <div class="shop-bar-inner">
                                    <div class="product-view-mode">
                                        <!-- shop-item-filter-list start -->
                                        <ul class="nav shop-item-filter-list" role="tablist">
                                            <li class="active" role="presentation"><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                            <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view" href="#list-view"><i class="fa fa-th-list"></i></a></li>
                                        </ul>
                                        <!-- shop-item-filter-list end -->
                                    </div>
                                    <div class="toolbar-amount">
                                        <span><?php echo $row_title['category_name'] ?></span>
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
                                                    <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
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
                                                                <div class="single-add-to-cart">
                                                                    <form action="?quanly=giohang" method="post" class="cart-quantity">
                                                                        <fieldset>
                                                                            <input type="hidden" name="tensanpham" value="<?php echo $row_sanpham['sanpham_name'] ?>" />
                                                                            <input type="hidden" name="sanpham_id" value="<?php echo $row_sanpham['sanpham_id'] ?>" />
                                                                            <input type="hidden" name="giasanpham" value="<?php echo $row_sanpham['sanpham_giakhuyenmai']?>" />
                                                                            <input type="hidden" name="hinhanh" value="<?php echo $row_sanpham['sanpham_image']?>" />
                                                                            <input type="hidden" name="soluong" value="1" />
                                                                            <input class="add-to-cart" type="submit" name="themgiohang" value="Thêm vào giỏ hàng"></input>
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