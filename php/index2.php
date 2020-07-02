<?php

$host = "localhost";
$username = "utkarsh";
$user_pass = "29october";
$database_in_use = "dlm";


$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


?>
