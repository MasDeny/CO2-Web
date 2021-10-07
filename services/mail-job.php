<?php
if(isset( $_POST['name']))
$name = $_POST['name'];

if(isset( $_POST['email']))
$email = $_POST['email'];

if(isset( $_POST['mobilenumber']))
$mobilenumber = $_POST['mobilenumber'];

if(isset( $_POST['position']))
$position = $_POST['position'];

if(isset( $_FILES['file']))
$file = $_FILES['file']['name'];


$content="ABOUT YOU \n From: $name \n Email: $email \n Phone Number : $mobilenumber \n Position : $position ";
//echo $file;
//$recipient = "jaycenlee91@gmail.com";
$recipient = "career@codingcollective.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
$message = "email sent!";
echo "<script type='text/javascript'>alert('$message');</script>";
header( "refresh:1;url={$_SERVER['HTTP_REFERER']}" );
?>