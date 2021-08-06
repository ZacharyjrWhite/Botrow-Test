<?php
require("dbase.php");
require("PasswordService.php");

header('Content-Type: application/json');
mysqli_set_charset($db, "utf8");

session_start();
$PasswordService = new PasswordService();

if(isset($_REQUEST['login']) AND isset($_REQUEST['password'])){
    $user = trim($_REQUEST["login"]);
    $pass = trim($_REQUEST["password"]);
}else{
    $user = trim($_SESSION["user"]);
    $pass = trim($_SESSION["pass"]);
}

$cleanUser = mysqli_real_escape_string($db,trim($user));
$cleanPass = $PasswordService->getEncryptedPassword(mysqli_real_escape_string($db,trim($pass)));
$query = "SELECT *  FROM users where username like '$cleanUser' and password = '$cleanPass'";

$loggedIn = mysqli_query($db, $query);   
$userFound = $loggedIn->fetch_array(MYSQLI_ASSOC);
$output = array($userFound);
if ($userFound != null) {
    $output = array($userFound);
    if($output[0]['active'] == 0){
        $output = array('Error' => 'User is deactivated');
    }else{
        $_SESSION["user"] = $user;
        $_SESSION["pass"] = $pass;
        $_SESSION['loggedIn'] = true;
        $output = array('Success' => 'Log in successful');
    }
}else{
    $output = array('Error' => 'Username or Password is incorrect');
    $_SESSION['loggedIn'] = false;
}

echo json_encode($output);
exit();
?>