<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'C:\wamp64\www\rpro\PHPMailer-master\src\PHPMailer.php';
require 'C:\wamp64\www\rpro\PHPMailer-master\src\SMTP.php';
require 'C:\wamp64\www\rpro\PHPMailer-master\src\POP3.php';
require 'C:\wamp64\www\rpro\PHPMailer-master\src\Exception.php';
$mail = new PHPMailer(true);
	session_start();
	$email_id=$_SESSION['e'];
	$user=$_SESSION['u'];
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.'.substr(strstr($email_id ,'@'), 1);;  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'eventreminderteam@gmail.com';                 // SMTP username
    $mail->Password = 'ereminder333';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = '587';
	
    $mail->setFrom('eventreminderteam@gmail.com', 'Event Reminder Team');
    $mail->addAddress($email_id, $user);
	$mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Welcome to Event Reminder';
    $mail->Body    = "hii $user  </br>Welcome to our team -Event Reminder Thanks for joining with us. <br><br>thank you...!!!";
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
	if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
		echo "<script type='text/javascript'>alert('email not sent');</script>";
		header("location:sign.php");
    }else{
        header("location:logphp2.php");
	}
?>