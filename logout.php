<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/png" href="favicon.png">
<META http-equiv="refresh" content="2;URL=index.php">
</head>
<body>

<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
?>
<center>
logging out....
</center>
</body>
</html>