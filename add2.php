
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
$soldon=mysqli_real_escape_string($db,trim($_REQUEST['soldon']));
$soldafter=mysqli_real_escape_string($db,trim($_REQUEST['sa']));
$soldbefore=mysqli_real_escape_string($db,trim($_REQUEST['sb']));
$validafter=mysqli_real_escape_string($db,trim($_REQUEST['va']));
$validbefore=mysqli_real_escape_string($db,trim($_REQUEST['vb']));
$validfor=mysqli_real_escape_string($db,trim($_REQUEST['vf']));
$printq=mysqli_real_escape_string($db,trim($_REQUEST['pq']));
$tictype=mysqli_real_escape_string($db,trim($_REQUEST['tt']));
$redeem=mysqli_real_escape_string($db,trim($_REQUEST['re']));
$inv=mysqli_real_escape_string($db,trim($_REQUEST['inv']));
$limit=mysqli_real_escape_string($db,trim($_REQUEST['lim']));
$sold=mysqli_real_escape_string($db,trim($_REQUEST['sld']));

$id=$_REQUEST['id'];



if ($inv == "N/A"){
	$inv = "inv=NULL,";
	
}else{
	
		$inv = "inv='$inv',";

}

if ($redeem == "" or $redeem == null){
	$reedem = "redeem=NULL,";
	
}else{
	
		$redeem = "redeem='$redeem',";

}



if ($validfor == "N/A"){
	$validfor = "validfor=NULL,";
	
}else{
	
		$validfor = "validfor='$validfor',";

}

$aa6 = mysqli_query($db,"SELECT * FROM items where id = '$id' and del is NULL and promo is NULL and itemtype='weekly'");   
$bb6 = mysqli_num_rows($aa6);

if ($bb6 == 1){

	
	@mysqli_query($db,"insert into items SET
			cat='$cat',
			title='$title',
			description='$desc',
			type='$type',
			price='$price',
			soldon='$soldon',			
			soldafter='$soldafter',
			soldbefore='$soldbefore',
			validafter='$validafter',
			validbefore='$validbefore',
			promo='$limit',
			$validfor
			printq='$printq',
			tictype='$tictype',
			$redeem
			$inv
			master='$id',
			sold='$sold',
			itemtype='weekly'");
			
		$newid = mysqli_insert_id($db);
			
			@mysqli_query($db,"update items SET promo='$limit', aff = '$newid' where id='$id'");
			
			
				if ($cat == 2){	
		$catagory = "resp";
	$question = "5";
	$new_array[] = array($catagory => $question);	
	$new_array[] = array("itemid" => $newid);	
		
		}else{
			$catagory = "resp";
	$question = "1";
	$new_array[] = array($catagory => $question);	

		}



echo json_encode( $new_array );	
}
else{
	$catagory = "resp";
	$question = "2";
	$new_array[] = array($catagory => $question);	





echo json_encode( $new_array );		
	
	
}

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
