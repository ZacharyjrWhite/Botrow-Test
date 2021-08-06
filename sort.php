
<?php

require("dbase.php");

session_start();

mysqli_set_charset($db, "utf8");

$user = $_SESSION["user"];
$pass = $_SESSION["pass"];




$aa = mysqli_query($db,"SELECT * FROM users where username like '$user' and password = '$pass'");   
$bb = mysqli_num_rows($aa);



if ($bb == 1){





$i = 0;

foreach ($_POST['item'] as $value) {
   	
	@mysqli_query($db,"update items SET ord='$i' where id='$value'");
    $i++;
}




			
			

}
else{
	
	echo '2';
	
}


?>
