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
    if(isset($_POST['capnhatdonhang'])){
        $xuly = $_POST['xuly'];
        $mahang_xuly = $_POST['mahang_xuly'];
        $sql_update_donhang = mysqli_query($con,"UPDATE tbl_donhang SET tinhtrang='$xuly' WHERE mahang='$mahang_xuly'");
        $sql_update_giaodich = mysqli_query($con,"UPDATE tbl_giaodich SET tinhtrangdon='$xuly' WHERE magiaodich='$mahang_xuly'");
    } 
?>

<?php
    if(isset($_GET['xoadonhang'])){
        $mahang_xoa = $_GET['xoadonhang'];
        $sql_delete = mysqli_query($con,"DELETE FROM tbl_donhang WHERE mahang='$mahang_xoa'");
        header("Location:xulydonhang.php");
    } 

    if(isset($_GET['xacnhanhuy']) && isset($_GET['mahang'])){
        $huydon = $_GET['xacnhanhuy'];
        $magiaodich = $_GET['mahang'];
    }else{
        $huydon = '';
        $magiaodich = '';
    }
    $sql_update_donhang = mysqli_query($con,"UPDATE tbl_donhang SET huydon = '$huydon' WHERE mahang='$magiaodich'");
    $sql_update_giaodich = mysqli_query($con,"UPDATE tbl_giaodich SET huydon = '$huydon' WHERE magiaodich='$magiaodich'");

?>



<!doctype html>
<html lang="en">
  <head>
    <title>Đơn hàng</title>
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
                $mahang = $_GET['mahang'];
                $sql_chitiet = mysqli_query($con,"SELECT * FROM tbl_donhang, tbl_sanpham WHERE tbl_donhang.sanpham_id = tbl_sanpham.sanpham_id AND tbl_donhang.mahang='$mahang'");
                // $row_chitiet = mysqli_fetch_array($sql_chitiet);
        ?>
        <div class="col-md-7">
            <h4>Xem chi tiết đơn hàng</h4>
            <form action="" method="POST">
            <table class="table table-bordered ">
                    <tr>
                        <th>Số thứ tự</th>
                        <th>Mã hàng</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá sản phẩm</th>
                        <th>Tổng tiền</th>
                        <th>Ngày đặt</th>
                        <!-- <th>Quản lý</th> -->
                    </tr>
                    <?php
                        $i = 0;
                        $total = 0;
                        while($row_chitiet = mysqli_fetch_array($sql_chitiet)){
                            $subtotal = $row_chitiet['soluong'] * $row_chitiet['sanpham_giakhuyenmai'];
                            $total += $subtotal;
                            $i++;    
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row_chitiet['mahang'] ?></td>
                        <td><?php echo $row_chitiet['sanpham_name'] ?></td>
                        <td><?php echo $row_chitiet['soluong'] ?></td>
                        <td><?php echo number_format($row_chitiet['sanpham_giakhuyenmai']) ?></td>
                        <td><?php echo number_format($subtotal) ?></td>
                        <td><?php echo $row_chitiet['ngaythang'] ?></td>
                        <input type="hidden" name="mahang_xuly" value="<?php echo $row_chitiet['mahang'] ?>">
                        <!-- <td><a href="?xoa=<?php echo $row_donhang['donhang_id'] ?>">Xóa</a> || 
                            <a href="?quanly=xemdonhang&mahang=<?php echo $row_donhang['mahang'] ?>">Xem đơn hàng</a></td> -->
                    </tr>
                    <?php
                        }
                    ?>
                    <tr>
                        <td colspan="7">Tổng tiền: <?php echo number_format($total).' VNĐ' ?></td>
                    </tr>
                </table>
               
                <select class="form-control" name="xuly">
                        <option value="">----Tình trạng đơn hàng----</option>
                        <option value="1">Đã xử lý | Giao hàng</option>
                        <option value="0">Chưa xử lý</option>
                </select><br>
                <input type="submit" value="Cập nhật đơn hàng" name="capnhatdonhang" class="btn btn-success" >
                </form>
        </div>
        <?php        
            }else{
        ?>
        <div class="col-md-7">
            <h4>Đơn hàng</h4>        
        </div>
        <?php
            }
        ?>
            <div class="col-md-5">
                <h4>Liệt kê đơn hàng</h4>
                <?php
                    $sql_select = mysqli_query($con,"SELECT * FROM tbl_sanpham, tbl_donhang, tbl_khachhang WHERE tbl_donhang.sanpham_id = tbl_sanpham.sanpham_id AND tbl_donhang.khachhang_id = tbl_khachhang.khachhang_id GROUP BY tbl_donhang.mahang  ORDER BY tbl_donhang.donhang_id DESC");
                ?>
                <table class="table table-bordered ">
                    <tr>
                        <th>Số thứ tự</th>
                        <th>Mã hàng</th>
                        <th>Tình trang đơn hàng</th>
                        <th>Tên khách hàng</th>
                        <th>Ngày đặt</th>
                        <th>Ghi chú</th>
                        <th>Hủy đơn</th>
                        <th>Quản lý</th>
                    </tr>
                    <?php
                        $i=0;
                        while($row_donhang = mysqli_fetch_array($sql_select)){
                            $i++;    
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row_donhang['mahang'] ?></td>
                        <td><?php 
                            if($row_donhang['tinhtrang'] == 0){
                                echo 'Chưa xử lý';
                            }else{
                                echo 'Đã xử lý';
                            } 
                        ?></td>
                        <td><?php echo $row_donhang['name'] ?></td>
                        <td><?php echo $row_donhang['ngaythang'] ?></td>
                        <td><?php echo $row_donhang['note'] ?></td>
                        <td>
                            <?php 
                                if($row_donhang['huydon'] == 0){

                                }elseif($row_donhang['huydon'] == 1){
                                    echo '<a href="xulydonhang.php?quanly=xemdonhang&mahang='.$row_donhang['mahang'].'&xacnhanhuy=2">Xác nhận hủy đơn</a> ';
                                }else{
                                    echo 'Đã hủy';
                                }
                            ?>
                        </td>
                        <td><a href="?xoadonhang=<?php echo $row_donhang['mahang'] ?>">Xóa</a> || 
                            <a href="?quanly=xemdonhang&mahang=<?php echo $row_donhang['mahang'] ?>">Xem đơn hàng</a></td>
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