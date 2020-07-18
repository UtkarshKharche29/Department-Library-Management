  <?php

  include "index2.php";

  $sql = "SELECT Roll_No, Book_ID, Book_Name, Issue_Date, Return_Date FROM stud_book ";
  $result = $mysqli->query($sql);

  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['Roll_No'] . "</td>";
    echo "<td>" . $row['Book_ID'] . "</td>";
    echo "<td>" . $row['Book_Name'] . "</td>";
    echo "<td>" . $row['Issue_Date'] . "</td>";
    echo "<td>" . $row['Return_Date'] . "</td>";
    echo "";
    echo '<td><form action="deletebook_stud.php" method="POST"><input type="hidden" name="bookid" value="' . $row['Book_ID'] . '"><input type="hidden" name="std_roll" value="' . $row['Roll_No'] . '"><button style="background-color:red;color:white;padding:4px 8px 4px 8px;font-weight:200" type="submit" value="Delete" id="btn1">Return</button></form></td>';
  }

  echo "</table>";

  $mysqli->close();
  ?>
