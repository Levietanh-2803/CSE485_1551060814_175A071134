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
				<div class="text-center">QUẢN LÝ SLIDER</div>
				
				<table style="margin-top:100px" width=100% border=1>
					<tr class="quanly_table1_tr">
						<td width=10>STT</td>
						<td width=300>Link Image</td>
						<td width=300>Alt</td>
						<td width=500>Mô tả</td>
						<td>Xóa</td>
					</tr>
					<?php
						
					//Phân trang
					$display = 8;
					if ((isset($_GET['page']))&&((int)$_GET['page'])){
						$page = $_GET['page'];
					}else{
						$query="SELECT COUNT(Alt) FROM tbl_slider";
						$res=mysqli_query($con,$query) or die ('Could not connection to tbl_slider'.mysqli_error($con));
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
					$sql="SELECT * FROM tbl_slide";
					$kqs=mysqli_query($con,$sql);
					while($r=mysqli_fetch_array($kqs)){
						$stt++;
						if ($stt%2==0){
							echo "<tr style='height:30px;background-color:#F0F0F0'><th style='text-align:center'>$stt</th>";
						}else echo "<tr style='height:30px'><th style='text-align:center'>$stt</th>";
						echo "<td>$r[link]</td>";
						echo "<td>$r[alt]</td>";
						echo "<td>$r[mota]</td>";
						
						$id=$r['ID'];
						if($row_qdn['quyendn']==0){
							echo "<td><a href='#' onclick='xoa()'>Del</a></td>";?>
							$sql2 = "DELETE FROM tbl_slide WHERE id";
							$kq2 = mysqli_query($con,$sql2);
						
							<script type="text/javascript">
							function xoa(){
								var r=confirm("Xóa slide <?php echo $r['alt'];?>!")
								if(r==true){
									window.location="Quanly_admin_thaotacvoisider.php?id=<?php echo $id;?>&key=xoa";
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
							echo "<p style='float:left;margin-left:10px'><a href='quanlyslider.php?start=$prev'>Previous</a></p>";
						}for($i=1;$i<=$page;$i++){
							echo "<p style='float:left;margin-left:10px'><a href='quanlyslider.php?start=".($display*($i-1))."'>$i</a></p>";
						}
						if($current!=$page){
							echo "<p style='float:left;margin-left:10px'><a href='quanlyslider.php?start=$next'>Next</a></p>";
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