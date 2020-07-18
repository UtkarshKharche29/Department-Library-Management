<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
	<title>Faculty Registartion</title>
	<link rel="stylesheet" type="text/css" href="../css/stud_register.css">
	<body style="background-color:#CD1A1A">
</head>
<body>
<div class="floating-box">
  <form action="fac_register.php">
    <div class="container">
      <h1>Register</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
  <label for="SDRN_No"><b>SDRN No.</b></label>
  <input type="text" placeholder="Enter SDRN No." name="SDRN_No" required>
  <label for="Name"><b>Name</b></label>
  <input type="text" placeholder="Enter First Name" name="First_Name" required>
  <input type="text" placeholder="Enter Middle Name" name="Middle_Name" required>
  <input type="text" placeholder="Enter Last Name" name="Last_Name" required>
  <label for="Email_ID"><b>Email ID</b></label>
  <input type="email" placeholder="Enter Email" name="Email_ID" required>
  <label for="Contact_No"><b>Contact No.</b></label>
  <input type="text" placeholder="Enter Contact No." name="Contact_No" required>
  <button type="submit" class="registerbtn">Register</button>
</div>

  <div class="container signin">
    <p>Already have an account? <a href="faculty_login.php">Sign in</a>.</p>
  </div>
</form>
</body>
</html>