<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();                  // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'email@gmail.com';  //Admin Email
$mail->Password = '123';      //Admin Password
$mail->SMTPSecure = 'tls';     // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;            // TCP port to connect to

$mail->setFrom('email@gmail.com', 'Library Book Return Mail'); //Admin Email and optional name
$mail->addReplyTo('email@gmail.com');							//Admin Email

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'RAIT COMPS Library Remainder';
$mail->Body    = "Hello there,<br />This is a remainder mail to remind you that you need to return a book you have taken from RAIT <b>Computer Branch Departmental Library</b>.<br />Regards,<br />RAIT";
$mail->AltBody = "Hello there,
				  This is a remainder mail to remind you that you need to return a book you have taken from RAIT Computer Branch Departmental Library.
				  Regards,
				  RAIT";
	//Database Credentials
	$host="localhost";
	$username="root";
	$password="";
	$dbname="dlm";
	$conn = new mysqli($host,$username,$password,$dbname) or die("Connection failed:%s\n".$conn->error);

    $sql = "SELECT faculty.SDRN_No, faculty.Email_ID, fac_book.Book_ID, fac_book.Book_Name, fac_book.Issue_Date, fac_book.Return_Date FROM fac_book JOIN faculty ON fac_book.SDRN_No = faculty.SDRN_No";
    
	$result = $conn->query($sql);
	$count = 0;
	
	while($row = $result->fetch_assoc()) {
        // Fetch return date from the database                           
		$returnDate = new DateTime($row['Return_Date']);
		$todaysDate = new DateTime(date('Y-m-d'));
		// Find the difference between the today's date and return date.
        $daysRemaining = date_diff($todaysDate, $returnDate);
        // If the remaining days is less than or equal to one,otherwise if remaining days is greater than one ,we are sending remainder emails.
		if( $daysRemaining->d <= 1 Or $daysRemaining->d >= 1 ){
		// Fetch the email-id for the faculties on which the abve condition satisifies,and send them a email.
			$username = $row["Email_ID"];
			$mail->addAddress($username);
			if (!$mail->send()) {
				echo "Message could not be sent.";
				echo "Mailer Error: " . $mail->ErrorInfo;
			} else {
				echo "Message has been sent";
			}
		//For each mail sent we increment this counter
		    $count++;
		
        } 
	}
	// If count = 0 means no email is sent,otherwise we display the number of emails sent.
    if($count === 0){
        echo "No mail to be sent today";
	} else {
			echo "No. of mails sent today: " . $count;
	}