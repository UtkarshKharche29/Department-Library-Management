<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<head>
	<title>Admin Section</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
		<link rel="stylesheet" type="text/css" href="../css/add_book.css">
		<style>
		.footer {
			position: fixed;
			left: 0;
			bottom: 0;
			width: 100%;
			background-color: black;
			color: white;

		}
	</style>
</head>
<body>
	<center>
		<img src="../img/ICON.png">
	</center>
	<div class="box">
		<marquee direction="lefts">Welcome To Computer Department Liabrary</marquee>
	</div>
	<center>
	<br />
		<input type="submit" class="btn" value="Log Out" onClick="location.href='homepage.php'">
		<button class="btn" onclick="location.href='addbook.php'" id="update">Add Books</button>
	</center>
	<script src="../js/back.js"></script>
		<div class="floating-box">
			<center><br /><br />
				<a href="admin_faculty.php">
				<img src="../img/faculty.png" height="100" width="100"></img></a>
				<h2>Faculty</h2>
			</center>
		</div>
	<div class="floating-box">
		<center><br /><br />
			<a href="admin_student.php">
			<img src="../img/student.png" height="100" width="100"></img><a/>
			<h2>Students</h2>
		</center>
	</div>
	<div class="floating-box">
		<center><br /><br />
			<a href="req_booklist.php">
			<img src="../img/book1.png" height="100" width="100"></img><a/>
			<h2>Requested Books</h2>
		</center>
	</div>
	<div class="footer">
		<h6><b style="margin-left: 15%">Developed By:</b> Varsha Kedare, Reema Kharat, Mayuri Kumbhar, Riya Thapliyal, Diksha Nigam, Amankumar Singh, Ritika Vanave, Utkarsh Kharache
			<br />
			<b style="margin-left: 35%"> Under the Guidance of:</b> Mrs.Apurva Shinde</h6>
	</div>
	</body>
</html>
