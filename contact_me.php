<?php
// check if fields passed are empty

if(empty($_POST['name'])  	
	||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
  
 !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	
echo "No arguments Provided!";
	return false;
   }
	

$name = $_POST['name'];

$email_address = $_POST['email'];
$message = $_POST['message'];

	
// create email body and send it	

$to = 'nov0360@hotmail.com'; 
// PUT YOUR EMAIL ADDRESS HERE

$email_subject = "Modern Business Contact Form:  $name"; 
// EDIT THE EMAIL SUBJECT LINE HERE

$email_body = "You have received a new message from your website's contact form.\n\n"."Here are the details:\n\n
Name: $name\n\n\n
Email: $email_address\n\n
Message:\n
$message";
$headers = "From: Robert Browning Private Library\n";
$headers .= "Reply-To: $email_address";	

mail($to,$email_subject,$email_body,$headers);
header('Location: thank-you.html');
return true;			
?>