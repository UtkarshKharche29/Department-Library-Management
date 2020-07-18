<?php
include "index2.php";

$sql = "SELECT SDRN_No, Book_ID, Book_Name, Issue_Date, Return_Date FROM fac_book ";
$result = $mysqli->query($sql);

 while($row = $result->fetch_assoc())
  {
    echo "<tr>";
    echo "<td>" . $row['SDRN_No'] . "</td>";
    echo "<td>" . $row['Book_ID'] . "</td>";
    echo "<td>" . $row['Book_Name'] . "</td>";
    echo "<td>" . $row['Issue_Date'] . "</td>";
    echo "<td>" . $row['Return_Date'] . "</td>";
    echo '<td><form action="deletebook_fac.php" method="POST"><input type="hidden" name="bookid" value="' . $row['Book_ID'] . '"><input type="hidden" name="sdrn" value="' . $row['SDRN_No'] . '"><button style="background-color:red;color:white;padding:4px 8px 4px 8px;font-weight:200" type="submit" value="Delete" id="btn1">Return</button></form></td>';
    echo "</tr>";
  }

echo "</table>";
$mysqli->close();		
?>