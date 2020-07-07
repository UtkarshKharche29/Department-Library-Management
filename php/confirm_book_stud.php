
<?php

include "index2.php";

if (isset($_POST["bookid"])) {
    $bookId = $_POST["bookid"];
    $roll_no = $_POST["std_roll"];
    $sql = "DELETE FROM issue_request_stud WHERE Roll_No='$roll_no' AND Book_ID='$bookId'";
    $result = $mysqli->query($sql);

    $sql1 = "SELECT Book_Name FROM books where Book_ID='$bookId'";
    $result1 = $mysqli->query($sql1);
    while ($row = $result1->fetch_assoc()) {
        $bookName = $row['Book_Name'];
    }

    $issueDate = date("Y-m-d");
    $returnDate = date("Y-m-d", strtotime("+7 days"));

    $sql2 = "INSERT INTO stud_book (Roll_No, Book_ID, Book_Name, Issue_Date, Return_Date) Values ('" . $roll_no . "'," . $bookId . ",'" . $bookName . "','" . $issueDate . "','" . $returnDate . "')";
    $result2 = $mysqli->query($sql2);
    if (!$result2) {
        die('Invalid query. ' . $sql2);
    } else {
        header("Location: confirm_stud.php?new_Admin_ID=admin & new_password=admin@123");
        return;
    }
}

$mysqli->close();
?>