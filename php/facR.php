<?php

include "index2.php";
$new_SDRN_No=$_GET["SDRN_No"];
$new_First_Name=$_GET["First_Name"];
$new_Middel_Name=$_GET["Middle_Name"];
$new_Last_Name=$_GET["Last_Name"];
$new_Email_ID=$_GET["Email_ID"];
$new_Contact_No=$_GET["Contact_No"];



$sql = "INSERT INTO faculty (SDRN_No, First_Name, Middle_Name, Last_Name, Email_ID, Contact_No) VALUES ('$new_SDRN_No', '$new_First_Name', '$new_Middel_Name', '$new_Last_Name', '$new_Email_ID', '$new_Contact_No')";


$result = $mysqli->query($sql);

?>

