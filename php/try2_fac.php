<?php
session_start();

if (isset($_POST["bookid"]) && isset($_POST["issue"])) {
	$_SESSION["bookid"] = $_POST["bookid"];

	require_once "issue_request_fac.php";
}

if (isset($_GET["back"])) {
	header("Location: faculty_details.php");
	return;
}
?>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



<head>
	<title>Books Section</title>

	<link rel="stylesheet" type="text/css" href="../css/book_search.css">

	<link rel="stylesheet" type="text/css" href="../css/button.css">
	<style>
		.issuebtn {
			background-color: red;
			color: white;
			height: 40px;
			border: none;
			cursor: pointer;
			width: 100px;
			border-radius: 4px;
		}
	</style>
</head>

<body>

	<center>
		<img src="../img/ICON.png">
	</center><br>
	<div class="box">
		<marquee direction="lefts">Welcome To Books Section!!!!</marquee>
	</div>
	</center>
	<br>
	<center>

		<form action="try2_fac.php">
			<input type="text" name="keyword" id="myInput" onkeyup="myFunction()" placeholder="Search Books here.." title="Type in a name">
	</center>
	<center><input type="submit" class="btn" value="Search">

		<input type="submit" class="btn" name="back" value="Back">
		</form>
	</center>
		<script src="../js/back.js">
		</script>
		<br>

		<center>
			<?php
			if (isset($_SESSION["msg"])) {
				echo $_SESSION["msg"];
				unset($_SESSION["msg"]);
			}
			?>
			<table id="myTable" border="1">
		</center>
		<tr class="header">
			<th style="width:10%;">Book_ID</th>
			<th style="width:20%;">Book_Name</th>
			<th style="width:20%;">Author_Name</th>
			<th style="width:20%;">Publication</th>
			<th style="width:10%;">Issue</th>
		</tr>
		<?php

		include "index2.php";

		include "new_search_key_fac.php";


		?>



</body>

</html>