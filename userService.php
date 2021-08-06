<?php
require('dbase.php');
require_once('DatabaseConnector.php');

$NO_USERS_FOUND = "No users found";
$USER_NOT_FOUND = "User not found";
$USER_NOT_ACTIVE = "User is deactivated";
$NO_MATCH_FOUND = "User or Password incorrect";
$USER_NOT_CREATED = "User already exists";
$PASSWORD_UPDATE_FAILED = "Password Update Failed";
$DELETE_USER_FAILED = "User could not be deleted";
$NO_PERMISSIONS_FOUND = "User does not have any permissions assigned.";
$PERMISSION_UPDATE_FAILED = "Permission update failed.";
$USER_NOT_DISABLED_FULLY = "User permissions could not be disabled";
$PERMISSION_CODE_NOTE_FOUND = "Permission Code could not be found";
$USER_PERMISSIONS_ADDED = "Permission added to users";
$DEFAULT_LOGIN = "";

function isAdminUser($username){
    $query = sprintf("SELECT * FROM permissions WHERE user_id = ( SELECT id FROM users WHERE username = '%s')", $username);
    $userPermissions = mysqli_query(DatabaseConnector::getConnection(), $query);

    
    while ($row = $userPermissions->fetch_assoc()) {
        if($row['description'] == "Admin")
        {
            if($row["active"] == 1){
                return true;
            }
        }
    }
    return false;
}
function GetUsers()
{
    $query = sprintf("SELECT * FROM users");
    
    $queryResults = mysqli_query(DatabaseConnector::getConnection(), $query);
    $recordCount = mysqli_num_rows($queryResults);

    if ($recordCount) {
        return $queryResults;
    }

    return $GLOBALS['NO_USERS_FOUND'];
}

function GetFirstUserID(){
    $query = sprintf("SELECT username, min(id) as 'id' from users");
    $queryResults = mysqli_query(DatabaseConnector::getConnection(), $query);
    return $queryResults;
}

function GetUserByName($username)
{
    $query = sprintf("SELECT * FROM users WHERE username like '%s'", $username);

    $queryResults = mysqli_query(DatabaseConnector::getConnection(), $query);
    $recordCount = mysqli_num_rows($queryResults);

    if ($recordCount) {
        return $queryResults;
    }

    return $GLOBALS['USER_NOT_FOUND'];
}

function GetUserLogin($username, $password)
{
    if($username == '' and $password == ''){
        return $GLOBALS['DEFAULT_LOGIN'];
    }
    
    $query = sprintf("SELECT * FROM users WHERE username = '%s' and password = '%s'", trim($username), trim($password));

    $queryResults = mysqli_query(DatabaseConnector::getConnection(), $query);
    $activeUser = mysqli_result($queryResults, 0, "active");

    if($queryResults->num_rows == 0){
        return $GLOBALS['NO_MATCH_FOUND'];
    }

    if($activeUser == 1){
        return $queryResults;
    }else{
        return $GLOBALS['USER_NOT_ACTIVE'];
    }
}

function CreateUser($username, $password, $taxRate = -1, $abbrev = "", $resort = "", $accessCode = -1)
{
    $query =  sprintf('INSERT INTO users (username , password , active)
                 VALUES ("%s" , "%s" , "%s")', $username, $password, "1");
    if (GetUserByName($username) == $GLOBALS['USER_NOT_FOUND']) {
		
        $queryResults = mysqli_query(DatabaseConnector::getConnection(), $query);

        addAllPermissionsToNewUser($username);

        return $queryResults;
    }

    return $GLOBALS['USER_NOT_CREATED'];
}

function UpdateUserPassword($username, $password)
{
    $query = sprintf('UPDATE users SET password = "%s" WHERE username = "%s"', $password, $username);

    if (GetUserByName($username) !=  $GLOBALS['USER_NOT_FOUND']){
        $queryResults = mysqli_query(DatabaseConnector::getConnection(), $query);
        $recordCount = $queryResults;

        if ($recordCount) {
            return $queryResults;
        }

        return $GLOBALS['PASSWORD_UPDATE_FAILED'];
    }

    return $GLOBALS['PASSWORD_UPDATE_FAILED'];
}

function DeleteUser($username)
{
    $query = sprintf('UPDATE users SET active = 0 WHERE username = "%s"', $username);

    if (GetUserByName($username) !=  $GLOBALS['USER_NOT_FOUND']){
        $queryResults = mysqli_query(DatabaseConnector::getConnection(), $query);
        $recordCount = $queryResults;

        if ($recordCount) {
            disableAllUserPermissions($username);
            return $queryResults;
        }

        return $GLOBALS['DELETE_USER_FAILED'];
    }

    return $GLOBALS['DELETE_USER_FAILED'];
}

function ActivateUser($username)
{
    $query = sprintf('UPDATE users SET active = 1 WHERE username = "%s"', $username);

    if (GetUserByName($username) !=  $GLOBALS['USER_NOT_FOUND']){
        $queryResults = mysqli_query(DatabaseConnector::getConnection(), $query);
        $recordCount = $queryResults;

        if ($recordCount) {
            return $queryResults;
        }

        return $GLOBALS['DELETE_USER_FAILED'];
    }

    return $GLOBALS['DELETE_USER_FAILED'];
}