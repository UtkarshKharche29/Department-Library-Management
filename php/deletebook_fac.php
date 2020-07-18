<?php

include "index2.php";

if (isset($_POST["bookid"])) {
    $bookId = $_POST["bookid"];
    $sdrn = $_POST["sdrn"];
    $sql = "DELETE FROM fac_book WHERE SDRN_No='$sdrn' AND Book_ID='$bookId'";
    $result = $mysqli->query($sql);
    $sql1 = "SELECT Book_ID, Book_Name, Author_Name,Publication,issue_status FROM books where Book_ID='$bookId'";
    $result1 = $mysqli->query($sql1);
    while ($row = $result1->fetch_assoc()) {

        $bookName = $row['Book_Name'];

        $authorName = $row['Author_Name'];

        $publication = $row['Publication'];

        $issue_status = $row['issue_status'];
    }
    $issue_status = 0;

    //After deleting book from fac_book we set the issue status for the book as 0 (not issued) in books table.
    $sql2 = "UPDATE books SET issue_status=".$issue_status. " WHERE Book_ID=". $bookId;
    $result2 = $mysqli->query($sql2);

}
if($result){
	echo'<h1 style="color:grey;margin-left:40%;margin-top:20%">Book Submitted!!!</h1>';
	echo '<a href="javascript:window.location=document.referrer;" style="color:grey;font-size:1.2em;text-decoration-none;margin-left:45%;margin-top:22%">Go back</a><br>';
}else{
	echo'<h1 style="color:grey;margin-left:40%;margin-top:20%">Failed due to some reasons</h1>';
	echo '<a href="javascript:window.location=document.referrer;" style="color:grey;font-size:1.2em;text-decoration-none;margin-left:45%;margin-top:22%">Go back</a><br>';;
}
$mysqli->close();
?>