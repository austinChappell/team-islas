<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Team Islas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body id='confirmation'>
    <div class='content1'>

<?php

$captcha = $_POST['g-recaptcha-response'];
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lc_YysUAAAAADInWNsbcBgDjBkAwAPT4MCpcObM&response=".$captcha."&remoteip=66.147.242.96");
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$sender = 'Austin.W.Chappell@gmail.com';
$subject = 'Team Islas Inquiry';
$recipient = "teamislas@gmail.com";
$formcontent="From: $name \n Email: $email \n Phone: $phone \n Message: $message";
$mailheader = "From: $sender \r\n";
if(!$captcha) {
  echo "<h3>Please verify that you are not a robot.</h3>";
  echo "<a href='about.html'><button class='go-back-button'>Go Back</button></a>";
} else {
  if($response.success == true) {
    echo "<h3>Thank you for your inquiry! We will be in contact with you shortly.</h3>";
    echo "<a href='index.html'><button class='go-back-button'>Home Page</button></a>";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
  } else if($response.success == false) {
    echo "<h3>Please be verify that you are not a robot.</h3>";
  };
};
// echo "Thank you!";

?>

    </div>
  </body>
</html>
