
<?php

include "index2.php";

if (isset($_POST["bookid"])) {
    $bookId = $_POST["bookid"];
    $roll_no = $_POST["std_roll"];
    $sql = "DELETE FROM issue_request_stud WHERE Roll_No='$roll_no' AND Book_ID='$bookId'";
    $result = $mysqli->query($sql);

    $sql1 = "UPDATE books SET issue_status=0 where Book_ID='$bookId'";
    $result1 = $mysqli->query($sql1);

        if (!$result1) {
        die('Invalid query. ' . $sql1);
    } else {
        header("Location: confirm_stud.php?new_Admin_ID=admin & new_password=admin@123");
        return;
    }
}

$mysqli->close();
?>