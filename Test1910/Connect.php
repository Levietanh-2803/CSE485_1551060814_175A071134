
<?php

$con=mysqli_connect("localhost","root","", "db_book");
if (mysqli_connect_errno($con)==1049){
	$con=mysqli_connect("localhost","root","", "");
	$sql="CREATE DATABASE db_book";
	if (mysqli_query($con,$sql)){
		echo "CSDL db_book đã được tạo<br>";
		$con=mysqli_connect("localhost","root","", "db_book");
		include "DataBase.php";
	}else{
		echo "Lỗi khi tạo CSDL:".mysqli_error($con)."<br>";
	}
	unset($sql);
}
else if (mysqli_connect_errno($con)!=0&&mysqli_connect_errno($con)!=1049){
echo "Lỗi khi kết nối tới CSDL Mã lỗi là".mysqli_connect_errno($con)."<br>";
}
mysqli_set_charset($con,"UTF8");

?>