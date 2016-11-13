<?php
$to = 'hellosachindev@gmail.com';
$subject = "Beautiful HTML Email using PHP by CodexWorld";

$htmlContent = file_get_contents("email_template3.html");

// Set content-type header for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: CodexWorld<sender@example.com>' . "\r\n";

// Send email
if(mail($to,$subject,$htmlContent,$headers)):
    $successMsg = 'Email has sent successfully.';
else:
    $errorMsg = 'Email sending fail.';
endif;
?>