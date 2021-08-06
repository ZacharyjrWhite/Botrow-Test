
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
$height = $_REQUEST['height'];
$height2 = $_REQUEST['height2'];
$weight=mysqli_real_escape_string($db,trim($_REQUEST['weight']));
$shoe = $_REQUEST['shoe'];
$shoe2 = $_REQUEST['shoe2'];
$age=mysqli_real_escape_string($db,trim($_REQUEST['age']));
$sex = $_REQUEST['sex'];
$helmet = $_REQUEST['helmet'];
$ability = $_REQUEST['ability'];
$equip = $_REQUEST['equip'];
$fullname=mysqli_real_escape_string($db,trim($_REQUEST['fullname']));
$notes=mysqli_real_escape_string($db, htmlspecialchars(trim($_REQUEST['notes'])));


$fn2=mysqli_real_escape_string($db, htmlspecialchars(trim($_REQUEST['fn2'])));
$ag2=mysqli_real_escape_string($db, htmlspecialchars(trim($_REQUEST['ag2'])));
$fn3=mysqli_real_escape_string($db, htmlspecialchars(trim($_REQUEST['fn3'])));
$ag3=mysqli_real_escape_string($db, htmlspecialchars(trim($_REQUEST['ag3'])));
$fn4=mysqli_real_escape_string($db, htmlspecialchars(trim($_REQUEST['fn4'])));
$ag4=mysqli_real_escape_string($db, htmlspecialchars(trim($_REQUEST['ag4'])));


$r5=mysqli_real_escape_string($db, htmlspecialchars(trim($_REQUEST['r5'])));
$ddown=mysqli_real_escape_string($db, htmlspecialchars(trim($_REQUEST['ddown'])));

if ($ddown == 'true'){
	
	
		$at = mysqli_query($db,"SELECT * FROM oitems where id like '$id'");   
$bt = mysqli_num_rows($at);

		$rdate=mysqli_result($at,0,"redeemdate");
		$invid=mysqli_result($at,0,"inv");


if ($invid <> $r5){
	
	$ad6 = mysqli_query($db,"SELECT * FROM rinventory where id = '$r5' and del is NULL order by id asc");   
$bd6 = mysqli_num_rows($ad6);

if ($bd6 == 0){
	///error
					$new_array[] = array("stop" => '2');
	





echo json_encode( $new_array );	
	
exit();	
}
else{
						$ava2=utf8_encode(mysqli_result($ad6,0,"avail"));	

				
$bd4 = mysqli_query($db,"SELECT * FROM oitems where void is null and redeemdate = '$rdate' and inv = '$r5'");                                               
$bf4 = mysqli_num_rows($bd4);
	
	
	if (intval($ava2) <= intval($bf4)){
		///stop over inv
					$new_array[] = array("stop" => '3');






echo json_encode( $new_array );	
		
		exit();
	}else{
		
@mysqli_query($db,"Update oitems SET
			inv = '$r5' where id='$id'");
	}
		
		
		
	
}
	
}
}
	




if ($fn2 == "" or $fn2 == null){
	$fn2 = "fn2=NULL,";
	
}else{
	
		$fn2 = "fn2='$fn2',";

}

if ($ag2 == "" or $ag2 == null){
	$ag2 = "ag2=NULL,";
	
}else{
	
		$ag2 = "ag2='$ag2',";

}

if ($fn3 == "" or $fn3 == null){
	$fn3 = "fn3=NULL,";
	
}else{
	
		$fn3 = "fn3='$fn3',";

}

if ($ag3 == "" or $ag3 == null){
	$ag3 = "ag3=NULL,";
	
}else{
	
		$ag3 = "ag3='$ag3',";

}

if ($fn4 == "" or $fn4 == null){
	$fn4 = "fn4=NULL,";
	
}else{
	
		$fn4 = "fn4='$fn4',";

}

if ($ag4 == "" or $ag4 == null){
	$ag4 = "ag4=NULL,";
	
}else{
	
		$ag4 = "ag4='$ag4',";

}


if ($height == "" or $height == null){
	$height = "height=NULL,";
	
}else{
	
		$height = "height='$height',";

}
if ($height2 == "" or $height2 == null){
	$height2 = "height2=NULL,";
	
}else{
	
		$height2 = "height2='$height2',";

}
if ($weight == "" or $weight == null){
	$weight = "weight=NULL,";
	
}else{
	
		$weight = "weight='$weight',";

}
if ($shoe == "" or $shoe == null){
	$shoe = "shoe=NULL,";
	
}else{
	
		$shoe = "shoe='$shoe',";

}
if ($shoe2 == "" or $shoe2 == null){
	$shoe2 = "shoe2=NULL,";
	
}else{
	
		$shoe2 = "shoe2='$shoe2',";

}

if ($age == "" or $age == null){
	$age = "age=NULL,";
	
}else{
	
		$age = "age='$age',";

}
if ($helmet == "" or $helmet == null){
	$helmet = "helmet=NULL,";
	
}else{
	
		$helmet = "helmet='$helmet',";

}
if ($sex == "" or $sex == null){
	$sex = "sex=NULL,";
	
}else{
	
		$sex = "sex='$sex',";

}
if ($ability == "" or $ability == null){
	$ability = "ability=NULL,";
	
}else{
	
		$ability = "ability='$ability',";

}
if ($equip == "" or $equip == null){
	$equip = "equip=NULL,";
	
}else{
	
		$equip = "equip='$equip',";

}
if ($fullname == "" or $fullname == null){
	$fullname = "fullname=NULL";
	
}else{
	
		$fullname = "fullname='$fullname'";

}

if ($notes == "" or $notes == null){
	$notes = "notes=NULL,";
	
}else{
	
		$notes = "notes='$notes',";

}


@mysqli_query($db,"Update oitems SET
			$height
			$height2
			$weight
			$shoe
			$shoe2
			$helmet
			$age
			$sex
			$ability
			$equip
			$notes
			$ag2
			$ag3
			$ag4
			$fn2
			$fn3
			$fn4
			$fullname where id='$id'");



//echo '1';			
			$new_array[] = array("stop" => '1');
			
			$a = mysqli_query($db,"SELECT * FROM oitems where id like '$id'");   
$b = mysqli_num_rows($a);
		$oid=mysqli_result($a,0,"oid");

						$new_array[] = array("oid" => $oid);


}else{
	
	
	//echo '2';
				$new_array[] = array("stop" => '2');

}
echo json_encode( $new_array );	


?>
