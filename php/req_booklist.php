<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



<head>
	<title>Book Requisition Section</title>

	<link rel="stylesheet" type="text/css" href="../css/book_search.css">

	<link rel="stylesheet" type="text/css" href="../css/button.css">

</head>

<body>

	<center>
	<img src="../img/ICON.png">
	</center><br>
	<div class="box">
		<marquee direction="lefts">Welcome To Book Requisition Section!!!!</marquee>
	</div>
	</center>
	<br>
<center>


<a href="download.php?export=true">
<input type="button" class="btn" value="Download"></a>
<input type="submit" class="btn" value="Back" onclick="goBack()"></center>
 <script src="../js/back.js">
 </script>

</center>


<br><br>
	<center>
	<table id="myTable" border="1"></center>
	<tr class="header">
		<th style="width:10%;">SDRN_No</th>
		<th style="width:15%;">Faculty_Name</th>
		<th style="width:15%;">Book_Name</th>
		<th style="width:20%;">Author_Name</th>
		<th style="width:20%;">Publication</th>
		<th style="width:20%;">Date_Time</th>

	 </tr>

	<?php

		include "index2.php";

		include "req_b.php";

	?>
	<br>
