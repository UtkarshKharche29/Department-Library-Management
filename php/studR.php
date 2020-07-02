<?php

include "index2.php";
$new_Roll_No=$_GET["Roll_No"];
$new_First_Name=$_GET["First_Name"];
$new_Middel_Name=$_GET["Middle_Name"];
$new_Last_Name=$_GET["Last_Name"];
$new_Email_ID=$_GET["Email_ID"];
$new_Contact_No=$_GET["Contact_No"];
$new_Year=$_GET["Year"];
$new_Division=$_GET["Division"];
$new_Batch=$_GET["Batch"];



$sql = "INSERT INTO students (Roll_No, First_Name, Middle_Name, Last_Name, Email_ID, Contact_No, Year, Division, Batch) VALUES ('$new_Roll_No', '$new_First_Name', '$new_Middel_Name', '$new_Last_Name', '$new_Email_ID', '$new_Contact_No', '$new_Year', '$new_Division', '$new_Batch' )";


$result = $mysqli->query($sql);

?>

