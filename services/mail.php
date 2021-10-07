<?php
if(isset( $_POST['name']))
$name = $_POST['name'];

if(isset( $_POST['email']))
$email = $_POST['email'];

if(isset( $_POST['mobilenumber']))
$mobilenumber = $_POST['mobilenumber'];

if(isset( $_POST['companyname']))
$companyname = $_POST['companyname'];

if(isset( $_POST['country']))
$country = $_POST['country'];

if(isset( $_POST['industry']))
$industry = $_POST['industry'];

if(isset($_POST['website']) && $_POST['website']=="true") {
    $develop["website"] = "Website";
}

if(isset($_POST['android']) && $_POST['android']=="true") {
    $develop["android"] = "Android";
}

if(isset($_POST['ios']) && $_POST['ios']=="true") {
    $develop["ios"] = "iOS";
}

$project = implode(", ",$develop);

if(isset( $_POST['amount']))
$amount = $_POST['amount'];

if(isset( $_POST['message']))
$message = $_POST['message'];

if(isset( $_POST['subject']))
$subject = $_POST['subject'];

$content="ABOUT YOU \n From: $name \n Email: $email \n Phone Number : $mobilenumber \n \n ABOUT COMPANY \n Company Name : $companyname \n Industry : $industry \n Country : $country \n \n 
PROJECT DETAIL \n Message: $message \n Amount : $amount \n Develop : $project";
//echo $content;
$recipient = "support@codingcollective.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
$message = "email sent!";
echo "<script type='text/javascript'>alert('$message');</script>";
header( "refresh:1;url={$_SERVER['HTTP_REFERER']}" );
?>