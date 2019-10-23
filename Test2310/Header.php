<div data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100" id="navb-search">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-color: #024282;padding: 0px;height: 40px;" max-height="40px">
        <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="padding: 3px 10px;"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon" style="background-color: rgb(2,66,130);"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav" style="color: #fdb913;">
                    <li class="nav-item" role="presentation">
                        <h5 class="text-uppercase" style="font-size: 12px;font-family: 'Open Sans', sans-serif;font-weight: 200;font-style: normal;margin: 0px;margin-top: 11px;">hotline:</h5>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="tel:0914.298.300" style="font-size: 12px; font-family: 'Open Sans', sans-serif;font-weight: 200;font-style: normal;color: #fdb913;">0914.298.300</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="" style="padding: 0px;font-size: 12px; padding-top: 8px;padding-bottom: 8px;font-family: 'Open Sans', sans-serif;font-weight: 500;font-style: normal;color: #fdb913;">-</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="tel:0914.298.300" style="font-size: 12px; font-family: 'Open Sans', sans-serif;font-weight: 200;font-style: normal;color: #fdb913;">0914.298.300</a></li>
                </ul>
                <ul class="nav navbar-nav ml-auto" style="max-height: 40px;">
                    <li class="nav-item text-uppercase" role="presentation" style="font-family: 'Open Sans', sans-serif;font-weight: bold;font-style: normal;font-size: 14px;line-height: 15px;"><a class="nav-link active text-uppercase text-white" href="#" style="font-size: 13px;font-weight: normal;font-style: normal;">Sinh viên</a></li>
                    <li class="nav-item text-uppercase" role="presentation" style="font-family: 'Open Sans', sans-serif;font-weight: bold;font-style: normal;font-size: 14px;line-height: 15px;"><a class="nav-link active text-uppercase text-white" href="#" style="font-size: 13px;font-weight: normal;font-style: normal;">giảng viên</a></li>
                    <li class="nav-item text-uppercase" role="presentation" style="font-family: 'Open Sans', sans-serif;font-weight: bold;font-style: normal;font-size: 14px;line-height: 15px;"><a class="nav-link text-uppercase text-white" href="#" style="font-size: 13px;font-weight: normal;font-style: normal;">đào tạo quốc tế</a></li>
                </ul>
                
        </div>
        <nav class="navbar navbar-light navbar-expand-md" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="150" data-aos-once="true" style="padding: 0px;">
            <div class="container-fluid">
                <form class="form-inline mr-auto" target="_self" style="height: 38px;">
                    <div class="form-group" id="div-search" style="margin: 0px;width: 269px;"><input class="form-control d-inline-block float-none search-field" type="search" id="search-field" name="search" style="width: 269px;"></div>
                </form>
            </div>
        </nav>
        <div id="engl"><a href="#"><img src="assets/img/en.jpg"></a></div>

        <!-- phần đăng nhập -->

        <div id="login" style="padding: 8px;color: rgb(248,248,248);font-size: 16px;">

                <?php
                    include 'Connect.php';
                    if(isset($_COOKIE['dangnhap'])){
                        $sql="select * from tbl_user where username='".$_COOKIE['dangnhap']."'";
                        $kq=mysqli_query($con,$sql);
                        $ro=mysqli_fetch_array($kq);
                        if ($ro['quyendn']==0){
                ?>
                        <div id="admin" style="padding: 8px;">
                            <i class="fa fa-user-o" style="font-size: 18px;line-height: 18px;color: rgb(255,255,255);"></i>
                            <a href="index-admin.php" style="color: rgb(248,248,248);font-size: 16px;">Admin</a>
                            <span>  &#8722;</span>
                            <a href="Logout.php" style="color: rgb(248,248,248);font-size: 16px;">Đăng xuất</a>
                        </div>
                    
                    <?php
                    }else if($ro['quyendn']==1){    
                    ?>

                        <div id="admin" style="padding: 8px;">
                            <i class="fa fa-user-o" style="font-size: 18px;line-height: 18px;color: rgb(255,255,255);"></i>
                            <a href="#" style="color: rgb(248,248,248);font-size: 16px;"><?php echo $_COOKIE['dangnhap'];?></a>
                            <span>  &#8722;</span>
                            <a href="Logout.php" style="color: rgb(248,248,248);font-size: 16px;">Đăng xuất</a>
                        </div>

                    <?php
                        }
                    }else {
                    ?>
                        <div id="login" style="padding: 8px;">
                            <i class="fa fa-user-o" style="font-size: 18px;line-height: 18px;color: rgb(255,255,255);"></i>
                            <a href="Login.php" style="color: rgb(248,248,248);font-size: 16px;">Đăng nhập</a>
                        </div>
                     
                    <?php
                    }
                    ?>
            </div>
        </div>
    </nav>
</div>
        <!-- hết hot --> 
<!--logo and menu-->
<div data-aos="fade-left" data-aos-duration="2000" data-aos-delay="100" id="navb-menu-show">
    <nav class="navbar navbar-light navbar-expand-lg bg-white clean-navbar navb" style="padding: 0px;" >
        <div class="container-fluid" id="logo-menu">
            <a href="#" style="margin-right: 18px;"><img src="assets/img/logo.jpg"></a>            
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation" style="padding: 0px;"><a class="nav-link" href="#"><i class="fa fa-graduation-cap" style="margin-right: 5px"></i>Tuyển sinh</a></li>
                    <li class="nav-item" role="presentation" style="padding: 0px;"><a class="nav-link active" href="#"><i class="fa fa-info-circle" style="margin-right: 5px"></i>Giới thiệu</a></li>
                    <li class="nav-item" role="presentation" style="padding: 0px;"><a class="nav-link" href="#"><i class="fa fa-book" style="margin-right: 5px"></i>Đào tạo</a></li>
                    <li class="nav-item" role="presentation" style="padding: 0px;"><a class="nav-link" href="#"><i class="fa fa-bookmark" style="margin-right: 5px"></i>Nghiên cứu</a></li>
                    <li class="nav-item" role="presentation" style="padding-right: 0px;"><a class="nav-link" href="#"><i class="fa fa-handshake-o" style="margin-right: 5px"></i>Hợp tác doanh nghiệp</a></li>
                </ul>
            </div>
            <button type ="button" class="btn btn-gnav" data-toggle="collapse" class="navbar-toggler" data-target="#menu-trigger">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav> 
</div>
 <!-- hết logo -->
 
<!-- menu-trigger-hide-->
<div class="gnav">
    <div class="container-fluid" style="background-color: #024282;">
        <nav id="menu-trigger" class="toggled collapse">
            <div class="row" style="padding: 20px 10px  ;">
                <div class="col-lg-3 col-sm-6">
                        <p><a href="#" style="color: #fff; font-size: 18px; font-weight: 600;">Giới thiệu chung</a></p>
                        <ul class="sub-nav">
                            <li><a href="#" style="color: #b1b1b1"><i class="fa fa-angle-double-right" style="margin-right: 5px;"></i>Giới thiệu chung</a></li>
                            <li><a href="#" style="color: #b1b1b1"><i class="fa fa-angle-double-right" style="margin-right: 5px;"></i>Toàn cảnh ĐH Nguyễn Tất Thành</a></li>
                            <li><a href="#" style="color: #b1b1b1"><i class="fa fa-angle-double-right" style="margin-right: 5px;"></i>Hệ thống Cơ sở vật chất</a></li>
                            <li><a href="#" style="color: #b1b1b1"><i class="fa fa-angle-double-right" style="margin-right: 5px;"></i>Thông tin 3 công khai</a></li>
                            <li><a href="#" style="color: #b1b1b1"><i class="fa fa-angle-double-right" style="margin-right: 5px;"></i>Đảm bảo chất lượng</a></li>
                            <li><a href="#" style="color: #b1b1b1"><i class="fa fa-angle-double-right" style="margin-right: 5px;"></i>Phát triển bền vững</a></li>
                        </ul>

                        <p><a href="#" style="color: #fff; font-size: 18px; font-weight: 600;">Hợp tác doanh nghiệp</a></p>
                        <ul class="sub-nav">
                            <li><a href="#" style="color: #b1b1b1"><i class="fa fa-angle-double-right" style="margin-right: 5px;"></i>Giới thiệu việc làm</a></li>
                            <li><a href="#" style="color: #b1b1b1"><i class="fa fa-angle-double-right" style="margin-right: 5px;"></i>Giới thiệu thực tập</a></li>
                            <li><a href="#" style="color: #b1b1b1"><i class="fa fa-angle-double-right" style="margin-right: 5px;"></i>Câu lạc bộ Doanh nghiệp</a></li>
                            <li><a href="#" style="color: #b1b1b1"><i class="fa fa-angle-double-right" style="margin-right: 5px;"></i>Ban liên lạc Cựu sinh viên</a></li>
                            <li><a href="#" style="color: #b1b1b1"><i class="fa fa-angle-double-right" style="margin-right: 5px;"></i>Liên kết - Hợp tác</a></li>
                        </ul>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <p><a href="#" style="color: #fff; font-size: 18px; font-weight: 600;">Tuyển sinh</a></p>
                    <ul class="sub-nav">
                        <li><a href="#" style="color: #b1b1b1"><i class="fa fa-angle-double-right" style="margin-right: 5px;"></i>Các bậc đào tạo</a></li>
                        <li><a href="#" style="color: #b1b1b1"><i class="fa fa-angle-double-right" style="margin-right: 5px;"></i>Thông tin tuyển sinh</a></li>
                        <li><a href="#" style="color: #b1b1b1"><i class="fa fa-angle-double-right" style="margin-right: 5px;"></i>Chính sách học bổng</a></li>
                        <li><a href="#" style="color: #b1b1b1"><i class="fa fa-angle-double-right" style="margin-right: 5px;"></i>Hướng nghiệp</a></li>
                        <li><a href="#" style="color: #b1b1b1"><i class="fa fa-angle-double-right" style="margin-right: 5px;"></i>Xét tuyển trực tuyến</a></li>
                    </ul>

                    <p><a href="#" style="color: #fff; font-size: 18px; font-weight: 600;">Nghiên cứu</a></p>
                    <ul class="sub-nav">
                        <li><a href="#" style="color: #b1b1b1"><i class="fa fa-angle-double-right" style="margin-right: 5px;"></i>Hoạt động khoa học công nghệ</a></li>
                        <li><a href="#" style="color: #b1b1b1"><i class="fa fa-angle-double-right" style="margin-right: 5px;"></i>Viện - Trung tâm nghiên cứu</a></li>
                        <li><a href="#" style="color: #b1b1b1"><i class="fa fa-angle-double-right" style="margin-right: 5px;"></i>Công bố khoa học</a></li>
                        </ul>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <p><a href="#" style="color: #fff; font-size: 18px; font-weight: 600;">Đào tạo</a></p>
                    <ul class="sub-nav">
                        <li><a href="#" style="color: #b1b1b1"><i class="fa fa-angle-double-right" style="margin-right: 5px;"></i>Khối Khoa học sức khỏe</a></li>
                        <li><a href="#" style="color: #b1b1b1"><i class="fa fa-angle-double-right" style="margin-right: 5px;"></i>Khối Kinh tế - Quản trị</a></li>
                        <li><a href="#" style="color: #b1b1b1"><i class="fa fa-angle-double-right" style="margin-right: 5px;"></i>Khối Kỹ thuật - Công nghệ</a></li>
                        <li><a href="#" style="color: #b1b1b1"><i class="fa fa-angle-double-right" style="margin-right: 5px;"></i>Khối Khoa học xã hội - Nhân văn</a></li>
                        <li><a href="#" style="color: #b1b1b1"><i class="fa fa-angle-double-right" style="margin-right: 5px;"></i>Khối Mỹ thuật - Nghệ thuật</a></li>
                        <li><a href="#" style="color: #b1b1b1"><i class="fa fa-angle-double-right" style="margin-right: 5px;"></i>Khối đào tạo quốc tế</a></li>
                        </ul>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <ul class="sub-page" style="margin: 10px 30px 10px 30px; padding: 0; a{width: 100%;    color: #fff;    background-color: #42719f;    text-align: left;}">
                        <li style="margin-bottom: 5px;"><a href="#" class="btn" style="width: 100%;    color: #fff;    background-color: #42719f;    text-align: left;"><i style="margin-right: 8px;" class="fa fa-facebook-official"></i>Facebook</a></li>
                        <li style="margin-bottom: 5px;"><a href="#" class="btn" style="width: 100%;    color: #fff;    background-color: #42719f;    text-align: left;"><i style="margin-right: 8px;" class="fa fa-google-plus"></i>Google Plus</a></li>
                        <li style="margin-bottom: 5px;"><a href="#" class="btn" style="width: 100%;    color: #fff;    background-color: #42719f;    text-align: left;"><i style="margin-right: 8px;" class="fa fa-youtube-play"></i>Youtube</a></li>
                        <li style="margin-bottom: 5px;"><a href="#" class="btn" style="width: 100%;    color: #fff;    background-color: #42719f;    text-align: left;"><i style="margin-right: 8px;" class="fa fa-envelope"></i>E-mail</a></li>
                        <li style="margin-bottom: 5px;"><a href="#" class="btn" style="width: 100%;    color: #fff;    background-color: #42719f;    text-align: left;"><i style="margin-right: 8px;" class="fa fa-wechat"></i>Zalo</a></li>
                        <li style="margin-bottom: 5px;"><a href="#" class="btn" style="width: 100%;    color: #fff;    background-color: #42719f;    text-align: left;"><i style="margin-right: 8px;" class="fa fa-mortar-board"></i>E-office</a></li>
                        <li style="margin-bottom: 5px;"><a href="#" class="btn" style="width: 100%;    color: #fff;    background-color: #42719f;    text-align: left;"><i style="margin-right: 8px;" class="fa fa-users"></i>Tuyển dụng</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /container -->
    </div>
    <!-- /gnav -->
</div>