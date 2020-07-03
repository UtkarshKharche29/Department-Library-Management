  <?php

  include "index2.php";



  //Search the database for the particular word

  $sql = "SELECT Roll_No, Book_ID, Book_Name, Issue_Date, Return_Date FROM stud_book ";
  $result = $mysqli->query($sql);




  while ($row = $result->fetch_assoc()) {

    echo "<tr>";

    echo "<td>" . $row['Roll_No'] . "</td>";

    echo "<td>" . $row['Book_ID'] . "</td>";

    echo "<td>" . $row['Book_Name'] . "</td>";

    echo "<td>" . $row['Issue_Date'] . "</td>";

    echo "<td>" . $row['Return_Date'] . "</td>";

    echo "<td><button style='background-color:red;color:white;padding:4px 8px 4px 8px;font-weight:200'>Return</button></td>";

    echo "</tr>";
  }




  echo "</table>";



  $mysqli->close();

  ?>
