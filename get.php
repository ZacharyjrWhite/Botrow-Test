<?php
require("dbase.php");

session_start();

mysqli_set_charset($db, "utf8");

$da = $_REQUEST['date'];


$timel = strtotime($da);
$day = date('l', $timel);
$day2 = date('Y-m-d', $timel);
$day3 = date('Y-m-d');
$day4 = strtotime('+1 day', strtotime($day3));
$day4 = date('Y-m-d', $day4);




$date = date('Y-m-d H:i:s');


$user = $_SESSION["user"];
$pass = $_SESSION["pass"];




$aa = mysqli_query($db,"SELECT * FROM users where username like '$user' and password = '$pass'");   
$bb = mysqli_num_rows($aa);



if ($bb == 1){



$soldaf = date("G:i:s");

$qu1 = mysqli_query($db,"SELECT * FROM pause WHERE date = '$da' and paused = 'true'");
	$qu2 = mysqli_num_rows($qu1);

$re = 0;

$paused[] = 'colin';
while($re < $qu2){
	
	$tem=mysqli_result($qu1,$re,"itemid");
		
	$paused[] = $tem;
	
	$re++;
}

/////search daily items


if ($day2 == $day3){
	

$query = mysqli_query($db, "SELECT * FROM items WHERE master is NULL and itemtype='daily' and cat != '4' and soldon like '$da'  and soldbefore > '$soldaf' and del is NULL order by ord asc");
}
else{
$query = mysqli_query($db, "SELECT * FROM items WHERE master is NULL and itemtype='daily' and cat != '4' and soldon like '$da' and del is NULL order by ord asc");
	
}
	$hnn1q = mysqli_num_rows($query);
	$e = 0;

	
	if ($hnn1q <> 0){

//$new_array[] = array("stop" => 'no');



$r = 0;
while ($r < $hnn1q){
	

$idd=utf8_encode(mysqli_result($query,$r,"id"));

$e++;
if( in_array( $idd ,$paused ) ){
	
	$pau = "true";
}else{
		$pau = "false";

	
}

$title=utf8_encode(mysqli_result($query,$r,"title"));	
$type=utf8_encode(mysqli_result($query,$r,"type"));
$price=utf8_encode(mysqli_result($query,$r,"price"));
$description=utf8_encode(mysqli_result($query,$r,"description"));
$vbef=utf8_encode(mysqli_result($query,$r,"validbefore"));
$vaft=utf8_encode(mysqli_result($query,$r,"validafter"));
	$vafor=utf8_encode(mysqli_result($query,$r,"validfor"));
	$onsale=utf8_encode(mysqli_result($query,$r,"onsale"));
	$sold=utf8_encode(mysqli_result($query,$r,"sold"));
	$cat=utf8_encode(mysqli_result($query,$r,"cat"));



$vbef = date ('g:ia',strtotime($vbef));
$vaft = date ('g:ia',strtotime($vaft));




/////


if ($e == 1){
	$new_array[] = array("stop" => 'no');

}

/////
							$new_array[] = array("id" => $idd, "title" => $title, "type" => $type, "price" => $price, "description" => $description, "vbef" => $vbef, "vaft" => $vaft, "vafor" => $vafor, "onsale" => $onsale, "pau" => $pau, "sold" => $sold, "cat" => $cat);		


 

	$r++;
}
	}



/////
if ($day2 == $day3){

$query = mysqli_query($db, "SELECT * FROM items WHERE master is NULL and itemtype='weekly' and cat != '4' and soldon like '%$day%'  and soldbefore > '$soldaf' and del is NULL order by ord asc");
}
else{
$query = mysqli_query($db, "SELECT * FROM items WHERE master is NULL and itemtype='weekly' and cat != '4' and soldon like '%$day%' and del is NULL order by ord asc");
	
}
	$hnn1 = mysqli_num_rows($query);
	
	
	if ($hnn1 <> 0){

//	if ($hnn1q == 0 and $hnn1 <> 0){

//$new_array[] = array("stop" => 'no');
//	}


$r = 0;
while ($r < $hnn1){
	


$idd=utf8_encode(mysqli_result($query,$r,"id"));
if( in_array( $idd ,$paused ) ){
	
	$pau = "true";
}else{
		$pau = "false";

	
}


$e++;
$title=utf8_encode(mysqli_result($query,$r,"title"));	
$type=utf8_encode(mysqli_result($query,$r,"type"));
$price=utf8_encode(mysqli_result($query,$r,"price"));
$description=utf8_encode(mysqli_result($query,$r,"description"));
$vbef=utf8_encode(mysqli_result($query,$r,"validbefore"));
$vaft=utf8_encode(mysqli_result($query,$r,"validafter"));
	$vafor=utf8_encode(mysqli_result($query,$r,"validfor"));
	$onsale=utf8_encode(mysqli_result($query,$r,"onsale"));
	$sold=utf8_encode(mysqli_result($query,$r,"sold"));
	$cat=utf8_encode(mysqli_result($query,$r,"cat"));



$vbef = date ('g:ia',strtotime($vbef));
$vaft = date ('g:ia',strtotime($vaft));



/////


if ($e == 1){
	$new_array[] = array("stop" => 'no');

}

/////
							$new_array[] = array("id" => $idd, "title" => $title, "type" => $type, "price" => $price, "description" => $description, "vbef" => $vbef, "vaft" => $vaft, "vafor" => $vafor, "onsale" => $onsale, "pau" => $pau, "sold" => $sold, "cat" => $cat);		


 

	$r++;
}
	}
	if ($e == 0){
		
		$new_array[] = array("stop" => 'yes');

		
	}
	
	
}
else{
	
			$new_array[] = array("stop" => 'reload');

	
	
}

echo json_encode( $new_array );	






?>