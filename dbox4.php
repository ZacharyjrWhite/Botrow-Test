
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





$aa6 = mysqli_query($db,"SELECT * FROM oitems where id = '$id'");   
$bb6 = mysqli_num_rows($aa6);

if ($bb6 <> 0){
										$notes=utf8_encode(mysqli_result($aa6,0,"ItemNotes"));	

	
	
					$catagory = "resp";
	$question = "1";
	$new_array[] = array($catagory => $question);	
			
			
											$new_array[] = array("notes" => $notes);	

			
		if ($notes == null and $notes == ""){
			
														$new_array[] = array("empty" => "yes");	

			
		}else{
			
																	$new_array[] = array("empty" => "no");	

		}
			
			
		
			

			
	
	
echo json_encode( $new_array );	


		
}else{
	
	
			$catagory = "resp";
	$question = "2";
	$new_array[] = array($catagory => $question);	
	
	echo json_encode( $new_array );	

	
}

			
			

}else{
	
	
			$catagory = "resp";
	$question = "3";
	$new_array[] = array($catagory => $question);	
echo json_encode( $new_array );	
	
}


?>
