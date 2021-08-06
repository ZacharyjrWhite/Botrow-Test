<?php
require("UserPermissions.php");

function GetUserPermissionsByDescription($keyword)
{
    if (isSET($_SESSION[$keyword])) {
        return true;
    }
    return false;
}

function getUsersPermissions($username){

    $query = "SELECT * FROM permissions WHERE user_id = 
                ( SELECT id FROM users WHERE username = '" . $username . "')";
	
    $queryResults = mysqli_query( DatabaseConnector::getConnection(), $query);
	
	if($queryResults){
    	return $queryResults;
	}
    return $GLOBALS['NO_PERMISSIONS_FOUND'];
}

function toggleUserPermission($permissionsID, $username, $activeFlag){
    if($activeFlag == 1) { $newValue = 0;} else { $newValue = 1; }
    $user = GetUserByName($username);
    
    while ($row = $user->fetch_assoc()) {
        $userID = $row['id'];
    }

    $query = "UPDATE permissions SET active = " . $newValue . " WHERE user_id = " . $userID . " AND id = " . $permissionsID;
    $queryResults = mysqli_query( DatabaseConnector::getConnection(), $query);

    if ($queryResults) {
        return $queryResults;
    }

    return $GLOBALS['PERMISSION_UPDATE_FAILED'];
}

function disableAllUserPermissions($username){
    $user = GetUserByName($username);
    while ($row = $user->fetch_assoc()) {
        $userID = $row['id'];
    }
    $query = "UPDATE permissions SET active = 0 WHERE user_id = " . $userID;
    $queryResults = mysqli_query( DatabaseConnector::getConnection(), $query);

    if ($queryResults) {
        return $queryResults;
    }

    return $GLOBALS['USER_NOT_DISABLED_FULLY'];
}

function addAllPermissionsToNewUser($username){
    $newUser = GetUserByName($username) -> fetch_array();
    $firstUser = GetFirstUserID() -> fetch_array();
    $ID = $firstUser['id'];
    $permissionList = getUsersPermissions($firstUser['username']);

    if($permissionList != 'User does not have any permissions assigned.'){
		while ($row = $permissionList->fetch_assoc()) {
			$userToAdd = $newUser['id'];
			$permCode = $row['permission_code'];
			$description = $row['description'];

			if($description != "Admin"){
				$insertQuery = sprintf("INSERT INTO permissions (user_id, permission_code, description, active) 
					VALUE ('%s', '%s', '%s', 1)", $userToAdd, $permCode, $description);	
			}else{
				$insertQuery = sprintf("INSERT INTO permissions (user_id, permission_code, description, active) 
					VALUE ('%s', '%s', '%s', 0)", $userToAdd, $permCode, $description);	
			}

			mysqli_query( DatabaseConnector::getConnection(), $insertQuery);
		}	
	}

    return $GLOBALS['USER_PERMISSIONS_ADDED']; 
}


//******************************************* */
//
//this is for internal use only
//
//******************************************* */
function getMaxPermissionCode(){
    $query = "SELECT MAX(permission_code) AS 'permission_code' FROM permissions";
    
    $queryResults = mysqli_query( DatabaseConnector::getConnection(), $query);

    if ($queryResults) {
        return $queryResults;
    }

    return $GLOBALS['PERMISSION_CODE_NOT_FOUND'];
}

//******************************************* */
//
//this is for internal use only
//
//******************************************* */
function addNewPermissionToAllUsers($newPermissionDescription){
    $users = GetUsers();
    $permCodes = getMaxPermissionCode();
    while ($row = $permCodes->fetch_assoc()) {
        $maxPermCode = $row['permission_code'];
    }
    while ($user = $users->fetch_assoc()) {
        $insertQuery = sprintf("INSERT INTO permissions (user_id, permission_code, description, active) 
                                VALUE ('%s', '%s', '%s', 0)", $user['id'], $maxPermCode + 1, $newPermissionDescription); 
        $queryResults = mysqli_query( DatabaseConnector::getConnection(), $insertQuery);
    }

    return $GLOBALS['USER_PERMISSIONS_ADDED']; 
}