<?php

include "index2.php";
$new_keyword=$_GET["keyword"];

$sql = "SELECT SDRN_No, Book_ID, Book_Name, Issue_Date, Return_Date FROM fac_book WHERE SDRN_No LIKE '%" . $new_keyword . "%'";
$result = $mysqli->query($sql);

 while($row = $result->fetch_assoc())
  {
  echo "<tr>";
  echo "<td>" . $row['SDRN_No'] . "</td>";
  echo "<td>" . $row['Book_ID'] . "</td>";
  echo "<td>" . $row['Book_Name'] . "</td>";
  echo "<td>" . $row['Issue_Date'] . "</td>";
  echo "<td>" . $row['Return_Date'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
$mysqli->close();
?>