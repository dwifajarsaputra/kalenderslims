<?php

define("DB_HOST", "127.0.0.1"); //Database Server Address
define("DB_PORT", "3306");		//Database Port
define("DB_NAME", "slims7"); //Database Name
define("DB_USER", "admin");	//Database Username
define("DB_PASS", "admin"); //Database Password

$dbs = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
 if (mysqli_connect_error()) {
        die('<div style="border: 1px dotted #FF0000; color: #FF0000; padding: 5px;">Error Connecting to Database. Please check your configuration</div>');
    }
?>
