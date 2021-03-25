<?php
    include('../db/connect.php');
?>
<?php
    if(isset($_POST['themdanhmuc'])){
        $tendanhmuc = $_POST['danhmuc'];
        $sql_insert = mysqli_query($con,"INSERT INTO tbl_category(category_name) VALUES ('$tendanhmuc')"); 
    }elseif(isset($_POST['capnhatdanhmuc'])){
        $id_post = $_POST['id_danhmuc'];
        $tendanhmuc = $_POST['danhmuc'];
        $sql_update = mysqli_query($con,"UPDATE tbl_category SET category_name='$tendanhmuc' WHERE category_id = '$id_post' "); 
        header('Location:xulydanhmuc.php');
    }
    if(isset($_GET['xoa'])){
        $id = $_GET['xoa'];
        $sql_xoa = mysqli_query($con,"DELETE FROM tbl_category WHERE category_id = '$id'");
    }
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

<!doctype html>
<html lang="en">
  <head>
    <title>Danh mục sản phẩm</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
            <!-- <a class="nav-item nav-link disabled" href="#">Disabled</a> -->
            <a class="nav-item nav-link" href="#" style="color: black;">Chào Admin: <?php echo $_SESSION['dangnhap']?></a>
            <a class="nav-item nav-link" href="?login=dangxuat" style="color: red;">Đăng xuất</a>
            
            </div>
        </div>
    </nav>
     <div class="container">
        <div class="row">
        <?php
            if(isset($_GET['quanly']) == 'capnhat'){
                $id_capnhat = $_GET['id'];
                $sql_capnhat = mysqli_query($con,"SELECT * FROM tbl_category WHERE category_id='$id_capnhat'");
                $row_capnhat = mysqli_fetch_array($sql_capnhat);
        ?>
        <div class="col-md-4">
            <h4>Cập nhật danh mục</h4>
            <label for="">Tên danh mục</label>
            <form action="" method="POST">
                <input type="text" class="form-control" name="danhmuc" value="<?php echo $row_capnhat['category_name'] ?>" required=""><br>
                <input type="hidden" class="form-control" name="id_danhmuc" value="<?php echo $row_capnhat['category_id'] ?>" required="">
                <input type="submit" name="capnhatdanhmuc" value="Cập nhật danh mục" class="btn btn-success">
            </form>           
        </div>
        <?php        
            }else{
        ?>
        <div class="col-md-4">
            <h4>Thêm danh mục</h4>
            <label for="">Tên danh mục</label>
            <form action="" method="POST">
                <input type="text" class="form-control" name="danhmuc" placeholder="Tên danh mục" required=""><br>
                <input type="submit" name="themdanhmuc" value="Thêm danh mục" class="btn btn-success" required="">
            </form>           
        </div>
        <?php
            }
        ?>

            <div class="col-md-8">
                <h4>Liệt kê danh mục</h4>
                <?php
                    $sql_select = mysqli_query($con,"SELECT * FROM tbl_category ORDER BY category_id DESC");
                ?>
                <table class="table table-bordered ">
                    <tr>
                        <th>Số thứ tự</th>
                        <th>Tên danh mục</th>
                        <th>Quản lý</th>
                    </tr>
                    <?php
                        $i=0;
                        while($row_category = mysqli_fetch_array($sql_select)){
                            $i++;
                        
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row_category['category_name'] ?></td>
                        <td><a href="?xoa=<?php echo $row_category['category_id'] ?>">Xóa</a> || 
                            <a href="?quanly=capnhat&id=<?php echo $row_category['category_id'] ?>">Cập nhật</a></td>
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