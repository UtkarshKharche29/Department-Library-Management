<?php

include "index2.php";

$new_SDRN_No=$_GET["SDRN_No"];
$new_Faculty_Name=$_GET["Faculty_Name"];
$new_Book_Name=$_GET["Book_Name"];
$new_Author_Name=$_GET["Author_Name"];
$new_Publication=$_GET["Publication"];

$sql = "INSERT INTO requested_books (SDRN_No, Faculty_Name, Book_Name, Author_Name, Publication) VALUES ('$new_SDRN_No', '$new_Faculty_Name' , '$new_Book_Name', '$new_Author_Name', '$new_Publication' )";

$result = $mysqli->query($sql);

?>
