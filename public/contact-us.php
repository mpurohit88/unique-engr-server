<?php
if(true) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "test@unique-engr.com";
    $email_subject = "Your email subject line";
 
     $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $phone = $_POST['phone']; // not required
    $address = $_POST['address']; // required
    $message = $_POST['message']; // required

    $email_from = "test@unique-engr.com"; // required
    
  function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
  
    $email_message .= "Email: ".clean_string($email)."\n";
  $email_message .= "Name: ".clean_string($name)."\n";
  $email_message .= "Phone: ".clean_string($phone)."\n";
  $email_message .= "Address: ".clean_string($address)."\n";
  $email_message .= "Email: ".clean_string($email_from)."\n";
  $email_message .= "Message: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
 
}
?>