<?php

include "index2.php";
$new_keyword=$_GET["keyword"];

$sql = "SELECT Roll_No, Book_ID, Book_Name, Issue_Date, Return_Date FROM stud_book WHERE Roll_No LIKE '%" . $new_keyword . "%'";
$result = $mysqli->query($sql);

 while($row = $result->fetch_assoc())
  {
  echo "<tr>";
  echo "<td>" . $row['Roll_No'] . "</td>";
  echo "<td>" . $row['Book_ID'] . "</td>";
  echo "<td>" . $row['Book_Name'] . "</td>";
  echo "<td>" . $row['Issue_Date'] . "</td>";
  echo "<td>" . $row['Return_Date'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
$mysqli->close();
?>