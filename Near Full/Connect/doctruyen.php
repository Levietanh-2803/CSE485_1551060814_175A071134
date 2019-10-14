<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Nguyễn Thanh Hải">

    <title>Truyện tàu online</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	<link href="css/Style.css" rel="stylesheet" />
	
</head>
<body id="maunen">
	<div class="navbar navbar-default navbar-fixed-top"role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="truyen.php"><img width="150px" height="35px" src="img/Untitled.png"/></a>
        </div>
        <div class="navbar-collapse collapse">
		<ul class="nav navbar-nav">
			<li><a href="truyen.php"><i class="glyphicon glyphicon-home"></i> Trang chủ</a></li>
			<li class="W3-dropdown">
				<a href="#"><i class="glyphicon glyphicon-book"></i> Danh mục truyện <span class="caret"></span></a>
				<ul class="W3-dropdown-content">
				<?php
					include 'connect.php';
					$sql1="SELECT * FROM tbl_theloai";
					$kq1 = mysqli_query($con,$sql1);
					while ($row=mysqli_fetch_array($kq1)){
				?>
				<li><a href='timkiem.php?theloai=<?php echo "$row[ID]"; ?>'><?php echo $row['tentheloai'];?></a></li>
				<?php
					}
				?>
				<li><a href='timkiem.php?theloai='>All</a></li>
				</ul>
			</li>
			<li class="W3-dropdown">
				<a href="#"><i class="glyphicon glyphicon-font"></i><span class="caret"></span></a>
				<ul class="W3-dropdown-content">
					<li><a href="#" onclick="document.getElementById('noidungtruyen').style.fontFamily = 'Arial'">Mặc định</a></li>
					<li>-----------------------</li>
					<li><a href="#" onclick="document.getElementById('noidungtruyen').style.fontFamily = 'Time New Roman'">Time New Roman</a></li>
					<li><a href="#" onclick="document.getElementById('noidungtruyen').style.fontFamily = 'Consolas'">Consolas</a></li>
					<li><a href="#" onclick="document.getElementById('noidungtruyen').style.fontFamily = 'Tahoma'">Tahoma</a></li>
				</ul>
			</li>
			<li class="W3-dropdown">
				<a href="#"><i class="glyphicon glyphicon-eye-open"></i><span class="caret"></span></a>
				<ul class="W3-dropdown-content">
					<li><a href="#" onclick="document.getElementById('noidungtruyen').style.color = 'black'">Mặc định</a></li>
					<li>-----------------------</li>
					<li><a href="#" onclick="document.getElementById('noidungtruyen').style.color = 'white'">White</a></li>
					<li><a href="#" onclick="document.getElementById('noidungtruyen').style.color = 'red'">Red</a></li>
					<li><a href="#" onclick="document.getElementById('noidungtruyen').style.color = 'blue'">Blue</a></li>
					<li><a href="#" onclick="document.getElementById('noidungtruyen').style.color = 'Green'">Green</a></li>
					<li><a href="#" onclick="document.getElementById('noidungtruyen').style.color = 'orange'">Orange</a></li>
				</ul>
			</li>
			<li class="W3-dropdown">
				<a href="#"><i class="glyphicon glyphicon-text-width"></i><span class="caret"></span></a>
				<ul class="W3-dropdown-content">
					<li><a href="#" onclick="document.getElementById('noidungtruyen').style.fontSize = '24px'">Mặc định</a></li>
					<li>-----------------------</li>
					<li><a href="#" onclick="document.getElementById('noidungtruyen').style.fontSize = '16px'">16</a></li>
					<li><a href="#" onclick="document.getElementById('noidungtruyen').style.fontSize = '16px'">18</a></li>
					<li><a href="#" onclick="document.getElementById('noidungtruyen').style.fontSize = '20px'">20</a></li>
					<li><a href="#" onclick="document.getElementById('noidungtruyen').style.fontSize = '24px'">24</a></li>
					<li><a href="#" onclick="document.getElementById('noidungtruyen').style.fontSize = '28px'">28</a></li>
					<li><a href="#" onclick="document.getElementById('noidungtruyen').style.fontSize = '32px'">32</a></li>
				</ul>
			</li>
			<li class="W3-dropdown">
				<a href="#"><i class="glyphicon glyphicon-phone"></i><span class="caret"></span></a>
				<ul class="W3-dropdown-content">
					<li><a href="#" onclick="document.getElementById('maunen').style.background = 'white'">Mặc định</a></li>
					<li>-----------------------</li>
					<li><a href="#" onclick="document.getElementById('maunen').style.background = 'red'">Red</a></li>
					<li><a href="#" onclick="document.getElementById('maunen').style.background = '#EDEDED'">Greyish</a></li>
					<li><a href="#" onclick="document.getElementById('maunen').style.background = 'orange'">Orange</a></li>
					<li><a href="#" onclick="document.getElementById('maunen').style.background = 'wheat'">Wheat</a></li>
					<li><a href="#" onclick="document.getElementById('maunen').style.background = 'grey'">Grey</a></li>
					<li><a href="#" onclick="document.getElementById('maunen').style.background = 'brown'">Brown</a></li>
					<li><a href="#" onclick="document.getElementById('maunen').style.background = 'black'">Black</a></li>
				</ul>
			</li>
		  
		</ul>
          <div class="navbar-form navbar-right">
			<div class="navbar-collapse collapse" style="float:right">
				<ul class="nav navbar-nav">
					<li class="W3-dropdown">
						<a href="#"><i class="glyphicon glyphicon-user"></i><span class="caret"></span></a>
						<ul class="W3-dropdown-menu">
							<li><a href="dangnhap.php">Đăng nhập</a></li>
							<li><a href="taotk.php">Đăng ký</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<form method="GET" action="timkiem.php" style="float:right">
			<div>
				<input type="text" class="search" placeholder="Tìm tên truyện..." name="key"/>
				<button type="submit" name="tk" class="btn_search"><i class="glyphicon glyphicon-search"></i></button>
			</div>
			</form>
          </div>
        </div>
      </div>
    </div>
	<div id="doctruyen">
		<form method="GET" style = "margin:70px 80px 100px 80px;">
			<?php
				include 'connect.php';
				$sql2 = "SELECT chuong,tenchuong,noidung FROM tbl_noidungtruyen WHERE ID_truyen=$_GET[id1] && chuong=$_GET[id2]";
				$kq2 = mysqli_query($con,$sql2);
				$row2 = mysqli_fetch_array($kq2);
			?>
			<h3 style="text-align:center; margin-top:100px"><p style="font-family:'Times New Roman'"><?php echo $row2['tenchuong']; ?></p><p class="glyphicon glyphicon-asterisk"></p></h3>
			<p id="noidungtruyen" style="font-size:24px;text-align:justify"><?php echo nl2br($row2['noidung']); ?></p>
			<?php
				$sql="SELECT count(chuong) FROM tbl_noidungtruyen WHERE ID_truyen=$_GET[id1]";
				$kq = mysqli_query($con,$sql);
				$row = mysqli_fetch_array($kq);
				$next=$_GET['id2'];
				if($next<$row[0]){
					$next = $_GET['id2']+1;
				}
				$pre=1;
				if ($pre>1){
				$pre = $_GET['id2']-1;
				}
				$id= $_GET['id1'];
				
			?>
			
			<ul class="pager">
			  <li><a href='doctruyen.php?id1=<?php echo $id;?>&id2=<?php echo $pre;?>'>&larr; Previous</a></li>
			  <li><a href='doctruyen.php?id1=<?php echo $id;?>&id2=<?php echo $next;?>'>Next &rarr;</a></li>
			</ul>
		</form>
	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
