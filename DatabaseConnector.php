<?php
class DatabaseConnector {

    private static $db;
    private $connection;
    private function __construct() {
        $configs = require('global_configs.php');
        $this->connection = mysqli_connect($configs['dbHost'], $configs['dbUser'],$configs['dbPass'],$configs['dbDatabase']);
    }

    function __destruct() {
        $this->connection->close();
    }

    public static function getConnection() {
        if (self::$db == null) {
            self::$db = new DatabaseConnector();
        }
        return self::$db->connection;
    }

}

?>