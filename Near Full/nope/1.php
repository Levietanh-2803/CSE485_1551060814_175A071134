<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<!-- get and post -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $name = $_REQUEST['fname'];
    if(empty($name))
        {echo "not name";}
    else            
        {echo $name;}
}   
?>
<!--  -->

<!-- form biểu mẫu -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    Age: <input type="int" name="age">
    <input type="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $name = $_REQUEST['fname'];
    $age = $_REQUEST['age'];
    if(empty($name))
        {echo "not name";}
    else if(empty($age) || (int)$age == NULL)
            {echo "not age";}
            else
                {echo $name. "&nbsp: ". $age. "age.";}
}
?>
wellcome <?php echo $_POST['fname']. '&nbsp '. $_POST['age'];?>



<!-- php form -->
<form action="Form.php" method="post">
    <input type="submit" value="Next->">
</form>











<?php 
echo "<br><br><br><br>";
//khai báo
$t = 9;
echo("$t");
$t = "đi đu đưa";
 echo("$t");
 
// global and static
$x = 10;
$y = 9;
function mytest() {
    global $y, $x;
    $z = $x + $y;
    echo("<br>z= $z");
}
mytest();

function mytest1(){
    static $q = 1;
    echo "<br>$q";
    $q += $GLOBALS['x'] ;
}
mytest1();
mytest1();
mytest1();

// echo and print
echo "<br>$t $x $y  đu đưa";
echo ("<br>$t". " đi"); // trong () nổi chuỗi chỉ dùng dấu .
echo  "<br>", $x + $y;
print "<br>" . $t . " " . $x;

//kiểu dl
echo "<br>";
var_dump($t);
$w = ["a", "b", 'c'];
var_dump($w);

//object
class e{
    function e(){
        $this->ero = "kiss <3";
    }
}
 $r = new e();
 echo "<br>";
 var_dump($r);

 //string
echo "<br>";
echo strlen("$t". 'a ');// đến chuỗi
echo "<br>";
echo strrev("ssim 3<");// đảo chuỗi
echo "<br>";
echo strpos("$t", "đu");// tìm từ
echo "<br>";
echo str_replace("đưa", "đưa đi", $t);//thay thế

//ép kiểu
$u = "90493.545";
echo "<br>";
echo $i = (int)$u;

//hằng số   define(name, value, case-insensitive)
echo "<br>";
define("ip", "8088");
echo ip;
define("it", "8080", true); // nhận tên hằng viết hoa or thường
echo "<br>";
echo iT;
//hằng số mảng và (-hằng số global có thể sd trog hàm mà ko cần khai báo biến global----)
echo "<br>";
define("op",['a', 'b', 'c'], true);
echo OP[0];

//if...else     switch(case,default)    while(do...while)   for and foreach

//hàm
function dude(int $da, int $sa = 10){
    return $da + $sa;
}
echo "<br>". dude(5, "5 f");// có báo lỗi dòng 77 là do chuỗi khai báo vào có kí tự khác số
echo "<br>". dude(5) . '<br>';

//mảng
$arr = array('1', '2', '3', '4');
for($x = 0; $x < count($arr); $x++){
    echo $arr[$x];
    echo "<br>";
}
$arr = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
sort($arr);
foreach($arr as $x => $x_value){
    echo "name= ". $x.   ", age= ". $x_value;
    echo '<br>';
}
// sort() - mảng sắp xếp trong thứ tự tăng dần
// rsort() - mảng sắp xếp trong thứ tự giảm dần
// asort() - mảng loại kết hợp theo thứ tự tăng dần, theo giá trị
// ksort() - mảng loại kết hợp theo thứ tự tăng dần, theo chìa khóa
// arsort() - mảng loại kết hợp theo thứ tự giảm dần, theo giá trị
// krsort() - mảng loại kết hợp theo thứ tự giảm dần, theo chìa khóa

?>    
<!-- superglobals -->
<!-- $ GLOBALS
$ _SERVER
$ _REQUEST
$ _POST
$ _GET
$ _FILES
$ _ENV
$ _COOKIE
$ _SESSION -->
<a href="https://www.w3schools.com/php/php_superglobals.asp" title="superrrr heo globals" style="text-decoration: line-through; color: red" >
    ko biết điền chi nữa-------------- biến super toàn cục
</a>


</body>
</html>
