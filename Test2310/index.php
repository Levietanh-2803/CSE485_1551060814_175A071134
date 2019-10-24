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
<?php
    include "Header.php";
?>
<!-- phần carousel.................................. -->
<div class="container-fluid">
    <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner caro-a">
            <?php
                include 'Connect.php';
                $sql1="SELECT * FROM tbl_slide";
                $kq1 = mysqli_query($con,$sql1);
                $active = 0;
                while ($row1 = mysqli_fetch_array($kq1)){
                $onactive ="";
                if($active == 0 )
                    $onactive ="active";

            ?>
                    <div class="carousel-item <?php echo("$onactive")?>">
                        <img src="<?php echo $row1['link'];?>" class="d-block w-100" alt="<?php echo $row1['alt'];?>">
                        <div class="carousel-caption  caro-b d-md-block" style="background-color: rgba(0,0,0,0.4);">
                        <p style="font-size: 16px; font-weight: 500;"> <?php echo $row1['mota'];?></p>
                        </div>
                    </div>
                    <?php
                        $active ++;                
                }
            ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
</div>
<!-- hết carousel -->
<!-- start tin tức -->
<div class="d-md-flex section mt-4">
    <div class="col-md-9 col-tintuc">
        <h2 class="heading-2"><a href="#">Tin tức</a></h2>
            <div class="row row-tintuc">
                <article class="col-md-4 col-sm-6 post-home">
                    <a class="" href="#">
                        <img src="assets/img/mn-tintuc1.jpg" alt="Tin tức">
                    </a>
                    <a href="#" class="title title-tintuc" style="overflow: hidden; height: 65px;">Khoa Cơ khí - Điện  - Điện tử - Ô tô gửi sinh viên đi trao đổi các chương trình đào tạo ngắn hạn tại Nhật Bản</a>
                    <div class="content content-tintuc">
                        <p>NTTU - Nhận được thư mời của Bộ Khoa học Công nghệ Nhật Bản theo chương trình Sakura Science Exchange Program tại ĐH Teikyo, Nhật Bản, khoa Cơ khí – Điện – Điện tử - Ô tô đã cử TS. Phạm Tuấn Anh (trưởng khoa) cùng 3 sinh viên </p>
                    </div>
                </article>

                <article class="col-md-4 col-sm-6 post-home">
                    <a class="thumbnail" href="#">
                        <img src="assets/img/mn-tintuc2.jpg" alt="Tin tức">
                    </a>
                    <a href="#" class="title title-tintuc" style="overflow: hidden; height: 65px;">Không khí vui tươi của hàng trăm sinh viên ĐH Nguyễn Tất Thành tại Lễ khai giảng cho sinh viên quốc tế năm học 2019 - 2020</a>
                    <div class="content content-tintuc">
                        <p>NTTU – Hòa chung vào không khí hân hoan toàn Trường ĐH Nguyễn Tất Thành chào đón năm mới, sáng ngày 11/03/2019, được sự cho phép của ban lãnh đạo Nhà trường, ĐH Nguyễn Tất Thành đã tổ chức lễ Khai giảng năm học 2019 – 2020 cho sinh viên quốc tế</p>
                    </div>
                </article>

                <article class="col-md-4 col-sm-6 post-home">
                    <a class="thumbnail" href="#">
                        <img src="assets/img/mn-tintuc3.jpg" alt="Tin tức">
                    </a>
                    <a href="#" class="title title-tintuc" style="overflow: hidden; height: 65px;">ĐH Nguyễn Tất Thành tuyển sinh Thạc sỹ đợt 2 năm 2019</a>
                    <div class="content content-tintuc">
                        <p>NTTU – Viện Nghiên cứu và Đào tạo sau đại học Trường ĐH Nguyễn Tất Thành thông báo tuyển sinh bậc sau đại học đợt 2 năm 2019. Hồ sơ nhận đến ngày 30/10/2019</p>
                    </div>
                </article>
             </div>
                <ul class="list-unstyled" style="float: right;">
                    <li><a class="c-blue-a5 font-weight-bold" href="#">
                        <i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a>
                    </li>
                </ul>
            </div>
    <div class="col-md-3 col-media">
        <h2 class="heading-2"><a href="">Media</a> </h2>
            <article class="post-video" style="width: inherit">
                <iframe style="width: inherit;" src="https://www.youtube.com/embed/AWEnDkvhJHE" frameborder="0" allowfullscreen=""></iframe>
                    <div class="description">
                        <ul class="list-style-1" style="padding-inline-start: 20px;">
                            <li><i class="fa fa-angle-right"></i><a href="#">ĐH Nguyễn Tất Thành tiến hành tổ chức kiểm định chương trình đào tạo theo tiêu chuẩn AUN-QA</a></li>
                            <li><i class="fa fa-angle-right"></i><a href="#">ĐIỂM TIN THÁNG 8</a></li>
                            <li><i class="fa fa-angle-right"></i><a href="#">ĐH Nguyễn Tất Thành – 20 năm dấu ấn một chặng đường</a></li>
                        </ul>
                    <a class="c-blue-a5 font-weight-bold row justify-content-end align-items-center m-0" href="#"><i class="fa fa-chevron-circle-right mr-2"></i>Xem thêm</a>
                    </div>
            </article>
        </div>
</div>
<!-- end tin tức -->
<!-- sub-slider -->
<div class="container-fluid"  style="background-color: #024282;">
    <h2 style="font-size: 24px; text-align: center;"><a href="" id="a-thanhvien b-tscntt" style="color: #bacde4;">Tại sao chọn đại học Nguyễn Tất Thành</a><hr style="background-color: #a1a1a1; width: 300px;"></h2>

    <!--Carousel Wrapper-->
    <div id="multi-item-example-0" class="carousel slide carousel-multi-item" data-ride="carousel">

        <!--Controls-->
        <div class="controls-top">
            <a class="btn-floating" href="#multi-item-example-0" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
            <a class="btn-floating" href="#multi-item-example-0" data-slide="next"><i class="fa fa-chevron-right"></i></a>
        </div>
        <!--/.Controls-->

        <!--Indicators-->
        <!-- <ol class="carousel-indicators">
            <li data-target="#multi-item-example-0" data-slide-to="0" class="active"></li>
            <li data-target="#multi-item-example-0" data-slide-to="1"></li>
        </ol> -->
        <!--/.Indicators-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">

                <div class="row">
                    <div class="col-md-4 tscdhntt">
                        <div class="card mb-2">
                            <div class="card-body">
                                <h4 class="card-title"><a href="#">Chuẩn 3 sao QS-Stars (Anh Quốc)</a></h4>
                                <p class="card-text">Xếp hạng quốc tế 3 sao theo chuẩn QS-Stars, một trong các chuẩn xếp hạng hàng đầu dành cho các trường đại học trên thế giới.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 tscdhntt">
                        <div class="card mb-2">
                            <div class="card-body">
                                <h4 class="card-title"><a href="#">Đạt chuẩn chất lượng quốc gia</a></h4>
                                <p class="card-text">Là trường đại học ngoài công lập đầu tiên tại TP.HCM được kiểm định đạt chất lượng theo bộ tiêu chí quốc gia do Bộ GD&ĐT ban hành.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 tscdhntt">
                        <div class="card mb-2">
                            <div class="card-body">
                                <h4 class="card-title"><a href="#">Đại học hạnh phúc</a></h4>
                                <p class="card-text">Đại học Nguyễn Tất Thành là ngôi trường tri thức và hạnh phúc dành cho sinh viên với 5 giá trị nổi bật</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.First slide-->

            <!--Second slide-->
            <div class="carousel-item">

                <div class="row">
                    <div class="col-md-4 tscdhntt">
                        <div class="card mb-2">
                            <div class="card-body">
                                <h4 class="card-title"><a href="#">Chuẩn 3 sao QS-Stars (Anh Quốc)</a></h4>
                                <p class="card-text">Xếp hạng quốc tế 3 sao theo chuẩn QS-Stars, một trong các chuẩn xếp hạng hàng đầu dành cho các trường đại học trên thế giới.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 tscdhntt">
                        <div class="card mb-2">
                            <div class="card-body">
                                <h4 class="card-title"><a href="#">Top 10 thương hiệu nổi tiếng</a></h4>
                                <p class="card-text">Trong những năm qua, Trường ĐH Nguyễn Tất Thành đã không ngừng đổi mới công tác quản trị đại học, nâng cao chất lượng đào tạo.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 tscdhntt">
                        <div class="card mb-2">
                            <div class="card-body">
                                <h4 class="card-title"><a href="#">95% sinh viên tốt nghiệp có việc làm</a></h4>
                                <p class="card-text">Định vị là trường ứng dụng và thực hành hướng tới mục tiêu đáp ứng nhu cầu giáo dục đại học đại chúng, trí thức hóa nguồn nhân lực, tạo môi trường học tập tích cực</p>
                            </div>
                        </div>
                    </div>

                    </div>
                    </div>
            </div>
            <!--/.Second slide-->

        </div>
        <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->
<br>
</div>

<!-- hết  -->

<!-- start hợp tác -->
<div class="section d-md-flex border-top pt-4">
    <div class="col-lg-8">
        <div class="row">
            <article class="col-sm-6 post-home">
                <h2 class="heading-2" style="font-size: 20px;"><a href="#" style="color: #101010;">Hợp tác quốc tế</a></h2>
                    <a class="thumbnail large" href="#">
                        <img src="assets/img/hoptacquocte.jpg" alt="" width="100%">
                    </a>
                    <a href="#" class="title title-hoptac">Sinh viên Hàn Quốc tham gia học tập Tiếng Việt ngắn hạn tại ĐH Nguyễn Tất Thành</a>
                    <div class="content content-hoptac">
                        <p>NTTU – Sáng ngày 07/10/2019, tại cơ sở quận 7, Trường ĐH Nguyễn Tất Thành đã tổ chức thành công chương trình Khai giảng khóa học Tiếng Việt ĐH Kyungsung (Hàn Quốc)</p>
                    </div>
                <ul class="list-unstyled">
                    <li><a class="c-blue-a5 font-weight-bold" href="#"><i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a></li>
                </ul>
            </article>
            <article class="col-sm-6 post-home">
                <h2 class="heading-2" style="font-size: 20px;"><a href="#" style="color: #101010;">Môi trường học tập</a></h2>
                <a class="thumbnail large" href="#">
                    <img src="assets/img/moitruonghoctap.jpg" alt="" width="100%">
                </a>
                <a href="#" class="title title-hoptac">Tìm hiểu về các câu lạc bộ tại Trường ĐH Nguyễn Tất Thành</a>
                <div class="content content-hoptac">
                    <p>NTTU - Những năm gần đây, bên cạnh việc nâng cao chất lượng đào tạo, Trường ĐH Nguyễn Tất Thành không ngừng phát triển mô hình câu lạc bộ sinh viên nhằm tạo môi trường học tập và vui chơi tốt nhất cho người học.</p>
                </div>
                <ul class="list-unstyled">
                    <li><a class="c-blue-a5 font-weight-bold" href="#"><i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a></li>
                </ul>
            </article>
        </div>
    </div>
    <div class="col-lg-4">
        <h2 class="heading-2" style="font-size: 20px;"><a href="#" style="color: #101010;">Sự kiện nổi bật</a></h2>
            <ul class="list-unstyled">
                    <li class="media event">
                        <div class="d-flex align-items-center mr-3 thumb c-white"  id="thoigiansukien">
                            <span class="inner text-center w-100">
                                Oct<br>
                                <b>19</b>
                            </span>
                        </div>
                        <div class="media-body">
                            <h5 class="title mt-0"><a href="#">Chương trình Chào mừng năm học mới - Nhận chứng nhận kiểm định chất lượng chương trình đào tạo Ngành Quản trị khách sạn</a></h5>
                            <ul class="breadcrumb mb-0 bgm-white">
                                <li class="breadcrumb-item col-xs-auto time">
                                    <i class="fa fa-clock-o mr-2" aria-hidden="true"></i>07:00
                                </li>
                                <li class="breadcrumb-item col-xs-auto">Hội trường lầu 9, cơ sở An Phú Đông, 331 Quốc lộ 1A, Phường An Phú Đông, Quận 12</li>
                            </ul>
                        </div>
                    </li>
                    <li class="media event">
                        <div class="d-flex align-items-center mr-3 thumb c-white"  id="thoigiansukien">
                            <span class="inner text-center w-100">
                                Oct<br>
                                <b>10</b>
                            </span>
                        </div>
                        <div class="media-body">
                            <h5 class="title mt-0"><a href="#">Ngày Doanh nhân Việt Nam và Đại hội CLB Doanh nghiệp Trường Đại học Nguyễn Tất Thành</a></h5>
                            <ul class="breadcrumb mb-0 bgm-white">
                                <li class="breadcrumb-item col-xs-auto time">
                                    <i class="fa fa-clock-o mr-2" aria-hidden="true"></i>07:30
                                </li>
                                <li class="breadcrumb-item col-xs-auto">Hội trường A.801, 300A Nguyễn Tất Thành, phường 13, quận 4, TP. HCM</li>
                            </ul>
                        </div>
                    </li>
                    <li class="media event">
                        <div class="d-flex align-items-center mr-3 thumb c-white"  id="thoigiansukien">
                            <span class="inner text-center w-100">
                                Oct<br>
                                <b>05</b>
                            </span>
                        </div>
                        <div class="media-body">
                            <h5 class="title mt-0"><a href="#">Lễ tốt nghiệp cho Sinh viên bậc Đại học liên thông từ Trung cấp khóa 2016; bậc Cao đẳng liên thông từ Trung cấp khóa 2017</a></h5>
                            <ul class="breadcrumb mb-0 bgm-white">
                                <li class="breadcrumb-item col-xs-auto time">
                                    <i class="fa fa-clock-o mr-2" aria-hidden="true"></i>07:30
                                </li>
                                <li class="breadcrumb-item col-xs-auto">Hội trường A.801, 300A Nguyễn Tất Thành, phường 13, quận 4, TP. HCM</li>
                            </ul>
                        </div>
                    </li>
                 </ul>
            <ul class="list-unstyled">
                <li>
                    <a class="c-blue-a5 font-weight-bold" href="#">
                    <i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a>
                </li>
            </ul>
    </div>
</div>
<!-- -------- -->

<!-- sub slider thành viên -->
<div class="container my-4">

    <h2 style="font-size: 20px;"><a href="" id="a-thanhvien">Tự hào là thành viên của</a></h2>
    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

        <!--Controls-->
        <div class="controls-top">
            <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
            <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
        </div>
        <!--/.Controls-->

        <!--Indicators-->
        <!-- <ol class="carousel-indicators">
            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
            <li data-target="#multi-item-example" data-slide-to="1"></li>
        </ol> -->
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">

                <div class="row">
                    <div class="col-md-2">
                    <div class="card mb-1">
                        <img class="card-img-top" src="assets/img/ya1.png" alt="Card image cap">
                    </div>
                    </div>

                    <div class="col-md-2 clearfix d-none d-md-block">
                    <div class="card mb-1">
                    <img class="card-img-top" src="assets/img/ya2.png" alt="Card image cap">
                    </div>
                    </div>

                    <div class="col-md-2 clearfix d-none d-md-block">
                    <div class="card mb-1">
                        <img class="card-img-top" src="assets/img/ya3.png" alt="Card image cap">
                    </div>
                    </div>
                    <div class="col-md-2">
                    <div class="card mb-1">
                        <img class="card-img-top" src="assets/img/ya4.png" alt="Card image cap">
                    </div>
                    </div>

                    <div class="col-md-2 clearfix d-none d-md-block">
                    <div class="card mb-1">
                    <img class="card-img-top" src="assets/img/ya5.png" alt="Card image cap">
                    </div>
                    </div>

                    <div class="col-md-2 clearfix d-none d-md-block">
                    <div class="card mb-1">
                        <img class="card-img-top" src="assets/img/ya6.png" alt="Card image cap">
                    </div>
                    </div>
                </div>

            </div>
            <!--/.First slide-->

            <!--Second slide-->
            <div class="carousel-item">

                <div class="row">
                    <div class="col-md-2">
                        <div class="card mb-1">
                        <img class="card-img-top" src="assets/img/ya7.png" alt="Card image cap">
                        </div>
                    </div>

                    <div class="col-md-2 clearfix d-none d-md-block">
                        <div class="card mb-1">
                        <img class="card-img-top" src="assets/img/ya8.png" alt="Card image cap">
                        </div>
                    </div>

                    <div class="col-md-2 clearfix d-none d-md-block">
                        <div class="card mb-1">
                        <img class="card-img-top" src="assets/img/ya9.png" alt="Card image cap">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card mb-1">
                        <img class="card-img-top" src="assets/img/ya10.png" alt="Card image cap">
                        </div>
                    </div>

                    <div class="col-md-2 clearfix d-none d-md-block">
                        <div class="card mb-1">
                        <img class="card-img-top" src="assets/img/ya11.png" alt="Card image cap">
                        </div>
                    </div>

                    <div class="col-md-2 clearfix d-none d-md-block">
                        <div class="card mb-1">
                        <img class="card-img-top" src="assets/img/ya12.png" alt="Card image cap">
                        </div>

                    </div>
                    </div>
            </div>
            <!--/.Second slide-->

        </div>
        <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->

</div>
</div>
<!-- ----------- -->
<?php
    include 'Footer.php';
?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>
</html>