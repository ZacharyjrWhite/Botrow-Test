
<?php

require("dbase.php");

session_start();

mysqli_set_charset($db, "utf8");

$user = $_SESSION["user"];
$pass = $_SESSION["pass"];




$aa = mysqli_query($db,"SELECT * FROM users where username like '$user' and password = '$pass'");   
$bb = mysqli_num_rows($aa);



if ($bb == 1){

$id=trim($_REQUEST['id']);


	$a1d1 = mysqli_query($db,"SELECT * FROM users where id = '1'");  
$b1d1 = mysqli_num_rows($a1d1);

if ($b1d1 <> 0 ){
	

	$Tax=mysqli_result($a1d1,0,"taxrate");
	$Tax2 = "1.$Tax";
}



	$a1d1 = mysqli_query($db,"SELECT * FROM orders where id = '$id'");  
$b1d1 = mysqli_num_rows($a1d1);

if ($b1d1 <> 0 ){
	

	$loca=mysqli_result($a1d1,0,"purchlocation");
		$vd=mysqli_result($a1d1,0,"void");
		$rdate=mysqli_result($a1d1,0,"TransDate");
		
		
		

}




$query = mysqli_query($db,"SELECT oitems.printed, oitems.void, oitems.fullname, items.validafter, items.validbefore, items.description, oitems.redeemdate, oitems.id, oitems.purchprice, items.title, items.type, items.cat, oitems.ItemNotes FROM oitems INNER JOIN items ON oitems.itemid = items.id where oitems.oid = '$id' order by oitems.redeemdate asc, items.id asc, items.title asc, oitems.date asc");                                               

	$hnn1 = mysqli_num_rows($query);
	
	
	if ($hnn1 <> 0){

			$new_array[] = array("stop" => 'no');


$r = 0;
while ($r < $hnn1){
	
	$oid=mysqli_result($query,$r,"oitems.id");
		$title=utf8_encode(mysqli_result($query,$r,"items.title"));
		$type=utf8_encode(mysqli_result($query,$r,"items.type"));
		$cat=mysqli_result($query,$r,"items.cat");
		$price=mysqli_result($query,$r,"oitems.purchprice");
				$redeemdate=mysqli_result($query,$r,"oitems.redeemdate");
$description=utf8_encode(mysqli_result($query,$r,"items.description"));
$vbef=utf8_encode(mysqli_result($query,$r,"items.validbefore"));
$vaft=utf8_encode(mysqli_result($query,$r,"items.validafter"));
$fullname=utf8_encode(mysqli_result($query,$r,"oitems.fullname"));
$void=utf8_encode(mysqli_result($query,$r,"oitems.void"));
$print=utf8_encode(mysqli_result($query,$r,"oitems.printed"));
$ItemNotes=utf8_encode(mysqli_result($query,$r,"oitems.ItemNotes"));



if ($print == null){
	
	$print = '0';
}


	
if ($redeemdate == null){
	
	$redeemdate= date('m/d/Y',strtotime($rdate));
	
	
}



		//	if ($loca <> 'web'){
		//									if ($vd == 'yes'){

//$void = 'yes';

//}else{
	
//$void = 'no';
	
	
//}


	//										}else{
												
								if ($void == 'yes'){

$void = 'yes';

								}
else{

$void = 'no';

}	
												
												
												
						//					}


												
								










$vbef = date ('g:ia',strtotime($vbef));
$vaft = date ('g:ia',strtotime($vaft));

		

$price = number_format($price, 2, '.', '');


$price = $price * $Tax2;
$price = number_format($price, 2);
	
	
	
							$new_array[] = array("id" => $oid, "title" => $title, "type" => $type, "price" => $price, "cat" => $cat, "redeemdate" => $redeemdate, "description" => $description, "vaft" => $vaft, "vbef" => $vbef, "fullname" => $fullname, "voi" => $void, "loca" => $loca, "print" => $print, "ItemNotes" => $ItemNotes);		




	$r++;
}






	

	



	}
	else{
		
		$new_array[] = array("stop" => 'stay');

		
	}

			
			

}else{
	
	
		$new_array[] = array("stop" => 'yes');
	
}
echo json_encode( $new_array );	


?>
