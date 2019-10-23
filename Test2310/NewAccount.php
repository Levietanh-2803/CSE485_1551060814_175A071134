<?php
	session_start();
?>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <div class="login-dark"  style="height: 100vh;">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="tdn" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="mk" placeholder="Password"></div>
            <div class="form-group"><input class="form-control" type="password" name="remk" placeholder="Password (repeat)"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="dangky">Sign in</button></div>
            <a class="forgot" href="Login.php" style="color: rgb(159,181,203);"><i class="fas fa-unlock" style="font-size: 14px;"></i>You already have an account? Login here.</a>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
<?php
	include 'Connect.php';
	if(isset($_POST["dangky"])){
		if((isset($_POST['tdn'])&&$_POST['tdn']!='')&&(isset($_POST['mk'])&&$_POST['mk']!='')&&(isset($_POST['remk'])&&$_POST['remk']!='')){
			if ($_POST['mk']==$_POST['remk']){
				$tdn=$_POST['tdn'];
				$mk=substr(md5($_POST['mk']),10);
				$qr="select username from tbl_user where username='$tdn'";
				$kq=mysqli_query($con,$qr);
				if(mysqli_fetch_array($kq)==0){
					$sql= "INSERT INTO tbl_user(username,password,quyendn) VALUES ('$tdn','$mk','1')";
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