
<?php

require("dbase.php");

session_start();

mysqli_set_charset($db, "utf8");

$user = $_SESSION["user"];
$pass = $_SESSION["pass"];




$aa = mysqli_query($db,"SELECT * FROM users where username like '$user' and password = '$pass'");   
$bb = mysqli_num_rows($aa);



if ($bb == 1){


$id=mysqli_real_escape_string($db,trim($_REQUEST['id']));
$fullname=mysqli_real_escape_string($db,trim($_REQUEST['fullname']));
$phone=mysqli_real_escape_string($db,trim($_REQUEST['mobile']));
$email=mysqli_real_escape_string($db,trim($_REQUEST['email']));
$address=mysqli_real_escape_string($db, htmlspecialchars(trim($_REQUEST['address'])));	
$city=mysqli_real_escape_string($db, htmlspecialchars(trim($_REQUEST['city'])));	
$province=mysqli_real_escape_string($db, htmlspecialchars(trim($_REQUEST['province'])));	
$postal=mysqli_real_escape_string($db, htmlspecialchars(trim($_REQUEST['postal'])));	

$phone = str_replace(" ","",$phone);
$phone = str_replace("-","",$phone);
$phone = str_replace("(","",$phone);
$phone = str_replace(")","",$phone);
$phone = "1$phone";	

@mysqli_query($db,"Update orders SET
			fullname='$fullname',
			mobile='$phone',
			email='$email',
			address='$address',
			city='$city',
			province='$province',
			postal='$postal'				
			where
			id='$id'");



echo '1';			
			

}else{
	
	
	echo '2';
	
}


?>
