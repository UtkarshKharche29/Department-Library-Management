<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
<head>
	<title>Books Registartion</title>
	<link rel="stylesheet" type="text/css" href="../css/stud_register.css">
	<body style="background-color:#CD1A1A">

</head>
<body>

<div class="floating-box">
<form action="book_add.php">
  <div class="container">
    <h1>Add Book</h1>
    <p>Please fill the details about Book.</p>
    <hr>

	<label for="Book_ID"><b>Book ID</b></label>
    <input type="text" placeholder="Enter Book ID" name="Book_ID" required>
	
	<label for="Book_Name"><b>Book Name</label>
    <input type="text" placeholder="Enter Book Name" name="Book_Name" required>
	
	<label for="Author_Name"><b>Author Name</label>
    <input type="text" placeholder="Enter Author Name" name="Author_Name" required>
	
	<label for="Publication"><b>Publication</b></label>
    <input type="text" placeholder="Enter Publication" name="Publication" required>

	<label for="Available"><b>Available Books</b></label>
    <input type="text" placeholder="Enter Availables Books" name="Available" required>

    <button type="submit" class="registerbtn">Add Book</button>
  </div>

  
</form>

</body>
</html>
