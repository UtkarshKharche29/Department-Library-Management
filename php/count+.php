<?php
include "index2.php";

$new_Book_ID=$_GET["Book_ID"];
$new_Available=$_GET["Available"];
$sql = "select Available from books where Book_ID='$new_Book_ID'";

$result1 = $mysqli->query($sql);
?>