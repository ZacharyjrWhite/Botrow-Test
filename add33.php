
<?php

require("dbase.php");

session_start();

mysqli_set_charset($db, "utf8");

$user = $_SESSION["user"];
$pass = $_SESSION["pass"];




$aa = mysqli_query($db,"SELECT * FROM users where username like '$user' and password = '$pass'");   
$bb = mysqli_num_rows($aa);



if ($bb == 1){








if (isset($_REQUEST['jack'])){
	
$nam=mysqli_real_escape_string($db,trim($_REQUEST['nam']));
$dsc=mysqli_real_escape_string($db,trim($_REQUEST['dsc']));




$aa6 = mysqli_query($db,"SELECT * FROM rentalinv where dsc like '$dsc' and del is NULL");   
$bb6 = mysqli_num_rows($aa6);

if ($bb6 == 0){

	
	@mysqli_query($db,"insert into rentalinv SET
			title='$nam', dsc = '$dsc'");
			
			
			$catagory = "resp";
	$question = "1";
	$new_array[] = array($catagory => $question);	





echo json_encode( $new_array );	
}
else{
		$catagory = "resp";
	$question = "3";
	$new_array[] = array($catagory => $question);	
	
	echo json_encode( $new_array );	

}

}else{
		$catagory = "resp";
	$question = "2";
	$new_array[] = array($catagory => $question);	





echo json_encode( $new_array );	
	
}
}
else{
	
	
		$catagory = "resp";
	$question = "2";
	$new_array[] = array($catagory => $question);	





echo json_encode( $new_array );	
	
	
	
}
?>
