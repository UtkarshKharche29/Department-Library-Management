
<?php

include "index2.php";

if (isset($_POST["bookid"])) {
    $bookId = $_POST["bookid"];
    $SDRN_No = $_POST["fac_roll"];
    $sql = "DELETE FROM issue_request_fac WHERE SDRN_No='$SDRN_No' AND Book_ID='$bookId'";
    $result = $mysqli->query($sql);

    $sql1 = "SELECT Book_Name FROM books where Book_ID='$bookId'";
    $result1 = $mysqli->query($sql1);
    while ($row = $result1->fetch_assoc()) {
        $bookName = $row['Book_Name'];
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

    $sql2 = "INSERT INTO fac_book (SDRN_No, Book_ID, Book_Name, Issue_Date, Return_Date) Values ('" . $SDRN_No . "'," . $bookId . ",'" . $bookName . "','" . $issueDate . "','" . $returnDate . "')";
    $result2 = $mysqli->query($sql2);
    if (!$result2) {
        die('Invalid query. ' . $sql2);
    } else {
        header("Location: confirm_fac.php?new_Admin_ID=admin & new_password=admin@123");
        return;
    }
}

$mysqli->close();
?>