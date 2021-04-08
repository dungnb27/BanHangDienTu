<?php
	if(isset($_POST['lienhe'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

        echo '<script>alert("Gửi thông tin thành công")</script>';
		$sql_lienhe = mysqli_query($con,"INSERT INTO tbl_lienhe
		(lienhe_name, lienhe_mail, lienhe_mess) VALUES 
		('$name','$email','$message')");
	}
?>
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li class="active">Liên hệ</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->     
<!-- Begin Contact Main Page Area -->
<div class="contact-main-page mt-60 mb-40 mb-md-40 mb-sm-40 mb-xs-40">
    <div class="container mb-60">
        <div id="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7836.830573482351!2d106.78493206529672!3d10.855984800746175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527c3debb5aad%3A0x5fb58956eb4194d0!2zxJDhuqFpIEjhu41jIEh1dGVjaCBLaHUgRQ!5e0!3m2!1svi!2s!4v1617847065111!5m2!1svi!2s" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2">
                <div class="contact-page-side-content">
                    <h3 class="contact-page-title">Liên hệ với chúng tôi</h3>
                    <p class="contact-page-message mb-25">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human.</p>
                    <div class="single-contact-block">
                        <h4><i class="fa fa-fax"></i> Địa chỉ</h4>
                        <p>Hồ Chí Minh – Việt Nam</p>
                    </div>
                    <div class="single-contact-block">
                        <h4><i class="fa fa-phone"></i> Số điện thoại</h4>
                        <p>Mobile: 0949418766</p>
                    </div>
                    <div class="single-contact-block last-child">
                        <h4><i class="fa fa-envelope-o"></i> Email</h4>
                        <p>dungnb27@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                <div class="contact-form-content pt-sm-55 pt-xs-55">
                    <h3 class="contact-page-title">Gửi tin nhấn tới chúng tôi</h3>
                    <div class="contact-form">
                        <form method="POST">
                            <div class="form-group">
                                <label>Tên của bạn <span class="required">*</span></label>
                                <input type="text" name="name"  required>
                            </div>
                            <div class="form-group">
                                <label>Email <span class="required">*</span></label>
                                <input type="email" name="email" required>
                            </div>
                            <div class="form-group mb-30">
                                <label>Tin nhắn</label>
                                <textarea name="message" ></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" id="submit" class="li-btn-3" name="lienhe">Gửi</button>
                            </div>
                        </form>
                    </div>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Main Page Area End Here -->