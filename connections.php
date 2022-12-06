<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "kidsweb";

global $con;

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
    die("failed to connect to kidsweb database");
}

?>