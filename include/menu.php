<?php
    $sql_category = mysqli_query($con,'SELECT * FROM tbl_category ORDER BY category_id DESC');
    $sql_danhmuctin = mysqli_query($con,"SELECT * FROM tbl_danhmuc_tin ORDER BY danhmuctin_id DESC")
?>

<!-- Begin Header Bottom Area -->
<div class="header-bottom header-sticky d-none d-lg-block d-xl-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Begin Header Bottom Menu Area -->
                <div class="hb-menu">
                    <nav>
                        <ul>
                            <li class="dropdown-holder"><a href="index.php">Trang chủ</a> </li>
                            <li class="megamenu-holder"><a href="shop-left-sidebar.html">Sản phẩm</a>
                                <ul class="megamenu hb-megamenu">
                                    <li><a href="#">Danh mục sản phảm</a>
                                        <ul>
                                            <?php
                                                while($row_category = mysqli_fetch_array($sql_category)){
                                            ?>
                                                <li><a href="?quanly=danhmuc&id=<?php echo $row_category['category_id'] ?>"><?php echo $row_category['category_name'] ?></a> </li>
                                            <?php
                                                }
                                            ?>
                                            
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </li>
                          


                            <li class="dropdown-holder"><a href="blog-left-sidebar.html">Tin tức</a>
                                <ul class="hb-dropdown">
                                    <?php
                                        while($row_danhmuctin = mysqli_fetch_array($sql_danhmuctin)){
                                    ?>
                                    <li class="sub-dropdown-holder"><a href="?quanly=tintuc&id_tin=<?php echo $row_danhmuctin['danhmuctin_id'] ?>"><?php echo $row_danhmuctin['tendanhmuc'] ?></a>
                                        
                                    </li>
                                    <?php
                                        }
                                    ?>
                                    
                                </ul>
                            </li>
                            
                            <li><a href="contact.html">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Header Bottom Menu Area End Here -->
            </div>
        </div>
    </div>
</div>