<?php

include "index2.php";



//Search the database for the particular word

$sql = "SELECT Book_ID, Book_Name, Publication, Author_Name FROM books WHERE issue_status = 0";
$result = $mysqli->query($sql);


while ($row = $result->fetch_assoc()) {

  echo "<tr>";

  echo "<td>" . $row['Book_ID'] . "</td>";

  echo "<td>" . $row['Book_Name'] . "</td>";

  echo "<td>" . $row['Author_Name'] . "</td>";

  echo "<td>" . $row['Publication'] . "</td>";

  echo '<td><form action="search_books_fac.php" method="POST"><input type="hidden" name="bookid" value="' . $row['Book_ID'] . '"><input type="submit" name="issue" class="issuebtn" value="Issue"></form></td>';

  echo "</tr>";

}

echo "</table>";



$mysqli->close();

?>
