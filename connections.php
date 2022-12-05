<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "kidsweb";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
    die("failed to connect to kidsweb database");
}

?>