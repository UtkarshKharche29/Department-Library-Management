<?php

include "index2.php";
$new_keyword=$_GET["keyword"];


//Search the database for the particular word
	

$sql = "SELECT Book_ID, Book_Name, Author_Name, Publication, Available FROM books WHERE Book_ID LIKE '%" . $new_keyword . "%'";
$result = $mysqli->query($sql);

$sql1 = "SELECT Book_ID, Book_Name, Author_Name, Publication, Available FROM books WHERE Book_Name LIKE '%" . $new_keyword . "%'";
$result1 = $mysqli->query($sql1);

$sql2 = "SELECT Book_ID, Book_Name, Author_Name, Publication, Available FROM books WHERE Publication LIKE '%" . $new_keyword . "%'";
$result2 = $mysqli->query($sql2);

$sql3 = "SELECT Book_ID, Book_Name, Author_Name, Publication, Available FROM books WHERE Author_Name LIKE '%" . $new_keyword . "%'";
$result3 = $mysqli->query($sql3);

 

 while($row = $result->fetch_assoc())

  {

  echo "<tr>";

  
  echo "<td>" . $row['Book_ID'] . "</td>";
  
  echo "<td>" . $row['Book_Name'] . "</td>";
  
  echo "<td>" . $row['Author_Name'] . "</td>";
 
  echo "<td>" . $row['Publication'] . "</td>";
  
  echo "<td>" . $row['Available'] . "</td>";

  echo '<td><form action="issuebook_stud.php" method="POST"><input type="hidden" name="bookid" value="' . $row['Book_ID'] . '"><input type="submit" class="issuebtn" value="Issue"></form></td>';
  
  echo "</tr>";

  }

  
while($row = $result1->fetch_assoc())

  {

  echo "<tr>";

  
  echo "<td>" . $row['Book_ID'] . "</td>";
  
  echo "<td>" . $row['Book_Name'] . "</td>";
  
  
  echo "<td>" . $row['Author_Name'] . "</td>";
  
  echo "<td>" . $row['Publication'] . "</td>";
 
  echo "<td>" . $row['Available'] . "</td>";

  echo '<td><form action="issuebook_stud.php" method="POST"><input type="hidden" name="bookid" value="' . $row['Book_ID'] . '"><input type="submit" class="issuebtn" value="Issue"></form></td>';
    
  echo "</tr>";

  }
  
  while($row = $result2->fetch_assoc())

  {

  echo "<tr>";

  
  echo "<td>" . $row['Book_ID'] . "</td>";
  
  echo "<td>" . $row['Book_Name'] . "</td>";
  
  echo "<td>" . $row['Author_Name'] . "</td>";
  
  echo "<td>" . $row['Publication'] . "</td>";
  

   echo "<td>" . $row['Available'] . "</td>";

    echo "</tr>";

  }

  while($row = $result3->fetch_assoc())

  {

  echo "<tr>";

  
  echo "<td>" . $row['Book_ID'] . "</td>";
  
  echo "<td>" . $row['Book_Name'] . "</td>";
  
  
  echo "<td>" . $row['Author_Name'] . "</td>";
  
  echo "<td>" . $row['Publication'] . "</td>";
  
	
	 echo "<td>" . $row['Available'] . "</td>";

  
    echo "</tr>";

  }

  
  
echo "</table>";

 

$mysqli->close();
