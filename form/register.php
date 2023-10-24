<?php

require 'config.php';

$admin_email = EMAIL;
$con = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);
if(!$con){
    die("Connection error". mysqli_connect.error);
}

$email =$_REQUEST['email'];
$sql2 = "SELECT * FROM usertable WHERE username = '$email'";

$message = "";
$data1 = "";
$data2 = "";
$data3 = "";




$data2 = mysqli_query( $con, $sql2);
$len2 = mysqli_num_rows($data2);
if( $len2 > 0){

    $message = "duplicate";
    $res_array = array("message"=> $message);
    $res = json_encode($res_array);
    echo $res; 
 }
else{


    $fname =  $_POST['username'];
    $lname =  $_REQUEST['surname'];
    $addr =   $_REQUEST['addr'];
    $phone =  $_REQUEST['phone'];
    $cityname =$_REQUEST['city'];
    $pin =$_REQUEST['pin'];
    $date=  date("jS F Y");


    function randomPassword() {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 6; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }
   $password = randomPassword();


    $userid = $fname.rand(0,1000);

    $sql3="INSERT INTO `usertable` (`tableid`, `userid`, `username`, `name`, `surname`, `address`, `phone`, `city`, `pincode`, `email`,`password`) 
    VALUES (NULL, '$userid', '$email', '$fname', '$lname', '$addr', '$phone', '$cityname', '$pin', '$email', '$password') ";


    //$sql="DELETE FROM chapter";
        
        if (mysqli_query($con, $sql3)) {
           
            $message = "User Created";
            $res_array = array("message"=> $message);
            $res = json_encode($res_array);
            echo $res; 


        $to = "$email";
        $subject = "Welcome to Elinguahub";
        $message = "Thank you for choosing us.\nPlease check below login details:" . "\nYour Username: $email"."\nYour Password: $password"."\n\nThank You!";
        $from = "admin@elinguahub.com";
        /*$headers = "From:" . $from;*/
        $headers = 'From: Elinguahub<admin@elinguahub.com>' . "\r\n";
        $headers .= "Cc: $admin_email". "\r\n";
        mail($to,$subject,$message,$headers);


    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }


}


mysqli_close($con);


?>


