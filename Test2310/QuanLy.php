<!DOCTYPE html>
<html>
<head>
	<title>Trang quản lý</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<script src="assets/js/jquery-1.10.2.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.form.js"></script>
</head>
<body>
<div class="container">
<?php
	include"Header-admin.php";
	include"connect.php";
		if(isset($_COOKIE['dangnhap'])){
			$tdn=$_COOKIE['dangnhap'];
			$qr="select * from tbl_user where username='$tdn'";
			$kq=mysqli_query($con,$qr);
			$row_qdn=mysqli_fetch_array($kq);
			if($row_qdn['quyendn']==0){
?>
				<div class="text-center">QUẢN LÝ TÀI KHOẢN</div>
				<div>
				</div>
				<table style="margin-top:100px" width=100% border=1>
					<tr class="quanly_table1_tr">
						<td width=10>STT</td>
						<td width=120>Tên tài khoản</td>
						<td width=140>Quyền đăng nhập</td>
						<td width=150>Name</td>
						<td width=100>Geder</td>
						<td width=280>Email</td>
						<td width=300>Address</td>
						<td>Xóa</td>
						<td>Trao quyền</td>
					</tr>
					<?php
						
					//Phân trang
					$display = 8;
					if ((isset($_GET['page']))&&((int)$_GET['page'])){
						$page = $_GET['page'];
					}else{
						if((isset($_GET['tukhoa']))&&($_GET['tukhoa']!='')){
							$tukhoa=$_GET['tukhoa'];
							$query="SELECT COUNT(username) FROM tbl_user WHERE username like N'%$tukhoa%'";
						}else{
							$query="SELECT COUNT(username) FROM tbl_user";
						}
						$res=mysqli_query($con,$query) or die ('Could not connection to tbl_user'.mysqli_error($con));
						$row=mysqli_fetch_array($res,MYSQLI_NUM);
						$record=$row[0];
						if($record>$display){
							$page = ceil($record/$display);
						}else{
							$page=1;
							}
						}
					$start = (isset($_GET['start'])&&(int)$_GET['start']) ? $_GET['start']:0;
					
					$stt =0;
					if((isset($_GET['tukhoa']))&&($_GET['tukhoa']!='')){
						$tukhoa=$_GET['tukhoa'];
						$sql="SELECT * FROM tbl_user WHERE username!='$tdn' and username like N'%$tukhoa%' LIMIT $start,$display";
					}else{
						$sql="SELECT * FROM tbl_user WHERE username!='$tdn' LIMIT $start,$display";
					}
					$kq=mysqli_query($con,$sql);
					while($r=mysqli_fetch_array($kq)){
						$stt++;
						if ($stt%2==0){
							echo "<tr style='height:30px;background-color:#F0F0F0'><th style='text-align:center'>$stt</th>";
						}else echo "<tr style='height:30px'><th style='text-align:center'>$stt</th>";
						echo "<td>$r[username]</td>";
						if ($r['quyendn']==0){
							echo "<td>ADMIN</td>";
						}
						else echo "<td>USER</td>";
						echo "<td>$r[firstname] $r[lastname]</td>";
						if ($r['gender']==0){
							echo "<td>Nữ</td>";
						}
						else echo "<td>Nam</td>";
						echo "<td>$r[email]</td>";
						echo "<td>$r[address]</td>";
						$id=$r['ID'];
						if($row_qdn['quyendn']==0){
							echo "<td><a href='#' onclick='xoa()'>Xóa?</a></td>";?>
							<script type="text/javascript">
							function xoa(){
								var r=confirm("Bạn đang xóa tài khoản này!!")
								if(r==true){
									window.location="Quanly_admin_thaotacvoitaikhoan.php?id=<?php echo $id;?>&key=xoa";
								}
							}
							</script>
						<?php 
							echo "<td><a href='#' onclick='capquyen()'>Cấp quyền?</a></td></tr>";
						?>
							<script type="text/javascript">
							function capquyen(){
								var r=confirm("Bạn đang cấp quyền ADMIN cho tài khoản này!!")
								if(r==true){
									window.location="quanly_admin_thaotacvoitaikhoan.php?id=<?php echo $id;?>&key=capquyen";
								}
							}
							</script>
						<?php 
						}else{
							echo "<td colspan='1'>Bạn không có quyền</td></tr>";
						
						}
					}
					?>
					
				</table>
				<div style="margin:20px;margin-bottom:50px;text-align:center">
				<?php
					if($page>1){
						$next=$start+$display;
						$prev=$start-$display;
						$current=($start/$display)+1;
						if($current!=1){
							echo "<p style='float:left;margin-left:10px'><a href='quanly.php?start=$prev'>Previous</a></p>";
						}for($i=1;$i<=$page;$i++){
							echo "<p style='float:left;margin-left:10px'><a href='quanly.php?start=".($display*($i-1))."'>$i</a></p>";
						}
						if($current!=$page){
							echo "<p style='float:left;margin-left:10px'><a href='quanly.php?start=$next'>Next</a></p>";
						}
					}
				?>
				</div>
				<?php
			}
			
			else 
				header('location:./index.php');
		}
		else echo "Bạn Chưa Đăng Nhập<br><a href='Login.php'>Đăng Nhập</a>";
	
	include"footer-admin.php";
?>
</div>

</body>
</html>