<?php
   

include "index2.php";

      // username and password sent from form 
      
      $new_SDRN_No = $_SESSION["sdrnNo"];
	  $new_password = $_SESSION["password"];
      
	  
	  if($new_SDRN_No == $new_password)
	{
		$sql1 = "SELECT * FROM faculty WHERE SDRN_No = ".$new_SDRN_No;
		$result1 = mysqli_query($mysqli, $sql1) or trigger_error("Query Failed! SQL: $sql1 - Error: " . mysqli_error($mysqli), E_USER_ERROR);
			

	 while($row = $result1->fetch_assoc())

	{

		echo "<tr>";

		echo "<td>" . $row['SDRN_No'] . "</td>";
  
		echo "<td>" . $row['First_Name'] . "</td>";
  
		echo "<td>" . $row['Middle_Name'] . "</td>";
  
		echo "<td>" . $row['Last_Name'] . "</td>";
	
		echo "<td>" . $row['Email_ID'] . "</td>";
		
		echo "<td>" . $row['Contact_No'] . "</td>";
		
  
		echo "</tr>";

	}

	
	
echo "</table>";

}
	
	
	
	else
	{
		echo"failed";
	}


//Search the database for the particular word
		
?>	

