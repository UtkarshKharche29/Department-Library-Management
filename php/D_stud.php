<?php

include "index2.php";
$new_Roll_No=$_GET["Roll_No"];
$new_Book_ID=$_GET["Book_ID"];


$sql = "DELETE FROM stud_book WHERE Roll_No ='$new_Roll_No'AND Book_ID='$new_Book_ID'";



$result = $mysqli->query($sql);

$sqll = "UPDATE 
books SET Available = Available + 1
WHERE Book_ID = '$new_Book_ID' ";

$result1 = $mysqli->query($sqll);



?>
