
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



$aa66 = mysqli_query($db,"SELECT * FROM oitems where id = '$id' and inv is not NULL");   
$bb66 = mysqli_num_rows($aa66);


if ($bb66 <> 0){
	
				
									$inv5=utf8_encode(mysqli_result($aa66,0,"inv"));	
																		$date=utf8_encode(mysqli_result($aa66,0,"redeemdate"));	


$aa65 = mysqli_query($db,"SELECT * FROM rinventory left join rentalinv on rinventory.invid = rentalinv.id where rinventory.id = '$inv5'");   
$bb65 = mysqli_num_rows($aa65);

if ($bb65 == 0){
		$catagory = "resp";
	$question = "3";
	$new_array[] = array($catagory => $question);	
echo json_encode( $new_array );	
	
}else{
										$name=utf8_encode(mysqli_result($aa65,0,"rinventory.name"));	
									$title=utf8_encode(mysqli_result($aa65,0,"rentalinv.title"));	
									
																		$rentid=utf8_encode(mysqli_result($aa65,0,"rentalinv.id"));	
				


	$catagory = "resp";
	$question = "1";
	$new_array[] = array($catagory => $question);	
					$new_array[] = array("title" => $title);	
					
							$new_array[] = array("name" => $name, "id" => $inv5);	

					
	
		$a6 = mysqli_query($db,"SELECT * FROM rinventory where invid = '$rentid' and del is NULL order by id asc");   
$b6 = mysqli_num_rows($a6);
		
		
		if ($b6 <> 0){
			

			
		$r = 0;
			
			while ($r < $b6){
				
					$name=utf8_encode(mysqli_result($a6,$r,"name"));	
					$id2=utf8_encode(mysqli_result($a6,$r,"id"));	
					$avail=utf8_encode(mysqli_result($a6,$r,"avail"));	

							
				//$new_array[] = array("name" => $name, "id" => $id2);	
				
$available[] = array( "id" => $id2, "avail" => $avail, "name" => $name);
				
				
				
				$r++;
			}
			
			
			
$ac4 = mysqli_query($db,"SELECT count(oitems.inv) as tot, oitems.inv FROM oitems left join items on oitems.itemid = items.id where items.inv2 = '$rentid' and oitems.void is null and oitems.redeemdate = '$date' group by oitems.inv");                                               
$bc4 = mysqli_num_rows($ac4);



	$r = 0;
			
			while ($r < $bc4){
				
					$tot=utf8_encode(mysqli_result($ac4,$r,"tot"));	
					$inv=utf8_encode(mysqli_result($ac4,$r,"oitems.inv"));	


							
$used[$inv] = $tot;

				
				
				$r++;
			}
			
			
			if (isset($available)){


$ey = 0;

while ($ey < count($available)){
	
	
	$cid = $available[$ey]['id'];
	$cavail = $available[$ey]['avail'];
	$cname = $available[$ey]['name'];

	if (isset($used[$cid])){
		
		$ava = intval($cavail) - intval($used[$cid]);
		
	}else{
		
		$ava = intval($cavail);
		
	}
	
	if ($ava > 0 and $cid <> $inv5){
		
		$new_array[] = array("name" => $cname, "id" => $cid);	
	}
	
	$ey++;
}




}
			
			
		
		echo json_encode( $new_array );	

		
		}				
					
					
					
					
					
					
					

	
}
			
			

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
