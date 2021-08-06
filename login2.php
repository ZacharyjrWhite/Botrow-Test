<?php

   session_start();
//require("dbase.php");


$login = $_REQUEST['login'];
$pword = $_REQUEST['password'];




if ($login <> NULL and $pword <> NULL){

$_SESSION["user"] = $login;
$_SESSION["pass"] = $pword;

}



$user = $_SESSION["user"];
$pass = $_SESSION["pass"];

if ($user == "horseshoe"){
require("dbase2.php");	
	
}

elseif ($user == "poley"){
require("dbase3.php");	
	
}
elseif ($user == "crabbe"){
require("dbase4.php");	
	
}
elseif ($user == "marble"){
require("dbase5.php");	
	
}
elseif ($user == "mark"){
require("dbase6php");	
	
}
elseif ($user == "martock"){
require("dbase7.php");	
	
}
elseif ($user == "wentworth"){
require("dbase.php");	
	
}
else{
require("dbase.php");	
	
}

mysqli_set_charset($db, "utf8");


$aa = mysqli_query($db,"SELECT * FROM users");   
$bb = mysqli_num_rows($aa);


	$username = mysqli_result($aa,0,"username");
	$password = mysqli_result($aa,0,"password");


if ($user == $username and $pass == $password){
}
else{
?>
<br/><br/><br/><br/><br/>
<center>
<img src="botrow.png" width = "182" height = "43"><br/>
<form method="post" action="<?php $_PHP_SELF ?>">
        <p><input type="text" name="login" value="" placeholder="Username"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
</center>
<?php

exit();
}



?>
