<?php
include_once 'config.php';
include_once 'classes/safemysql.class.php';

$db = new SafeMySQL(array("host" => "$host", "user" => "$dbuser", "pass" => "$dbpass", "db" => "$dbname", "charset" => "utf8"));
?>