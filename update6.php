
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
$print = $_REQUEST['print'];






@mysqli_query($db,"Update oitems SET
			printed = '$print'
			where id='$id'");



echo '1';			
			

}else{
	
	
	echo '2';
	
}


?>