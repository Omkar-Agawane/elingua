<?php

$error ="";
if($_SERVER['REQUEST_METHOD'] == 'POST')
{

$con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
    if(!$con){
        die("connection error". mysqli_connect.error);
    }
$username = $_REQUEST['username'];
$sql =  "SELECT * FROM usertable WHERE username='$username'";
$data = mysqli_query($con, $sql);
$len = mysqli_num_rows($data);
    if($len > 0 ){
        while($row = mysqli_fetch_assoc($data)){
            $password= $row['password'];
          }
          

          $to = "$username, info@teafweb.in";
          $subject = "Elinguahub Password";
          $message = "You have requested forget password request, please check below details.
          \n Your Username: $username" . "\n Your Password: $password
          \n If you haven't requested this, please inform us @ care@elinguahub.com.
          \n Do not reply on this email.This Email is System Generated.
          \n Thank You!
          ";
          $from = "admin@elinguahub.com";
          $headers = "From:" . $from;
          mail($to,$subject,$message,$headers);
          ?>
        <script>
           alert("Password has been sent to your email, please do check it");
             window.location.href="<?php echo WEBSITE;?>/signin.php";
           
           </script>
   <?php
    }
    else {?>
        <script>
           
             window.location.href="<?php echo WEBSITE; ?>/forgotpassword.php?error=yes";
           
           </script>
   <?php
   }

    mysqli_close($con);
}
?>

