
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	
	
<head>
	<title>Update Completed</title>
	<link rel="stylesheet" type="text/css" href="../css/feR.css">
	<link rel="stylesheet" type="text/css" href="../css/button.css">
</head>
<style>
.floating{ background-color:white;
					float: left;
					margin-left:28%;
					margin-top:3%;
					width: 45%;
					height: 250px;
					border: 3px ;  
					box-shadow:1px 2px 4px;
				  }
</style>
<body>
	<center>
	<img src="../img/ICON.png">
	</center>
	<div class="box">
		<marquee direction="lefts">Update Successfully!!!!</marquee>
	</div>
	
	
<?php


include "./index2.php";

include "./U_stud.php";

?>
<br>
<center>
<input type="submit" class="btn" value="Log Out" onClick="location.href='./homepage.php'">
<input type="submit" class="btn" value="Back" onclick="goBack()"></center>
 <script src="../js/back.js">
 </script>

<div class="floating"><h3>
<ul type="circle">
<li><?php echo "Roll No.= $new_Roll_No"?></li><br>
<li><?php echo "Book ID= $new_Book_ID"?></li><br>
<li><?php echo "Book Name= $new_Book_Name"?></li><br>
<li><?php echo "Issue Date= $new_Issue_Date"?></li><br>
<li><?php echo "Return Date= $new_Return_Date"?></li><br>

</ul>
</div>
