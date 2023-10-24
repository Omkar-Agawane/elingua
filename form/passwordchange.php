<?php

require 'config.php';



$con = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);
if(!$con){
    die("Connection error". mysqli_connect.error);
}
$email =  $_REQUEST['email'];

$new_pass = mysqli_real_escape_string($con, $_REQUEST['newpass']);
$sql3="UPDATE `usertable`  SET `password` = '$new_pass' WHERE username= '$email'";

        
        if (mysqli_query($con, $sql3)) {?>
        <script>
                alert('Thank You for the Registration! Please check your email for login details.'); 
                window.location.href= "<?php echo WEBSITE; ?>/user.php";

            </script>";
     <?php
     
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }




mysqli_close($con);


?>


