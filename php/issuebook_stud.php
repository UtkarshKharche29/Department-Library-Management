<?php

include "index2.php";

if (isset($_POST["bookid"])) {
    $bookId = $_POST["bookid"];

    $sql = "SELECT Book_ID, Book_Name, Publication, Author_Name,Available FROM books where Book_ID='$bookId'";
    $result = $mysqli->query($sql);

    while ($row = $result->fetch_assoc()) {

        $bookName = $row['Book_Name'];

        $authorName = $row['Author_Name'];

        $publication = $row['Publication'];

        $available = $row['Available'];
    }
}

$issueDate = date("Y-m-d");
$returnDate = date("Y-m-d", strtotime("+7 days"));


if (isset($_POST["issue"]) && isset($_POST["rollno"]) &&  $available != 0) {
    $rollno = $_POST["rollno"];
    $sql1 = "INSERT INTO stud_book (Roll_No, Book_ID, Book_Name, Issue_Date, Return_Date) Values ('" . $rollno . "'," . $bookId . ",'" . $bookName . "','" . $issueDate . "','" . $returnDate . "')";
    $result1 = $mysqli->query($sql1);

    if (!$result1) {
        die('Invalid query. ' . $sql1);
    } else {
        header("Location: student_details.php?Roll_No=" . $rollno . "&Password=123");
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

    echo "<td>" . $bookId . "</td>";

    echo "<td>" . $bookName . "</td>";

    echo "<td>" . $authorName . "</td>";

    echo "<td>" . $publication . "</td>";

    echo "</table></center>";
    ?>
    <br>
    <br>

    <h2>Enter your roll no. to continue</h2>
    <!-- Form for confirmation using rollno -->
    <form action="issuebook_stud.php" method="post">
        <label for="rolllno">Roll No.:</label>
        <input type="text" name="rollno" id="rollno">
        <input type="hidden" name="bookid" value="<?= $bookId ?>">
        <input type="submit" class="issuebtn" name="issue" value="Issue Book">
        <input class="backbtn" name="cancel" type="button" onclick="goBack()" value="Cancel">
    </form>

    <script src="../js/back.js">
    </script>
</body>