<?php

$dbhost = "localhost";
$username="s2224089";
$password="uwierahJ";
$database="s2224089";

mysql_connect($dbhost,$username,$password) or die('Error connecting to mysql');
mysql_select_db($database) or die("Unable to select database");


?>