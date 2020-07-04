<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'nigamdiksha2000@gmail.com';  //Your email               // SMTP username
$mail->Password = '1234';       //Your password                    // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('nigamdiksha2000@gmail.com', 'Test Mailer');    // Add a recipient             // Name is optional
$mail->addReplyTo('nigamdiksha2000@gmail.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
	$host="localhost";
	$username="root";
	$password="";
	$dbname="dlm";
	$conn = new mysqli($host,$username,$password,$dbname) or die("Connection failed:%s\n".$conn->error);

    $sql = "SELECT students.Roll_No, students.Email_ID, stud_book.Book_ID, stud_book.Book_Name, stud_book.Issue_Date, stud_book.Return_Date FROM stud_book JOIN students ON stud_book.Roll_No = students.Roll_No";
    
	$result = $conn->query($sql);
	
	while($row = $result->fetch_assoc()) {

        // $issueDate = new DateTime($row['Issue_Date']);                                                   
        $returnDate = new DateTime($row['Return_Date']);
        $todaysDate = new DateTime(date('Y-m-d'));
        $daysRemaining = date_diff($todaysDate, $returnDate);
        $count = 0;

		if( $daysRemaining->d === 1 ){

        
			$username = $row["Email_ID"];
			$mail->addAddress($username);
			if (!$mail->send()) {
				echo 'Message could not be sent.';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				echo 'Message has been sent';
			}
		    $count++;
		
        } 
    }
    if($count === 0){
        echo 'No mail to be sent today';
    }
