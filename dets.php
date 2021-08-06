
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



	$a2e = mysqli_query($db,"SELECT * FROM oitems where id = '$id'");  
$b1d1 = mysqli_num_rows($a2e);

$iid=utf8_encode(mysqli_result($a2e,0,"itemid"));
$fullname=utf8_encode(mysqli_result($a2e,0,"fullname"));
$height=utf8_encode(mysqli_result($a2e,0,"height"));
$height2=utf8_encode(mysqli_result($a2e,0,"height2"));
$weight=utf8_encode(mysqli_result($a2e,0,"weight"));
$shoe=utf8_encode(mysqli_result($a2e,0,"shoe"));
$shoe2=utf8_encode(mysqli_result($a2e,0,"shoe2"));
$age=utf8_encode(mysqli_result($a2e,0,"age"));
$sex=utf8_encode(mysqli_result($a2e,0,"sex"));
$ability=utf8_encode(mysqli_result($a2e,0,"ability"));
$equip=utf8_encode(mysqli_result($a2e,0,"equip"));
$helmet=utf8_encode(mysqli_result($a2e,0,"helmet"));

$notes=utf8_encode(mysqli_result($a2e,0,"notes"));
$fn2=utf8_encode(mysqli_result($a2e,0,"fn2"));
$fn3=utf8_encode(mysqli_result($a2e,0,"fn3"));
$fn4=utf8_encode(mysqli_result($a2e,0,"fn4"));
$ag2=utf8_encode(mysqli_result($a2e,0,"ag2"));
$ag3=utf8_encode(mysqli_result($a2e,0,"ag3"));
$ag4=utf8_encode(mysqli_result($a2e,0,"ag4"));




	$a2e = mysqli_query($db,"SELECT * FROM items where id = '$iid'");  
$b1d1 = mysqli_num_rows($a2e);

if ($b1d1 <> 0 ){
	


$height4=utf8_encode(mysqli_result($a2e,0,"height"));
$weight4=utf8_encode(mysqli_result($a2e,0,"weight"));
$shoe4=utf8_encode(mysqli_result($a2e,0,"shoe"));
$helmet4=utf8_encode(mysqli_result($a2e,0,"helmet"));
$age4=utf8_encode(mysqli_result($a2e,0,"age"));
$sex4=utf8_encode(mysqli_result($a2e,0,"sex"));
$ability4=utf8_encode(mysqli_result($a2e,0,"ability"));
$equip4=utf8_encode(mysqli_result($a2e,0,"equip"));


if ($weight4 == NULL){
	$weight4 = 'false';
}
if ($height4 == NULL){
	$height4 = 'false';
}
if ($shoe4 == NULL){
	$shoe4 = 'false';
}
if ($helmet4 == NULL){
	$helmet4 = 'false';
}
if ($sex4 == NULL){
	$sex4 = 'false';
}
if ($age4 == NULL){
	$age4 = 'false';
}
if ($ability4 == NULL){
	$ability4 = 'false';
}
if ($equip4 == NULL){
	$equip4 = 'false';
}
}

		$new_array[] = array("stop" => 'no');



					$new_array[] = array("notes" => $notes, "fn2" => $fn2, "fn3" => $fn3, "fn4" => $fn4, "ag2" => $ag2, "ag3" => $ag3, "ag4" => $ag4, "a" => $fullname, "b" => $height, "c" => $height2, "d" => $weight, "e" => $shoe, "f" => $shoe2, "g" => $age, "h" => $sex, "i" => $ability, "j" => $equip, "k" => $helmet, "height" => $height4, "weight" => $weight4, "shoe" => $shoe4, "helmet" => $helmet4, "sex" => $sex4, "age" => $age4, "ability" => $ability4, "equip" => $equip4);		
			
			

}else{
	
	
		$new_array[] = array("stop" => 'yes');
	
}
echo json_encode( $new_array );	


?>
