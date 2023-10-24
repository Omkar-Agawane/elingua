<?php
require 'header.php';
require './fetch/enroll.php';
$course_id = $_GET['course_id'];

if(isset($_SESSION['user'])== false){
    header('Location:./register.php');
   
}
else {
    header('Location:./payment.php?course_id="$course_id";');
}
?>