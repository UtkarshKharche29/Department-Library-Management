<?php
   

include "index2.php";

      // username and password sent from form 
      
      $new_Admin_ID=$_GET["Admin_ID"];
	  $new_password=$_GET["Password"];
      
    
	  
	  if($new_Admin_ID=="admin" && $new_password=="admin@123")
	{
		header('location:new_admin.php');
	}
	else
	{
		
		echo"failed";
	}


//Search the database for the particular word

	 
 

 

$mysqli->close();
		
?>	

