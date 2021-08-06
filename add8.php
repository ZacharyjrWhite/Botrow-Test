
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
	
$cat=trim($_REQUEST['cat']);
$title=mysqli_real_escape_string($db,trim($_REQUEST['title']));
$desc=mysqli_real_escape_string($db,trim($_REQUEST['desc']));
$type=mysqli_real_escape_string($db,trim($_REQUEST['type']));
$price=mysqli_real_escape_string($db,trim($_REQUEST['price']));
$sold=mysqli_real_escape_string($db,trim($_REQUEST['sld']));
$inv=mysqli_real_escape_string($db,trim($_REQUEST['inventory']));




if ($inv == "N/A"){
	$inv = "inv=NULL,";
	
}else{
	
		$inv = "inv='$inv',";

}




$aa6 = mysqli_query($db,"SELECT * FROM items where (cat like '5' or cat like '6' or cat like '7') and del is NULL and itemtype='passes' order by ord desc limit 1");   
$bb6 = mysqli_num_rows($aa6);
if ($bb6 == 0){
$ord = 0;	
}else{
$ord=mysqli_result($aa6,0,"ord");
}
$ord++;


	
	@mysqli_query($db,"insert into items SET
			cat='$cat',
			title='$title',
			description='$desc',
			type='$type',
			price='$price',
			ord='$ord',
			sold='$sold',
			$inv
			itemtype='passes',
			age='true'");
			


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
