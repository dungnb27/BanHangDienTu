<?php
    session_start();
    include('../db/connect.php');
?>
<?php
    //session_destroy();
    //unset('dangnhap');
    if(isset($_POST['dangnhap'])){
        $taikhoan = $_POST['taikhoan'];
        $matkhau = md5($_POST['matkhau']);
        if($taikhoan=='' || $matkhau==''){
            echo '<p class="NhapSai">Xin nhập đủ</p></p>';
        }else{
            $sql_select_admin=mysqli_query($con,"SELECT * FROM tbl_admin WHERE email='$taikhoan' AND password='$matkhau' LIMIT 1 ");
            $count = mysqli_num_rows($sql_select_admin);
            $row_dangnhap = mysqli_fetch_array($sql_select_admin);
            if($count > 0){
                $_SESSION['dangnhap'] = $row_dangnhap['admin_name'];
                $_SESSION['admin_id'] = $row_dangnhap['admin_id'];
                header('Location: dashboard.php');
            }else{
                echo '<p class="NhapSai">Tài khoản hoặc mật khẩu không đúng</p>';
            }
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Đăng nhập Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="site.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        
    </style>
</head>
  <body>
    <div class="login">
        <h3>Đăng nhập</h3>
        <div class="col-md-6">
            <div class="form-group">
                <form action="" method="POST">
                    <label id="TK">Tài khoản</label>
                    <input class="title" type="text" name="taikhoan" placeholder="Điền tài khoản" class="form-control">
                    <label id="PW">Mật khẩu</label>
                    <input class="title" type="password" name="matkhau" placeholder="Điền mật khẩu" class="form-control">
                    <input class="button" type="submit" name="dangnhap" value="Đăng nhập Admin">
            
                </form>
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