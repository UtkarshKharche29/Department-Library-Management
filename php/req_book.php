<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<head>
	<title>Requested Books</title>
	<link rel="stylesheet" type="text/css" href="../css/register.css">
	<body style="background-color:#CD1A1A">

</head>
<body>

<div class="floating-box">
<form action="req_done.php">
  <div class="container">
    <h1>Requisition Form</h1>
    <hr>

	<label for="SDRN_No"><b>SDRN No.</b></label>
    <input type="text" placeholder="Enter SDRN No" name="SDRN_No" required>

	<label for="Faculty_Name"><b>Faculty Name</b></label>
    <input type="text" placeholder="Enter Faculty Name" name="Faculty_Name" required>


	<label for="Book_Name"><b>Book Name</b></label>
    <input type="text" placeholder="Enter Book Name" name="Book_Name" required>

	<label for="Author_Name"><b>Author Name</label>
    <input type="text" placeholder="Enter Author Name" name="Author_Name"  required>

	<label for="Publication"><b>Publication</b></label>
    <input type="text" placeholder="Enter Publication" name="Publication" required>



    <button type="submit" class="registerbtn">Submit</button>
	  </div>


</form>

</body>
</html>
