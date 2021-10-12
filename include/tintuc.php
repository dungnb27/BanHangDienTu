<?php
    if(isset($_GET['id_tin'])){
        $id_danhmuc=$_GET['id_tin'];
    }else{
        $id_danhmuc='';
    }
?>
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <?php 
                    $sql_danhmuc = mysqli_query($con, "SELECT * FROM tbl_danhmuc_tin WHERE danhmuctin_id='$id_danhmuc'");
                    $row_danhmuc = mysqli_fetch_array($sql_danhmuc);
                ?>
                
                <li class="active"><?php echo $row_danhmuc['tendanhmuc']  ?></li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Li's Main Blog Page Area -->
<div class="li-main-blog-page pt-60 pb-55">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Main Content Area -->
            <div class="col-lg-12">
                <div class="row li-main-content">
                <?php
                    $sql_baiviet = mysqli_query($con, "SELECT * FROM tbl_danhmuc_tin, tbl_baiviet WHERE tbl_danhmuc_tin.danhmuctin_id = tbl_baiviet.danhmuctin_id AND tbl_danhmuc_tin.danhmuctin_id = '$id_danhmuc'");
                    while($row_baiviet=mysqli_fetch_array($sql_baiviet)){
                ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="li-blog-single-item pb-25">
                            <div class="li-blog-banner">
                                <a href="index.php?quanly=chitiettin&id_tin=<?php echo $row_baiviet['baiviet_id']?>"><img class="img-full" src="uploads/<?php echo $row_baiviet['baiviet_image']?>" style="width: 370px; height: 210px;" alt=""></a>
                            </div>
                            <div class="li-blog-content">
                                <div class="li-blog-details">
                                    <h3 class="li-blog-heading pt-25"><a href="index.php?quanly=chitiettin&id_tin=<?php echo $row_baiviet['baiviet_id']?>"><?php echo $row_baiviet['tenbaiviet']?></a></h3>
                                    <div class="li-blog-meta">
                                        <a class="author" href="#"><i class="fa fa-user"></i>Admin</a>
                                        <a class="comment" href="#"><i class="fa fa-comment-o"></i> 3 comment</a>
                                        <a class="post-time" href="#"><i class="fa fa-calendar"></i> 25 nov 2018</a>
                                    </div>
                                    <p><?php echo $row_baiviet['tomtat']?></p>
                                    <a class="read-more" href="index.php?quanly=chitiettin&id_tin=<?php echo $row_baiviet['baiviet_id']?>">Đọc thêm...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>    
                    <!-- Begin Li's Pagination Area -->
                    <!-- <div class="col-lg-12">
                        <div class="li-paginatoin-area text-center pt-25">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="li-pagination-box">
                                        <li><a class="Previous" href="#">Previous</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a class="Next" href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Li's Pagination End Here Area -->
                </div>
            </div>
            <!-- Li's Main Content Area End Here -->
        </div>
    </div>
</div>
<!-- Li's Main Blog Page Area End Here -->