
<?php

require("dbase.php");

session_start();

mysqli_set_charset($db, "utf8");

$user = $_SESSION["user"];
$pass = $_SESSION["pass"];




$aa = mysqli_query($db,"SELECT * FROM users where username like '$user' and password = '$pass'");   
$bb = mysqli_num_rows($aa);



if ($bb == 1){

$date=trim($_REQUEST['date']);
$date2=trim($_REQUEST['date2']);

if ($date == "Anyday"){
	$date2 = "Anyday";
}
else if ($date2 == "Anyday"){
	$date = "Anyday";
}


if ($date <> "Anyday" and $date2 <> "Anyday"){
			$date = date("Y-m-d", strtotime($date));
			$date2 = date("Y-m-d", strtotime($date2));

	
}

	$a1d1 = mysqli_query($db,"SELECT * FROM users where id = '1'");  
$b1d1 = mysqli_num_rows($a1d1);

if ($b1d1 <> 0 ){
	

	$Tax=mysqli_result($a1d1,0,"taxrate");
	$Tax2 = "1.$Tax";
}








$query = mysqli_query($db,"SELECT oitems.oid, oitems.printed, oitems.void, oitems.fullname, items.validafter, items.validbefore, items.description, oitems.redeemdate, oitems.id, oitems.purchprice, items.title, items.type, items.cat, oitems.ItemNotes FROM oitems INNER JOIN items ON oitems.itemid = items.id INNER JOIN orders ON oitems.oid = orders.id where orders.status = 'complete' and oitems.rdate >= '$date' and oitems.rdate <= '$date2'  and items.cat <> '2' and oitems.void is NULL order by oitems.date desc");                                               

	$hnn1 = mysqli_num_rows($query);
	
	
	if ($hnn1 <> 0){

			$new_array[] = array("stop" => 'no');


$r = 0;
while ($r < $hnn1){
	
	$oid=mysqli_result($query,$r,"oitems.id");
		$id=mysqli_result($query,$r,"oitems.oid");

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



	$a1d1 = mysqli_query($db,"SELECT * FROM orders where id = '$id'");  
$b1d1 = mysqli_num_rows($a1d1);

if ($b1d1 <> 0 ){
	

	$loca=mysqli_result($a1d1,0,"purchlocation");
		$vd=mysqli_result($a1d1,0,"void");
		$rdate=mysqli_result($a1d1,0,"TransDate");
				$rid=mysqli_result($a1d1,0,"referenceid");

		
		

}

if ($print == null){
	
	$print = '0';
}


	
if ($redeemdate == null){
	
	$redeemdate= date('m/d/Y',strtotime($rdate));
	
	
}



			if ($loca <> 'web'){
											if ($vd == 'yes'){

$void = 'yes';

}else{
	
$void = 'no';
	
	
}


											}else{
												
								if ($void == 'yes'){

$void = 'yes';

								}
else{

$void = 'no';

}	
												
												
												
											}


												
								










$vbef = date ('g:ia',strtotime($vbef));
$vaft = date ('g:ia',strtotime($vaft));

		

$price = number_format($price, 2, '.', '');


$price = $price * $Tax2;
$price = number_format($price, 2);
	
	
	
							$new_array[] = array("id" => $oid, "title" => $title, "type" => $type, "price" => $price, "cat" => $cat, "redeemdate" => $redeemdate, "description" => $description, "vaft" => $vaft, "vbef" => $vbef, "fullname" => $fullname, "voi" => $void, "loca" => $loca, "print" => $print, "rid" => $rid, "ItemNotes" => $ItemNotes);		




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
