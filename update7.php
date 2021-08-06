
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
$cdate = $_REQUEST['date'];


if ($cdate == null or $cdate == ""){
	
	$cdate = "Anyday";
}

if ($cdate == "Anyday"){
	
	$newday = $cdate;
}else{
	$newday = date("Y-m-d", strtotime($cdate));

	
}


	$a1d1 = mysqli_query($db,"SELECT * FROM oitems where id = '$id'");  
$b1d1 = mysqli_num_rows($a1d1);

if ($b1d1 <> 0 ){
	

	$oid=mysqli_result($a1d1,0,"oid");
			$cat=mysqli_result($a1d1,0,"cat");

		
		

}

	$a1 = mysqli_query($db,"SELECT * FROM orders where id = '$oid' and status = 'complete' and fullname is not NULL");  
$b1 = mysqli_num_rows($a1);

if ($b1 <> 0){
$date = date('Y-m-d H:i:s');

	$timelimit = strtotime('+3 minutes', strtotime($date));
$timelimit = date('Y-m-d H:i:s', $timelimit);


if ($cat == '2'){
	@mysqli_query($db,"Update oitems SET
			redeemdate = '$cdate',
			printed = '0',
			rdate='$newday'
			where id='$id'");
	
}else{
@mysqli_query($db,"Update oitems SET
			redeemdate = '$cdate',
			printed = NULL,
			rdate='$newday'
			where id='$id'");	
	
}


			
			
				@mysqli_query($db,"Update orders SET 
			ndate='$timelimit',
			notify='yes',
			nmess='3'
			where id = '$oid'");	



echo '1';			
}
else{


echo '3';

}	

}else{
	
	
	echo '2';
	
}


?>
