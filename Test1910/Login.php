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
    <div class="login-dark" style="height: 100vh;">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="dangnhap" >Log In</button></div>
            <div class="form-row">
                <div class="col">
                    <a class="forgot" href="#" style="color: rgb(159,181,203);">
                        <i class="fas fa-lock" style="font-size: 14px;"></i>
                        Forgot your email or password?
                    </a>
                </div>
                <div class="col">
                    <a class="forgot" href="NewAccount.php" style="color: rgb(159,181,203);">
                    <i class="fa fa-hand-o-right" style="font-size: 16px;"></i>
                    Click to create new account
                    </a>
                </div>
            </div>
			<?php
				include 'Connect.php';
				if(isset($_POST['dangnhap'])){
					if (empty($_POST['email'])){
						echo 'Bạn chưa nhập tên đăng nhập';
					}
					if (empty($_POST['password'])){
						echo 'Bạn chưa nhập mật khẩu';
					}
					if((isset($_POST['email'])&&($_POST['email']!=null))&&(isset($_POST['password'])&&($_POST['password']!=null))){
						$email=$_POST['email'];
						$password=substr(md5($_POST['password']),10);
						$qr="select * from tbl_user where username='$email' and password='$password'";
						$kq=mysqli_query($con,$qr);
						if(mysqli_fetch_array($kq)>0){
							//$_SESSION['dangnhap']=$email;
							//setcookie('dangnhap', $email, time() + 900);
							if ($_POST['ck_nhopassword'] == 'on'){
								setcookie('dangnhap', $email, time() + 60*24*30);
							}
							else{
								setcookie('dangnhap', $email, time() + 900);
							}
							header("location:truyen.php");
							exit; 
						}else{
							echo "sai thông tin";
						}
					}
					unset($email,$password,$qr,$kq,$con);
				}

				?>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

