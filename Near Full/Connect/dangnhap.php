<?php
	session_start();
	session_destroy();
	session_start();
?>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="css/Style.css">
	<form name="form1" method="POST" style="width:400px;height:auto; margin:100px auto 0 auto;background-color:#E9E9E9;padding:10px;box-shadow:5px 5px 5px 5px #D8D8D8;border-radius:5px">
		<div style="font-size:20px;margin-top:20px;text-align:center;font-weight:bold">Form Đăng Nhập</div>
		<div style="font-weight:bold;margin-top:20px;">Tài khoản</div>
		<div><input type="text" name="tdn" placeholder="Tài khoản" class="form-control"></div>
		<div style="font-weight:bold;margin-top:10px">Mật khẩu</div>
		<div><input type="password" name="mk" placeholder="Mật khẩu" class="form-control"></div>
		<div style="margin:10px"><input type="checkbox" name="ck_nhomk" text="Nhớ mật khẩu"/>Nhớ mật khẩu<span style="float:right"><a href="quenmk.php" title="Nhấn vào để lấy lại mật khẩu">Quên mật khẩu?</a></span></div>
		<div style="text-align:center;margin-top:20px"><button type="submit" name="dangnhap" class="buttonsuccess">Đăng nhập</button>
		<input type="reset" name="btn_huy" value="Hủy" readonly="readonly" class="buttonreset"/>
		<button type="submit" name="btn_backhome" class="buttondanger"><a href="truyen.php" style="text-decoration:none;color:white" >Về trang chủ</a></button></div>
		<div style="margin:30px;text-align:center">Bạn chưa có tài khoản! Hãy <a href="taotk.php" style="text-decoration:none" >Tạo tài khoản mới</a></div>
	
	<?php
	include 'connect.php';
	if(isset($_POST['dangnhap'])){
		if (empty($_POST['tdn'])){
			echo 'Bạn chưa nhập tên đăng nhập';
		}
		if (empty($_POST['mk'])){
			echo 'Bạn chưa nhập mật khẩu';
		}
		if((isset($_POST['tdn'])&&($_POST['tdn']!=null))&&(isset($_POST['mk'])&&($_POST['mk']!=null))){
			$tdn=$_POST['tdn'];
			$mk=substr(md5($_POST['mk']),10);
			$qr="select * from tbl_user where username='$tdn' and password='$mk'";
			$kq=mysqli_query($con,$qr);
			if(mysqli_fetch_array($kq)>0){
				//$_SESSION['dangnhap']=$tdn;
				//setcookie('dangnhap', $tdn, time() + 900);
				if ($_POST['ck_nhomk'] == 'on'){
					setcookie('dangnhap', $tdn, time() + 60*24*30);
				}
				else{
					setcookie('dangnhap', $tdn, time() + 900);
				}
				header("location:truyen.php");
				exit; 
			}else{
				echo "sai thông tin";
			}
		}
		unset($tdn,$mk,$qr,$kq,$con);
	}

	?>
	</form>