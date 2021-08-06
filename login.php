<head>
  <meta charset="utf-8">

<link rel="shortcut icon" type="image/png" href="favicon.png">
<style>
	input {
	
  color: #585858;
  padding: 10px 12px;
  border: 1px solid #e2e2e2;
  margin-bottom: 10px;
  width:50%;
		
	}

  
  .loginError{
    font-family:more;
    font-size:20px;
    color: red;
  }
</style>
</head>
<?php

#region Login Processing
    if (!isset($_SESSION)) {
        session_start();
    }
    require_once("DatabaseConnector.php");
    require("userService.php");
    require("PasswordService.php");

    $passwordService = new PasswordService();

    $db = DatabaseConnector::getConnection();

    mysqli_set_charset($db, "utf8");

    $login = NULL;
    $pword = NULL;
    $user = NULL;
    $pass = NULL;
    $active = false;
    $username = NULL;
    $password = NULL;

    if(isset($_REQUEST['login']) and isset($_REQUEST['password'])){
      $login = trim(mysqli_real_escape_string($db,$_REQUEST['login']));
      $pword = trim(mysqli_real_escape_string($db, $passwordService->getEncryptedPassword($_REQUEST['password'])));
    }

    if ($login <> NULL and $pword <> NULL){

    $_SESSION["user"] = $login;
    $_SESSION["pass"] = $pword;

    }



    if(isset($_SESSION["user"]) and isset($_SESSION["pass"])){
      $user = trim($_SESSION["user"]);
      $pass = trim($_SESSION["pass"]);
    }

    //$aa = mysqli_query($db,sprintf("SELECT * FROM users where username = '%s' and password = '%s'", $_SESSION["user"], $_SESSION["pass"]));  
    $aa = GetUserLogin($user, $pass);  

    $match = true;


    if(($aa != "User or Password incorrect" and $aa != "User is deactivated") and isset($_SESSION["user"])){
      $username = mysqli_result($aa,0,"username");
      $password = mysqli_result($aa,0,"password");
      $active   = mysqli_result($aa,0,"active");
    }

#endregion

if ((($user == $username and $pass == $password) and $active) 
        and $username != null and $password != null){
  $match = true;
}
else{
  $match = false;
?>
<br/><br/><br/><br/><br/>
<center>
<img src="botrow.png" width = "182" height = "43"><br/>
<form method="post" action="<?php $_PHP_SELF ?>">
        <?php if (!$match and (isset($_REQUEST['login']) and isset($_REQUEST['password']))) {?>
            <p class="loginError"><?php if(gettype($aa) == 'object') { echo 'Error logging in. Please try again'; } else { echo $aa; } ?></p>
        <?php } else  {?>
          <br><br><br>
        <?php }?>
        <p><input type="text" name="login" value="" placeholder="Username" autocomplete="username"></p>
        <p><input type="password" name="password" value="" placeholder="Password" autocomplete="current-password"></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
</center>
<script>
  var field = document.querySelector('[name="login"]');
  var field2 = document.querySelector('[name="password"]');        
  field.addEventListener('keypress', function ( event ) { preventSpaces(event); });
  field2.addEventListener('keypress', function ( event ) { preventSpaces(event); });

  function preventSpaces( event ){ 
    var key = event.keyCode;
      if (key === 32) {
        event.preventDefault();
      }
  }
</script>
<?php

exit();
}



?>
