<?php

$server = 'localhost';
$user_name ='root';
$pass_word ="";
$database = 'bills_database';


$con = mysqli_connect($server, $user_name,$pass_word,$database);
if(!$con){
     die("Connection Error". mysqli_connect_error);
}

?>

