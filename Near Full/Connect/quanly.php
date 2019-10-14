<?php
	include"defaul_tren.php";
	include"connect.php";
		if(isset($_COOKIE['dangnhap'])){
			$tdn=$_COOKIE['dangnhap'];
			$qr="select * from tbl_user where username='$tdn'";
			$kq=mysqli_query($con,$qr);
			$row_qdn=mysqli_fetch_array($kq);
			if($row_qdn['quyendn']==0||$row_qdn['quyendn']==1){
				?>
				<div class="quanly_tittle">QUẢN LÝ TÀI KHOẢN TRONG WEB</div>
				<div>
				<form method="GET" action="quanly.php" style="float:right">
					<p style="float:right"><button type="submit">Tìm kiếm</button></p>
					<p style="float:right"><input type="text" name="tukhoa" placeholder="Nhập tên tài khoản cần tìm" size=30px></p>
				</form>
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
					$display = 10;
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
							echo "<td>SuperADMIN</td>";
						}
						else if  ($r['quyendn']==1){
							echo "<td>ADMIN</td>";
						}
						else echo "<td>TK thường</td>";
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
								var r=confirm("Bạn chắc xóa tài khoản <?php echo $r['username'];?> chứ!!")
								if(r==true){
									window.location="quanly_admin_thaotacvoitaikhoan.php?id=<?php echo $id;?>&key=xoa";
								}
							}
							</script>
						<?php 
							echo "<td><a href='#' onclick='capquyen()'>Cấp quyền?</a></td></tr>";
						?>
							<script type="text/javascript">
							function capquyen(){
								var r=confirm("Bạn chắc cấp quyền ADMIN cho tài khoản <?php echo $r['username'];?> chứ!!")
								if(r==true){
									window.location="quanly_admin_thaotacvoitaikhoan.php?id=<?php echo $id;?>&key=capquyen";
								}
							}
							</script>
						<?php 
						}else{
							echo "<td colspan='2'>Bạn không có quyền</td></tr>";
						
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
				header('location:truyen.php');
		}
		else echo "Bạn Chưa Đăng Nhập<br><a href='dangnhap.php'>Đăng Nhập</a>";
	include"defaul_duoi.php";
?>