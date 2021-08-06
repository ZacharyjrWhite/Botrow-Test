
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
$oid=utf8_encode(mysqli_result($a2e,0,"oid"));
$inv=utf8_encode(mysqli_result($a2e,0,"inv"));




if ($height <> null){
	
		$height = "$height' $height2\"";
	
}
if ($shoe <> null){
	
		$shoe = "$shoe $shoe2";
	
}


if ($fullname == null){
$fullname = "";	
	
}
if ($height == null){
$height = "";	
	
}
if ($weight == null){
$weight = "";	
	
}
if ($shoe == null){
$shoe = "";	
	
}
if ($age == null){
$age = "";	
	
}
if ($sex == null){
$sex = "";	
	
}
if ($ability == null){
$ability = "";	
	
}
if ($equip == null){
$equip = "";	
	
}
if ($helmet == null){
$helmet = "";	
	
}




	$a2e = mysqli_query($db,"SELECT * FROM items where id = '$iid'");  
$b1d1 = mysqli_num_rows($a2e);

if ($b1d1 <> 0 ){
	


$title=utf8_encode(mysqli_result($a2e,0,"title"));
$desc=utf8_encode(mysqli_result($a2e,0,"description"));

$item = "$title $desc";


}


	$a2e = mysqli_query($db,"SELECT * FROM orders where id = '$oid'");  
$b1d1 = mysqli_num_rows($a2e);

if ($b1d1 <> 0 ){
	


$mobile=utf8_encode(mysqli_result($a2e,0,"mobile"));
$address=utf8_encode(mysqli_result($a2e,0,"address"));

$city=utf8_encode(mysqli_result($a2e,0,"city"));
$province=utf8_encode(mysqli_result($a2e,0,"province"));

$postal=utf8_encode(mysqli_result($a2e,0,"postal"));
$country="Canada";

if ($mobile == null){
$mobile = "";	
	
}
if ($address == null){
$address = "";	
	
}
if ($city == null){
$city = "";	
	
}
if ($province == null){
$province = "";	
	
}
if ($postal == null){
$postal = "";	
	
}

}

		$new_array[] = array("stop" => 'no');


					$new_array[] = array("fname" => $fullname, "height" => $height, "weight" => $weight, "shoe" => $shoe, "age" => $age, "gender" => $sex, "ability" => $ability, "hardware" => $equip, "helmet" => $helmet, "mobile" => $mobile, "address" => $address, "city" => $city, "province" => $province, "postal" => $postal, "country" => $country, "item" => $item);		
			
	

if ($inv <> NULL){
	
	$aa65 = mysqli_query($db,"SELECT * FROM rinventory left join rentalinv on rinventory.invid = rentalinv.id where rinventory.id = '$inv'");   
$bb65 = mysqli_num_rows($aa65);

if ($bb65 <> 0){
										$name=utf8_encode(mysqli_result($aa65,0,"rinventory.name"));	
									$title=utf8_encode(mysqli_result($aa65,0,"rentalinv.title"));	

					$new_array[] = array("custom" => "yes");	

					$new_array[] = array("title" => $title, "name" => $name);	

	
}
	
	
}else{
	
						$new_array[] = array("custom" => "no");	

	
}
	

}else{
	
	
		$new_array[] = array("stop" => 'yes');
	
}
echo json_encode( $new_array );	


?>
