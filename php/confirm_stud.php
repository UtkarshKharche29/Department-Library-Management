<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<head>

	<link rel="stylesheet" type="text/css" href="../css/book_search.css">
	<link rel="stylesheet" type="text/css" href="../css/button.css">

</head>

<body>
	<center>
		<table id="myTable" border="1">
	</center>
	<tr class="header">
		<th style="width:10%;">Book ID</th>
		<th style="width:20%;">Book Name</th>
		<th style="width:20%;">Roll No</th>
		<th style="width:10%;">Issue</th>
		<th style="width:10%;">Reject</th>
	</tr>
	
	<?php

	include "index2.php";

	$sql = "SELECT Roll_No,Book_ID,Book_Name FROM issue_request_stud ";
	$result = $mysqli->query($sql);

	while ($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>" . $row['Book_ID'] . "</td>";
		echo "<td>" . $row['Book_Name'] . "</td>";
		echo "<td>" . $row['Roll_No'] . "</td>";
		echo '<td><form action="confirm_book_stud.php" method="POST"><input type="hidden" name="bookid" value="' . $row['Book_ID'] . '"><input type="hidden" name="std_roll" value="' . $row['Roll_No'] . '"><button style="background-color:red;color:white;padding:4px 8px 4px 8px;font-weight:200" type="submit" value="Delete" id="btn1">Confirm</button></form></td>';
		echo '<td><form action="reject_book_stud.php" method="POST"><input type="hidden" name="bookid" value="' . $row['Book_ID'] . '"><input type="hidden" name="std_roll" value="' . $row['Roll_No'] . '"><button style="background-color:red;color:white;padding:4px 8px 4px 8px;font-weight:200" type="submit" value="Delete" id="btn1">Reject</button></form></td>';
		echo "</tr>";
	}
	echo "</table>";

	?>

	<?php
	include "index2.php";
	?>

</body>
</html>