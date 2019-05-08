<?php
if(isset( $_POST['FullName']))
$FullName = $_POST['FullName'];
if(isset( $_POST['CollegeName']))
$CollegeName = $_POST['CollegeName'];
if(isset( $_POST['Email']))
$Email = $_POST['Email'];
if(isset( $_POST['Location']))
$Location = $_POST['Location'];
if(isset( $_POST['YearofStudy']))
$YearofStudy = $_POST['YearofStudy'];
if(isset( $_POST['FacebookLink']))
$FacebookLink = $_POST['FacebookLink'];
if(isset( $_POST['MobileNumber']))
$MobileNumber = $_POST['MobileNumber'];
if(isset( $_POST['Why']))
$Why = $_POST['Why'];

$content="Full Name: $FullName  \n College Name: $CollegeName \n Email: $Email \n Location: $Location \n Year of Study: $YearofStudy \n Facebook Link: $FacebookLink \n MobileNumber: $MobileNumber \n Why?: $Why";
$recipient = "hr@sparktalks.in";
$mailheader = "From: $Email \r\n";
$subject = "Became a Member";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo '<div class="text-center text-success"><hr><h2 class="h1-responsive"> Thanks for reaching out. We will contact you soon.</h2><hr></div>';
$page = "http://sparktalks.in";
$sec = "5";
header("Refresh: $sec; url=$page");
?>