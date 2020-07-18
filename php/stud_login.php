<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
	<title>Student Login</title>
<body style="background-color:#CD1A1A">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link rel="stylesheet" type="text/css" href="../css/back_button.css">
	</head>
	<body>
		<div class="box">
			<center>
				<img style="margin-top:5%;width:40%;" src="../img/ICON.png">
			</center>
			<form style="margin-left:100px;margin-top:50px;" action="student_details.php">
				<label for="rollno"><b>Roll No.:</b></label><br>
				<input type="text" id="rollno" name="Roll_No" color="gray" required><br>
				<label for="pwd"><b>Password:</b></label><br>
				<input type="password" id="pwd" name="Password" required>
				<button type="submit" class="btn">Sign In</button>
				<a href="stud_register.php">
					<h4 style="color:green;margin-left:20%;">Click Here For Registration</h4>
				</a>
		</div>
		</form>
		</div>
		<br />
		<center>
			<form action="HOMEPAGE.php" method="get">
				<input type="submit" class="backbtn" value="Back">
			</form>
		</center>
		<script src="../js/back.js">
		</script>
</body>
</html>