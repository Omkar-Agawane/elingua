<?php
 $error = "";

 if($_SERVER["REQUEST_METHOD"] == "POST") {
     
    
     
require 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];






$sql= "SELECT * FROM usertable WHERE username='$username' and password='$password'";

$data = mysqli_query($con,$sql);
$len = mysqli_num_rows($data);

if($len>0){
    $_SESSION["name"]="$username";
    header('location:dashboard.php');
    $error = "Your Login  invalid";
}

else {
          $error = "Oops! <br> Invalid Credentials, Check Caps Lock.
          ";
     }
     
 }

?>