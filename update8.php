
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
$name=mysqli_real_escape_string($db,trim($_REQUEST['name']));
$val=mysqli_real_escape_string($db,trim($_REQUEST['val']));



if (strpos($val, ' ') !== false){
	
	
		echo '4';	

	
	
	
}else{

$aa6 = mysqli_query($db,"SELECT * FROM promocode where name like '$val' and del is NULL");   
$bb6 = mysqli_num_rows($aa6);

if ($bb6 == 0){
		$ghj = "$name='$val'";



   	
	@mysqli_query($db,"update promocode SET $ghj where id='$id'");

		
}else{
	
echo '2';	
	
	
	
}

}		
			

}else{
	
	echo '3';
	
}


?>
