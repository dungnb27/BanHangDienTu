<?php
    include('../db/connect.php');
?>
<?php
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        header('Location: index.php');
    }
?>
<?php
    if(isset($_GET['login'])){
        $dangxuat = $_GET['login'];
    }else{
        $dangxuat = '';
    }
    if($dangxuat =='dangxuat'){
        unset($_SESSION['dangxuat']);
        header('Location: index.php');
    }
?>
<?php
    if(isset($_POST['themsanpham'])){
        $tensanpham = $_POST['tensanpham'];
        $hinhanh = $_FILES['hinhanh']['name'];
        $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
        $soluong = $_POST['soluong'];
        $gia = $_POST['giasanpham'];
        $giakhuyenmai = $_POST['giakhuyenmai'];
        $danhmuc = $_POST['danhmuc'];
        $chitiet = $_POST['chitiet'];
        $mota = $_POST['mota'];
        $sanphamhot = $_POST['sanphamhot'];
        $sanphamactive = $_POST['sanphamactive'];
        $path = '../uploads/';
        $sql_insert_product = mysqli_query($con,"INSERT INTO tbl_sanpham(
            sanpham_name,sanpham_chitiet,sanpham_mota,sanpham_gia,sanpham_giakhuyenmai,sanpham_soluong,sanpham_image,category_id,sanpham_hot,sanpham_active) VALUES (
            '$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc','$sanphamhot','$sanphamactive')"); 
        move_uploaded_file($hinhanh_tmp,$path.$hinhanh);    
    }elseif(isset($_POST['capnhatsanpham'])){
        $id_update = $_POST['id_update'];
        $tensanpham = $_POST['tensanpham'];
        $hinhanh = $_FILES['hinhanh']['name'];
        $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
        $soluong = $_POST['soluong'];
        $gia = $_POST['giasanpham'];
        $giakhuyenmai = $_POST['giakhuyenmai'];
        $danhmuc = $_POST['danhmuc'];
        $chitiet = $_POST['chitiet'];
        $mota = $_POST['mota'];
        $sanphamhot = $_POST['sanphamhot'];
        $sanphamactive = $_POST['sanphamactive'];
        $path = '../uploads/';
        if(!$hinhanh){
            $sql_update_image = "UPDATE tbl_sanpham SET 
                sanpham_name='$tensanpham',sanpham_chitiet='$chitiet',sanpham_mota='$mota',sanpham_gia='$gia',sanpham_giakhuyenmai='$giakhuyenmai',sanpham_soluong='$soluong',category_id='$danhmuc',sanpham_hot='$sanphamhot',sanpham_active='$sanphamactive' WHERE sanpham_id='$id_update' ";
        }else{
            move_uploaded_file($hinhanh_tmp,$path.$hinhanh); 
            $sql_update_image = "UPDATE tbl_sanpham SET 
                sanpham_name='$tensanpham',sanpham_chitiet='$chitiet',sanpham_mota='$mota',sanpham_gia='$gia',sanpham_giakhuyenmai='$giakhuyenmai',sanpham_soluong='$soluong',sanpham_image='$hinhanh',category_id='$danhmuc',sanpham_hot='$sanphamhot',sanpham_active='$sanphamactive' WHERE sanpham_id='$id_update' ";
        }
        mysqli_query($con,$sql_update_image);
    }
?>
<?php
    if(isset($_GET['xoa'])){
        $id = $_GET['xoa'];
        $sql_xoa = mysqli_query($con,"DELETE FROM tbl_sanpham WHERE sanpham_id = '$id'");
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Sản phẩm</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CKEDITOR -->
    <script src="../ckeditor/ckeditor.js"></script>
    <!-- <script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="dashboard.php">Trang chủ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link" href="xulydonhang.php">Đơn hàng<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="xulydanhmuc.php">Danh mục</a>
            <a class="nav-item nav-link" href="xulydanhmucbaiviet.php">Danh mục bài viết</a>
            <a class="nav-item nav-link" href="xulybaiviet.php">Bài viết</a>
            <a class="nav-item nav-link" href="xulysanpham.php">Sản phẩm</a>
            <a class="nav-item nav-link" href="xulykhachhang.php">Khách hàng</a>
            <a class="nav-item nav-link" href="xulylienhe.php">Liên hệ</a>
            <a class="nav-item nav-link" href="#" style="color: black;">Chào Admin: <?php echo $_SESSION['dangnhap']?></a>
            <a class="nav-item nav-link" href="?login=dangxuat" style="color: red;">Đăng xuất</a>
            <!-- <a class="nav-item nav-link disabled" href="#">Disabled</a> -->
            </div>
        </div>
    </nav>
     <div class="container">
        <div class="row">
        <?php
            if(isset($_GET['quanly']) == 'capnhat'){
                $id_capnhat = $_GET['capnhat_id'];
                $sql_capnhat = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE sanpham_id='$id_capnhat'");
                $row_capnhat = mysqli_fetch_array($sql_capnhat);
                $id_category_1 = $row_capnhat['category_id'];
        ?>
        <div class="col-md-4">
            <h4>Cập nhật sản phẩm</h4>  
            <form action="" method="POST" enctype= "multipart/form-data">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" name="tensanpham" value="<?php echo $row_capnhat['sanpham_name'] ?>" required=""><br>
                <input type="hidden" class="form-control" name="id_update" value="<?php echo $row_capnhat['sanpham_id'] ?>">
                <label for="">Hình ảnh</label>
                <input type="file" class="form-control" name="hinhanh"><br>
                <img src="../uploads/<?php echo $row_capnhat['sanpham_image'] ?>" alt="" height="80" width="55"><br>
                <label for="">Giá</label>
                <input type="number" min="0" class="form-control" name="giasanpham" value="<?php echo $row_capnhat['sanpham_gia'] ?>"><br>
                <label for="">Giá khuyễn mãi</label>
                <input type="number" min="0" class="form-control" name="giakhuyenmai" value="<?php echo $row_capnhat['sanpham_giakhuyenmai'] ?>"><br>
                <label for="">Số lượng</label>
                <input type="number" min="0" class="form-control" name="soluong" value="<?php echo $row_capnhat['sanpham_soluong'] ?>"><br>
                <label for="">Mô tả</label>
                <textarea name="mota" id ="mota" rows="10" class="form-control" ><?php echo $row_capnhat['sanpham_mota'] ?></textarea><br>
                <label for="">Chi tiết</label>
                <textarea name="chitiet" id ="chitiet" rows="10" class="form-control"><?php echo $row_capnhat['sanpham_chitiet'] ?></textarea><br>
                    <script>
                        CKEDITOR.replace( "chitiet" );
                        CKEDITOR.replace( "mota" );
                    </script>
                <label for="">Kích hoạt sản phẩm</label>
                <select name="sanphamactive" class="form-control">
                    <?php
                    if($row_capnhat['sanpham_active'] == 0){
                    ?>
                    <option selected value="0">Kích hoạt</option>
                    <option value="1">Ẩn</option>
                    <?php
                    }else{
                    ?>
                    <option value="0">Kích hoạt</option>
                    <option selected value="1">Ẩn</option>
                    <?php
                    }
                    ?>
                </select><br>
                <label for="">Sản phẩm nổi bật</label>
                <select name="sanphamhot" class="form-control">
                    <?php
                    if($row_capnhat['sanpham_hot'] == 0){
                    ?>
                    <option selected value="0">Nổi bật</option>
                    <option value="1">Không nổi bật</option>
                    <?php
                    }else{
                    ?>
                    <option value="0">Nổi bật</option>
                    <option selected value="1">Không nổi bật</option>
                    <?php
                    }
                    ?>
                </select><br>
                <label for="">Danh mục sản phẩm</label>
                <?php
                    $sql_danhmuc = mysqli_query($con,"SELECT * FROM tbl_category ORDER BY category_id DESC");

                ?>
                <select name="danhmuc" class="form-control">
                    <option value="0">----Chọn danh mục----</option>
                    <?php
                    while($row_danhmuc = mysqli_fetch_array($sql_danhmuc)){
                        if($id_category_1 == $row_danhmuc['category_id']){
                    ?>
                    <option selected value="<?php echo $row_danhmuc['category_id'] ?>"><?php echo $row_danhmuc['category_name'] ?></option>
                    <?php
                        }else{
                    ?>
                    <option value="<?php echo $row_danhmuc['category_id'] ?>"><?php echo $row_danhmuc['category_name'] ?></option>
                    <?php
                        }
                    }
                    ?>
                </select><br>
                <input type="submit" name="capnhatsanpham" value="Cập nhật sản phẩm" class="btn btn-success">
            </form>           
        </div>
        <?php        
            }else{
        ?>
        <div class="col-md-4">
            <h4>Thêm sản phẩm</h4>
            <form action="" method="POST" enctype= "multipart/form-data">
            <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" name="tensanpham" placeholder="Tên sản phẩm" required=""><br>
                <label for="">Hình ảnh</label>
                <input type="file" class="form-control" name="hinhanh"><br>
                <label for="">Giá</label>
                <input type="number" min="0" class="form-control" name="giasanpham" placeholder="Giá sản phẩm" required=""><br>
                <label for="">Giá khuyễn mãi</label>
                <input type="number" min="0" class="form-control" name="giakhuyenmai" placeholder="Giá khuyễn mãi" required=""><br>
                <label for="">Số lượng</label>
                <input type="number" min="0" class="form-control" name="soluong" placeholder="Số lượng" required=""><br>
                <label for="">Mô tả</label>
                <textarea name="mota" id="mota" rows="10" class="form-control" required=""></textarea><br>
                    <script>
                        CKEDITOR.replace( "mota" );
                    </script>
                <label for="">Chi tiết</label>
                <textarea name="chitiet" id="chitiet" rows="10" class="form-control" required=""></textarea><br>
                    <script>
                        CKEDITOR.replace( "chitiet" );
                    </script>
                <label for="">Kích hoạt sản phẩm</label>
                <select name="sanphamactive" class="form-control">
                    <option >----Chọn tình trạng----</option>
                    <option value="0">Kích hoạt</option>
                    <option value="1">Ẩn</option>
                </select><br>
                <label for="">Sản phẩm nổi bật</label>
                <select name="sanphamhot" class="form-control">
                    <option >----Chọn tình nổi bật----</option>
                    <option value="0">Nổi bật</option>
                    <option value="1">Không nổi bật</option>
                </select><br>
                <label for="">Danh mục sản phẩm</label>
                <?php
                    $sql_danhmuc = mysqli_query($con,"SELECT * FROM tbl_category ORDER BY category_id DESC");

                ?>
                <select name="danhmuc" class="form-control">
                    <option value="0">----Chọn danh mục----</option>
                    <?php
                    while($row_danhmuc = mysqli_fetch_array($sql_danhmuc)){
                    ?>
                    <option value="<?php echo $row_danhmuc['category_id'] ?>"><?php echo $row_danhmuc['category_name'] ?></option>
                    <?php
                    }
                    ?>
                </select><br>
                <input type="submit" name="themsanpham" value="Thêm sản phẩm" class="btn btn-success">
            </form>           
        </div>
        <?php
            }
        ?>

            <div class="col-md-8">
                <h4>Liệt kê sản phẩm</h4>
                <?php
                    $sql_select_sanpham = mysqli_query($con,"SELECT * FROM tbl_sanpham, tbl_category WHERE tbl_sanpham.category_id = tbl_category.category_id ORDER BY tbl_sanpham.sanpham_id DESC");
                ?>
                <table class="table table-bordered ">
                    <tr>
                        <th>Số thứ tự</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th>Danh mục</th>
                        <th>Tình trạng</th>
                        <th>Giá sản phẩm</th>
                        <th>Giá khuyễn mãi</th>
                        <th>Quản lý</th>
                    </tr>
                    <?php
                        $i=0;
                        while($row_sanpham = mysqli_fetch_array($sql_select_sanpham)){
                            $i++;   
                    ?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $row_sanpham['sanpham_name']?></td>
                        <td><img src="../uploads/<?php echo $row_sanpham['sanpham_image']?>" height="80" width="55"></td>
                        <td><?php echo $row_sanpham['sanpham_soluong']?></td>
                        <td><?php echo $row_sanpham['category_name']?></td>
                        <td>
                        <?php
                            if($row_sanpham['sanpham_active'] == 0){
                                echo'Kích hoạt';
                            }else{
                                echo'Ẩn';
                            }
                        ?>
                        </td>
                        <td><?php echo number_format($row_sanpham['sanpham_gia']).' VNĐ'?></td>
                        <td><?php echo number_format($row_sanpham['sanpham_giakhuyenmai']).' VNĐ'?></td>
                        <td><a href="?xoa=<?php echo $row_sanpham['sanpham_id']?>">Xóa</a> || 
                            <a href="xulysanpham.php?quanly=capnhat&capnhat_id=<?php echo $row_sanpham['sanpham_id']?>">Cập nhật</a></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
     </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  </body>
</html>