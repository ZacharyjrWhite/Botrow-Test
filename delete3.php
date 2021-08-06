
<?php

require("dbase.php");

session_start();

mysqli_set_charset($db, "utf8");

$user = $_SESSION["user"];
$pass = $_SESSION["pass"];




$aa = mysqli_query($db,"SELECT * FROM users where username like '$user' and password = '$pass'");   
$bb = mysqli_num_rows($aa);



if ($bb == 1){


$id = $_REQUEST["id"];


$aa2 = mysqli_query($db,"SELECT * FROM items where inv like '$id' and del is NULL");   
$bb2 = mysqli_num_rows($aa2);

if ($bb2 > 0){
	
	echo '2';
	
}else{

   	
	@mysqli_query($db,"update inventory SET del='yes' where id='$id'");




}
			
			

}else{
	
	echo '3';
	
	
}


?>
