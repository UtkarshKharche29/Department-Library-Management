<?php
   

include "index2.php";

      // username and password sent from form 
      
      $new_SDRN_No=$_GET["SDRN_No"];
	  $new_password=$_GET["Password"];
      
      $sql = "SELECT * faculty WHERE SDRN_No = '$new_SDRN_No'";
      $result = $mysqli->query($sql);
	  
	  
	  
	  if($new_SDRN_No==$new_password)
	{
		$sql1 = "SELECT * FROM faculty WHERE SDRN_No LIKE '%" . $new_SDRN_No . "%'";
		$result1 = $mysqli->query($sql1);
			

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

	 
 

 

$mysqli->close();
		
?>	

