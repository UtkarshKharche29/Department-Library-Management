<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="../css/HOMEPAGE.css">
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

	<div class="col-6 col-s-9">

		<img src="../img/ICON.png">
	</div>
	<div class="col-6 col-s-12">
		<div class="topnav" id="myTopnav">
			<a href="HOMEPAGE.php" class="active">Home</a>
			<a href="10.0.0.12/library/link.html">eBooks</a>
			<div class="dropdown">
				<button class="dropbtn">Login
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
					<a href="admin_login.php">Admin</a>
					<a href="faculty_login.php">Faculty</a>
					<a href="stud_login.php">Student</a>
				</div>
			</div>

			<a href="about.php">About</a>
			<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
		</div>
	</div>

	<script src="../js/HOMEPAGE_1.js">
	</script>

	<br><br><br><br>
	<center>
		<img class="mySlides" src="../img/l1.jpg" style="width:80%;margin-left:1%;height:80%">
		<img class="mySlides" src="../img/l3.jpg" style="width:80%;margin-left:1%;height:80%">
	</center>

	<script src="../js/HOMEPAGE_2.js">
	</script>
	<div class="footer">
		<h6><b style="margin-left:9%;">Developed By:</b> Varsha Kedare, Reema Kharat, Mayuri Kumbhar
			<b style="margin-left:25%;"> Under the Guidance of:</b> Mrs.Apurva Shinde</h6>


	</div>

</body>

</html>