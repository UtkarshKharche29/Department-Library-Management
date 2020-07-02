<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



<head>
	<title>Faculty Section</title>

	<link rel="stylesheet" type="text/css" href="../css/book_search.css">

	<link rel="stylesheet" type="text/css" href="../css/button.css">

</head>

<body>

	<center>
	<img src="../img/ICON.png">
	</center><br>
	<div class="box">
		<marquee direction="lefts">Welcome To Faculty Section!!!!</marquee>
	</div>
	</center>
	<br>
<center>

<form action="try2.php">
<input type="text" name="keyword" id="myInput" onkeyup="myFunction()" placeholder="Search Books here.." title="Type in a name" style="border-color:black;"required></center>
<center><input type="submit" class="btn" value="Search">
</form>
<input type="submit" class="btn" value="Back" onclick="goBack()"></center><br>
 <script src="../js/back.js">
 </script>

<center>
<table id="myTable" border="1"></center>
  <tr class="header">
    <th style="width:10%;">Book_ID</th>
    <th style="width:20%;">Book_Name</th>
	<th style="width:20%;">Author_Name</th>
	<th style="width:20%;">Publication</th>
	<th style="width:10%;">Available</th>

  </tr>


  <?php

include "index2.php";

include "new_search.php";


?>

<hr><hr>


<form action="try4.php">
<input type="text" name="keyword" id="myInput" onkeyup="myFunction()" placeholder="Search Faculty SDRN_No here.." title="Type in a name" style="border-color:black;"required></center>
<center><input type="submit" class="btn" value="Search">
</form>
<input type="submit" class="btn" value="Back" onclick="goBack()"></center><br>
 <script src="../js/back.js">
 </script>

<center>
<table id="myTable" border="1"></center>
  <tr class="header">
    <th style="width:10%;">SDRN_No</th>
    <th style="width:20%;">Book_ID</th>
	<th style="width:20%;">Book_Name</th>
	<th style="width:20%;">Issue_Date</th>
	<th style="width:10%;">Return_Date</th>

  </tr>


  <?php

include "index2.php";

include "faculty_section.php";


?>





</body>
</html>
