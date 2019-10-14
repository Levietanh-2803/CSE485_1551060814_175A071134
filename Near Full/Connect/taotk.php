<?php
	session_start();
?>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="css/Style.css">
	<form method="POST" style="width:400px;height:auto; margin:100px auto 0 auto;background-color:#E9E9E9;padding:10px;box-shadow:5px 5px 5px 5px #D8D8D8;border-radius:5px">
	<div style="font-size:20px;margin-top:20px;text-align:center;font-weight:bold">Form Đăng Ký Tài Khoản Mới</div>
	<div style="font-weight:bold;margin-top:20px;">Tài khoản</div>
	<div><input type="text" name="tdn" placeholder="Tài khoản" class="form-control"></div>
	<div style="font-weight:bold;margin-top:10px">Mật khẩu</div>
	<div><input type="password" name="mk" placeholder="Mật khẩu" class="form-control"></div>
	<div style="font-weight:bold;margin-top:10px">Nhập lại mật khẩu</div>
	<div><input type="password" name="remk" placeholder="Nhập lại mật khẩu" class="form-control"></div>
	<div style="text-align:center;margin-top:20px"><input type="submit" name="dangky" value="Đăng Ký" style="width:100px;height:35px;border-radius:7px;;background-color:#FFBC3D; font-weight:bold; margin-right:30px"/>
	<input type="reset" name="btn_huy" value="Hủy" readonly="readonly" style="width:100px;height:35px;border-radius:7px; background-color:#FF3D47; font-weight:bold"/></div>
	<div style="margin:30px;text-align:center"><a href="dangnhap.php">Quay lại Đăng nhập</a></div>
	</form>
	<?php
	include 'connect.php';
	if(isset($_POST["dangky"])){
		if((isset($_POST['tdn'])&&$_POST['tdn']!='')&&(isset($_POST['mk'])&&$_POST['mk']!='')&&(isset($_POST['remk'])&&$_POST['remk']!='')){
			if ($_POST['mk']==$_POST['remk']){
				$tdn=$_POST['tdn'];
				$mk=substr(md5($_POST['mk']),10);
				$qr="select username from tbl_user where username='$tdn'";
				$kq=mysqli_query($con,$qr);
				if(mysqli_fetch_array($kq)==0){
					$sql= "INSERT INTO tbl_user(username,password,quyendn) VALUES ('$tdn','$mk','2')";
					if (mysqli_query($con, $sql)) {
						echo "Thêm tài khoản thành công";
					}else {
							echo "Lỗi: " . $sql . "<br>" . mysqli_error($con);
						}
					}
				else{
					echo "Đã có tài khoản này";
				}
				}
			else{
				echo "2 mật khẩu không trùng nhau";
			}
		}
		else{
			echo "Bạn chưa nhập tài khoản mật khẩu";
		}
	}
	?>
	