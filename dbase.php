<?php
$configs = require('global_configs.php');
$dbHost = $configs['dbHost']; 
$dbUser = $configs['dbUser']; 
$dbPass = $configs['dbPass']; 
$dbDatabase = $configs['dbDatabase']; 

$db =  mysqli_connect("$dbHost", "$dbUser", "$dbPass") or die ("Error connecting to database."); 
 mysqli_select_db($db, "$dbDatabase") or die ("Couldn't select the database.");

$_SESSION['db'] = $db; 

date_default_timezone_set('America/Toronto');

if(!function_exists("mysqli_result")){
    function mysqli_result($result, $row, $field=0)
    {
        if ($result===false) {
            return false;
        }
        if ($row>=mysqli_num_rows($result)) {
            return false;
        }
        if (is_string($field) && !(strpos($field, ".")===false)) {
            $t_field=explode(".", $field);
            $field=-1;
            $t_fields=mysqli_fetch_fields($result);
            for ($id=0;$id<mysqli_num_fields($result);$id++) {
                if ($t_fields[$id]->table==$t_field[0] && $t_fields[$id]->name==$t_field[1]) {
                    $field=$id;
                    break;
                }
            }
            if ($field==-1) {
                return false;
            }
        }
        mysqli_data_seek($result, $row);
        $line=mysqli_fetch_array($result);
        return isset($line[$field])?$line[$field]:false;
    }
}
