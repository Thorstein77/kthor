<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_database = "kthordb";

$db =
    mysqli_connect($db_host, $db_user, $db_password, $db_database)
or die("Error - cant connect or find db");
?>