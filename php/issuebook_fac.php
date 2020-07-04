<?php

include "index2.php";

if (isset($_POST["bookid"])) {
    $bookId = $_POST["bookid"];

    $sql = "SELECT Book_ID, Book_Name, Publication, Author_Name, Available FROM books where Book_ID='$bookId'";
    $result = $mysqli->query($sql);

    while ($row = $result->fetch_assoc()) {

        $bookName = $row['Book_Name'];

        $authorName = $row['Author_Name'];

        $publication = $row['Publication'];

        $available = $row['Available'];
    }
}

$issueDate = date('Y-m-d');

$returnDate = 15;


$return_month = date("m",strtotime("U"));
$freturn_year = date("Y",strtotime("U"));


if($return_month >= 01 && $return_month <=05){

	$freturn_month = 05;
	$returnDate = $freturn_year."-".$freturn_month."-".$returnDate;


}
else{

	$freturn_month = 12;
	$returnDate = $freturn_year."-".$freturn_month."-".$returnDate;

}

echo $returnDate;




if (isset($_POST["issue"]) && isset($_POST["sdrnno"]) &&  $available != 0) {
    $sdrnno = $_POST["sdrnno"];
    $sql1 = "INSERT INTO fac_book (SDRN_No, Book_ID, Book_Name, Issue_Date, Return_Date) Values ('" . $sdrnno . "'," . $bookId . ",'" . $bookName . "','" . $issueDate . "','" . $returnDate . "')";
    $result1 = $mysqli->query($sql1);

    $available = $available - 1;

    $sql2 = "UPDATE books SET Available=".$available. " WHERE Book_ID=". $bookId;
    $result2 = $mysqli->query($sql2);

    if (!$result2) {
        die('Invalid query. ' . $sql2);
    } else {
        header("Location: faculty_details.php?SDRN_No=" . $sdrnno . "&Password= $sdrnno");
        return;
    }
}

?>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



<head>
    <title>Books Section</title>

    <link rel="stylesheet" type="text/css" href="../css/book_search.css">
    <link rel="stylesheet" type="text/css" href="../css/back_button.css">
    <style>
        body {
            text-align: center;
        }

        .issuebtn {
            background-color: red;
            color: white;
            height: 40px;
            border: none;
            cursor: pointer;
            width: 100px;
            border-radius: 4px;
        }
    </style>

</head>

<body>
    <center>
        <img src="../img/ICON.png">
    </center><br>
    <div class="box">
        <marquee direction="lefts">Book Details</marquee>
    </div>
    <br>

    <?php

    echo '<center><table border="1" id="myTable"';

    echo '<tr class="header">';

    echo "<td>".$bookId."</td>";

    echo "<td>".$bookName."</td>";

    echo "<td>".$authorName."</td>";

    echo "<td>".$publication."</td>";

    echo "</table></center>";
    ?>
    <br>
    <br>

    <h2>Enter your sdrn no. to continue</h2>
    <!-- Form for confirmation using sdrnno -->
    <form action="issuebook_fac.php" method="post">
        <label for="sdrnno">SDRN_No.:</label>
        <input type="text" name="sdrnno" id="sdrnno">
        <input type="hidden" name="bookid" value="<?= $bookId ?>">
        <input type="submit" class="issuebtn" name="issue" value="Issue Book">
        <input class="backbtn" name="cancel" type="button" onclick="goBack()" value="Cancel">
    </form>

    <script src="../js/back.js">
    </script>
</body>
