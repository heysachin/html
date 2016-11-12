<?php
$to = 'InsertYourEmailAddress';
$subject = "Beautiful HTML Email using PHP by CodexWorld";
// Get HTML contents from file
$htmlContent = file_get_contents("email_template.html");

// Set content-type for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: CodexWorld<info@codexworld.com>' . "\r\n";
$headers .= 'Cc: codexworld@gmail.com' . "\r\n";

// Send email
if(mail($to,$subject,$htmlContent,$headers)):
	$successMsg = 'Email has sent successfully.';
else:
	$errorMsg = 'Some problem occurred, please try again.';
endif;
?>