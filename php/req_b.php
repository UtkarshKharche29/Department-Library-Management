<?php

include "index2.php";

$sql = "SELECT * FROM requested_books";
$result = $mysqli->query($sql);

 while($row = $result->fetch_assoc())
{
  echo "<tr>";
  echo "<td>" . $row['SDRN_No'] . "</td>";
  echo "<td>" . $row['Faculty_Name'] . "</td>";
  echo "<td>" . $row['Book_Name'] . "</td>";
  echo "<td>" . $row['Author_Name'] . "</td>";
  echo "<td>" . $row['Publication'] . "</td>";
  echo "<td>" . $row['Date_Time'] . "</td>";
  echo "</tr>";
  }

echo "</table>";
?>