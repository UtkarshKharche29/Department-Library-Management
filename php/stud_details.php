<?php
   


include "index2.php";

      // username and password sent from form 
      
      $new_Roll_No=$_GET["Roll_No"];
	  $new_password=$_GET["Password"];
      
      $sql = "SELECT * FROM students WHERE Roll_No = '$new_Roll_No'";
      $result = $mysqli->query($sql);
	  
	  if($new_Roll_No=="$new_Roll_No" && $new_password=="123")
	{
		$sql1 = "SELECT * FROM students WHERE Roll_No LIKE '%" . $new_Roll_No . "%'";
		$result1 = $mysqli->query($sql1);
		
	 while($row = $result1->fetch_assoc())

	{

		echo "<tr>";

		echo "<td>" . $row['Roll_No'] . "</td>";
  
		echo "<td>" . $row['First_Name'] . "</td>";
  
		echo "<td>" . $row['Middle_Name'] . "</td>";
  
		echo "<td>" . $row['Last_Name'] . "</td>";
	
		echo "<td>" . $row['Email_ID'] . "</td>";
		
		echo "<td>" . $row['Contact_No'] . "</td>";
		
		echo "<td>" . $row['Year'] . "</td>";
		
		echo "<td>" . $row['Division'] . "</td>";
		
		echo "<td>" . $row['Batch'] . "</td>";
  
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

