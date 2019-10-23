<?php
include 'connect.php';
if (isset($_GET['key'])&&($_GET['key']!=''))
{
	if ($_GET['key']=='xoa')
	{
		$sql="DELETE FROM tbl_user WHERE id=$_GET[id]";
	}
	if ($_GET['key']=='capquyen')
	{
		$sql="UPDATE tbl_user SET quyendn=0  WHERE id=$_GET[id]";
	}
}

if (mysqli_query($con,$sql))
	{
		header('location:quanly.php');
	}
else echo "Lỗi khi thực hiện";  
?>