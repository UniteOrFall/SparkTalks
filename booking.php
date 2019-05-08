<?php
if(isset( $_POST['FirstName']))
$FirstName = $_POST['FirstName'];
if(isset( $_POST['Email']))
$email = $_POST['Email'];
if(isset( $_POST['LastName']))
$LastName = $_POST['LastName'];
if(isset( $_POST['MobileNumber']))
$MobileNumber = $_POST['MobileNumber'];

$content="FirstName: $FirstName  \n LastName: $LastName \n Email: $email \n MobileNumber: $MobileNumber";
$recipient = "bookings@sparktalks.in";
$mailheader = "From: $email \r\n";
$subject = "Booking | 6th Feburary";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo '<div class="text-center text-success"><hr><h2 class="h1-responsive">Your Seat is Confirm. Please Come to Event on 6th Feburary</h2><hr></div>';
$page = "http://sparktalks.in";
$sec = "5";
header("Refresh: $sec; url=$page");
?>