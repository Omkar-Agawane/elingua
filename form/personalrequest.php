<?php

require 'config.php';



$con = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);
if(!$con){
    die("Connection error". mysqli_connect.error);
}
$email = $_REQUEST['user'];
$course_id = $_REQUEST['id'];
$start  = $_REQUEST['start'];
$end = $_REQUEST['end'];
$message = $_REQUEST['message'];



$sql = "SELECT * FROM purchasetable WHERE courseid = '$course_id'";
$sql2 = "SELECT * FROM usertable WHERE username = '$email'";


$data = mysqli_query( $con, $sql);
$len = mysqli_num_rows($data);
$data2 = mysqli_query( $con, $sql2);
$len2 = mysqli_num_rows($data2);

if($len > 0){
    while($row = mysqli_fetch_assoc($data)){
        $courseName= $row['coursename'];
    }
}
if($len2 > 0){
    while($row = mysqli_fetch_assoc($data2)){
        $name = $row['name'];
        $surname = $row['surname'];
        $ph = $row['phone'];
        $addr = $row['address'];
        $city = $row['city'];
       
    }
}





        $to = "info@elinguahub.com, info@teafweb.in";
        $subject = "New Live Course Request ";
        $message = "\n Name: $name"." \t $surname " . "\n Course Name: $courseName". "\n phone: $ph". "\n email: $email" . "\n Address: $add"." \t $city"." \n Requested Days:$start" ."\t to $end"."Message from Customer:$message " ;
        $from = "admin@elinguahub.com";
        $headers = "From:" . $from;
        mail($to,$subject,$message,$headers);
        echo "<script>
        alert('Your request has been submitted. We will contact you soon!');
        </script>";
        header('location:http://localhost/elinguahub/user.php');
  
   





mysqli_close($con);


?>


