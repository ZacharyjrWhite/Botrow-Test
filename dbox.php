
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



$aa66 = mysqli_query($db,"SELECT * FROM items where id = '$id' and del is NULL and inv2 is not NULL");   
$bb66 = mysqli_num_rows($aa66);



$aa6 = mysqli_query($db,"SELECT * FROM rentalinv where del is NULL order by title asc");   
$bb6 = mysqli_num_rows($aa6);

if ($bb6 <> 0){
					$catagory = "resp";
	$question = "1";
	$new_array[] = array($catagory => $question);	
			
			
			if ($bb66 == 0){
				
								$new_array[] = array("box" => "no");	

			}
			else{
				
									$inv2=utf8_encode(mysqli_result($aa66,0,"inv2"));	

								$new_array[] = array("box" => $inv2);	

			}
			
			
			$r = 0;
			
			while ($r < $bb6){
				
					$title=utf8_encode(mysqli_result($aa6,$r,"title"));	
					$dsc=utf8_encode(mysqli_result($aa6,$r,"dsc"));	
$title = "$title - $dsc";
					$id2=utf8_encode(mysqli_result($aa6,$r,"id"));	

							
				$new_array[] = array("title" => $title, "id" => $id2);	

				
				
				$r++;
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
