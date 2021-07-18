<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
	<title>Admin Login</title>
	<body style="background-color:#CD1A1A">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
		<link rel="stylesheet" type="text/css" href="../css/back_button.css">
</head>

<body>
	<div class="box">
		<center>
			<img style="margin-top:5%;width:40%;" src="../img/ICON.png">
		</center>
		<form style="margin-left:100px;margin-top:50px;"  action="admin.php"  method="POST">
			<label for="Admin_ID"><b>Admin ID:</b></label><br>
			<input type="text" id="username" name="Admin_ID" color="gray" required><br>
			<label for="password"><b>Password:</b></label><br>
			<input type="password" id="password" name="Password" required>
			<button type="submit" class="btn" id="submit">Sign In</button>

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
