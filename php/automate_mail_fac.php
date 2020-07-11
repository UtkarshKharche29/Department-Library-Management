<?php
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

$mail->setFrom('email@gmail.com', 'Library Book Return Mail');    // Add a recipient             // Name is optional
$mail->addReplyTo('email@gmail.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'RAIT COMPS Library Remainder';
$mail->Body    = "Hello there,<br />This is a remainder mail to remind you that you need to return a book you have taken from RAIT <b>Computer Branch Departmental Library</b>.<br />Regards,<br />RAIT";
$mail->AltBody = "Hello there,
				  This is a remainder mail to remind you that you need to return a book you have taken from RAIT Computer Branch Departmental Library.
				  Regards,
				  RAIT";
	
	$host="localhost";
	$username="root";
	$password="";
	$dbname="dlm";
	$conn = new mysqli($host,$username,$password,$dbname) or die("Connection failed:%s\n".$conn->error);

    $sql = "SELECT faculty.SDRN_No, faculty.Email_ID, fac_book.Book_ID, fac_book.Book_Name, fac_book.Issue_Date, fac_book.Return_Date FROM fac_book JOIN faculty ON fac_book.SDRN_No = faculty.SDRN_No";
    
	$result = $conn->query($sql);
	$count = 0;
	
	while($row = $result->fetch_assoc()) {

        // $issueDate = new DateTime($row['Issue_Date']);                                                   
        $returnDate = new DateTime($row['Return_Date']);
        $todaysDate = new DateTime(date('Y-m-d'));
        $daysRemaining = date_diff($todaysDate, $returnDate);
        
		if( $daysRemaining->d <= 1 Or $daysRemaining->d >= 1 ){

			$username = $row["Email_ID"];
			$mail->addAddress($username);
			if (!$mail->send()) {
				echo "\n";
				echo "Message could not be sent.";
				echo "\n";
				echo "Mailer Error: " . $mail->ErrorInfo;
			} else {
				echo "\n";
				echo "Message has been sent";
			}
		    $count++;
		
        } 
    }
    if($count === 0){
    	echo "\n";
        echo "No mail to be sent today";
	} else {
			echo "\n";
			echo "No. of mails sent today: " . $count;
	}
// End
