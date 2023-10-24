<?php 
require 'config.php';
$email = $_REQUEST['email'];
$TO_EMAIL = EMAIL;

$to = "$TO_EMAIL, info@teafweb.in";
$subject = "New Subscriber ";
$message = "\n You have new subcription request from : $email";
$from = "admin@elinguahub.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Submission is successful!";
echo "<script>

window.history.go(-1);
</script>";

