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
    if(isset($_POST['thembaiviet'])){
        $tenbaiviet = $_POST['tenbaiviet'];
        $hinhanh = $_FILES['hinhanh']['name'];
        $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
        $danhmuc = $_POST['danhmuc'];
        $chitiet = $_POST['chitiet'];
        $mota = $_POST['mota'];
        $path = '../uploads/';
        $sql_insert_product = mysqli_query($con,"INSERT INTO tbl_baiviet(
            tenbaiviet,	tomtat, noidung, danhmuctin_id, baiviet_image) VALUES (
            '$tenbaiviet','$mota','$chitiet','$danhmuc','$hinhanh')"); 
        move_uploaded_file($hinhanh_tmp,$path.$hinhanh);    
    }elseif(isset($_POST['capnhatbaiviet'])){
        $id_update = $_POST['id_update'];
        $tenbaiviet = $_POST['tenbaiviet'];
        $hinhanh = $_FILES['hinhanh']['name'];
        $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
        $danhmuc = $_POST['danhmuc'];
        $chitiet = $_POST['chitiet'];
        $mota = $_POST['mota'];
        $path = '../uploads/';
        if(!$hinhanh){
            $sql_update_image = "UPDATE tbl_baiviet SET 
                tenbaiviet='$tenbaiviet',tomtat='$mota',noidung='$chitiet',danhmuctin_id='$danhmuc' WHERE baiviet_id='$id_update' ";
        }else{
            move_uploaded_file($hinhanh_tmp,$path.$hinhanh); 
            $sql_update_image = "UPDATE tbl_baiviet SET 
            tenbaiviet='$tenbaiviet',tomtat='$mota',noidung='$chitiet',danhmuctin_id='$danhmuc',baiviet_image='$hinhanh' WHERE baiviet_id='$id_update' ";
        }
        mysqli_query($con,$sql_update_image);
    }
?>
<?php
    if(isset($_GET['xoa'])){
        $id = $_GET['xoa'];
        $sql_xoa = mysqli_query($con,"DELETE FROM tbl_baiviet WHERE baiviet_id = '$id'");
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>B??i vi???t</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CKEDITOR -->
    <!-- <script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script> -->
    <script src="../ckeditor/ckeditor.js"></script>
    <!-- <script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="dashboard.php">Trang ch???</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link" href="xulydonhang.php">????n h??ng<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="xulydanhmuc.php">Danh m???c</a>
            <a class="nav-item nav-link" href="xulydanhmucbaiviet.php">Danh m???c b??i vi???t</a>
            <a class="nav-item nav-link" href="xulybaiviet.php">B??i vi???t</a>
            <a class="nav-item nav-link" href="xulysanpham.php">S???n ph???m</a>
            <a class="nav-item nav-link" href="xulykhachhang.php">Kh??ch h??ng</a>
            <a class="nav-item nav-link" href="xulylienhe.php">Li??n h???</a>
            <a class="nav-item nav-link" href="#" style="color: black;">Ch??o Admin: <?php echo $_SESSION['dangnhap']?></a>
            <a class="nav-item nav-link" href="?login=dangxuat" style="color: red;">????ng xu???t</a>
            <!-- <a class="nav-item nav-link disabled" href="#">Disabled</a> -->
            </div>
        </div>
    </nav>
     <div class="container">
        <div class="row">
        <?php
            if(isset($_GET['quanly']) == 'capnhat'){
                $id_capnhat = $_GET['capnhat_id'];
                $sql_capnhat = mysqli_query($con,"SELECT * FROM tbl_baiviet WHERE baiviet_id='$id_capnhat'");
                $row_capnhat = mysqli_fetch_array($sql_capnhat);
                $id_category_1 = $row_capnhat['danhmuctin_id'];
        ?>
        <div class="col-md-4">
            <h4>C???p nh???t b??i vi???t</h4>  
            <form action="" method="POST" enctype= "multipart/form-data">
                <label for="">T??n b??i vi???t</label>
                <input type="text" class="form-control" name="tenbaiviet" value="<?php echo $row_capnhat['tenbaiviet'] ?>"><br>
                <input type="hidden" class="form-control" name="id_update" value="<?php echo $row_capnhat['baiviet_id'] ?>">
                <label for="">H??nh ???nh</label>
                <input type="file" class="form-control" name="hinhanh"><br>
                <img src="../uploads/<?php echo $row_capnhat['baiviet_image'] ?>" alt="" height="80" width="55"><br>
                <label for="">M?? t???</label>
                <textarea name="mota" id="mota" rows="10" class="form-control" ><?php echo $row_capnhat['tomtat'] ?></textarea><br>
                <label for="">Chi ti???t</label>
                <textarea name="chitiet" id="chitiet" rows="10" class="form-control"><?php echo $row_capnhat['noidung'] ?></textarea><br>
                    <script>
                        CKEDITOR.replace( "chitiet" );
                        CKEDITOR.replace( "mota" );
                    </script>
                <label for="">Danh m???c s???n ph???m</label>
                <?php
                    $sql_danhmuc = mysqli_query($con,"SELECT * FROM tbl_danhmuc_tin ORDER BY danhmuctin_id DESC");

                ?>
                <select name="danhmuc" class="form-control">
                    <option value="0">----Ch???n danh m???c tin----</option>
                    <?php
                    while($row_danhmuc = mysqli_fetch_array($sql_danhmuc)){
                        if($id_category_1 == $row_danhmuc['danhmuctin_id']){
                    ?>
                    <option selected value="<?php echo $row_danhmuc['danhmuctin_id'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                    <?php
                        }else{
                    ?>
                    <option value="<?php echo $row_danhmuc['danhmuctin_id'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                    <?php
                        }
                    }
                    ?>
                </select><br>
                <input type="submit" name="capnhatbaiviet" value="C???p nh???t b??i vi???t" class="btn btn-success">
            </form>           
        </div>
        <?php        
            }else{
        ?>
        <div class="col-md-4">
            <h4>Th??m b??i vi???t</h4>
            <form action="" method="POST" enctype= "multipart/form-data">
            <label for="">T??n b??i vi???t</label>
                <input type="text" class="form-control" name="tenbaiviet" placeholder="T??n b??i vi???t" required=""><br>
                <label for="">H??nh ???nh</label>
                <input type="file" class="form-control" name="hinhanh"><br>
                <label for="">M?? t???</label>
                <textarea name="mota" id="mota" class="form-control" required=""></textarea><br>
                <label for="">Chi ti???t</label>
                <textarea name="chitiet" id="chitiet" class="form-control" required=""></textarea><br>
                    <script>
                        CKEDITOR.replace( "chitiet" );
                        CKEDITOR.replace( "mota" );
                    </script>
                <label for="">Danh m???c b??i vi???t</label>
                <?php
                    $sql_danhmuc = mysqli_query($con,"SELECT * FROM tbl_danhmuc_tin ORDER BY danhmuctin_id DESC");
                ?>
                <select name="danhmuc" class="form-control">
                    <option value="0">----Ch???n danh m???c b??i vi???t----</option>
                    <?php
                    while($row_danhmuc = mysqli_fetch_array($sql_danhmuc)){
                    ?>
                    <option value="<?php echo $row_danhmuc['danhmuctin_id'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                    <?php
                    }
                    ?>
                </select><br>
                <input type="submit" name="thembaiviet" value="Th??m b??i vi???t" class="btn btn-success">
            </form>           
        </div>
        <?php
            }
        ?>

            <div class="col-md-8">
                <h4>Li???t k?? b??i vi???t</h4>
                <?php
                    $sql_select_bv = mysqli_query($con,"SELECT * FROM tbl_baiviet, tbl_danhmuc_tin WHERE tbl_baiviet.danhmuctin_id = tbl_danhmuc_tin.danhmuctin_id ORDER BY tbl_baiviet.baiviet_id DESC");
                ?>
                <table class="table table-bordered ">
                    <tr>
                        <th>S??? th??? t???</th>
                        <th>T??n b??i vi???t</th>
                        <th>H??nh ???nh</th>
                        <th>Danh m???c b??i vi???t</th>
                        <th>Qu???n l??</th>
                    </tr>
                    <?php
                        $i=0;
                        while($row_bv = mysqli_fetch_array($sql_select_bv)){
                            $i++;   
                    ?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $row_bv['tenbaiviet']?></td>
                        <td><img src="../uploads/<?php echo $row_bv['baiviet_image']?>" height="80" width="55"></td>
                   
                        <td><?php echo $row_bv['tendanhmuc']?></td>
                        <td><a href="?xoa=<?php echo $row_bv['baiviet_id']?>">X??a</a> || 
                            <a href="xulybaiviet.php?quanly=capnhat&capnhat_id=<?php echo $row_bv['baiviet_id']?>">C???p nh???t</a></td>
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