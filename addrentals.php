
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
	
$id=trim($_REQUEST['id']);
$height=trim($_REQUEST['height']);
$weight=trim($_REQUEST['weight']);
$shoe=trim($_REQUEST['shoe']);
$helmet=trim($_REQUEST['helmet']);
$age=trim($_REQUEST['age']);
$sex=trim($_REQUEST['sex']);
$ability=trim($_REQUEST['ability']);
$equip=trim($_REQUEST['equip']);
$drop=mysqli_real_escape_string($db,trim($_REQUEST['drop']));


if ($drop == "" or $drop == NULL or $drop == "N/A"){
	$inv2 = "inv2=NULL,";
	
}else{
	
		$inv2 = "inv2='$drop',";

}

if ($equip == "false"){
	$equip = "equip=NULL,";
	
}else{
	
		$equip = "equip='$equip',";

}

if ($height == "false"){
	$height = "height=NULL,";
	
}else{
	
		$height = "height='$height',";

}

if ($weight == "false"){
	$weight = "weight=NULL,";
	
}else{
	
		$weight = "weight='$weight',";

}
if ($shoe == "false"){
	$shoe = "shoe=NULL,";
	
}else{
	
		$shoe = "shoe='$shoe',";

}
if ($helmet == "false"){
	$helmet = "helmet=NULL,";
	
}else{
	
		$helmet = "helmet='$helmet',";

}
if ($age == "false"){
	$age = "age=NULL,";
	
}else{
	
		$age = "age='$age',";

}
if ($sex == "false"){
	$sex = "sex=NULL,";
	
}else{
	
		$sex = "sex='$sex',";

}


if ($ability == "false"){
	$ability = "ability=NULL";
	
}else{
	
		$ability = "ability='$ability'";

}


	
	@mysqli_query($db,"update items SET
			$equip
			$height
			$weight
			$shoe
			$helmet
			$age
			$sex
			$inv2
			$ability
			where id = '$id'");
			

			
		
			$catagory = "resp";
	$question = "1";
	$new_array[] = array($catagory => $question);	
		




echo json_encode( $new_array );	
	

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
