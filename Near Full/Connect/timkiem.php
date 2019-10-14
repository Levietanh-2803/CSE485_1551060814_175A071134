<html>
	<head>
		<title></title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/ie-emulation-modes-warning.js"></script>
		<script src="js/ie10-viewport-bug-workaround.js"></script>
		<style type="text/css">
			body{
			margin:70px 20px 20px 70px;
			}
	</style>
	</head>
	
	<body>
		
	<?php
		include 'defaul_tren.php';
		include 'connect.php';
	?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar">
			<ul class="nav nav-sidebar">
				<li><a href="truyen.php">Trang chủ</a></li>
				<li><a href="#">Truyện mới nhất</a></li>
				<li><a href="#">Truyện hot nhất</a></li>
				<li><a href="#">Truyện hay nhất</a></li>
				<li><a href="#">Truyện đề cử</a></li>
				<li>----------------------------------</li>
			</ul>
			<ul class="menuphai nav nav-sidebar">
				<?php
					$sql1="SELECT * FROM tbl_theloai";
					$kq1 = mysqli_query($con,$sql1);
					while ($row=mysqli_fetch_array($kq1)){
				?>			
				<li><a href='timkiem.php?theloai=<?php echo "$row[ID]"; ?>'><?php echo $row['tentheloai'];?></a></li>
				<?php
						}
				?>
			</ul>
        </div>
		<div class="col-sm-9">
			<h3>Kết quả tìm kiếm của: <?php 
				if (isset($_GET['key']) && ($_GET['key']!=null)){
					echo $_GET['key'];
				}
			?></h3> 
				<?php 
					if (isset($_GET['key'])){
						$key = $_GET['key'];
						$sql2="SELECT ID_truyen,tentruyen FROM tbl_danhmuctruyen WHERE tentruyen LIKE N'%$key%'"; 
						$kq2 = mysqli_query($con,$sql2);
						$dem =0;
						while ($row2=mysqli_fetch_array($kq2)){
							$dem++;
							?>
							<p><a href='noidungtruyen.php?id=<?php echo "$row2[ID_truyen]";?>&start=0'><?php echo $dem;?>.   <?php echo $row2['tentruyen'];?></a></p>
							<?php
						}
					}
					if (isset($_GET['theloai'])){
						$theloai=$_GET['theloai'];
						if ($theloai!=0){
							$sql3="SELECT ID_truyen,tentruyen FROM tbl_danhmuctruyen WHERE loai='$theloai'";
						}
						else{
							$sql3="SELECT ID_truyen,tentruyen FROM tbl_danhmuctruyen";
						}
						$kq3 = mysqli_query($con,$sql3);
						$dem =0;
						while ($row3=mysqli_fetch_array($kq3)){
							$dem++;
							?>
								<p><a href='noidungtruyen.php?id=<?php echo "$row3[ID_truyen]";?>&start=0'><?php echo $dem;?>.   <?php echo $row3['tentruyen'];?></a></p>
							<?php
						}
					}
				?>
		</div>
		<?php include 'defaul_duoi.php'; ?>