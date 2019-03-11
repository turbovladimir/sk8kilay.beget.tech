<?php
include_once 'classes/safemysql.class.php';
$dbuser =   'sk8kilay_test';
$dbpass =   'hq2*9gW1';
$dbname =   'sk8kilay_test';
$host   =   'localhost';
$db = new SafeMySQL(array("host" => "$host", "user" => "$dbuser", "pass" => "$dbpass", "db" => "$dbname", "charset" => "utf8"));
?>