<?php
	if(isset($_COOKIE['dangnhap'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit home page</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<script src="assets/js/jquery-1.10.2.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.form.js"></script>
</head>
<body>
	<div class="container">
<?php
include "header-admin.php";
?>
	<br>
	<div class="panel panel-default">
		<div class="panel-body">
			<h2 style="text-align:center">Trang thêm slider</h2>
			<a href="QuanLySlider.php" style="float: right;">Quản lý Slider</a>
			<form id="uploadImage" action="Upload.php" method="post">
				<div class="form-group">
					<label>File Image</label>
					<input type="file" name="uploadFile" id="uploadFile" accept=".jpg, .png"  />
				</div>
				<div class="form-group">
					<input type="submit" id="uploadSubmit" value="Up image" class="btn btn-info" style="text-align:center; width:100px; height:35px;">
				</div>
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<div id="targetLayer" style="display:none;"></div>
			</form>
				<div id="loader-icon" style="display:none;"><img src="upload/loader.gif" /></div>
			<form id="update" action="Edit-slider.php" method="post">
				<input type="text " name="uimage" id="uimage"/>
				<div>
					<b>Alt</b><span class="batbuoc">*</span>
					<input type="text" name="alt" placeholder="Alt image" size=50px>
				</div>
				<p>
					<b>Text:</b>
					<span class="batbuoc">*</span>
					<textarea style="width:100%; height:100px;" name="mota"></textarea>
				</p>
				<p>
					<input type="submit" name="submit_all" value="Update" class="btn btn-info" style="text-align:center; width:100px; height:35px">
				</p>
			</form>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#uploadImage').submit(function(event){
				var target = $("#targetLayer").html();
				if($('#uploadFile').val())
				{
					event.preventDefault();
					$('#loader-icon').show();
					$('#targetLayer').hide();
					$(this).ajaxSubmit({
						target: '#targetLayer',
						beforeSubmit:function(){
							$('.progress-bar').width('50%');
						},
						uploadProgress: function(event, position, total, percentageComplete)
						{
							$('.progress-bar').animate({
								width: percentageComplete + '%'
							}, {
								duration: 1000
							});
						},
						success:function(){
							$('#loader-icon').hide();
							target = target+$('#targetLayer').html();
							$('#targetLayer').html(target);
							$('#uimage').val("/Test2310/"+ $(target).attr("src"))
							$('#targetLayer').show();
						},
						resetForm: true
					});
				}
				return false;
			});
		});
	</script>

<?php
include "Connect.php";
	if(isset($_POST['submit_all'])){
		$i=0;
		$_error[$i]='';
		if(isset($_POST['uimage'])&&$_POST['uimage']!=null){
			$uimage=$_POST['uimage'];
		}else{
			$i++;
			$_error[$i] = "Bạn chưa chọn ảnh";
		}
		if(isset($_POST['alt'])&&$_POST['alt']!=null){
			$alt=$_POST['alt'];
		}else{
			$i++;
			$_error[$i] = "Bạn chưa nhập tiêu đề ảnh";
		}
		if(isset($_POST['mota'])&&$_POST['mota']!=null){
			$mota=$_POST['mota'];
		}else{
			$i++;
			$_error[$i] = "Bạn chưa nhập thông tin ảnh";
		}
		if ($_POST['uimage']!=null&&$_POST['alt']!=null&&$_POST['mota']!=null&&$_COOKIE['dangnhap']!=null){
			$sql="INSERT INTO tbl_slide (link, mota, alt) VALUES (N'$uimage', N'$mota', N'$alt')";
			if (mysqli_query($con,$sql)){
				echo "<script language='javascript' type='text/javascript' >";
				echo "alert('Thêm slider thành công');";    
				echo "</script>";
				header('Location: Edit-slider.php');
			}else{
				$i++;
				$_error[$i] = "Lỗi khi INSERT $alt:".mysqli_error($con)."<br>";
				header('Location: Edit-slider.php');
			}
		}
		if($i!=0){
			echo "<script language='javascript' type='text/javascript' >";
			echo "alert('";
			foreach ($_error as $loi){
				echo $loi.'\n';
			}
			echo"');";    
			echo "</script>";
		}
	}
?>
<?php
 include "footer-admin.php";
}
else{ 
	echo "<script language='javascript' type='text/javascript' >";
	echo "alert('Bạn chưa đăng nhập quay lại đăng nhập!!!');";    
	echo "</script>";
	header("location:./index.php");
}
?>
	</div>
</body>
</html>