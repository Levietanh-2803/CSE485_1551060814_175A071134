<?php
session_start();
session_destroy();
setcookie('dangnhap', '', time()- 60*24*30);
header('location: truyen.php');
?>