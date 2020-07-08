
<?php

include "index2.php";

if (isset($_POST["bookid"])) {
    $bookId = $_POST["bookid"];
    $SDRN_No = $_POST["fac_roll"];
    $sql = "DELETE FROM issue_request_fac WHERE SDRN_No='$SDRN_No' AND Book_ID='$bookId'";
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