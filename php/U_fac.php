<?php

include "index2.php";
$new_SDRN_No=$_GET["SDRN_No"];
$new_Book_ID=$_GET["Book_ID"];
$new_Book_Name=$_GET["Book_Name"];
$new_Issue_Date=$_GET["Issue_Date"];
$new_Return_Date=$_GET["Return_Date"];

$sql = "INSERT INTO fac_book (SDRN_No, Book_ID, Book_Name, Issue_Date, Return_Date) VALUES ('$new_SDRN_No','$new_Book_ID', '$new_Book_Name', '$new_Issue_Date','$new_Return_Date' )";

$result = $mysqli->query($sql);

$sqll = "UPDATE books SET Available = Available - 1 WHERE Book_ID = '$new_Book_ID'";
$result1 = $mysqli->query($sqll);

?>
