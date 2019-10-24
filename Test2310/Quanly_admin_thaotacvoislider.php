<?php
include 'connect.php';
if (isset($_GET['key'])&&($_GET['key']!=''))
{
	if ($_GET['key']=='xoa')
	{
		$sql="DELETE FROM tbl_slide WHERE id=$_GET['ID']";
	}
}

if (mysqli_query($con,$sql))
	{
		header('location:quanlyslider.php');
	}
else echo "Lỗi khi thực hiện";  
?>