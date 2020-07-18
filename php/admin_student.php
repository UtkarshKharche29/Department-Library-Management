<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<head>
	<title>Student Section</title>

	<link rel="stylesheet" type="text/css" href="../css/book_search.css">

	<link rel="stylesheet" type="text/css" href="../css/button.css">

</head>

<body>

	<center>
		<img src="../img/ICON.png">
	</center><br>
	<div class="box">
		<marquee direction="lefts">Welcome To Students Section!!!!</marquee>
	</div>
	</center>
	<br>
	<center>
</form>
<input type="submit" class="btn" value="Log Out" onClick="location.href='homepage.php'">
<br />
<br />

<!-- When this button is clicked,auotmatic emails are send according to the conditions mentioned in automate_mail_std.php file -->
<form action="automate_mail_std.php">
	<button type="submit" style="color:white;background-color: red;font-weight:300;padding:3px 6px 3px 6px;font-size: 1.1em">Send Reminder Mails</button>
</form>
<form action="confirm_stud.php">
	<button type="submit" style="color:white;background-color: red;font-weight:300;padding:3px 6px 3px 6px;font-size: 1.1em">Confirm Issue</button>
</form>

<form action="try2.php">
	<input type="text" name="keyword" id="myInput" onkeyup="myFunction()" placeholder="Search Books here.." title="Type in a name" style="border-color:black;" required>
	</center>
	<center><input type="submit" class="btn" value="Search">
</form>
<input type="submit" class="btn" value="Back" onclick="goBack()"></center><br>
<script src="../js/back.js">
</script>

<center>
	<table id="myTable" border="1">
</center>
<tr class="header">
	<th style="width:10%;">Book_ID</th>
	<th style="width:20%;">Book_Name</th>
	<th style="width:20%;">Author_Name</th>
	<th style="width:20%;">Publication</th>
</tr>


	<?php

	include "index2.php";

	$sql = "SELECT Book_ID, Book_Name, Publication, Author_Name FROM books ";
	$result = $mysqli->query($sql);


	while ($row = $result->fetch_assoc()) {

		echo "<tr>";

		echo "<td>" . $row['Book_ID'] . "</td>";
		echo "<td>" . $row['Book_Name'] . "</td>";
		echo "<td>" . $row['Author_Name'] . "</td>";
		echo "<td>" . $row['Publication'] . "</td>";

		echo "</tr>";
	}

	echo "</table>";

	?>

	<hr>
	<hr>
	<form action="try3.php">
		<input type="text" name="keyword" id="myInput" onkeyup="myFunction()" placeholder="Search Student Roll No here.." title="Type in a name" style="border-color:black;" required></center>
		<center><input type="submit" class="btn" value="Search">
	</form>
	<input type="submit" class="btn" value="Back" onclick="goBack()"></center><br>
	<script src="../js/back.js">
	</script>

	<center>
		<table id="myTable" border="1">
	</center>
	<tr class="header">
		<th style="width:10%;">Roll_No</th>
		<th style="width:20%;">Book_ID</th>
		<th style="width:20%;">Book_Name</th>
		<th style="width:20%;">Issue_Date</th>
		<th style="width:10%;">Return_Date</th>
		<th style="width:10%;">Return</th>

	</tr>

	<?php

	include "index2.php";

	include "student_section.php";

	?>
</body>
</html>