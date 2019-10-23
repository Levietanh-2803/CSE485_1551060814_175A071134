<?php
	session_start();
	include("connect.php");
    if(isset($_COOKIE['dangnhap'])){
        $sql="select * from tbl_user where username='".$_COOKIE['dangnhap']."'";
        $kq=mysqli_query($con,$sql);
        $ro=mysqli_fetch_array($kq);
        if ($ro['quyendn']==0){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit home page</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<script src="assets/js/jquery-1.10.2.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.form.js"></script>
</head>
<body>
<div class="container">
	<header>
		<?php
			include "Header-admin.php";
		?>
	</header>
	<hr>
		<div class="row">
		    <div class="col-sm-2">
		      <ul class="nav flex-column">
				<li><a href="QuanLy.php">Quản lý tài khoản</a></li>
		        <li><a href="Edit-slider.php">Thêm slider</a></li>
		        <li><a href="Edit-tintuc.php">Thêm tin tức</a></li>
		        <li><a href="Logout.php">Đăng xuất</a></li>
		      </ul>
		  	</div>
		  	<div class="col-sm-8">
		  		<h2 class="text-center">Trang quản trị</h2>
		  	</div>
		  	<div class="col-sm-2"></div>
	  	</div>

	 <footer>
		<?php
			include "Footer-admin.php";
		?>
	</footer> 
</div>

</body>
</html>
<?php
	}
}else{ 
	echo "<script language='javascript' type='text/javascript' >";
	echo "alert('Bạn chưa đăng nhập quay lại đăng nhập!!!');";    
	echo "</script>";
	header("location:./Index.php");
}
?>