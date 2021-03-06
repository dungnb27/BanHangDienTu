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
    <title>S???n ph???m</title>
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
                $sql_capnhat = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE sanpham_id='$id_capnhat'");
                $row_capnhat = mysqli_fetch_array($sql_capnhat);
                $id_category_1 = $row_capnhat['category_id'];
        ?>
        <div class="col-md-4">
            <h4>C???p nh???t s???n ph???m</h4>  
            <form action="" method="POST" enctype= "multipart/form-data">
                <label for="">T??n s???n ph???m</label>
                <input type="text" class="form-control" name="tensanpham" value="<?php echo $row_capnhat['sanpham_name'] ?>" required=""><br>
                <input type="hidden" class="form-control" name="id_update" value="<?php echo $row_capnhat['sanpham_id'] ?>">
                <label for="">H??nh ???nh</label>
                <input type="file" class="form-control" name="hinhanh"><br>
                <img src="../uploads/<?php echo $row_capnhat['sanpham_image'] ?>" alt="" height="80" width="55"><br>
                <label for="">Gi??</label>
                <input type="number" min="0" class="form-control" name="giasanpham" value="<?php echo $row_capnhat['sanpham_gia'] ?>"><br>
                <label for="">Gi?? khuy???n m??i</label>
                <input type="number" min="0" class="form-control" name="giakhuyenmai" value="<?php echo $row_capnhat['sanpham_giakhuyenmai'] ?>"><br>
                <label for="">S??? l?????ng</label>
                <input type="number" min="0" class="form-control" name="soluong" value="<?php echo $row_capnhat['sanpham_soluong'] ?>"><br>
                <label for="">M?? t???</label>
                <textarea name="mota" id ="mota" rows="10" class="form-control" ><?php echo $row_capnhat['sanpham_mota'] ?></textarea><br>
                <label for="">Chi ti???t</label>
                <textarea name="chitiet" id ="chitiet" rows="10" class="form-control"><?php echo $row_capnhat['sanpham_chitiet'] ?></textarea><br>
                    <script>
                        CKEDITOR.replace( "chitiet" );
                        CKEDITOR.replace( "mota" );
                    </script>
                <label for="">K??ch ho???t s???n ph???m</label>
                <select name="sanphamactive" class="form-control">
                    <?php
                    if($row_capnhat['sanpham_active'] == 0){
                    ?>
                    <option selected value="0">K??ch ho???t</option>
                    <option value="1">???n</option>
                    <?php
                    }else{
                    ?>
                    <option value="0">K??ch ho???t</option>
                    <option selected value="1">???n</option>
                    <?php
                    }
                    ?>
                </select><br>
                <label for="">S???n ph???m n???i b???t</label>
                <select name="sanphamhot" class="form-control">
                    <?php
                    if($row_capnhat['sanpham_hot'] == 0){
                    ?>
                    <option selected value="0">N???i b???t</option>
                    <option value="1">Kh??ng n???i b???t</option>
                    <?php
                    }else{
                    ?>
                    <option value="0">N???i b???t</option>
                    <option selected value="1">Kh??ng n???i b???t</option>
                    <?php
                    }
                    ?>
                </select><br>
                <label for="">Danh m???c s???n ph???m</label>
                <?php
                    $sql_danhmuc = mysqli_query($con,"SELECT * FROM tbl_category ORDER BY category_id DESC");

                ?>
                <select name="danhmuc" class="form-control">
                    <option value="0">----Ch???n danh m???c----</option>
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
                <input type="submit" name="capnhatsanpham" value="C???p nh???t s???n ph???m" class="btn btn-success">
            </form>           
        </div>
        <?php        
            }else{
        ?>
        <div class="col-md-4">
            <h4>Th??m s???n ph???m</h4>
            <form action="" method="POST" enctype= "multipart/form-data">
            <label for="">T??n s???n ph???m</label>
                <input type="text" class="form-control" name="tensanpham" placeholder="T??n s???n ph???m" required=""><br>
                <label for="">H??nh ???nh</label>
                <input type="file" class="form-control" name="hinhanh"><br>
                <label for="">Gi??</label>
                <input type="number" min="0" class="form-control" name="giasanpham" placeholder="Gi?? s???n ph???m" required=""><br>
                <label for="">Gi?? khuy???n m??i</label>
                <input type="number" min="0" class="form-control" name="giakhuyenmai" placeholder="Gi?? khuy???n m??i" required=""><br>
                <label for="">S??? l?????ng</label>
                <input type="number" min="0" class="form-control" name="soluong" placeholder="S??? l?????ng" required=""><br>
                <label for="">M?? t???</label>
                <textarea name="mota" id="mota" rows="10" class="form-control" required=""></textarea><br>
                    <script>
                        CKEDITOR.replace( "mota" );
                    </script>
                <label for="">Chi ti???t</label>
                <textarea name="chitiet" id="chitiet" rows="10" class="form-control" required=""></textarea><br>
                    <script>
                        CKEDITOR.replace( "chitiet" );
                    </script>
                <label for="">K??ch ho???t s???n ph???m</label>
                <select name="sanphamactive" class="form-control">
                    <option >----Ch???n t??nh tr???ng----</option>
                    <option value="0">K??ch ho???t</option>
                    <option value="1">???n</option>
                </select><br>
                <label for="">S???n ph???m n???i b???t</label>
                <select name="sanphamhot" class="form-control">
                    <option >----Ch???n t??nh n???i b???t----</option>
                    <option value="0">N???i b???t</option>
                    <option value="1">Kh??ng n???i b???t</option>
                </select><br>
                <label for="">Danh m???c s???n ph???m</label>
                <?php
                    $sql_danhmuc = mysqli_query($con,"SELECT * FROM tbl_category ORDER BY category_id DESC");

                ?>
                <select name="danhmuc" class="form-control">
                    <option value="0">----Ch???n danh m???c----</option>
                    <?php
                    while($row_danhmuc = mysqli_fetch_array($sql_danhmuc)){
                    ?>
                    <option value="<?php echo $row_danhmuc['category_id'] ?>"><?php echo $row_danhmuc['category_name'] ?></option>
                    <?php
                    }
                    ?>
                </select><br>
                <input type="submit" name="themsanpham" value="Th??m s???n ph???m" class="btn btn-success">
            </form>           
        </div>
        <?php
            }
        ?>

            <div class="col-md-8">
                <h4>Li???t k?? s???n ph???m</h4>
                <?php
                    $sql_select_sanpham = mysqli_query($con,"SELECT * FROM tbl_sanpham, tbl_category WHERE tbl_sanpham.category_id = tbl_category.category_id ORDER BY tbl_sanpham.sanpham_id DESC");
                ?>
                <table class="table table-bordered ">
                    <tr>
                        <th>S??? th??? t???</th>
                        <th>T??n s???n ph???m</th>
                        <th>H??nh ???nh</th>
                        <th>S??? l?????ng</th>
                        <th>Danh m???c</th>
                        <th>T??nh tr???ng</th>
                        <th>Gi?? s???n ph???m</th>
                        <th>Gi?? khuy???n m??i</th>
                        <th>Qu???n l??</th>
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
                                echo'K??ch ho???t';
                            }else{
                                echo'???n';
                            }
                        ?>
                        </td>
                        <td><?php echo number_format($row_sanpham['sanpham_gia']).' VN??'?></td>
                        <td><?php echo number_format($row_sanpham['sanpham_giakhuyenmai']).' VN??'?></td>
                        <td><a href="?xoa=<?php echo $row_sanpham['sanpham_id']?>">X??a</a> || 
                            <a href="xulysanpham.php?quanly=capnhat&capnhat_id=<?php echo $row_sanpham['sanpham_id']?>">C???p nh???t</a></td>
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