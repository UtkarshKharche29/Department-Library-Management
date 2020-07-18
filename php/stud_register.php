<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
	<title>FE Student Registartion</title>
	<link rel="stylesheet" type="text/css" href="../css/stud_register.css">
	<body style="background-color:#CD1A1A">
</head>
<body>
<div class="floating-box">
<form action="reg_stud.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

	<label for="Roll_No"><b>Roll No.</b></label>
    <input type="text" placeholder="Enter Roll No." name="Roll_No" required>

    <label for="Name"><b>Name</b></label>
    <input type="text" placeholder="Enter First Name" name="First_Name" required>
	<input type="text" placeholder="Enter Middle Name" name="Middle_Name" required>
	<input type="text" placeholder="Enter Last Name" name="Last_Name" required>

	<label for="Email_ID"><b>Email ID</b></label>
    <input type="email" placeholder="Enter Email" name="Email_ID" required>

	<label for="Contact_No"><b>Contact No.</b></label>
    <input type="text" placeholder="Enter Contact No." name="Contact_No" required>

	<label for="Year"><b>Year</label>
	<select name="Year" required>
	<option value="" disabled selected>Select Year</option>
      <option value="FE">FE</option>
      <option value="SE">SE</option>
      <option value="TE">TE</option>
	  <option value="BE">BE</option>
	  </select>  
	<label for="Division"><b>Division</b></label>
	<select name="Division" required>
	<option value="" disabled selected>Select Division</option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
	  </select>
  
	<label for="Batch"><b>Batch</b></label>
    <input type="text" placeholder="Enter Batch" name="Batch" required>
    <button type="submit" class="registerbtn">Register</button>
  </div>
  <div class="container signin">
    <p>Already have an account? <a href="stud_login.php">Sign in</a>.</p>
  </div>
</form>
</body>
</html>