<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>Faculty Login</title>
<body style="background-color:#CD1A1A">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link rel="stylesheet" type="text/css" href="../css/back_button.css">
</head>
	<body>
		<div class="box">
			<center>
				<img style="margin-top:5%;width:40%;" src="../img/ICON.png">
			</center>
			<form style="margin-left:15%;margin-top:8%;" action="faculty_details.php">
				<label for="rollno"><b>SDRN No.:</b></label><br>
				<input type="text" id="rollno" name="SDRN_No" color="gray" required><br>
				<label for="pwd"><b>Password:</b></label><br>
				<input type="password" id="pwd" name="Password" required>
				<button type="submit" class="btn">Sign In</button>
				<a href="faculty_reg.php">
					<h4 style="color:green;margin-left:20%;">Click Here For Registration</h4>
				</a>
			</form>
		</div>
		<br>
		<center>
			<input type="submit" class="backbtn" value="Back" onclick="goBack()">
		</center>
		<script src="../js/back.js">
		</script>
	</body>
</html>