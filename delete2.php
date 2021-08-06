
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


   	
	@mysqli_query($db,"update items SET del='yes' where id='$id'");


@mysqli_query($db,"update items SET promo = NULL, aff = NULL where aff='$id'");


			
			

}else{
	
	echo '2';
	
	
}


?>
