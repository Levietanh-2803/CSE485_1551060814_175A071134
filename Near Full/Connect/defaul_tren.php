<?php
	session_start();
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Nguyễn Thanh Hải">

    <title>Truyện tàu online</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<meta http-equiv="Pragma"content="no-cache">
	<meta http-equiv="no-cache">
	<meta http-equiv="Expires"content="-1">
	<meta http-equiv="Cache-Control" content="no-cache">
    <!--<script src="js/ie-emulation-modes-warning.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>-->
	<link href="css/Style.css" rel="stylesheet" />
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="truyen.php"><img width="150px" height="35px" src="img/Untitled1.png"/></a>
			</div>
			<div class="navbar-collapse collapse">
				<div class="navbar-form navbar-left">
				<ul class="nav navbar-nav">
					<li><a href="truyen.php"><i class="glyphicon glyphicon-home"></i> Trang chủ</a></li>
					<li class="W3-dropdown">
						<a href="#"><i class="glyphicon glyphicon-book"></i> Danh mục truyện <span class="caret"></span></a>
						<ul class="W3-dropdown-content">
						<?php
							include 'connect.php';
							$sql1="SELECT * FROM tbl_theloai";
							$kq1 = mysqli_query($con,$sql1);
							while ($row=mysqli_fetch_array($kq1)){
						?>
						<li><a href='timkiem.php?theloai=<?php echo "$row[ID]"; ?>'><?php echo $row['tentheloai'];?></a></li>
						<?php
							}
						?>
						<li><a href='timkiem.php?theloai='>All</a></li>
						</ul>
					</li>
				</ul>
				</div>
				<div class="navbar-form navbar-right">
					<?php
						include 'connect.php';
						if(isset($_COOKIE['dangnhap'])){
							$sql="select * from tbl_user where username='".$_COOKIE['dangnhap']."'";
							$kq2=mysqli_query($con,$sql);
							$ro=mysqli_fetch_array($kq2);
							if ($ro['quyendn']==0){
					?>
								<div class="navbar-collapse collapse" style="float:right">
									<ul class="nav navbar-nav">
										<li class="W3-dropdown">
											<a href="#"><font size="4px">Xin chào <?php echo $_COOKIE['dangnhap'];?></font><span class="caret"></span></a>
											<ul class="W3-dropdown-content">
												<li><a href="quanly.php?start=0">Quản lý tài khoản</a></li>
												<li><a href="#">Quản lý truyện</a></li>
												<li><a href="ThemTruyen.php">Thêm truyện</a></li>
												<li><a href="ThemChuong.php">Thêm chương truyện mới</a></li>
												<li><a href="logout.php">Đăng xuất</a></li>
											</ul>
										</li>
									</ul>
								</div>
								<?php
								}else if($ro['quyendn']==1){	
								?>
									<div class="navbar-collapse collapse" style="float:right">
										<ul class="nav navbar-nav">
											<li class="W3-dropdown">
												<a href="#"><font size="4px">Xin chào <?php echo $_COOKIE['dangnhap'];?></font><span class="caret"></span></a>
												<ul class="W3-dropdown-menu">
													<li><a href="quanly.php?start=0">Quản lý tài khoản</a></li>
													<li><a href="#">Quản lý truyện</a></li>
													<li><a href="#">Quản lý tài khoản của bạn</a></li>
													<li><a href="#">Quản lý truyện của bạn</a></li>
													<li><a href="ThemTruyen.php">Thêm truyện</a></li>
													<li><a href="ThemChuong.php">Thêm chương truyện mới</a></li>
													<li><a href="logout.php">Đăng xuất</a></li>
												</ul>
											</li>
										</ul>
									</div>
					
								<?php
								}
								else{
									?>
									<div class="navbar-collapse collapse" style="float:right">
										<ul class="nav navbar-nav">
											<li class="W3-dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><font size="4px">Xin chào <?php echo $_COOKIE['dangnhap'];?></font><span class="caret"></span></a>
												<ul class="W3-dropdown-menu">
													<li><a href="#">Quản lý tài khoản của bạn</a></li>
													<li><a href="#">Quản lý truyện của bạn</a></li>
													<li><a href="ThemTruyen.php">Thêm truyện</a></li>
													<li><a href="ThemChuong.php">Thêm chương truyện mới</a></li>
													<li><a href="logout.php">Đăng xuất</a></li>
												</ul>
											</li>
										</ul>
									</div>
					
								<?php
								}
						}else{
							?>
							<div class="navbar-collapse collapse" style="float:right">
								<ul class="nav navbar-nav">
									<li class="W3-dropdown">
										<a href="#"><i class="glyphicon glyphicon-user"></i><span class="caret"></span></a>
										<ul class="W3-dropdown-menu">
											<li><a href="dangnhap.php">Đăng nhập</a></li>
											<li><a href="taotk.php">Đăng ký</a></li>
										</ul>
									</li>
								</ul>
							</div>
						<?php
						}
						?>
				<form method="GET" action="timkiem.php" style="float:right">
				<div>
					<input type="text" class="search" placeholder="Tìm tên truyện..." name="key"/>&nbsp;<button type="submit" name="tk" class="btn_search"><i class="glyphicon glyphicon-search"></i></button>
				</div>
				</form>
				</div>
			</div>
		</div>
    </div>