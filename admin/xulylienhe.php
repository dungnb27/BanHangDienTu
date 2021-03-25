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
<!-- <?php
    if(isset($_POST['capnhatlienhe'])){
        $xuly = $_POST['xuly'];
        $malienhe_xuly = $_POST['malienhe_xuly'];
        $sql_update_lienhe = mysqli_query($con,"UPDATE tbl_lienhe SET lienhe_tinhtrang='$xuly' WHERE lienhe_id='$malienhe_xuly'");
        // $sql_update_giaodich = mysqli_query($con,"UPDATE tbl_giaodich SET tinhtrangdon='$xuly' WHERE magiaodich='$mahang_xuly'");
    } 
?> -->

<?php
    if(isset($_GET['xoalienhe'])){
        $malienhe_xoa = $_GET['xoalienhe'];
        $sql_delete = mysqli_query($con,"DELETE FROM tbl_lienhe WHERE lienhe_id='$malienhe_xoa'");
        header("Location:xulylienhe.php");
    } 

    // if(isset($_GET['xacnhanhuy']) && isset($_GET['mahang'])){
    //     $huydon = $_GET['xacnhanhuy'];
    //     $magiaodich = $_GET['mahang'];
    // }else{
    //     $huydon = '';
    //     $magiaodich = '';
    // }
    // $sql_update_donhang = mysqli_query($con,"UPDATE tbl_donhang SET huydon = '$huydon' WHERE mahang='$magiaodich'");
    // $sql_update_giaodich = mysqli_query($con,"UPDATE tbl_giaodich SET huydon = '$huydon' WHERE magiaodich='$magiaodich'");

?>



<!doctype html>
<html lang="en">
  <head>
    <title>Khách hàng liên hệ</title>
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
            <a class="nav-item nav-link" href="#" style="color: black;">Chào Admin: <?php echo $_SESSION['dangnhap']?></a>
            <a class="nav-item nav-link" href="?login=dangxuat" style="color: red;">Đăng xuất</a>
            <!-- <a class="nav-item nav-link disabled" href="#">Disabled</a> -->
            </div>
        </div>
    </nav><br><br>
     <div class="container">
        <div class="row">
        <?php
            if(isset($_GET['quanly']) == 'xemdonhang'){
                $malienhe = $_GET['malienhe'];
                $sql_chitiet = mysqli_query($con,"SELECT * FROM tbl_lienhe WHERE lienhe_id='$malienhe'");
               
        ?>
        <div class="col-md-7">
            <h4>Liên hệ</h4>
            <form action="" method="POST">
            <table class="table table-bordered ">
                    <tr>
                        <th>Số thứ tự</th>
                        <th>Tên khách hàng</th>
                        <th>Email</th>
                        <th>Ngày tháng</th>
                        <th>Tin nhắn</th>
                    </tr>
                    <?php
                        $i = 0;
                        while($row_chitiet = mysqli_fetch_array($sql_chitiet)){
                            $i++;    
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row_chitiet['lienhe_name'] ?></td>
                        <td><?php echo $row_chitiet['lienhe_mail'] ?></td>
                        <td><?php echo $row_chitiet['lienhe_ngaythang'] ?></td>
                        <td><?php echo $row_chitiet['lienhe_mess'] ?></td>
                        <input type="hidden" name="malienhe_xuly" value="<?php echo $row_chitiet['lienhe_id'] ?>">
                        <!-- <td><a href="?xoa=<?php echo $row_donhang['donhang_id'] ?>">Xóa</a> || 
                            <a href="?quanly=xemdonhang&mahang=<?php echo $row_donhang['mahang'] ?>">Xem đơn hàng</a></td> -->
                    </tr>
                    <?php
                        }
                    ?>
                </table>
               
                <select class="form-control" name="xuly">
                        <option value="">----Tình trạng----</option>
                        <option value="1">Đã xử lý</option>
                        <option value="0">Chưa xử lý</option>
                </select><br>
                <input type="submit" value="Cập nhật liên hệ" name="capnhatlienhe" class="btn btn-success" >
                </form>
        </div>
        <?php        
            }else{
        ?>
        <div class="col-md-7">
            <h4>Chi tiết liên hệ</h4>        
        </div>
        <?php
            }
        ?>
            <div class="col-md-5">
                <h4>Thông tin khách hàng</h4>
                <?php
                    $sql_select = mysqli_query($con,"SELECT * FROM tbl_lienhe ORDER BY lienhe_id DESC");
                ?>
                <table class="table table-bordered ">
                    <tr>
                        <th>Số thứ tự</th>
                        <th>Tên khách hàng</th>
                        <th>Ngày tháng</th>
                        <th>Tình trang</th>
                        <th>Quản lý</th>
                    </tr>
                    <?php
                        $i=0;
                        while($row_lienhe = mysqli_fetch_array($sql_select)){
                            $i++;    
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row_lienhe['lienhe_name'] ?></td>
                        <td><?php echo $row_lienhe['lienhe_ngaythang'] ?></td>
                        <td><?php 
                            if($row_lienhe['lienhe_tinhtrang'] == 0){
                                echo 'Chưa xử lý';
                            }else{
                                echo 'Đã xử lý';
                            } 
                        ?></td>
                        <td><a href="?xoalienhe=<?php echo $row_lienhe['lienhe_id'] ?>">Xóa</a> || 
                            <a href="?quanly=xemlienhe&malienhe=<?php echo $row_lienhe['lienhe_id'] ?>">Chi tiết</a></td>
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