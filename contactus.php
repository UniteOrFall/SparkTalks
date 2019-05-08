<?php
if(isset( $_POST['Name']))
$Name = $_POST['Name'];
if(isset( $_POST['Email']))
$Email = $_POST['Email'];
if(isset( $_POST['Subject']))
$Subject1 = $_POST['Subject'];
if(isset( $_POST['Message']))
$Message = $_POST['Message'];

$content="Name: $Name  \n Email: $Email \n Subject: $Subject1 \n Message: $Message";
$recipient = "hr@sparktalks.in";
$mailheader = "From: $Email \r\n";
$subject = "Contact Us";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo '<div class="text-center text-success"><hr><h2 class="h1-responsive"> Thanks for reaching out. We will contact you soon.</h2><hr></div>';
$page = "http://sparktalks.in";
$sec = "5";
header("Refresh: $sec; url=$page");
?>