<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">


<head>
	<title>Admin Section</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">

		<link rel="stylesheet" type="text/css" href="../css/add_book.css">
</head>

<body>
	<center>
	<img src="../img/ICON.png">
	</center>
	<div class="box">
		<marquee direction="lefts">Welcome To Computer Department Liabrary</marquee>
	</div>
	<center>
	<br>
		<input type="submit" class="btn" value="Log Out" onClick="location.href='homepage.php'">
		<button class="btn" onclick="location.href='addbook.php'" id="update">Add Books</button>

	</center>
	<script src="../js/back.js">
	</script>

		<div class="floating-box">
			<center><br><br>
				<a href="admin_faculty.php">
				<img src="../img/faculty.png" height="100" width="100"></img></a>
				<h2>Faculty</h2>
			</center>
		</div>

	<div class="floating-box">
		<center><br><br>
			<a href="admin_student.php">
			<img src="../img/student.png" height="100" width="100"></img><a/>
			<h2>Students</h2>
		</center>
	</div>
	<div class="floating-box">
		<center><br><br>
			<a href="req_booklist.php">
			<img src="../img/book1.png" height="100" width="100"></img><a/>
			<h2>Requested Books</h2>
		</center>
	</div>


	</body>
</html>
