<?php
$db_host = "kthor.dk.mysql";
$db_user = "kthor_dk";
$db_password = "VJsjaR6ZBrFRQLuoPNCRYdAh";
$db_database = "kthor_dk";

$db =
    mysqli_connect($db_host, $db_user, $db_password, $db_database)
or die("Error - cant connect or find db");
?>