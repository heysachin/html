<?php
$to = 'hellosachindev@gmail.com';
$subject = "Beautiful HTML Email";
// Get HTML contents from file
$htmlContent = file_get_contents("email_template.html");

// Set content-type for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: Sachin<sachindev@yahoo.com>' . "\r\n";
$headers .= 'Cc: sachin.jan14@gmail.com' . "\r\n";

// Send email
if(mail($to,$subject,$htmlContent,$headers)):
	echo "Email has sent successfully.";
else:
	echo "Some problem occurred, please try again.";
endif;
?>