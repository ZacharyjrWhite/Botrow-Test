<?php

$currentUser = $_SESSION["user"];
$query = "SELECT * FROM permissions where user_id = ( select id from users where username = '" . $currentUser . "')";
$userPermissions = mysqli_query($db, $query);


$output = "";

while ($row = $userPermissions->fetch_assoc()) {
    if($row['active'] == 1)
    {
        $_SESSION[$row['description']] = $row['description'];
    }
}
echo $output;