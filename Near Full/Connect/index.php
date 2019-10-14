<?php 
include 'defaul_tren.php';
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
					<li><hr></li>
				</ul>
				<ul class="menuphai nav nav-sidebar">
					<?php
						include 'connect.php';
						$sql1="SELECT * FROM tbl_theloai";
						$kq1 = mysqli_query($con,$sql1);
						while ($row1=mysqli_fetch_array($kq1)){
					?>			
					<li><a href='timkiem.php?theloai=<?php echo "$row1[ID]"; ?>'><?php echo $row1['tentheloai'];?></a></li>
					<?php
							}					
					?>
				</ul>
			</div>
			<div class="col-sm-9">
				<?php
					include 'connect.php';
					$sql2="SELECT * FROM tbl_danhmuctruyen";
					$kq2 = mysqli_query($con,$sql2);
					while ($row2 = mysqli_fetch_array($kq2)){
					$sql3="SELECT COUNT(chuong) as 'sochuong' FROM tbl_danhmuctruyen INNER JOIN tbl_noidungtruyen ON tbl_danhmuctruyen.ID_truyen = tbl_noidungtruyen.ID_truyen WHERE tbl_danhmuctruyen.ID_truyen= {$row2['ID_truyen']}";
					$kq3 = mysqli_query($con,$sql3);
					$row3 = mysqli_fetch_array($kq3);
				?>
						<div class="col-sm-2 khungtruyen"><a href='noidungtruyen.php?id=<?php echo "$row2[ID_truyen]";?>&start=0'><p><img src="<?php echo $row2['img']; ?>" width="160px" height="210px"/><span style="color:black;"><?php echo $row2['tentruyen']; ?></span></p>
						<p><i class="glyphicon glyphicon-star-empty"></i><span class="chuong">Chương <?php echo $row3['sochuong'];  ?></span></p></a></div>
			
				<?php
					}
				?>
			</div>
		</div>
<?php include 'defaul_duoi.php'; ?>
