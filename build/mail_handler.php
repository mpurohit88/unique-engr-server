<?php
ob_start();
ini_set('display_errors', 1);

require 'class.phpmailer.php';

$mail = new PHPMailer;


$email = $_REQUEST['email'] ;
$name = $_REQUEST['name'] ;
$phone = $_REQUEST['phone'] ;
$address = $_REQUEST['address'] ;
$message = $_REQUEST['message'] ;

$Message ="<html><body>";
$Message .= "Email: ";
$Message .=  $_REQUEST['email'] . '<br>';
$Message .= "Name: ";
$Message .=  $_REQUEST['name'] . '<br>';
$Message .= "Phone: ";
$Message .=  $_REQUEST['phone'] . '<br>';
$Message .= "Address: ";
$Message .=  $_REQUEST['address'] . '<br>';
$Message .= "Message: ";
$Message .=  $_REQUEST['message'] . '<br>';
$Message .="</p></body></html>";
    
echo $email;

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'ns36.interactivedns.com';                 // Specify main and backup server
$mail->Port = 587;                                    // Set the SMTP port
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'test@unique-engr.com';                // SMTP username
$mail->Password = 'bzd@n%+Nb*2H';                  // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'test@unique-engr.com';
$mail->FromName = 'Unique Engineers';
$mail->AddAddress('sales.uniqueengineers@gmail.com', 'Unique Engineer');  // Add a recipient 

$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Web Enquiry from unique-engr.com';
$mail->Body    = $Message;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

 if(!$mail->Send()) {
//  echo "Mailer Error: " . $mail2->ErrorInfo;
//header("Location: https://unique-engr.com/contact-us.html");exit;
echo "<script type='text/javascript'>alert(\"Error ! Pls call us on (+91) 7032215818.\");window.location = \"https://unique-engr.com/contact-us.html\";</script>";
} else {
echo "<script type='text/javascript'>alert(\"Thank You ! We will Respond Shorthly.\");window.location = \"https://unique-engr.com/contact-us.html\";</script>";
//header("Location: https://unique-engr.com/contact-us.html");

}

?>