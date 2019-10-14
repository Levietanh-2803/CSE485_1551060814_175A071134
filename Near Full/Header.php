<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/img/x-icon.jpg" type="image/x-icon">
    <title>ĐH Nguyễn Tất Thành</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Styles.css">
</head>

<body>
    <header>
        <div>
        <div data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100" id="navb-search">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-color: #024282;padding: 0px;height: 34px;" max-height="36px">
                <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="padding: 3px 10px;"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon" style="background-color: rgb(2,66,130);"></span></button>
                    <div
                        class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation">
                                <h5 class="text-uppercase" style="font-size: 13px;font-family: 'Open Sans', sans-serif;font-weight: 200;font-style: normal;margin: 0px;margin-top: 8px;color: #fdb913;">hotline:</h5>
                            </li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="tel:0902.298.300" style="font-family: 'Open Sans', sans-serif;font-weight: 700;font-style: normal;color: #fdb913;font-size: 12px">0902.298.300</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" style="padding: 0px;padding-top: 8px;padding-bottom: 8px;font-family: 'Open Sans', sans-serif;font-weight: bold;font-style: normal;color: #fdb913;font-size: 12px">-</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="tel:0906.298.300" style="font-family: 'Open Sans', sans-serif;font-weight: 700;font-style: normal;color: #fdb913;font-size: 12px">0906.298.300</a></li>
                        </ul>
                        <ul class="nav navbar-nav ml-auto" id="sgd" style="max-height: 40px;">
                            <li class="nav-item text-uppercase" role="presentation" style="font-family: 'Open Sans', sans-serif;font-weight: bold;font-style: normal;line-height: 15px;"><a class="nav-link active text-uppercase text-white" href="#" style="font-size: 11px;font-weight: 300;font-style: normal;">Sinh viên</a></li>
                            <li class="nav-item text-uppercase" role="presentation" style="font-family: 'Open Sans', sans-serif;font-weight: bold;font-style: normal;line-height: 15px;"><a class="nav-link active text-uppercase text-white" href="#" style="font-size: 11px;font-weight: 300;font-style: normal;">giảng viên</a></li>
                            <li class="nav-item text-uppercase" role="presentation" style="font-family: 'Open Sans', sans-serif;font-weight: bold;font-style: normal;line-height: 15px;"><a class="nav-link text-uppercase text-white" href="#" style="font-size: 11px;font-weight: 300;font-style: normal;">đào tạo quốc tế</a></li>
                        </ul>
                </div>
                <!-- search -->
                <nav class="navbar navbar-light navbar-expand-md" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="150" data-aos-once="true" style="padding: 0px;">
                    <div class="container-fluid ">
                        <form class="form-inline mr-auto" target="_self" style="height: 32px;">
                        <div class="form-group" id="div-search" style="margin: 0px;width: 269px;">
                            <input class="form-control d-inline-block float-none search-field" type="search" id="search-field" name="search" style="width: 269px; height: -webkit-fill-available">
                            <label class="d-inline-block float-left" id="lbl-search" for="search-field" style="background-color: #ffffff;filter: hue-rotate(0deg);">
                                <i class="fa fa-search" style="width: 18px;height: 24px;"></i>
                            </label>
                        </div>
                        </form>
                    </div>
                </nav>
                <!-- hết  -->
                <div id="engl"><a href="#"><img src="assets/img/en.jpg"></a></div>
                <div id="login" style="padding: 8px;"><i class="fa fa-user-o" style="font-size: 14  px;line-height: 18px;color: rgb(255,255,255);"></i><a href="Login.php" style="color: rgb(248,248,248);font-size: 14px;">Login</a></div>
        </div>
        </nav>
        </div>
        <div data-aos="fade-left" data-aos-duration="2000" data-aos-delay="100" id="navb-menu-show">
            <nav class="navbar navbar-light navbar-expand-lg bg-white clean-navbar navb" style="padding: 0px;">
                <div class="container"><a href="index.html" style="margin-right: 18px;"><img src="assets/img/logo.jpg"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div
                        class="collapse navbar-collapse" id="navcol-2">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item" role="presentation" style="padding: 0px;"><a class="nav-link" href="#"><i class="fa fa-graduation-cap" style="margin-right: 5px"></i>Tuyển sinh</a></li>
                            <li class="nav-item" role="presentation" style="padding: 0px;"><a class="nav-link active" href="#"><i class="fa fa-info-circle" style="margin-right: 5px"></i>Giới thiệu</a></li>
                            <li class="nav-item" role="presentation" style="padding: 0px;"><a class="nav-link" href="#"><i class="fa fa-book" style="margin-right: 5px"></i>Đào tạo</a></li>
                            <li class="nav-item" role="presentation" style="padding: 0px;"><a class="nav-link" href="#"><i class="fa fa-bookmark" style="margin-right: 5px"></i>Nghiên cứu</a></li>
                            <li class="nav-item" role="presentation" style="padding-right: 0px;"><a class="nav-link" href="#"><i class="fa fa-handshake-o" style="margin-right: 5px"></i>Hợp tác doanh nghiệp</a></li>
                        </ul>
                </div>
        </div>
        </nav>
        </div>
        <div class="d-flex justify-content-center"><button class="btn btn-primary" type="button" style="background-color: rgb(255,255,255);"><i class="fa fa-bars" style="background-color: #ffffff;color: rgb(2,66,130);margin: 0px;font-size: 24px;"></i></button></div>
        <div id="navb-menu-hide">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon text-monospace"></span></button>
                    <div class="collapse navbar-collapse d-none" id="navcol-2">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="#">First Item</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Second Item</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Third Item</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        </div>
    </header>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
