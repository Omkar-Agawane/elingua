<?php
require 'config.php';
$email = EMAIL;
$name = $_REQUEST['name'];
$comment = $_REQUEST['comment'];
$user_email = $_REQUEST['email'];
$to = "$email";
$subject = "New Certificate Request from $name";
$message = "\n Customer's Name: $name" . "\n Customer's comments: $comment". "\n Customer's Email: $user_email";
$from = "admin@elinguahub.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
?>
<script>
    alert("Your Request is Submitted!");
    window.history.go(-1);
</script>