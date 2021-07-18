<?php
   

include "index2.php";
// The Admin Id and Pasword which is submitted from the form
      
      $new_Admin_ID=$_POST["Admin_ID"];
	  $new_password=$_POST["Password"];
	  
// If the Admin ID and Password entered is correct we redirect to the new_admin.php page otherwise we display error message.
	  if($new_Admin_ID=="admin" && $new_password=="admin@123")
	{
		header('location:new_admin.php');
	}
	else
	{
		
		echo"failed";
	}

$mysqli->close();
		
?>	

