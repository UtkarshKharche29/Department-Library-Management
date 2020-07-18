<?php

include "./index2.php";
$new_Book_ID=$_GET["Book_ID"];
$new_Book_Name=$_GET["Book_Name"];
$new_Author_Name=$_GET["Author_Name"];
$new_Publication=$_GET["Publication"];
$new_Available=$_GET["Available"];

$sql = "INSERT INTO books (Book_ID, Book_Name, Author_Name, Publication, Available) VALUES ('$new_Book_ID', '$new_Book_Name', '$new_Author_Name', '$new_Publication', '$new_Available')";

$result = $mysqli->query($sql);

?>

