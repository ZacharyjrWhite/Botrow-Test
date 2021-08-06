
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
$date=mysqli_real_escape_string($db,trim($_REQUEST['date']));

$aa6 = mysqli_query($db,"SELECT * FROM pause where itemid = '$id' and date = '$date'");   
$bb6 = mysqli_num_rows($aa6);

if ($bb6 == 0){
	@mysqli_query($db,"insert into pause SET
			itemid='$id',
			date='$date',
			paused='true'");


   	


		
}else{
	
	$paused=mysqli_result($aa6,0,"paused");
		$iid=mysqli_result($aa6,0,"id");

	
	if ($paused == "true"){
				@mysqli_query($db,"update pause SET paused='false' where id='$iid'");

		
	}
	else{
						@mysqli_query($db,"update pause SET paused='true' where id='$iid'");

		
		
	}
	
	
}

		echo '1';	
			

}else{
	
	
	echo '2';
	
}


?>
