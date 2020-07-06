
<?php
   
include "index2.php";
// username and password sent from form 

	$new_Roll_No = $_SESSION["rollNo"];
	$new_password = $_SESSION["password"];
      
      $sql = "SELECT * stud_book WHERE Roll_No = '$new_Roll_No'";
      $result = $mysqli->query($sql);
	  
	  if($new_Roll_No=="$new_Roll_No" && $new_password=="123")
	{
		$sql1 = "SELECT * FROM stud_book WHERE Roll_No LIKE '%" . $new_Roll_No . "%'";
		$result1 = $mysqli->query($sql1);
		

	 while($row = $result1->fetch_assoc())

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

}
	
	
	
	else
	{
		
		echo"failed";
	}


//Search the database for the particular word

	 
 

 

$mysqli->close();
		
?>	

