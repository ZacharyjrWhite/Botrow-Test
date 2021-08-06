
<?php

require("dbase.php");

session_start();

mysqli_set_charset($db, "utf8");

$user = $_SESSION["user"];
$pass = $_SESSION["pass"];




$aa = mysqli_query($db,"SELECT * FROM users where username like '$user' and password = '$pass'");   
$bb = mysqli_num_rows($aa);



if ($bb == 1){





$waiv=mysqli_real_escape_string($db,trim($_REQUEST['waiver']));






if ($waiv == null or $waiv == ""){
	
		@mysqli_query($db,"update settings SET waiver = NULL where id='1'");

	
}else{
	
			@mysqli_query($db,"update settings SET waiver = '$waiv' where id='1'");

	
}




				
				
			$catagory = "resp";
	$question = "1";
	$new_array[] = array($catagory => $question);	
		




echo json_encode( $new_array );	
	


}
else{
	
	
		$catagory = "resp";
	$question = "2";
	$new_array[] = array($catagory => $question);	





echo json_encode( $new_array );	
	
	
	
}
?>
