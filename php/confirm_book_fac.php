
<?php

include "index2.php";


require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'email@gmail.com';  //Your email               // SMTP username
$mail->Password = '1234';       //Your password                    // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('email@gmail.com', 'RAIT COMPS DEPARTMENT LIBRARY');    // Add a recipient             // Name is optional
$mail->addReplyTo('email@gmail.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
if (isset($_POST["bookid"])) {
    $bookId1 = $_POST["bookid"];
    $SDRN_No1 = $_POST["fac_roll"];
}

$mail->Subject = 'RAIT COMPS Library Issue Confirmed';
    
    $host="localhost";
    $username="root";
    $password="";
    $dbname="dlm";
    $conn = new mysqli($host,$username,$password,$dbname) or die("Connection failed:%s\n".$conn->error);

    $sql3 = "SELECT Email_ID FROM faculty WHERE SDRN_No='".$SDRN_No1."'";
    
    $result3 = $mysqli->query($sql3) or die($mysqli->error);

    $sql4 = "SELECT Book_Name FROM books WHERE Book_ID='".$bookId1."'";
    
    $result4 = $mysqli->query($sql4) or die($mysqli->error);

    while($row3 = $result3->fetch_assoc()) {

            $username = $row3["Email_ID"];
    }
     while($row4 = $result4->fetch_assoc()) {

            $Book_Name = $row4["Book_Name"];
    }
    
          $mail->addAddress($username);

$mail->Body    = "Hello there,<br />This is a mail to inform you that your request for book ".$Book_Name." is confirmed.Do remember to collect the book from the Department Library.<br />Regards,<br />RAIT";
$mail->AltBody = "Hello there,
                  This is a mail to inform you that your request for book ".$Book_Name." is confirmed.Do remember to collect the book from the Department Library.
                  Regards,
                  RAIT";



            if (!$mail->send()) {
                echo "\n";
                echo "Message could not be sent.";
                echo "\n";
                echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
                echo "\n";
                echo "Message has been sent";
            }



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