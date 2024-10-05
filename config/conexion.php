<?php 
    // DB credentials.
    define('DB_HOST','bh3regdjvve7hhdmm4xr-mysql.services.clever-cloud.com');
    define('DB_USER','uw2ui6scuaeiva09');
    define('DB_PASS','X8gNEUBf8f9uYP2ZSDXJ');
    define('DB_NAME','bh3regdjvve7hhdmm4xr');
    // Establish database connection.
    try {
        $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }
        catch (PDOException $e)
    {
        exit("Error: " . $e->getMessage());
    }