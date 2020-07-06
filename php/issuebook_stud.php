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

$issueDate = date("Y-m-d");
$returnDate = date("Y-m-d", strtotime("+7 days"));


if (isset($_POST["issue"]) && isset($_POST["rollno"]) &&  $available != 0) {
    $rollno = $_POST["rollno"];
    $sql1 = "INSERT INTO stud_book (Roll_No, Book_ID, Book_Name, Issue_Date, Return_Date) Values ('" . $rollno . "'," . $bookId . ",'" . $bookName . "','" . $issueDate . "','" . $returnDate . "')";
    $result1 = $mysqli->query($sql1);

    $available = $available - 1;

    $sql2 = "UPDATE books SET Available=".$available. " WHERE Book_ID=". $bookId;
    $result2 = $mysqli->query($sql2);

    if (!$result2) {
        die('Invalid query. ' . $sql2);
    } else {
        header("Location: student_details.php?Roll_No=" . $rollno . "&Password=123");
        return;
    }
}

?>
