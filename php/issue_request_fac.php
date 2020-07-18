<?php

require_once "index2.php";
$sql = "SELECT Book_Name from books WHERE Book_ID = ". $_SESSION["bookid"];
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $bookName = $row['Book_Name'];
}
$sql1 = "INSERT INTO issue_request_fac(SDRN_No, Book_ID, Book_Name) Values ('". $_SESSION["sdrnNo"] ."',". $_SESSION["bookid"].",'". $bookName."')";
$result1 = $mysqli->query($sql1);
if (!$result1) {
    $_SESSION["msg"] = "<p style='color: red'>Failed to send the Request, contact support</p>";
    echo $sql1;
} else {
    $_SESSION["msg"] = "<p style='color: green'>Request Sent</p>";
    $sql2 = "UPDATE books SET issue_status= 1 WHERE Book_ID=" . $_SESSION["bookid"];
    $result2 = mysqli_query($mysqli, $sql2) or trigger_error("Query Failed! SQL: $sql2 - Error: " . mysqli_error($mysqli), E_USER_ERROR);
}
?>