
<?php
    $sql_home = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE tbl_sanpham.sanpham_active='0'");
    // $row_sanpham = mysqli_fetch_array($sql_home);
    $total_records = mysqli_num_rows($sql_home );
    // echo $total_records;
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 8;

    //Tổng số trang
    $total_page = ceil($total_records / $limit);

    if($current_page > $total_page){
        $current_page = $total_page;
    }elseif($current_page < 1){
        $current_page = 1;
    }

    $start = ($current_page - 1) * $limit;
    $sql_sanpham = mysqli_query($con,"SELECT * FROM tbl_sanpham,tbl_category WHERE tbl_sanpham.sanpham_active='0' AND tbl_category.category_id = tbl_sanpham.category_id ORDER BY sanpham_id Desc LIMIT $start, $limit");
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
                                <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view"
                                        href="#list-view"><i class="fa fa-th-list"></i></a></li>
                            </ul>
                            <!-- shop-item-filter-list end -->
                        </div>
                        <div class="toolbar-amount">
                            <span>TẤT CẢ SẢN PHẨM</span>
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
                                        
                                        while($row_sanpham = mysqli_fetch_array($sql_sanpham)){
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
                                                    <ul class="add-actions-link">
                                                        <form action="?quanly=giohang" method="post">
                                                            <fieldset>
                                                                <li class="add-cart active">
                                                                    <input type="hidden" name="tensanpham" value="<?php echo $row_sanpham['sanpham_name'] ?>" />
                                                                    <input type="hidden" name="sanpham_id" value="<?php echo $row_sanpham['sanpham_id'] ?>" />
                                                                    <input type="hidden" name="giasanpham" value="<?php echo $row_sanpham['sanpham_giakhuyenmai']?>" />
                                                                    <input type="hidden" name="hinhanh" value="<?php echo $row_sanpham['sanpham_image']?>" />
                                                                    <input type="hidden" name="soluong" value="1" />
                                                                    <input type="submit" name="themgiohang" value="Thêm giỏ hàng" style="height: 33.5px;"/>
                                                                </li>
                                                            </fieldset>
                                                        </form>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <div class="paginatoin-area">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <!-- <p>Showing 1-12 of 13 item(s)</p> -->
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <ul class="pagination-box">

                                            <?php
                                                if($current_page > 1 && $total_page > 1){
                                            ?>
                                                <li>
                                                    <a href="index.php?page=<?php echo ($current_page-1) ?>" class="Previous"><i class="fa fa-chevron-left"></i> Previous</a>
                                                </li>
                                            <?php
                                                }
                                            ?>
                                                
                                            <?php 
                                                for ($i = 1; $i <= $total_page; $i++){
                                                    if($i == $current_page){
                                            ?>    
                                                <!-- <li class="active"><a href="#">1</a></li> -->
                                                <li><a href="#"><?php echo $i ?></a></li>
                                            <?php
                                                }else{
                                            ?>  
                                                <li><a href="index.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>
                                            <?php 
                                                }
                                            } 
                                            ?>   

                                            <?php 
                                                if($current_page < $total_page && $total_page > 1){
                                            ?>
                                                <li>
                                                    <a href="index.php?page=<?php echo ($current_page+1) ?>" class="Next"> Next <i class="fa fa-chevron-right"></i></a>
                                                </li>
                                            <?php
                                                }
                                            ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="list-view" class="tab-pane product-list-view fade" role="tabpanel">
                            <div class="row">
                                <div class="col">
                                    <?php
                                        $sql_sanpham = mysqli_query($con,"SELECT * FROM tbl_sanpham,tbl_category WHERE tbl_sanpham.sanpham_active='0' AND tbl_category.category_id = tbl_sanpham.category_id ORDER BY sanpham_id Desc");
                                        while($row_sanpham = mysqli_fetch_array($sql_sanpham)){
                                    ?>
                                        <div class="row product-layout-list">
                                            <div class="col-lg-3 col-md-5 ">
                                                <div class="product-image">
                                                    <a href="single-product.html">
                                                        <img src="uploads/<?php echo $row_sanpham['sanpham_image']?>"
                                                            alt="Li's Product Image">
                                                    </a>
                                                    <span class="sticker">Mới</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-7">
                                                <div class="product_desc">
                                                    <div class="product_desc_info">
                                                        <div class="product-review">
                                                            <h5 class="manufacturer">
                                                                <a href="product-details.html"><?php echo $row_sanpham['category_name'] ?></a>
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
                                                        <h4><a class="product_name" href="single-product.html"><?php echo $row_sanpham['sanpham_name'] ?></a></h4>
                                                        <div class="price-box">
                                                            <span class="new-price"><?php echo number_format($row_sanpham['sanpham_gia']).' VNĐ' ?></span>
                                                        </div>
                                                        <p><?php echo $row_sanpham['sanpham_mota'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="shop-add-action mb-xs-30">
                                                    <ul class="add-actions-link">
                                                            <form action="?quanly=giohang" method="post">
                                                                <fieldset>
                                                                    <li class="add-cart active">
                                                                        <input type="hidden" name="tensanpham" value="<?php echo $row_sanpham['sanpham_name'] ?>" />
                                                                        <input type="hidden" name="sanpham_id" value="<?php echo $row_sanpham['sanpham_id'] ?>" />
                                                                        <input type="hidden" name="giasanpham" value="<?php echo $row_sanpham['sanpham_giakhuyenmai']?>" />
                                                                        <input type="hidden" name="hinhanh" value="<?php echo $row_sanpham['sanpham_image']?>" />
                                                                        <input type="hidden" name="soluong" value="1" />
                                                                        <input type="submit" name="themgiohang" value="Thêm giỏ hàng" />
                                                                    </li>
                                                                </fieldset>
                                                            </form>
                                                    </ul>
                                                </div>
                                            </div>
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