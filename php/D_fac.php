<?php

include "index2.php";
$new_SDRN_No=$_GET["SDRN_No"];
$new_Book_ID=$_GET["Book_ID"];


$sql = "DELETE FROM fac_book WHERE SDRN_No ='$new_SDRN_No'AND Book_ID='$new_Book_ID'";



$result = $mysqli->query($sql);


$sqll = "UPDATE 
books SET Available = Available + 1
WHERE Book_ID = '$new_Book_ID' ";

$result1 = $mysqli->query($sqll);


?>
