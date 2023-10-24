<?php
require 'config.php';
$email = EMAIL;
$name = $_REQUEST['name'];
$comment = $_REQUEST['comment'];
$to = "$email";
$subject = "New Review from $name";
$message = "\n Customer's Name: $name" . "\n Customer's comments: $comment";
$from = "admin@elinguahub.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
?>
<script>
    alert("Your Review is Submitted!");
    window.history.go(-1);
</script>