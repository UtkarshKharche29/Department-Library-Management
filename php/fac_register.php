<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">


<head>
	<title>Registartion Completed</title>
	<link rel="stylesheet" type="text/css" href="../css/feR.css">
	<link rel="stylesheet" type="text/css" href="../css/button.css">

</head>
<style>
.floating{ background-color:white;
					float: left;
					margin-left:28%;
					margin-top:3%;
					width: 45%;
					height: 300px;
					border: 3px ;
					box-shadow:1px 2px 4px;
				  }
</style>
<body>
	<center>
	<img src="../img/ICON.png">
	</center>
	<div class="box">
		<marquee direction="lefts">Registration Done Successfully!!!!</marquee>
	</div>


<?php


include "index2.php";

include "facR.php";

?>
<br><center>
<input type="submit" class="btn" value="Log In" onClick="location.href='faculty_login.php'">
<input type="submit" class="btn" value="Back" onclick="goBack()"></center>
 <script src="../js/back.js">
 </script>

<div class="floating"><h3>
<ul type="circle">
<li><?php echo "SDRN No.= $new_SDRN_No"?></li><br>
<li><?php echo "First Name= $new_First_Name"?></li><br>
<li><?php echo "Middle Name= $new_Middel_Name"?></li><br>
<li><?php echo "Last Name= $new_Last_Name"?></li><br>
<li><?php echo "Email ID= $new_Email_ID"?></li><br>
<li><?php echo "Contact No= $new_Contact_No"?></li>


</ul>

</div>
