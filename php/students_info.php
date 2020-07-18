
<?php
   
include "index2.php";

	$new_Roll_No = $_SESSION["rollNo"];
	$new_password = $_SESSION["password"];
	  
	  if($new_Roll_No=="$new_Roll_No" && $new_password=="123")
	{
		$sql1 =	"SELECT * FROM stud_book WHERE Roll_No = '".$new_Roll_No."'";
		$result1 = mysqli_query($mysqli, $sql1) or trigger_error("Query Failed! SQL: $sql1 - Error: " . mysqli_error($mysqli), E_USER_ERROR);
		
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

$mysqli->close();
		
?>	

