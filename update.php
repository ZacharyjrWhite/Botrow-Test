
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


		$ghj = "$name='$val'";

if ($name == "validfor"){
	if ($val == "N/A"){
	
		$ghj = "$name=NULL";
		
	}
	
}

if ($name == "inv"){
	if ($val == "N/A"){
	
		$ghj = "$name=NULL";
		
	}
	
}

if ($name == "redeem"){
	if ($val == ""){
	
		$ghj = "$name=NULL";
		
	}
	
}


   	
	@mysqli_query($db,"update items SET $ghj where id='$id'");




if ($name == "sold"){
	
		@mysqli_query($db,"update items SET $ghj where master='$id'");

}
			
			

}else{
	
	
	echo '2';
	
}


?>
