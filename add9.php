
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
$num=mysqli_real_escape_string($db,trim($_REQUEST['num']));


if (strpos($nam, ' ') !== false){
	
	
			$catagory = "resp";
	$question = "4";
	$new_array[] = array($catagory => $question);	





echo json_encode( $new_array );	
	
	
	
}else{


$aa6 = mysqli_query($db,"SELECT * FROM promocode where name like '$nam' and del is NULL");   
$bb6 = mysqli_num_rows($aa6);

if ($bb6 == 0){

	
	@mysqli_query($db,"insert into promocode SET
			name='$nam',
			percentoff='$num'");
			
			
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
