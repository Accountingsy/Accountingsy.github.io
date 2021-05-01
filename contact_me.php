<?php
if(empty($_POST['Name of the Company:'])||
   empty($_POST['Office email Address'])||
   empty($_POST['Contact Number'])||
   empty($_POST['Reason for call back'])||
   !filter_var($_POST['Office email Address'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['Name of the Company:'];
$email_address = $_POST['Office email Address'];
$phone = $_POST['Contact Number'];
$message = $_POST['Reason for call back'];
	

$to = 'eng19cs0037.anupvenkat@gmail.com';
$email_subject = "Call back Contact Form:  $name";
$email_body = "You have received a new info from your callback contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: cad5686@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>